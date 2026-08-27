/* =============================================================================
   uds-icons.js — offline inline-SVG fallback for Font Awesome glyphs
   -----------------------------------------------------------------------------
   WHY THIS EXISTS
   Real Pitchfork blocks emit Font Awesome CLASSES (e.g. <span class="fas
   fa-check-circle">). Keeping those classes in your mockup markup means the
   markup stays faithful to what WordPress actually outputs. But if the Font
   Awesome CDN is blocked or you are working offline, those elements render as
   nothing at all — which makes a mockup look broken for the wrong reason.

   WHAT IT DOES
   If a real Font Awesome stylesheet is loaded, this script does nothing at
   all — every icon renders from FA normally, mapped or not. Only when FA
   failed to load does it walk the DOM for empty `fa-{name}` elements and
   inject a stand-in SVG: an exact-ish icon if {name} is in the map below,
   otherwise a GENERIC neutral glyph so the slot still reads as "an icon
   belongs here" instead of rendering as nothing.

   The map below is a curated subset — the icons this kit's own examples
   happen to use — not full Font Awesome. Don't assume an icon you reach for
   is in it; if it isn't, it silently becomes the generic circle offline
   (harmless, but not the glyph you asked for). Add real entries here for
   any icon that becomes common enough to be worth it.

   USAGE
   Link it with a script tag pointing at this file, defer.
   Delete that tag if you would rather rely on Font Awesome alone.

   NOTE: this comment deliberately contains no literal closing script tag.
   It used to, and inlining this file into a <script> block terminated the
   element early, dumping stray SVGs into the body and silently breaking
   mobile layout. If you inline this file, escape any such sequence.

   The SVG paths are simplified stand-ins, not the licensed Font Awesome
   artwork. They communicate the icon's meaning at mockup fidelity. Ship real
   Font Awesome in production.
   ========================================================================== */
