#!/usr/bin/env python3
"""
Turn a preview page that LINKS the skill's assets into ONE portable HTML file.

Why this exists: a mockup gets emailed, dropped in Slack, opened from a
Downloads folder. A file that depends on sibling CSS breaks the moment it
leaves your directory, and it breaks silently — the page still opens, it just
looks like unstyled HTML, which reads as "Claude produced garbage" rather than
"an asset is missing".

Usage:
    python scripts/inline_preview.py index.html out.html [--skill-dir .]

What it inlines:
  - <link rel=stylesheet> pointing at uds-preview.css   -> <style>
  - <script src=...uds-icons.js>                        -> <script>
  - url("background-patterns/*.png") inside that CSS    -> base64 data URIs
  - <img src="local/file.svg|png|jpg">                  -> data URIs

Font Awesome stays a CDN link. It is a progressive enhancement: uds-icons.js
draws inline SVG fallbacks when FA fails to load, so a blocked CDN degrades
instead of breaking.

The </script> escaping below is not paranoia. Any literal closing-script
sequence inside inlined JS terminates the surrounding <script> element early,
after which the rest of the file is parsed as HTML and dumped into the body.
It is invisible in source and mangles the layout.
"""
import argparse
import base64
import mimetypes
import pathlib
import re
import sys


def data_uri(path: pathlib.Path) -> str:
    mime, _ = mimetypes.guess_type(path.name)
    mime = mime or "application/octet-stream"
    if path.suffix.lower() == ".svg":
        # svg compresses badly as base64 and stays readable as text
        from urllib.parse import quote
        return f"data:image/svg+xml,{quote(path.read_text(), safe='')}"
    return f"data:{mime};base64,{base64.b64encode(path.read_bytes()).decode()}"


def main() -> int:
    ap = argparse.ArgumentParser()
    ap.add_argument("src")
    ap.add_argument("dst")
    ap.add_argument("--skill-dir", default=".",
                    help="skill root containing assets/ (default: cwd)")
    a = ap.parse_args()

    src = pathlib.Path(a.src)
    skill = pathlib.Path(a.skill_dir)
    assets = skill / "assets"
    html = src.read_text()

    css_file = assets / "uds-preview.css"
    js_file = assets / "uds-icons.js"

    # 1. inline the stylesheet, resolving its pattern PNGs to data URIs
    if css_file.exists():
        css = css_file.read_text()

        def pat(m):
            f = assets / m.group(1)
            return f'url("{data_uri(f)}")' if f.exists() else m.group(0)

        css = re.sub(r'url\("(background-patterns/[^"]+)"\)', pat, css)
        # lambda, not an f-string: a replacement TEMPLATE would treat any
        # backslash in the CSS (\s, \d, …) as an escape and raise.
        html = re.sub(
            r'<link[^>]+href="[^"]*uds-preview\.css"[^>]*>',
            lambda _m: f"<style>\n{css}\n</style>",
            html, count=1,
        )

    # 2. inline the icon fallback script
    if js_file.exists():
        js = js_file.read_text().replace("</script", "<\\/script")
        html = re.sub(
            r'<script[^>]+src="[^"]*uds-icons\.js"[^>]*>\s*</script>',
            lambda _m: f"<script>\n{js}\n</script>",
            html, count=1,
        )

    # 3. inline local images
    def img(m):
        url = m.group(1)
        if url.startswith(("http:", "https:", "data:", "//")):
            return m.group(0)
        f = (src.parent / url).resolve()
        return m.group(0).replace(url, data_uri(f)) if f.exists() else m.group(0)

    html = re.sub(r'<img[^>]+src="([^"]+)"', img, html)

    pathlib.Path(a.dst).write_text(html)

    remaining = re.findall(r'(?:href|src)="(?!data:|https?:|#)([^"]+)"', html)
    size = len(html) / 1024
    print(f"wrote {a.dst}  ({size:.0f} KB)")
    if remaining:
        print("still referencing local files (check these are intentional):")
        for r in sorted(set(remaining)):
            print("  -", r)
    return 0


if __name__ == "__main__":
    sys.exit(main())
