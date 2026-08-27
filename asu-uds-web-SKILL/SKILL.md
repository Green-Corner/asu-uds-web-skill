---
name: asu-uds-web
description: Build brand-accurate Arizona State University web pages and mockups using only real Pitchfork/Unity Design System (UDS) blocks — producing both a live preview HTML file and paste-ready WordPress block markup. Use this skill whenever the user mentions ASU, Arizona State, Pitchfork, UDS, the Unity Design System, an ASU unit or college site, or asks for an ASU-branded page, landing page, program page, events page, mockup, wireframe or block pattern — and also whenever they ask you to build a page that will live on an asu.edu property, even if they never say "ASU brand" or name a component. If a request would otherwise have you hand-writing HTML for an ASU page, use this skill instead.
---

# ASU Unity Design System — web pages and mockups

## What this is

ASU's web properties run on **Pitchfork**, a WordPress theme implementing the **Unity Design System (UDS)**. Pages are assembled from a fixed library of registered blocks. This skill contains the block library's exact field names, class names, quirks and brand rules, plus a stylesheet that renders them so you can produce a real visual mockup.

## Prime directive

**You place pre-made components. You do not design new ones.**

Every UDS block has fixed markup. An editor changes *content* — text, images, which highlight color, which card variant, whether buttons are present — never *structure*. If a request needs something the library doesn't have, say so plainly and propose the closest real component. Do not invent a class name, a block name, or a layout.

The test: if you are about to write a CSS class that appears in neither `assets/uds-preview.css` nor `references/brand-guide.md`, stop.

## What to produce

Unless told otherwise, produce **two files that stay in sync**:

1. **`index.html`** — the preview. Link `assets/uds-preview.css` and `assets/uds-icons.js` (copy them next to your output, or inline them for a portable single file). This is what you show people.
2. **`<name>.php`** — the WordPress block markup, as a Pitchfork block pattern with a docblock header. This is what actually ships.

The preview is what the block markup renders to. Build the preview first — it is faster to iterate on layout in a browser — then emit the matching block markup once the design is settled.

**Every full-page preview gets a `.uds-global-header` and `.uds-global-footer`** (§7.17) — they are required on every asu.edu page, not optional chrome to skip in a mockup. Only leave them off if the user explicitly asked for a section/component preview rather than a page. Pick the footer composition (full/collapsed/minimal) that fits the unit; don't default to full out of habit. Both are `.uds-global-*` classes in the stylesheet, not ACF blocks — say so if it comes up, same as any other design-only piece.

**Always render your preview and look at it before delivering.** Screenshot it at desktop and mobile widths. Layout bugs in this system are easy to introduce and invisible in source — check for horizontal overflow specifically, since it is the most common one and never shows up in the markup.

**Making the preview portable.** A mockup gets emailed and opened from a Downloads folder, where sibling CSS files are gone — and it fails *silently*, rendering as unstyled HTML that reads as bad work rather than a missing asset. Bundle everything into one file:

```bash
python scripts/inline_preview.py index.html mockup.html --skill-dir <path-to-this-skill>
```

That inlines the stylesheet, the icon fallback script, the pattern PNGs and any local images, and reports anything still pointing at a local file. Font Awesome stays a CDN link on purpose — `uds-icons.js` draws inline SVG fallbacks when it fails to load, so a blocked CDN degrades instead of breaking.

## Where to look things up

`references/brand-guide.md` is large (~1,270 lines). Do not read it end to end. Read the section you need:

| You are about to… | Read |
|---|---|
| build **any page at all** | §7.17 first — the global header and footer are **required on every page**, not optional chrome. Three footer compositions (full/collapsed/minimal); don't default to full out of habit. |
| build **any card or card grid** | §7.6.5 — the card system. **Read this every time; it is the biggest source of samey pages.** |
| build a hero | §7.7.1 and §7.14.1 (the live layout differs from the editor order) |
| choose a section background | §7.10.1 — the 12 patterns and 3 flat fills |
| build an **image + content feature** (overlap, media-text, CTA on a photo, inset card) | §7.10.2a — the overlay family. **The strongest antidote to card-grid monotony.** |
| build an FAQ / expander | §7.8 and §7.8.1 |
| build an alert or banner | §7.9.1 / §7.9.2 |
| build a quote or testimonial | §7.9.3 for the fields/classes, §7.18 for the composition variants (photo, name chip, stacked, on-image, carousel) — **read both; §7.9.3 alone under-uses this component** |
| use a carousel, percentage circle, or ranking card | §7.16 — **these have no block; read before building** |
| use a table or list | §6.11 / §6.13 (styling is approximate — see §15 of the CSS) |
| check a color, spacing token or type size | §7.13 (tokens) and §7.1 (⚠️ the gray slugs are inverted) |
| copy working markup for a component | `references/component-snippets.md` |