(function () {
  "use strict";

  var ICONS = {
  "arrows-rotate": "<svg viewBox=\"0 0 512 512\"><path d=\"M370 133a180 180 0 00-269 26l30 30c6 6 2 17-7 17H24c-6 0-11-5-11-11V96c0-9 11-13 17-7l28 28a232 232 0 01399 88c1 7-4 13-11 13h-49c-5 0-10-3-11-8a180 180 0 00-16-77zM63 296h49c5 0 10 3 11 8a180 180 0 00285 51l-30-30c-6-6-2-17 7-17h100c6 0 11 5 11 11v100c0 9-11 13-17 7l-28-28a232 232 0 01-399-88c-1-7 4-13 11-13z\"/></svg>",
  "building": "<svg viewBox=\"0 0 384 512\"><path d=\"M352 0H32C14 0 0 14 0 32v448c0 18 14 32 32 32h320c18 0 32-14 32-32V32c0-18-14-32-32-32zM96 436c0 7-5 12-12 12H60c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24zm0-96c0 7-5 12-12 12H60c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24zm0-96c0 7-5 12-12 12H60c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24zm0-96c0 7-5 12-12 12H60c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24zm112 288c0 7-5 12-12 12h-24c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24zm0-96c0 7-5 12-12 12h-24c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24zm0-96c0 7-5 12-12 12h-24c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24zm0-96c0 7-5 12-12 12h-24c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24zm112 288c0 7-5 12-12 12h-24c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24zm0-96c0 7-5 12-12 12h-24c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24zm0-96c0 7-5 12-12 12h-24c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24zm0-96c0 7-5 12-12 12h-24c-7 0-12-5-12-12v-24c0-7 5-12 12-12h24c7 0 12 5 12 12v24z\"/></svg>",
  "calendar": "<svg viewBox=\"0 0 448 512\"><path d=\"M400 64h-48V12c0-7-5-12-12-12h-40c-7 0-12 5-12 12v52H160V12c0-7-5-12-12-12h-40c-7 0-12 5-12 12v52H48C21 64 0 85 0 112v352c0 27 21 48 48 48h352c27 0 48-21 48-48V112c0-27-21-48-48-48zm-6 400H54c-3 0-6-3-6-6V160h352v298c0 3-3 6-6 6z\"/></svg>",
  "chart-line": "<svg viewBox=\"0 0 512 512\"><path d=\"M496 384H64V80c0-9-7-16-16-16H16C7 64 0 71 0 80v336c0 18 14 32 32 32h464c9 0 16-7 16-16v-32c0-9-7-16-16-16zM464 96H345c-21 0-32 26-17 41l33 33-73 73-73-73c-12-12-33-12-45 0l-69 69c-6 6-6 16 0 23l23 23c6 6 16 6 23 0l46-46 73 73c12 12 33 12 45 0l96-96 33 33c15 15 41 4 41-17V112c0-9-7-16-16-16z\"/></svg>",
  "check-circle": "<svg viewBox=\"0 0 512 512\"><path d=\"M256 8a248 248 0 100 496 248 248 0 000-496zm140 158L228 334c-6 6-16 6-22 0l-90-90c-6-6-6-16 0-22l22-22c6-6 16-6 22 0l57 57 135-135c6-6 16-6 22 0l22 22c6 6 6 16 0 22z\"/></svg>",
  "chevron-up": "<svg viewBox=\"0 0 448 512\"><path d=\"M241 130l194 194c9 9 9 25 0 34l-23 23c-9 9-25 9-34 0L224 227 70 381c-9 9-25 9-34 0l-23-23c-9-9-9-25 0-34l194-194c9-9 25-9 34 0z\"/></svg>",
  "credit-card": "<svg viewBox=\"0 0 576 512\"><path d=\"M0 432c0 26 22 48 48 48h480c26 0 48-22 48-48V256H0v176zm64-68c0-7 5-12 12-12h72c7 0 12 5 12 12v40c0 7-5 12-12 12H76c-7 0-12-5-12-12v-40zM576 80v48H0V80c0-26 22-48 48-48h480c26 0 48 22 48 48z\"/></svg>",
  "file-signature": "<svg viewBox=\"0 0 384 512\"><path d=\"M224 136V0H24C10 0 0 10 0 24v464c0 14 10 24 24 24h336c14 0 24-10 24-24V160H248c-13 0-24-11-24-24zm160-14v6H256V0h6c6 0 13 3 17 7l98 98c4 4 7 11 7 17z\"/></svg>",
  "flask": "<svg viewBox=\"0 0 448 512\"><path d=\"M437 427L293 224V64h10c7 0 13-6 13-13V13c0-7-6-13-13-13H145c-7 0-13 6-13 13v38c0 7 6 13 13 13h10v160L11 427c-25 35 0 85 43 85h340c43 0 68-50 43-85zM157 321l55-77V64h24v180l55 77z\"/></svg>",
  "graduation-cap": "<svg viewBox=\"0 0 640 512\"><path d=\"M622 106L343 15c-15-5-31-5-46 0L18 106C7 110 0 120 0 132s7 22 18 26l61 20c-17 21-27 48-28 77-9 5-15 15-15 26 0 10 5 19 13 25L26 409c-2 9 5 17 14 17h56c9 0 16-8 14-17l-23-103c8-6 13-15 13-25 0-11-6-21-15-26 1-27 12-51 30-68l45 15c-9 20-14 41-14 64 0 62 79 112 176 112s176-50 176-112c0-23-5-44-14-64l138-45c11-4 18-14 18-26s-7-22-18-26z\"/></svg>",
  "handshake": "<svg viewBox=\"0 0 640 512\"><path d=\"M434 137l-83-77c-8-8-19-12-30-12H197c-11 0-21 4-29 11l-83 78H0v256h96c18 0 32-14 32-32h136l77 70c15 12 37 10 49-5l1-1 21 18c13 11 33 9 44-4l19-23c11-13 9-33-4-44l-14-12 4-5c11-13 9-33-4-44l-40-33-24 28c-9 11-25 12-36 3s-12-25-3-36l60-70c6-7 15-11 24-11h32V137h-32zM544 96v256h96V96h-96z\"/></svg>",
  "location-dot": "<svg viewBox=\"0 0 384 512\"><path d=\"M172 503C27 293 0 271 0 192 0 86 86 0 192 0s192 86 192 192c0 79-27 101-172 311-10 14-30 14-40 0zM192 272c44 0 80-36 80-80s-36-80-80-80-80 36-80 80 36 80 80 80z\"/></svg>",
  "people-group": "<svg viewBox=\"0 0 640 512\"><path d=\"M96 128a64 64 0 11128 0 64 64 0 01-128 0zm320 0a64 64 0 11128 0 64 64 0 01-128 0zM0 400c0-53 43-96 96-96h32c20 0 38 6 53 16-15 22-24 49-24 78v18H0v-16zm416-96h32c53 0 96 43 96 96v16H483v-18c0-29-9-56-24-78 15-10 33-16 53-16zM240 96a80 80 0 11160 0 80 80 0 01-160 0zm-32 320c0-62 50-112 112-112h32c62 0 112 50 112 112v16H208v-16z\"/></svg>",
  "times": "<svg viewBox=\"0 0 352 512\"><path d=\"M242 256l100-100c12-12 12-31 0-43l-21-21c-12-12-31-12-43 0L178 192 78 92c-12-12-31-12-43 0L14 113c-12 12-12 31 0 43l100 100-100 100c-12 12-12 31 0 43l21 21c12 12 31 12 43 0l100-100 100 100c12 12 31 12 43 0l21-21c12-12 12-31 0-43z\"/></svg>",
  "search": "<svg viewBox=\"0 0 512 512\"><path d=\"M505 442l-116-116c28-35 45-79 45-127 0-113-91-204-204-204S26 86 26 199s91 204 204 204c48 0 92-17 127-45l116 116c9 9 24 9 33 0l-1 0c9-9 9-24 0-33zM204 347c-82 0-148-66-148-148S122 51 204 51s148 66 148 148-66 148-148 148z\"/></svg>",
  "chevron-down": "<svg viewBox=\"0 0 448 512\"><path d=\"M207 381L13 187c-9-9-9-25 0-34l23-23c9-9 25-9 34 0l154 154 154-154c9-9 25-9 34 0l23 23c9 9 9 25 0 34L241 381c-9 9-25 9-34 0z\"/></svg>",
  "flag": "<svg viewBox=\"0 0 448 512\"><path d=\"M64 32C64 14 50 0 32 0S0 14 0 32v448c0 18 14 32 32 32s32-14 32-32V320l90-22c46-11 94-6 137 15 51 25 111 23 160-6V44c-52 31-116 33-170 6-46-23-98-27-147-13L64 52V32z\"/></svg>"
  };

  // Neutral stand-in for any fa-* name not in the map above. Communicates
  // "an icon belongs here" without pretending to be the right glyph.
  var GENERIC = '<svg viewBox="0 0 512 512"><path d="M256 40a216 216 0 100 432 216 216 0 000-432zm0 48a168 168 0 110 336 168 168 0 010-336zm0 72a96 96 0 100 192 96 96 0 000-192z"/></svg>';

  // Is a real Font Awesome stylesheet loaded? If so we must not touch anything.
  function faLoaded() {
    var probe = document.createElement("i");
    probe.className = "fa-solid fa-circle";
    probe.style.cssText = "position:absolute;left:-9999px;visibility:hidden";
    document.body.appendChild(probe);
    var fam = window.getComputedStyle(probe).fontFamily || "";
    document.body.removeChild(probe);
    return /font\s*awesome/i.test(fam);
  }

  function render(root) {
    if (faLoaded()) return;                          // real FA wins, do nothing

    var nodes = (root || document).querySelectorAll('[class*="fa-"]');
    Array.prototype.forEach.call(nodes, function (el) {
      if (el.querySelector("svg")) return;          // already has a glyph
      if (el.textContent.trim() !== "") return;      // has text, not an icon slot
      if (el.classList.contains("fa-placeholder")) return; // intentional empty slot

      var name = null;
      Array.prototype.forEach.call(el.classList, function (c) {
        if (c.indexOf("fa-") === 0) {
          var candidate = c.slice(3);
          if (ICONS[candidate]) name = candidate;
        }
      });
      var svg = name ? ICONS[name] : GENERIC;
      el.innerHTML = svg.replace("<svg ", '<svg class="ico" ');
    });
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () { render(); });
  } else {
    render();
  }

  window.UDSIcons = { render: render, icons: ICONS };
})();