`examples/card-gallery.html` renders every card variant the stylesheet supports — open it when you want to see the options rather than read about them. `examples/worked-example-home.php` is a complete 10-section page in block markup.

## Hard rules

These are the ones that get broken most. Verify each before you finish.

**The gray slugs are inverted.** In code, `gray-1` is the *lightest* (`#FAFAFA`) and `gray-7` is the *darkest* (`#191919`). The design guide numbers them the opposite way. Someone asking for "Gray7" from the design guide wants `gray-1` in code. Getting this backwards silently produces near-black where you wanted near-white — and it looks deliberate, so nobody catches it.

**One hero per page.** `acf/hero`, `acf/hero-video`, `acf/hero-post` and `acf/banner` are all `supports.multiple: false`.

**The hero renders its subtitle *below* the headline**, even though `acf/subtitle` is authored first — the hero is CSS Grid and reorders it. Put the highlight span on the **headline**; keep the subtitle a small plain caption.

**Never stack two backgrounded sections.** Alternate: patterned/filled → plain white → patterned/filled. Anything sitting on the page's own white background (an image-overlap block, plain prose) counts as the breather.

**Gold appears at most once per page**, on the single highest-priority CTA. Everything else is maroon. Gold buttons carry black text. *(Exceptions: image-based cards routinely use a gold button, because it sits inside a photograph rather than in the page's CTA hierarchy — §7.6.5 D. The footer's "Support ASU" button is fixed chrome, not an editorial choice — it doesn't count against the page's one either. Both are exemptions from the rule's *reasoning* — a page-content gold button — not loopholes to stack more of them.)*

**Approved section backgrounds only:** white, `gray-1`, `gray-2`, `gray-7`, or one of the 12 patterns. Never maroon or gold as a section background.

**Pattern tiles are opaque.** `backgroundColor` is ignored on a patterned section — the PNG *is* the background. Dark patterns need their contents to set white text explicitly; the block will not do it for you. **Set it on the heading/paragraph elements themselves, never as a blanket `style="color:white"` on the section wrapper** — a white-background sub-component dropped into that section (an accordion, a card) inherits color unless it sets its own, so a section-level override turns its body copy invisible (white-on-white). A cold test of this skill hit exactly this bug.

**Type:** Arial, weights 400 and 700 only — never light, never italic. Headlines are sentence case. Highlight spans (`highlight-gold` / `highlight-black` / `highlight-white`) go on H1–H4 only, never on body copy.

**Spacing:** let `acf/background-section` supply the section rhythm (96px desktop / 48px mobile) rather than hand-setting margins.

**Month abbreviation:** when a month is used with a specific day, abbreviate **only** Jan., Feb., Aug., Sept., Oct., Nov., Dec. March, April, May, June and July are never abbreviated. This governs every event date line, and client-supplied copy frequently gets it wrong — flag it rather than silently propagating it.

## Don't build the same page twice

The failure mode of this skill is producing technically correct pages that all look identical: hero → alert → white section of three cards → patterned band → FAQ. Every component has variants and most have a use beyond the obvious one.

**Variants are editorial choices, not defaults.** An accordion has four accent colors. A card has four types × two orientations × three top-slot options × six optional parts. A section has 12 patterns plus three flat fills. Picking the same one every time is a decision you are making by not making it.

**Full-width is not the only width.** Components that default to a full-width band often work at half width inside a `wp:column`. An accordion beside prose reads as a spec list, not an FAQ. (⚠️ `.wp-block-column` is `display:flex` with no direction in this stylesheet, so give each column a **single** child — wrap several blocks in a `core/group`.)

**A component's name is not its only job.** An accordion need not be the FAQ at the bottom. Grid-links need not be footer navigation. Decide what the content actually *is*, then pick the component whose shape fits.

**Vary the section rhythm.** Change where the dark band falls, how many sections there are, whether the page opens on a hero at all. A page of stacked horizontal cards reads nothing like a grid of vertical ones.

Before delivering, ask: *could I justify why this variant, on this page?* If not, you defaulted.

## Block-backed vs design-only components

The UDS Figma library is **broader than the Pitchfork Blocks plugin**. Some components are designed and brand-approved but have no registered block: the **card carousel**, the **percentage circle (donut)**, and **ranking cards** (§7.16).

- You **may** render a design-only component in preview HTML. It is real ASU design, and refusing makes mockups worse.
- You **may not** emit `wp:acf/…` markup for one. That markup looks authoritative and pastes into WordPress as nothing.
- **Say so in your response** — "the carousel is design-only, it has no block yet" — rather than letting the user find out at paste time.

For design-only *graphics* like the percentage circle, emit a self-contained inline `<svg>`, so nothing class-shaped exists to be copied into production by mistake.

## Reproduce source quirks, don't "fix" them

The plugin source contains genuine oddities. These are what the real site emits, so reproduce them:

- Alert icons don't match their names: `is-style-alert-info` → `fa-check-circle`, `is-style-alert-success` → `fa-bell`, `is-style-alert-error` → `fa-info-circle`.
- The dismiss class is `alert-dismissable` (one "s").
- `acf/card-v2`'s default button carries `className: "is-style-"` — a trailing-dash empty style.
- The hero wrapper always carries `has-btn-row`, even with no buttons.
- `.accordion-header` is a wrapper div that closes *before* `.accordion-body`; the body is a sibling, not a child.
- `uds_foldcard_collapsed: true` means the panel starts **open**.
- The card content group carries only `metadata.name: "Card Content"` — no className, so no `.card-body` is emitted. This is what breaks stock horizontal cards (§7.6.5 C).

## ACF field keys

Omit the `"_fieldname":"field_xxxxx"` pairs — they are environment-specific and ACF regenerates them on save. Note this in the file header so whoever pastes it knows to re-save each block once.

## Images

If you generate placeholder imagery, keep it to the ASU palette (maroon `#8C1D40`, gold `#FFC627`, near-black `#191919`) and keep it **abstract rather than fake-photographic**. Say plainly in your response that the images are generated placeholders, not ASU photography. Never imply generated imagery is real. Real ASU brand photography comes from the ASU brand portal.

## Copy

Write plausible placeholder copy and label it as such in the file's docblock. **Do not fabricate specific statistics, dollar figures, dates or named quotes and present them as fact.** If you use a real published figure, say where it came from. When the user supplies real copy, reproduce it verbatim — and if it breaks a brand rule (the month rule catches this often), flag it rather than silently rewriting their words.

## Be honest about fidelity

`assets/uds-preview.css` is hand-written from the documented tokens — it is **not** the compiled Pitchfork theme. Type scale, card chrome, hover states and some responsive edges differ from production. When you present a mockup, say so: it communicates layout and brand intent, not pixel specs. If someone needs exactness, tell them to copy the real `theme.css` out of their Pitchfork install and link that instead.

What **is** exact: block names, ACF field names, CSS class names, `InnerBlocks` structure, which pieces lock, color hex values, spacing tokens. Those come from plugin source and are safe to build against.

The guide marks its own confidence and you should carry that distinction into what you tell people rather than flattening it into false certainty:

- 🟢 confirmed from plugin/theme source
- 🟡 corrected (an earlier claim proved wrong)
- ⚪ observed on live sites, not in source
- 🎨 Figma-derived — design intent, outranks a guess, but is not compiled reality

The global header and footer ship as external `@asu/component-header` / `@asu/component-footer` packages — no ACF block, no reviewed source for their real compiled markup. `.uds-global-header` / `.uds-global-footer` (§7.17) are a Figma-accurate visual approximation built for this kit, not that package's actual output. Use them as the real header/footer on every mockup — don't fall back to an ad hoc per-page stand-in — but say so if someone needs the literal package markup to ship.
