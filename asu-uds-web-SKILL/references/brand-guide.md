# ASU Unity Design System (UDS) Brand & Component Guide

Source: ASU Unity Design System UI Kit (zeroheight), scanned August 19, 2026.
https://zeroheight.com/9f0b32a56/p/96ab23-getting-started

This document consolidates the full "Design" foundation section and the full "Components" library of ASU's Unity Design System (UDS), which governs all asu.edu web and digital properties. It is intended as reference material for building a Claude skill that helps produce ASU-brand-compliant web content, layouts, and copy.

---

## 0. Introduction

The UDS Guidelines encompass all standards for ASU web and digital projects. The sidebar of the source site is organized into two categories:

- **Design** — core design elements used throughout asu.edu (typography, color palettes, spacing, iconography, backgrounds).
- **Components** — the UDS component library available in ASU's Design Kit (Figma) and Code Kit (dev components).

Each component is tagged with a status:

- **In development** — designed, being developed for the Code Kit.
- **Complete** — developed and available in both Design Kit and Code Kit.
- **More to come** — complete and available, but has further design/development planned.
- **New** — brand new, available in both Design Kit and Code Kit.

If a project needs to deviate from these standards, the guidance is to contact the ASU Brand team. Every asu.edu site is required to follow ASU web standards (see the Web Standards Checklist at brandguide.asu.edu/execution-guidelines/web/standards-checklist).

Useful links referenced throughout the kit:
- ASU Brand Guide: brandguide.asu.edu
- asu.edu Design Kit (Figma) and Code Kit (dev)
- ASU glossary of terms, subdomain requests, site type guidance

---

## 1. Color Palette

> "ASU's brand is bold and gold forward. All color combinations in this design system have been tested for, and passed, accessibility review."

The UDS color palette is similar to, but not identical to, the full ASU brand color palette (the brand guide has more colors, e.g. secondary colors, for print and broader marketing use). For UDS/web work, only three groups should be used: **Primary colors**, **Grayscale**, and **System colors**.

### Primary colors

ASU Maroon and Gold, plus Rich Black and White, are ASU's primary colors and should lead all digital and multicolor print design.

| Name | Hex | RGB |
|---|---|---|
| ASU Maroon | `#8C1D40` | rgb(140, 29, 64) |
| ASU Gold | `#FFC627` | rgb(255, 198, 39) |
| ASU Rich Black | `#000000` | rgb(0, 0, 0) |
| ASU White | `#FFFFFF` | rgb(255, 255, 255) |

- Maroon and Gold are core to ASU's identity, but **should not be used as background colors** except in specific design elements (buttons, callouts).
- Secondary colors (from the wider brand palette) should be used sparingly and only for illustrations, graphics, or supporting graphic elements — **never for UI components**.

### Grayscale

ASU Gray (Gray3) should always be the primary gray in use; the rest of the scale exists for cases needing lighter/darker values.

| Name | Hex | RGB | Notes |
|---|---|---|---|
| Gray1 (Black) | `#191919` | rgb(25, 25, 25) | Use in lieu of pure black text |
| Gray2 | `#484848` | rgb(72, 72, 72) | Accessible on white backgrounds for text/color blocks. Not for dark backgrounds. |
| Gray3 (ASU Gray) | `#747474` | rgb(116, 116, 116) | Accessible on white backgrounds for text/color blocks. Not for dark backgrounds. |
| Gray4 | `#BFBFBF` | rgb(191, 191, 191) | Not for text use. |
| Gray5 | `#D0D0D0` | rgb(208, 208, 208) | For use on dark backgrounds only; not for text. |
| Gray6 | `#E8E8E8` | rgb(232, 232, 232) | Section background color use only; not for text. |
| Gray7 | `#FAFAFA` | rgb(250, 250, 250) | Use in lieu of pure white text. |
| ASU White | `#FFFFFF` | rgb(255, 255, 255) | — |

### System colors

System colors are used only for notifications/alerts, to help users understand input states (forms, radio buttons, etc.) — e.g., whether an error occurred or a submission succeeded. (Specific hex values weren't listed on this tab; see System Alerts component — success uses Bootstrap 5 `.alert-success` green, errors use `.alert-danger` red.)

### Approved background color combinations

Gold and maroon are **not used as background colors** per UDS. Approved dark-on-light text/background combos (from the Typography → Color Usage tab):
- Gray1 (Black) on White — Do
- Gray1 (Black) on Gray7 — Do
- Gray1 (Black) on Gray6 — Do
- Gray7 on Gray1 (Black) — Do (light text on dark background)

---

## 2. Backgrounds

Background colors, patterns, and images should be used **in moderation**, restricted to content-feature sections that draw the reader's eye — not as full-page backgrounds. **Websites may not use full-page background colors.**

- Default background color for asu.edu: **White `#FFFFFF`**.
- Approved background colors: White, Gray1 (Black) `#191919`, Gray7 `#FAFAFA`, Gray6 `#E8E8E8`.
- Gold and maroon are not used as background colors under UDS.
- All background/text color combinations must meet WCAG contrast standards.
- Backgrounds may also use approved patterns or full-bleed images per the "Background Patterns" and "Image Background" guidance (see Background Scaling and Guidelines).

---

## 3. Typography

> "Typography is focused and limited at ASU."

- **Primary typeface (digital):** Arial. Neue Haas Grotesk is ASU's brand typeface where available; Arial is the web fallback/default.
- **Weights:** Regular (400) and Bold (700) only — **never light or italic**.
- **Underlines** are reserved for hyperlinks only.

### Type styles

| Style | Family | Size (px / rem) | Line height (px / rem) | Letter spacing |
|---|---|---|---|---|
| Heading 1 | Arial (700) | 64px / 4rem | 68px / 4.25rem | −0.035em |
| Heading 1 – articles/long headlines | Arial (700) | 48px / 3rem | 52px / 3.25rem | −0.035em |
| Heading 1 – Mobile | Arial (700) | 36px / 2.25rem | 40px / 2.5rem | −0.035em |
| Heading 2 | Arial (700) | 40px / 2.5rem | 44px / 2.75rem | −0.035em |
| Heading 2 – Mobile | Arial (700) | 32px / 2rem | 34px / 2.125rem | −0.035em |
| Heading 3 | Arial (700) | 24px / 1.5rem | 28px / 1.75rem | — |
| Heading 4 | Arial (700) | 20px / 1.25rem | 26px / 1.625rem | −0.015em |
| Heading 5 | Arial (700) | 16px / 1rem | 24px / 1.5rem | −0.015em |
| Body — Large | Arial (400) | 20px / 1.25rem | 28px / 1.75rem | — |
| Body — Default | Arial (400) | 16px / 1rem | 24px / 1.5rem | — |
| Body — Small | Arial (400) | 14px / 0.875rem | 18px / 1.125rem | — |
| Body — Extra Small | Arial (400) | 12px / 0.75rem | 18px / 1.125rem | — |
| Inline Link | Arial (400) | 16px / 1rem | 24px / 1.5rem | — |

### Usage guidelines

- **Large body type:** use sparingly, for emphasis or lead-in paragraphs — not as a header replacement (must still meet SEO/accessibility heading structure rules).
- **Small body type:** use very sparingly — captions, disclaimers, and other non-critical text only. Default body size should be used for the vast majority of copy.
- **Line length:** ideal is 45–80 characters per line.
- **Body text width:** should not exceed ~700px (7 columns desktop, ~75 characters) and not be narrower than ~282px (3 columns, ~45 characters).
- **Headings:** Heading 1 and Heading 2 should not exceed ~75 characters per line. All headlines use **sentence case** (first letter capitalized, plus proper nouns) — except the first word after a colon, which is always capitalized.
- **Paragraph spacing:** 16–24px between paragraphs.
- **Heading-to-paragraph spacing:** 16px after a heading before body copy; spacing *before* a heading should be max 64px / min 32px.

### Type color usage (on approved backgrounds)

- Gray1 (Black) on White — Do
- Gray1 (Black) on Gray7 — Do
- Gray1 (Black) on Gray6 — Do
- Gray7 on Gray1 (Black) — Do

### Text highlights

Highlighted text (colored background block behind text, ASU's signature look) is core to ASU visual identity.

- Highlights may **only** be used on Headings 1–4 — never on body copy or any other type style.
- Approved highlight/background combinations:
  - Gold or Rich Black highlight on White — Do
  - Gold or Rich Black highlight on Gray7 — Do
  - Gold, Rich Black, or Gray7 highlight on Gray6 — Do
  - Gold or Gray7 highlight on Rich Black — Do

---

## 4. Spacing and Layout

Consistent spacing maintains a unified look across all ASU departments.

- **Base unit:** 8px square unit. All spacing multiples/dimensions derive from this. In rare, necessary cases a smaller 4px unit may be used.
- **Standard spacing scale (px):** 96, 72, 56, 48, 40, 32, 24, 16, 8 (in general use; 4px only if absolutely necessary).

### Section spacing

- Sections need **at least 96px** of clear space above and below on desktop.
- If a visual divider separates sections (background color change, horizontal rule, major content change), there must be **96px on either side** of it.
- **Mobile:** the same rules apply but measurements are halved — **48px**.

### Column grid

**Desktop**
- Column count: 12
- Content area width: 1200px fixed (max width, to fit common monitor resolutions)
- Column width: 78px fixed
- Gutter width: 24px fixed
- Outside margin width: varies by device

**Mobile**
- Column count: 4
- Content area width: varies by device
- Column width: varies by device
- Gutter width: 16px fixed
- Outside margin width: 32px fixed

### Maximum width

- All images, patterns, and solid-color background fills must be 100% width up to a max width of **1920px**. Beyond 1921px, the section background stays static (doesn't keep scaling).
- The **global header and footer** are the only elements that remain 100% width at all times, unconstrained by the 1920px max.

---

## 5. Iconography

ASU uses **Font Awesome Free** as its primary icon library (thousands of icons, solid/regular/light weights — regular/light/thin may require a paid Font Awesome subscription). Enterprise-wide Font Awesome Pro licensing is unavailable; individual units may purchase Pro themselves.

### Utility iconography (wayfinding, system-level)

Predefined icons that **must** be used for their associated use case:

- **Navigational:** `home` (link to a unit's homepage, used in global nav), `bars` (hamburger — mobile menu), `times` (close — modals/alerts), `chevron-right/down/left/up` (motion/expand on current page)
- **Interactive/utility:** `play`/`pause` (toggle media), `search`, `external-link-alt` (off-site links), `arrow-right/down/left/up` (in-site navigation links)
- **Social:** Font Awesome Brands icons (Facebook, X/Twitter, Instagram, YouTube, LinkedIn, Snapchat, Pinterest, TikTok, Threads) — **must use the squared social icon style** for visual consistency. Requires downloading Font Awesome Brands separately.
- **Contact:** `envelope` (pair with email), `phone` (pair with phone number), `map-marker-alt` (pair with address)
- **Informational:** `info-circle` (tooltip/additional info), `lock` (security/login-gated content), `file-download` (download links)

### Marketing iconography

Used in marketing contexts where ASU Awesome icons don't work functionally or aesthetically (referenced but not detailed further in this scan).

### Color combinations for icons

Icons should maintain accessible contrast across approved backgrounds: White, Gray1 (Black), Gray7, Gold, Gray6, and Maroon backgrounds are all demonstrated with correct icon color pairing.

---

## 6. Components Library

All UDS-aligned sites must use **only** components from the UDS component library, to keep design and functionality consistent site-to-site across all of asu.edu. UDS components are built with accessibility, data, and SEO considerations baked in.

Each component page in the source kit typically includes tabs for: **Overview** (intro, when to use, visual example), **Styles** (color/layout variants), **Formatting** (spacing/sizing specs), **Content** (copy guidelines), **States** (interactive states), **Cautions**, **Behaviors**, and **UX Best Practices**. The summaries below are drawn primarily from each component's Overview tab (plus Styles where especially relevant to brand, e.g. Buttons); consult the live site for full Formatting/States/Content specs per component.

### 6.1 Banners and alerts

**Cookie consent banners** *(Complete)* — A pop-up informing visitors of cookie/tracker use and requesting consent, vital for compliance (e.g. GDPR). ASU uses cookies to save user preferences and compile aggregate traffic data. **Required on all asu.edu websites and domains.**

**Modal** *(Complete)* — A window that displays in front of and deactivates all other page content; user must interact with it (complete an action or close it) to return to the main content. Use to share highly important information or draw attention to something critical.

**Notification banners** *(Complete)* — Located at the top of a site, used to share temporary notifications, informational, or marketing messages (promotions, CTAs, critical business news). Should highlight a single high-priority message.

**System alerts** *(Complete)* — Used in forms/web apps to show pressing, high-signal messages (warnings, errors, success confirmations, system status like login success or upcoming outages). Should highlight a single high-priority message. Built on Bootstrap 5 alert classes: success = green (`.alert-success`), error = red/danger (`.alert-danger`).

**Tooltip** *(Complete)* — A hover/focus-triggered text box providing contextual info about an element (e.g. button function, abbreviation meaning). Used for helpful-but-optional info, contextual help, feature tours, or announcing product changes/updates.

### 6.2 Buttons and links

**Buttons** *(More to come)* — A graphical, clickable element conveying a specific call to action (CTA), directing user interaction. Best used for a page's main CTA; avoid grouping too many buttons together (creates visual confusion).
- Layout sizes: Default, Small, Extra small.
- Optional icon: can be added to the Default button (Font Awesome / ASU Awesome icon).
- **Colors:** Maroon (default color), Gold (reserved for high-priority callouts only, used sparingly), Black, Gray. Color combos must meet accessibility standards.
- Example hierarchy: two maroon buttons for standard actions, one gold button reserved for the primary CTA (e.g., "Apply now").

**Grid link** *(Complete)* — Organizes similar/related links functioning as CTAs or topic highlights, in a grid rather than a plain bulleted list. Good for condensing a large number of links and reducing page scroll. Has light and dark variants.

**Inline links** *(Complete)* — Hyperlinked words (conventionally styled, underlined) within body copy that link to related info without introducing a full CTA/button. Best for supplementary info, and for avoiding page clutter from too many buttons. Caution: if the destination is an important next step or critical info, use a Button instead of an inline link.

### 6.3 Cards

**Default cards** *(Complete)* — Containers for concise info about a single subject; in groups, present collections of similar content. Four primary categories, each with its own exclusive title style: **Default, Story, Event, and Degree** cards. Card sub-parts (aside from the title style) can be mixed and matched from the approved component set. Use for: containing related elements, iterative content (blog posts, degree listings), or adding visual variety.

**Image based card** *(New)* — Adds visual interest by pairing content with a full image treatment. Orientations: Horizontal, Square, Vertical. Use to draw attention to a CTA, break up text-heavy pages, or build an image-based CTA grid instead of buttons/text.

**Interactive image based card** *(New)* — An image card with an engaging hover/interactive state (default and hovered states shown). Use for visual interest and sharing non-critical info in an engaging way.

**Ranking cards** *(New)* — Used specifically for the asu.edu rankings page, to showcase institutional rankings in one place. Variants: large image / small image, default / opened states.

### 6.4 Carousel

**Carousel** *(Complete)* — A slideshow of same-type/topic content, navigated manually via side buttons/arrows; builds on the Card component. Caution: users may not see every card, so avoid carousels for critical content (use a static card layout instead); for long-form content consider an accordion instead.

### 6.5 Global header & footer

**Global header** *(Complete)* — The area across the top of every page; contains navigation, icons, buttons/links, and access to settings/actions. Central to UDS recognizability — the first thing users see and a trusted signal they're on an ASU page. **Required on every page on the asu.edu domain, without exception.**

**Global footer** *(Complete)* — The bottom "endcap" of every page, providing additional navigation utility. Like the header, key to a consistent cross-site experience. **Required on every page on the asu.edu domain.** Contains unit branding, social icons, secondary nav links, a "Support ASU" CTA, footer column links, rankings callout, and legal/utility links (Maps and Locations, Jobs, Directory, Contact ASU, My ASU, Copyright/Trademark, Accessibility, Terms of Use, Emergency, Privacy, Manage My Privacy Settings).

Both are implemented in this kit as real, usable components (`.uds-global-header` / `.uds-global-footer`) rather than left as per-page stand-ins — see §7.17 for the full build, sourced from live-site screenshots and the Figma header/footer sheet.

### 6.6 Featured content

**Call to action on image background** *(Complete)* — Pairs a visual with a static card-like CTA component. Use for short intro content, visual page breaks, short details/context, or calling out a CTA.

**Image and text block** *(Complete)* — Functions like the Card component but designed to hold more information/content. Use to break up content with imagery or provide richer card-format content.

**Image overlap** *(Complete)* — A layout where a content block overlaps an image (image + white content area with slight overlap, plus a gold accent bar). Caution: don't overload the white content area — too much content can hurt the image's impact.

**Inset card on image background** *(Complete)* — A white card inset within/over a full image background, containing icon, title, body copy, and a button. Similar use cases to "Call to action on image background."

**Inset content box** *(Complete)* — A gray-background box with a white inset content panel (heading, body copy, buttons, optional text link). Use to draw attention to boxed content, highlight an important CTA, or break up page content.

### 6.7 Forms

**Checkbox** *(Complete)* — For selecting one or more options from a list on a form. Use when a user may select multiple options.

**Radio button** *(Complete)* — For selecting a single option from a list on a form. Use when only one option should be selectable from several.

**Text input field** *(Complete)* — Free-text entry (single or multi-line) for custom user data (name, email, etc.) that can't be captured with predetermined options.

### 6.8 Heroes

**Heroes** *(Complete)* — Large, attention-grabbing image (optionally with heading, brief intro text, and up to two buttons) shown above the fold directly beneath the header. Optional component. Use to add visual interest, highlight the primary topic, or set page context.

### 6.9 Images

**Images** *(Complete)* — Photographs, graphics, or video frames used per spec; no decorative treatments that don't add value or meaning should be applied.

### 6.10 Person profile

**Person profile** *(Complete)* — Structured component used on ASU's iSearch and web directory, holding name, job title, email, phone, address, bio copy, and social/contact icons. For use specifically on the ASU directory.

### 6.11 Table

**Table** *(Complete)* — Row/column data display, optimized for any screen size — desktop tables scroll horizontally with nav buttons, mobile tables scroll via swipe. Use to present or organize large amounts of data/stats together.

### 6.12 Tabbed panel

**Tabbed panel** *(More to come)* — Layered content sections (tab panels) with one panel shown at a time, tab elements typically along the top edge. Supplementary navigation only — use carefully to avoid a cumbersome UX; alternate between views in the *same context*, not to navigate to different areas/pages. Content across tabs should be organized similarly.

### 6.13 Lists

**Stepped list** *(Complete)* — Numbered steps (visually numbered badges) walking users through a prescribed sequential process. Use for detailed step-by-step processes or important sequential notes.

**Ordered list** *(More to come)* — Standard numbered list where order matters (supports nested a/b/c sub-levels). Use for step-by-step content or sequential notes.

**Unordered list** *(More to come)* — Standard bulleted list (supports nested sub-bullets). Use to organize content into digestible, non-sequential sections.

### 6.14 Video

**Video** *(Complete)* — Short recorded/viewable media embedded on a page or in a message. Use to make a page more engaging, break up text, hold user attention, and deliver digestible visual information.

### 6.15 Navigation

**Anchor menu** *(Complete)* — Secondary navigation on long pages letting users jump to on-page sections (e.g. "On This Page:" list). Use only when a page has clearly defined jump-worthy sections or is long enough that scrolling would hurt UX — avoid on short pages (can feel wasteful).

**Breadcrumb navigation** *(More to come)* — Shows hierarchy/location (e.g. Home / Library / Data) and lets users move up to a parent level. Use when a page sits below a parent in a hierarchy deeper than two levels.

**Dropdown menu** *(Complete)* — Reveals related links/info only on interaction (click), avoiding overload. Used for: additional pages under a top-level header nav topic, additional tabs in a tabbed panel, or additional items in an anchor menu. Includes ASU's "mega menu" patterns (2-column, 4-column, 5-column variants, with optional global buttons) used in the global header.

**Pagination** *(Complete)* — Divides long content into discrete numbered pages (e.g. directory, iSearch, articles/blog). Use to let users skip to a specific page/section rather than scroll everything.

**Sidebar menu** *(Complete)* — Vertical nav bar (left or right side) for additional/related links tied to the current page or site section. Does **not** duplicate or replace the primary/global navigation — only for deeper, related content navigation.

### 6.16 Quotes and testimonials

**Blockquote** *(Complete)* — A quoted section set off from the main text as a distinct block (large gold quotation mark, bold quote text, attribution line with name and description). Use to draw attention to an important/interesting quote, direct quotes from people, notable facts, or added visual interest.

**Testimonials** *(Complete)* — Exact-copy quotations from someone, credited to the original speaker/author (centered quote with a gold rule beneath). Use to highlight a positive review, share someone's experience, or quote with proper attribution.

**Quote on image background** *(Complete)* — Pairs a quote with a full image background for visual impact. Caution: the background image stretches to fit the content — account for this in both desktop and mobile layouts. Same general use cases as "Call to action on image background" (short intro content, visual page break, added context/CTA).

### 6.17 Rules and dividers

**Section divider** *(Complete)* — A 100%-width horizontal rule separating distinct content sections. Use to break up very different content types or create a clear section break (pairs with the 96px section-spacing rule above).

**Body copy divider** *(Complete)* — An inset (not full-width) horizontal rule for separating related sections of content, e.g. items within a list. Use for lighter visual breaks that still help users digest content between related sections.

---

## 7. Pitchfork — WordPress Implementation (Code Reference)

**Pitchfork** is ASU's official WordPress theme implementing UDS. It was cross-checked against the design guide above by inspecting the actual theme source (SCSS, theme.json, WordPress block patterns, and PHP templates). Everything in §§1–6 above is the *design intent*; this section is the *code reality* — exact class names, block names, and variable values to generate accurate ASU-brand markup.

Repo shape: 408 files (~7.5MB) — `patterns/` (18 WordPress block patterns = ready-made UDS component compositions), `src/unity-bootstrap-theme/` (a vendored copy of the `@asu/unity-bootstrap-theme` npm package — Bootstrap 5 + UDS SCSS overrides), `template-parts/` + root `*.php` (classic PHP templates for header/footer/archive/single/etc.), `inc/` (theme setup, ACF config, block registration), `theme.json` (WP block-editor color/spacing presets), `dist/css/theme.css` (540KB compiled output — the ground truth for final selectors).

Two coexisting markup systems appear in the codebase:
1. **Block-editor (Gutenberg) markup** — the modern approach, used throughout `patterns/`. Content is composed from core WP blocks (`wp:heading`, `wp:paragraph`, `wp:buttons`, `wp:columns`, `wp:media-text`) plus a family of **custom ACF blocks** (`acf/card-v2`, `acf/hero`, `acf/background-section`, etc.) registered by the companion **Pitchfork Blocks** plugin. Its full PHP render callbacks (`render.php`/`*.php` templates) and `block.json` definitions **have now been reviewed directly** (see §§7.6–7.11 below) — exact class names, ACF field names, `InnerBlocks` default templates, and block-locking behavior are confirmed from source, not inferred from patterns alone.
2. **Classic Bootstrap-class HTML** — used in legacy PHP loop templates like `template-parts/content-card.php`, and still present in things like the footer template. Plain `.card`, `.btn`, `.container`/`.row`/`.col-*` Bootstrap 5 classes styled by the UDS SCSS overrides.

A skill generating Pitchfork/ASU code should default to the block-editor pattern style (#1) for anything going into a WordPress page, and only use raw Bootstrap classes (#2) if the target isn't the WordPress block editor.

### 7.1 ⚠️ Grayscale naming mismatch — brand guide vs. code

**The design-guide grayscale numbering (§1) is inverted relative to the codebase's `gray-N` slugs.** This is a real trap for code generation — always convert.

| Design-guide name (zeroheight) | Hex | Pitchfork/theme.json slug |
|---|---|---|
| Gray1 (Black) | `#191919` | `gray-7` |
| Gray2 | `#484848` | `gray-6` |
| Gray3 (ASU Gray) | `#747474` | `gray-5` |
| Gray4 | `#BFBFBF` | `gray-4` |
| Gray5 | `#D0D0D0` | `gray-3` |
| Gray6 | `#E8E8E8` | `gray-2` |
| Gray7 | `#FAFAFA` | `gray-1` |

Only Gray4 lines up by coincidence. When told "use Gray7" from the brand guide, the correct WP block color slug is `gray-1`, **not** `gray-7` — mixing these up silently produces near-black instead of near-white (or vice versa).

### 7.2 Full color palette (from `theme.json` + `_colors.scss`)

Confirms the primary/grayscale values in §1, and adds the **secondary/accent colors** (referenced but not detailed in the design guide):

| Slug | Hex | Name |
|---|---|---|
| `asu-maroon` | `#8C1D40` | ASU Maroon |
| `asu-gold` | `#FFC627` | ASU Gold |
| `asu-blue` | `#00A3E0` | ASU Blue |
| `asu-green` | `#78BE20` | ASU Green |
| `asu-orange` | `#FF7F32` | ASU Orange |
| `asu-copper` | `#Af674B` | ASU Copper |
| `asu-turquoise` | `#4AB7C4` | ASU Turquoise |
| `asu-pink` | `#E74873` | ASU Pink |
| `white` | `#FFFFFF` | White |
| `gray-1` … `gray-7` | see §7.1 | ASU Gray 1–7 (code numbering) |

Secondary/accent colors (blue, green, orange, copper, turquoise, pink) are exposed as button/background color options in code but — per §1 — should only be used for illustrations/graphics/accents, never as component backgrounds, consistent with the brand guide.

Link colors (`_colors.scss`): `$link-color` / `$link-hover-color` = maroon; underline on default, no underline on hover. Focus state on all interactive elements: `box-shadow: 0 0 8px` blue-focus color (`#0` outline removed, replaced with the accessible focus ring).

### 7.3 Spacing tokens (block-editor presets)

`theme.json` exposes a subset of the 8px-multiple spacing scale (§4) as named presets, used as `var(--wp--preset--spacing--{slug})` in block markup:

| Slug | Size |
|---|---|
| `uds-size-1` | 0.5rem (8px) |
| `uds-size-2` | 1rem (16px) |
| `uds-size-4` | 2rem (32px) |
| `uds-size-6` | 3rem (48px) |
| `uds-size-8` | 4rem (64px) |
| `uds-size-12` | 6rem (96px) |

The full underlying scale (`_spacing.scss`) still runs 0/1/2/3/4/5/6/7/8/9/10/12/14/16 (× 0.5rem each) — the theme.json list above is just what's exposed as clickable presets in the block editor's spacing UI. `uds-size-12` (96px = 6rem) is the one used for section-to-section spacing (matches §4's "96px section spacing" rule exactly).

Content max width in the block editor: `contentSize: 1200px` (theme.json `settings.layout`) — matches the §4 desktop grid.

### 7.4 Typography — confirmed from `_typography.scss` / `_headings.scss`

The SCSS variable overrides exactly match §3 of the design guide: `$heading-one-font-size: 4rem` (64px), `$heading-one-line-height: 4.5rem` (68px... note: SCSS rounds this slightly differently than the 4.25rem in the zeroheight spec — use the zeroheight figure as canonical, SCSS as close-enough), Heading 2 = 2.5rem/40px, Heading 3 = 1.5rem/24px, Heading 4 = 1.25rem/20px, Heading 5 = 1rem/16px. Font weight for headings is hard-coded to 700. `u`/`ins`/`abbr` tags have underline forcibly removed; `b`/`strong` forced to `font-weight: 700 !important` (Bootstrap's 900 default is overridden).

**Text highlight** (the gold/black background-behind-heading-text treatment from §3): implemented as an inline `<span>` inside a heading, not a block property:

```html
<h2 class="wp-block-heading">A level two <span class="highlight-black">heading</span></h2>
<h2 class="wp-block-heading"><span class="highlight-gold">Two cards</span> in columns</h2>
```

Only `highlight-gold` and `highlight-black` appear in the scanned patterns (white highlight exists per §3 but wasn't observed in sample markup — same `<span class="highlight-white">` pattern should apply).

**Lead paragraph** (large intro body text, §3 "Large body type"): `<p class="is-style-lead">…</p>` — a WP paragraph block style variation, not a separate block.

### 7.5 Buttons — exact classes (compiled from `theme.css`)

Two parallel button syntaxes exist and both compile to the same visual result:

```html
<!-- Block editor markup (as generated by the editor) -->
<div class="wp-block-button"><a class="wp-block-button__link has-asu-maroon-background-color has-background wp-element-button">Button label</a></div>
<div class="wp-block-button"><a class="wp-block-button__link has-asu-gold-background-color has-background wp-element-button">Button label</a></div>

<!-- Classic Bootstrap markup -->
<a href="#" class="btn btn-maroon">Button label</a>
<a href="#" class="btn btn-gold">Button label</a>
```

Compiled CSS custom-property values confirm brand colors: `.btn-maroon` → `--bs-btn-color: #ffffff` (white text); `.btn-gold` → `--bs-btn-color: #000` (black text on gold, for contrast — note this differs slightly from the design guide's Gray7 recommendation, but is the actual shipped behavior). A `className: "is-style-primary"` variant also appears on query-loop "Read more" buttons.

No `className` on a `wp:button` block defaults to maroon (see `content-20-inset-content-box.php`: "Default button" / "Secondary CTA" both render unstyled → maroon default, matching §6.2's "Maroon is the default color" rule).

### 7.6 Cards — three coexisting systems, and the four brand-standard types

**CONFIRMED from the full Pitchfork Blocks plugin source** (`render.php` + `block.json` for every card block, plus the legacy `card/register.php`). Three separate implementations exist; **`acf/card-v2` is the current, recommended, brand-standard system** — it is what a skill should generate by default. The other two are documented so a legacy page's markup can be recognized (and, for card v1, flagged for replacement).

#### 7.6.1 Classic Bootstrap card (`template-parts/content-card.php`, PHP query loops)

```html
<div class="col col-12 col-md-6 col-lg-4 mb-4">
  <div class="card card-story" id="post-123">
    <img class="card-img-top" ... >
    <div class="card-header"><h3 class="card-title">Title</h3></div>
    <div class="card-body"><p class="card-text">Excerpt…</p></div>
    <div class="card-button"><a href="…" class="btn btn-maroon">Read more</a></div>
  </div>
</div>
```

Confirmed compiled selectors in `theme.css`: `.card-story`, `.card-story.card-horizontal`, `.card-event`, `.card-event-details`, `.card-event-icons`, `.card-degree .card-footer`. Not block-editor markup — only relevant for classic PHP loop templates, not for page-builder content.

#### 7.6.2 ⚠️ Card v1 — DEPRECATED, recognize but do not generate

Folder `card/`, registered with **`acf_register_block_type()`** (not `block.json`) as **`uds-card`**, title literally `"UDS Card (Deprecated)"`, description: *"Replace this card with a new card from the block inserter for continued support."* `supports.inserter: false` — **it cannot be newly inserted in the block editor**; it only still renders if it already exists in a page's saved content. A skill should never generate `acf/uds-card`; if encountered in existing content, flag it for migration to `acf/card-v2`.

Fields (all top-level `get_field()`, no groups): `card_style` (`degree`/`event`/`story`/blank→Default), `header_style` (`image`/`icon`/blank), `card_orientation` (`horizontal`/blank→vertical), `header_icon` (FA icon slug string), `image` (image field: `url`, `alt`), `title`, `body_text`, `hover` (bool — when true, suppresses buttons/links/tags entirely, producing a bare hover-state card), `start_date`/`start_time`/`end_time`/`location` (Event style only), `buttons` (repeater: `card_buttons_external_link` bool, `card_buttons_button_color`, `card_buttons_button_size` [`default`→no size class], `card_buttons_icon`, `card_buttons_button_link` link field), `links` (repeater: `link_text`, `link_url`, `external_link` bool), `tags` (repeater: `tag_text`, `tag_url`).

```html
<div class="card card-v1 card-story card-horizontal" style="...">
  <img class="card-img-top" src="..." alt="...">
  <div class="card-content-wrapper" />  <!-- literal self-closing bug in source -->
  <div class="card-header"><h3 class="card-title">Title</h3></div>
  <div class="card-body"><p class="card-text">Body text</p></div>
  <div class="card-button"><a href="#" class="btn btn-maroon">Label</a></div>
</div>
```
Two literal source bugs worth knowing if you ever have to reason about legacy output: the horizontal-card wrapper `<div class="card-content-wrapper" />` is written as a self-closing tag (invalid HTML — it does not actually wrap the following markup even though the PHP later emits a matching `</div>`), and `card-v1` always carries the base class `card-v1` alongside plain `card`.

#### 7.6.3 `acf/card-v2` family — current, brand-standard cards

`acf/card-v2` is the **card container**; everything else in the family is a locked-parent child block (`"parent": ["acf/card-v2"]` etc.) that only functions inside it. `supports`: spacing margin top/bottom only — **no anchor, no align, no color(background/text/link) support** on the container itself, so a card's look is driven entirely by the `orientation` field + block-style `className`, not by editor color/align controls.

**Container field & style logic (`card-v2.php`):**

```php
$orientation = get_field( 'uds_card2_orientation' ); // e.g. "vertical" / "horizontal"
$card_classes = array( 'wp-card-v2', 'card', 'card-' . $orientation );
// className "is-style-card-story" etc. has its "is-style-" prefix STRIPPED
// before being added, e.g. "is-style-card-event" → adds plain "card-event"
```
This is an important, easy-to-miss confirmation: choosing the **Story / Event / Degree** block style in the editor does **not** leave an `is-style-*` class on the front end — it produces the same plain `card-story` / `card-event` / `card-degree` class that the classic Bootstrap cards use (§7.6.1), so both markup systems share one CSS surface. No block style chosen = **Default card** (just `wp-card-v2 card card-{orientation}`). Final wrapper:

```html
<div class="wp-card-v2 card card-vertical card-story" style="...">
  <!-- InnerBlocks content -->
</div>
```

**Default `InnerBlocks` template** (all four top-level entries carry `lock: {move: true, remove: false}` — meaning **position/order is fixed, but every one of them individually can be removed** by the editor without touching the others' order; nothing can be dragged/reordered):

1. `acf/card-v2-image` — image slot. **Removable.**
2. `acf/card-v2-header` — `lock: {move: true, remove: true}` (**both locked — cannot be removed or moved**), wrapping an H3 heading placeholder "Card title". The title is the one structurally mandatory part of every card.
3. `core/group` named "Card Content" — `lock: {move: true, remove: true}` (**locked, cannot be removed**), wrapping one paragraph placeholder "Card body copy goes here."
4. `core/buttons` — **removable**, wrapping one `core/button` (`backgroundColor: asu-maroon`, `className: "is-style-"` — literally a trailing-dash empty style suffix left in source, a real quirk, not a typo to "fix" when reproducing).

⚠️ **Neither the content group nor the button row carries a card-specific class.** The group has only `metadata.name: "Card Content"` (an editor List View label) — **no `className`, so no `.card-body` is ever emitted** — and the `core/buttons` block has no `className` either, so no `.card-buttons`. Both render as plain `.wp-block-group` / `.wp-block-buttons`. For **vertical** cards this is harmless, and `blocks/_card-v2.scss` in fact styles the button row by targeting `.wp-card-v2 .wp-block-buttons.is-layout-flex` directly, confirming that's the expected front-end shape. But the **horizontal** card grid rules in that same file assign `grid-column: 2` to `.card-header, .card-body, .card-event-details, .card-buttons, .card-link, .card-tags` — two of which (`.card-body`, `.card-buttons`) the block's own default template never produces. **Practical consequence: prefer `card-vertical` unless you are hand-adding `card-body`/`card-buttons` classes**, because a stock horizontal card-v2 will not place its body copy or button row in the intended grid column.

In plain English: **every card is guaranteed a title and a body-copy area in that fixed order; the image and the button row are the two parts an editor can freely turn on or off** — directly matching the "same code, but you can change if it has buttons or not" pattern for heroes described below.

Top-level `allowedBlocks` (what can additionally/alternatively be inserted at the top level): `acf/card-v2-image`, `acf/card-v2-icon`, `acf/card-v2-header`, `acf/card-v2-tags`, `acf/card-v2-links`, `core/post-featured-image`, `core/group`, `core/buttons`, `core/post-terms`. The **Icon-header card variant** is made by swapping the image slot for `acf/card-v2-icon` instead of `acf/card-v2-image` — it is a slot substitution, not a separate block/style.

⚠️ **Two source inconsistencies worth knowing (confirmed literally from the PHP), since they affect what you can rely on in generated markup:**
- `acf/card-v2-event` declares `"parent": ["acf/card-v2"]` in its own `block.json`, but `card-v2.php`'s `allowedBlocks` array **does not include `acf/card-v2-event`**. Event details may therefore not be freely insertable from the card-v2 top-level inserter in every editor version; treat `acf/card-v2-event` as a known, valid child for the **Event card** even though the parent's allow-list omits it.
- `card-v2-links.php`'s own `allowedBlocks` lists `acf/card-link` (no `-v2-`), but the block it actually inserts by default — and the one that is really registered — is `acf/card-v2-link`. Always generate `acf/card-v2-link`, not `acf/card-link` (the latter does not exist as a registered block).

**The eight `card-v2-*` sub-blocks:**

| Block | Parent | ACF field(s) | Renders |
|---|---|---|---|
| `acf/card-v2-image` | `acf/card-v2` | `uds_card2_image` (image: `url`, `alt`) | `<img class="card-img-top" src="…" alt="…">`. Empty + editor preview only → placeholder SVG; empty on front end → nothing at all. |
| `acf/card-v2-icon` | `acf/card-v2` | `uds_card2_icon` (Font Awesome icon field, object w/ `->class`) | `<span class="{icon->class} card-icon-top"></span>`. If no icon chosen, **always** falls back to `<span class="fa-light fa-circle-question card-icon-top"></span>` — on the front end too, not just in the editor. |
| `acf/card-v2-header` | `acf/card-v2` | *(none — pure InnerBlocks wrapper)* | `<div class="card-header"><InnerBlocks/></div>`. Own `allowedBlocks`: `core/heading`, `core/post-title`, `core/archive-title` (so a query-loop card can pull the post title dynamically instead of a static heading). Default child: H3, placeholder "Card title". |
| `acf/card-v2-links` | `acf/card-v2` | *(none — wrapper)* | `<div class="card-link"><InnerBlocks/></div>`, default child: one `acf/card-v2-link` (mode preview). |
| `acf/card-v2-link` | `acf/card-v2-links` | `uds_card2_link` (link field: `url`, `title`, `target`) | Plain `<a href="{url}" target="{target|| _self}">{title}</a>` — no button styling, a bare text link. |
| `acf/card-v2-event` | `acf/card-v2` (see caveat above) | `uds_card2_event_date`, `uds_card2_event_start`, `uds_card2_event_end`, `uds_card2_event_override`, `uds_card2_event_location`, `uds_card2_event_layout` (`compact` default / `newline`) | `.card-event-details` / `.card-event-icons` blocks with a calendar icon + smart-formatted date/time string (auto-converts `am`/`pm`→`a.m.`/`p.m.`, collapses to "noon"/"midnight", trims a redundant meridian abbreviation when start/end share AM or PM) and a separate map-marker + location line. `uds_card2_event_override` replaces the computed date string outright when set. **Event card only.** |
| `acf/card-v2-tags` | `acf/card-v2` | *(none — wrapper)* | `<div class="card-tags"><InnerBlocks orientation="horizontal"/></div>`, only child allowed: `acf/card-v2-tag`; default template pre-fills **two** tags ("card tag", "second tag"). **Story card only**, per §6.3. |
| `acf/card-v2-tag` | `acf/card-v2-tags` | `uds_card2_tag_text` | `<span class="badge text-bg-gray-2">{text}</span>` — note this is the **code slug** `gray-2`, which per §7.1 is **Gray6 `#E8E8E8`** in design-guide terms, i.e. a light-gray chip, not a dark one. |

Confirmed horizontal-orientation layout from `blocks/_card-v2.scss`/`editor/_card.scss`: `card-horizontal` (≥`md`, 768px) switches from normal block flow to **CSS grid**, not flexbox — `grid-template-columns: 40% auto` with the image pinned to column 1 spanning all rows and every content part (header/body/event/buttons/link/tags) in column 2. The **Story** orientation is a special case on top of that: the image is stretched to span *both* columns and *behind* the text (`z-index: 10`), while the text-bearing parts get an opaque white background and a higher `z-index: 20` so they appear to "float" on top of the photo in a fixed row order (header → body → event details → buttons → link → tags) — this is the visual "text card overlapping a full-bleed photo" treatment referenced for Story cards. Below `md`, all orientations stack normally regardless of the `orientation` field.

**Degree cards** get their two-tier CTA (maroon "Degree details" + gold "Apply", per §6.2's button hierarchy) by manually adding a **second** `core/button` to the default `core/buttons` row (`backgroundColor: asu-maroon` + `backgroundColor: asu-gold`) rather than via any dedicated ACF field — the block.json/render.php give no special-cased Degree markup beyond the shared `card-degree` style class.

#### 7.6.4 `acf/card-imagebased` — separate block, full-bleed image CTA card

Not part of the `card-v2` family (no `parent`/`allowedBlocks` restriction — insertable anywhere). `supports`: `anchor: true`, `spacing.margin: true`, `classname: true`, **no color support**, `align: false`.

Fields: `card_imagebase_image` (image, ID), `card_imagebase_orientation` (select, default `portrait`; design guide §6.3 names the three orientations Horizontal/Square/Vertical), `card_imagebase_size` (select, default `md`). ⚠️ Source bug, confirmed literally: the fallback-default branch for size mistakenly reassigns `$imgcard_orient = 'md'` instead of `$imgcard_size` — an unset size field silently falls back to whatever orientation default already applied rather than a size default. Also: `portrait-lg` has no CSS defined, so the code force-downgrades that specific combination to `portrait-md`.

```html
<div id="{anchor}" class="uds-image-based-card {className} portrait-md" style="...">
  <img class="img-resp" src="..." alt="...">  <!-- via wp_get_attachment_image(), size "medium_large" -->
  <div class="card-img-overlay">
    <!-- InnerBlocks, overlaid on top of the image -->
  </div>
</div>
```
Allowed inner blocks: `core/html`, `core/heading`, `core/paragraph`, `core/buttons`. Default template (no `lock` present anywhere — **fully free-form: reorderable and removable**): H2 "Heading example, level 2" with `textColor: white`, plus a `core/buttons` row with one maroon button, `className: "is-style-uds-md"` (a real button-size style, unlike card-v2's blank one). If no image is chosen, the editor-only placeholder is a literally malformed `<image src="" alt="No image selected"/>` tag (not `<img>` — a verbatim source bug, editor-preview only, never shown on the front end).

**Card layout wrappers** (§6.3 "arrangements"): plain `wp:columns`/`wp:column` for 2-across and 3-across grids, optionally wrapped in `acf/background-section` (§7.10.1) for a "cards on a background" section. Section heading pattern: `<h2>` with a `highlight-gold` or `highlight-black` span, `margin-top: uds-size-4`, `margin-bottom: uds-size-2`. A single trailing CTA button (`justifyContent: right`, `margin-bottom: uds-size-6`) closes out a card grid section rather than repeating a button in every card — an explicit pattern convention worth replicating.

#### 7.6.5 🎨 Figma appearance — THE CARD SYSTEM (read this before building any card grid)

**Source: ASU UDS Figma card sheet.** This is the largest component surface in UDS and the one most responsible for pages looking alike. The sheet's real lesson is structural, so state it plainly:

> **A card is not a template. It is a stack of slots, and almost every slot is optional.**
> Two cards built from the same block can look nothing like each other.

The four "types" (Default / Story / Event / Degree) are the *smallest* of the levers. Below them sit orientation, the top slot, and six optional parts. Work the whole space, not the type dropdown.

##### A. The slot inventory

Order is fixed by the block's locked `InnerBlocks` template (§7.6.3). What varies is which slots you keep.

| # | Slot | Block | Removable? | Renders | Restricted to |
|---|---|---|---|---|---|
| 1 | Top media | `acf/card-v2-image` | ✅ | `<img class="card-img-top">` | any |
| 1 | Top icon *(alternative to media)* | `acf/card-v2-icon` | ✅ | `<span class="{fa} card-icon-top">` | any |
| 2 | Title | `acf/card-v2-header` | ❌ **locked** | `.card-header` + heading | any |
| 3 | Body | `core/group` "Card Content" | ❌ **locked** | plain `.wp-block-group` | any |
| 4 | Event details | `acf/card-v2-event` | ✅ | `.card-event-details` + icon rows | **Event only** |
| 5 | Buttons | `core/buttons` | ✅ | `.wp-block-buttons`, 1–2 buttons | any |
| 6 | Inline link | `acf/card-v2-links` → `-link` | ✅ | `.card-link`, bare maroon underlined `<a>` | any |
| 7 | Tags | `acf/card-v2-tags` → `-tag` | ✅ | `.card-tags`, wrapping `.badge` chips | **Story only** |

**🎨 Slot 1 is a three-way choice, not a two-way one.** Image, icon, or *nothing at all*. The sheet shows all three. An icon-less, image-less card is a legitimate text card and is the single fastest way to make a grid feel different — the sheet's bottom-right column is an entire progression of cards shedding parts until only body copy and a button remain.

**🎨 Tags wrap to multiple rows** — the sheet shows eight chips over two rows. Tags are a set, not a single label.

**🎨 The inline link sits BELOW the button row**, not beside it. Button = primary action, inline link = the secondary "or read more" escape hatch. Using both is normal; the sheet shows it constantly.

##### B. The four types — each is just a different gold accent

🟢 The Figma sheet confirms every accent the kit had inferred. Nothing to correct here.

| Type | `className` | Rendered class | The gold tell | Extra slot unlocked |
|---|---|---|---|---|
| Default | *(none)* | `card` | none | — |
| Story | `is-style-card-story` | `card-story` | short gold rule **under the title** | tags |
| Event | `is-style-card-event` | `card-event` | gold rule **under the image** | event details |
| Degree | `is-style-card-degree` | `card-degree` | gold rule **above the button row** | *(convention: two buttons, maroon + gold)* |

Remember §7.6.3: the `is-style-` prefix is **stripped at render**, so the front-end class is plain `card-story`, identical to the classic Bootstrap card selectors.

##### C. Orientation — 🟡 the kit's "vertical only" advice was too strong

The kit previously refused horizontal cards. The Figma sheet uses them heavily — a full dashed cluster of horizontal variants, plus two entire columns of them. **Horizontal is a designed-for variant.** The bug is real but it is a *template* bug, not a layout bug:

- At ≥768px `card-horizontal` becomes CSS Grid, `40% auto`, image pinned to column 1 spanning all rows.
- `blocks/_card-v2.scss` puts `.card-header, .card-body, .card-event-details, .card-buttons, .card-link, .card-tags` in column 2 — but the stock template **never emits `.card-body` or `.card-buttons`**, so body copy and buttons escape the grid.
- **Fix:** add `card-body` to the content group and `card-buttons` to the buttons row via the Advanced ▸ Additional CSS Class field. Then horizontal works as designed.
- `preview/uds-preview.css` §16 also targets the classes the block *actually* emits, so mockups render correctly either way. Say which approach you used.
- Below 768px every orientation stacks. Horizontal is a desktop-only distinction.

**🎨 Story + horizontal is its own treatment, not a combination.** The photo spans the *full* card width behind everything, and the text parts float on top in opaque white — the "text panel overlapping a photo" look. The sheet devotes a whole left-hand column to it, including versions with a tag chip above the title and titles running one to four lines. Use it for featured articles; it is the most editorial card in the system.

##### D. Image-based cards are a different family — `acf/card-imagebased` (§7.6.4)

Not part of card-v2. No parent restriction, insertable anywhere. Photo fills the card; content sits on a bottom-up dark scrim.

- **Content is minimal by design:** a heading, sometimes one paragraph, sometimes a button. Never tags, never event details.
- **🎨 The button here is routinely GOLD.** This is the one place gold appears freely without burning the page's single gold CTA — it lives inside a photograph, not in the page's button hierarchy. The sheet shows gold buttons on nearly every image card.
- **Orientation × size matrix** (`{orientation}-{size}` appended to the wrapper):

| | `-sm` | `-md` | `-lg` |
|---|---|---|---|
| `landscape` | wide banner | standard | full-bleed feature |
| `square` | tile | tile | tile |
| `portrait` | tall tile | poster | ⚠️ **no CSS upstream — force-downgraded to `portrait-md`** |

- ⚠️ Source bug (§7.6.4): the size fallback branch mistakenly reassigns `$imgcard_orient` instead of `$imgcard_size`, so an unset size falls back to the *orientation* default.
- **🎨 They are designed to sit next to white content cards.** The sheet shows repeated three-across arrangements — image card, white card, image card — and the same pairing on a black section. That alternation is one of the strongest compositions in the whole system and nothing in this kit had been using it.

##### E. ⚠️ Ranking cards — in Figma, NOT in the block set

The sheet includes a full ranking-card cluster: gold top rule, photo, H4 title *under* the photo, citation body, "Read more →", and collapsed/expanded chevron states. §6.3 lists Ranking cards as a real UDS component.

**But no ranking-card block exists in the reviewed Pitchfork Blocks source** (§7.12), and this kit therefore ships **no CSS for it**. Building one would mean inventing markup, which §"Prime directive" forbids. If you need ranking cards, find the registered block name first — then it can be wired up properly. Do not approximate it with a Default card and call it done.

##### F. Composition patterns — where page variety actually comes from

Slot combinations make cards different. *Arrangement* makes pages different. From the sheet:

1. **Even grid** — 3 or 4 vertical cards across. The default. Fine, but you have used it already.
2. **Stacked horizontal list** — full-width horizontal cards, one per row. Reads like a directory or a feed. Completely different page rhythm from a grid.
3. **Image / content / image** — three across, image-based cards flanking a white content card.
4. **Mixed weight** — one large image card beside two small stacked ones.
5. **Progressive stripping** — a grid where cards deliberately carry *different* slot counts, so the eye lands on the fullest one.
6. **Single feature card** — one horizontal Event card, full width, two buttons, a tag chip on the image. The sheet's "Featured event" is exactly this: gold `Featured event` chip, large title, date and location rows, then **View event** (maroon) + **RSVP now** (gold) side by side.
7. **Cards on a dark section** — image-based cards on black. The scrim already handles contrast, so no white-text overrides are needed on the cards themselves.

##### G. 🎨 Editorial rules the sheet records

**Month abbreviation — this one is easy to get wrong.** When a month is used **with a specific day**, abbreviate *only*:

> **Jan., Feb., Aug., Sept., Oct., Nov., Dec.**

March, April, May, June and July are **never** abbreviated. A month used *without* a day is never abbreviated either. This governs every Event card date line, and it is worth checking against client-supplied copy — source assets frequently get it wrong.

Other conventions visible on the sheet: card titles run long on purpose (the Story cluster shows one to four lines, all acceptable); tag chips are short two-word labels; and body copy in a card is a single paragraph, not a list, unless the card is doing double duty as a data readout.

##### H. Picking a card, in order

Ask these in sequence. If you answer them all the same way twice in a row, you are defaulting.

1. **Is this a feed, a grid, or a feature?** → stacked horizontal / even grid / single large card.
2. **Does the content have a photograph worth showing?** → image-based card or a photo top slot. No photo? → icon, or nothing.
3. **What type does the content actually want?** Dated → Event. Narrative with topics → Story. Programme with an apply path → Degree. Otherwise Default.
4. **What is the minimum slot set that works?** Start from title + body and add back only what earns its place.
5. **One action or two?** One button; or button + inline link; or two buttons (Degree/featured pattern).
6. **Vertical or horizontal?** If the cards sit in a column narrower than ~380px, vertical. Otherwise horizontal is available and underused.


### 7.7 Heroes — `acf/hero`, `acf/hero-post`, `acf/hero-video`

**CONFIRMED from source.** This is the block family the "every hero looks the exact same, same code, but you can change if it has a highlight color and whether it has buttons" requirement maps to most directly — and the source confirms that description almost exactly for the base `acf/hero` block. All three hero blocks share `supports.multiple: false` (**only one hero allowed per page**), `align: ["full"]`, and a `style.spacing.margin.bottom` default of `var:preset|spacing|uds-size-8` (64px, §7.3).

⚠️ **Direct source confirmation of the CSS Grid basis for §7.14.1's hero-layout correction.** `hero-video.php`'s own file header literally reads: *"encoded to deliver the UDS Hero v2 (CSS Grid-based) - Based off of initial implementation from KE web dev team."* This is no longer an inference from one editor-only SCSS rule — the plugin's own source comment confirms the hero family is built on CSS Grid, which is *why* the subtitle can be authored first in `InnerBlocks` yet render visually after the headline on the front end (§7.14.1). The full grid-template-rows/columns definition itself is still not in the reviewed source (it lives in the vendored `@asu/unity-bootstrap-theme` package), but the grid-based mechanism itself is now confirmed, not just inferred.

⚠️ Correction to prior inference: the base hero's only two ACF fields are `uds_hero_size` and `uds_hero_image` — there is **no** `uds_hero_content_on_mobile` field in the actual `render.php`; that earlier claim is not supported by source and should be disregarded.

#### 7.7.1 `acf/hero` — the base hero

Fields: `uds_hero_size` (select — the raw value is echoed directly as the wrapper's first CSS class, e.g. presumably `uds-hero-sm`/`uds-hero-md`/`uds-hero-lg`; the exact enumerated choices live in the ACF field-group config, not in `render.php`, so treat the *values* as plausible-but-not-source-confirmed even though the *mechanism* is confirmed), `uds_hero_image` (image field, returns an attachment ID passed straight to `wp_get_attachment_image()`).

```html
<div class="uds-hero-md alignfull has-btn-row" style="margin-bottom:4rem;">
  <div class="hero-overlay"></div>
  <img class="hero" src="..." alt="..." <!-- wp_get_attachment_image(), size = uds_hero_size -->>
  <div role="doc-subtitle"><span class="highlight-black">Example subtitle</span></div>
  <h1 class="has-white-color">Your Hero Headline</h1>
  <div class="content">
    <p class="has-white-color">Example hero paragraph text.</p>
  </div>
  <div class="btn-row">
    <a class="wp-block-button__link has-asu-maroon-background-color has-background wp-element-button">Button label</a>
  </div>
</div>
```
Note the wrapper unconditionally carries the class `has-btn-row` even if the button row is later removed by the editor — this is a literal, confirmed-from-source quirk, not conditional on whether buttons are actually present.

**Default `InnerBlocks` template**, translated plainly — every one of the four pieces carries `lock: {move: true, remove: false}`, i.e. **their relative order is permanently fixed, but each piece can individually be deleted**:
1. `acf/subtitle` — prefilled "Example subtitle", highlight color `highlight-black`. **Removable.** The subtitle's own highlight-color field (`uds_subtitle_highlight_color`) is the exact "change the highlight color" lever the brief describes (see §7.10.5) — swap it to `highlight-gold`/`highlight-white`/`none` per §3's approved highlight rules.
2. `core/heading` (level 1) — prefilled "Your Hero Headline", `textColor: white`. **Removable**, though in practice a hero without an H1 would be unusual.
3. `core/group` (`className: "content"`) wrapping one `core/paragraph`, `textColor: white`, prefilled "Example hero paragraph text." **Removable** as a unit.
4. `core/buttons` (`className: "btn-row"`) wrapping one `core/button` (`backgroundColor: asu-maroon`). **Removable** — this is the literal "you can change if it has buttons or not" toggle: deleting this block removes the whole button row; adding a second `core/button` (e.g. `backgroundColor: asu-gold`) gives the standard maroon+gold two-button hierarchy from §6.2.

Allowed blocks: `core/html`, `core/heading`, `core/group`, `core/buttons`, `acf/subtitle`.

#### 7.7.2 `acf/hero-post` — dynamic hero sourced from a post

No `InnerBlocks` at all — entirely dynamic/query-driven, nothing for an editor to type into except ACF fields. Fields: `uds_hero_post_size`, `uds_hero_post_source` (`direct` / `latest` / a taxonomy slug e.g. `category` or `post_tag`), `uds_hero_post_single` (post picker, used when source = `direct`), `uds_hero_post_category`, `uds_hero_post_tag`, `uds_hero_post_offset`, `uds_hero_post_btn_color`, `uds_hero_post_btn_label`.

Pulls title/permalink/excerpt/featured-image from the resolved post (a single directly-picked post, the single latest post, or the first post matching a category/tag + offset), trims the excerpt to ~225 characters at a word boundary, and renders:

```html
<div class="{size} alignfull has-btn-row" style="...">
  <div class="hero-overlay"></div>
  <img class="hero" src="..." alt="...">
  <h1 class="article has-white-color">Post title</h1>
  <div class="content has-white-color">Trimmed excerpt…</div>
  <div class="btn-row"><a href="{permalink}" class="btn btn-default btn-{btn_color}" data-ga="hero-post-cta" ...>{btn_label}</a></div>
</div>
```
The button row only renders at all if a permalink was resolved; there is no subtitle in this variant (no `acf/subtitle` involved). Since there's no InnerBlocks, "locking" doesn't apply here in the same sense — the only editor-facing choices are the ACF fields themselves.

#### 7.7.3 `acf/hero-video` — hero with an MP4 background

Same four-piece `InnerBlocks` content structure as the base hero (subtitle / H1 / content group / button row), **but none of the four entries carry a `lock` array in this variant** — confirmed from source, `hero-video.php`'s template omits `lock` entirely, so unlike the base hero, **order is not fixed here**: an editor can freely reorder or remove any piece.

Additional fields beyond the base hero: `uds_herovideo_size`, `uds_herovideo_source` (video/file field, `->['url']`, rendered as an MP4 `<source>`), `uds_herovideo_image` (image field — used as a still image that renders **in addition to** the video, not merely as a poster/fallback; both can appear in the markup simultaneously per the literal PHP flow).

`block.json` specifics for this variant: `acf.mode: "edit"` (this block defaults to showing its **ACF field-edit form** when first inserted, not the rendered preview — unlike most other Pitchfork blocks, which default to `"preview"`). `supports.spacing: { margin: ["bottom"], padding: false }` — literally bottom-margin only, no top-margin control at all (not even top+bottom like the accordion/alert wrappers). `color`: background/text/link all `false`. The default button in the `InnerBlocks` template carries `metadata.name: "CTA: Hero"` — a block-rename hint (affects only the editor's List View label, not rendered output, but confirms the intended button is meant to read as "the hero's call to action" when authors are navigating a page's block tree). The wrapper's trailing class also appends `$block['className']` (the block's Advanced-panel "Additional CSS Class(es)" field) after `has-btn-row`, so a custom class can be layered on without replacing anything (contrast with `acf/banner`'s className bug in §7.9.2, which does replace its base classes).

⚠️ **Confirmed bug, specific to `hero-video.php`:** the wrapper's `style="<?php echo $spacing; ?>"` attribute references a `$spacing` variable that **is never defined anywhere in this template** — there is no call to `pitchfork_blocks_acf_calculate_spacing( $block )` (the helper every other block in this plugin uses to turn its margin/padding ACF panel values into an inline `style` string). In practice this means either a PHP "undefined variable" notice with the style attribute rendering empty, or (if a global/leftover `$spacing` happens to be in scope from something else on the page) unpredictable inherited spacing — either way, the block.json's declared `style.spacing.margin.bottom` default (`uds-size-8`/64px) is **not reliably applied inline by this specific render path** the way it is for the base `acf/hero`. If a generated hero-video block looks like it's missing its bottom margin, this is why — it's a genuine upstream bug, not a mistake in markup you generate against this guide. (The template also carries a stray `do_action( 'qm/debug', $video )` call — a Query Monitor debug hook left in from development, harmless but a sign this file hasn't been fully cleaned up.)

Confirmed responsive behavior from `blocks/_hero.scss`: **the video is hidden entirely below the `lg` breakpoint (992px)** — `.uds-hero-video video { display: none; }` and `.hero-video-controls { display: none; }` by default, only switched to `display: block` inside `@include media-breakpoint-up($lg)`. Below 992px, only the still `uds_herovideo_image` shows, so on mobile a hero-video block behaves exactly like a static `acf/hero`. At `lg` and above the video is absolutely positioned/centered over the hero and the play/pause controls sit at `opacity: 0.4` until the hero is hovered (`opacity: 1` on `:hover`) — i.e. the controls are present but visually de-emphasized outside of direct interaction.

```html
<div class="uds-hero-video {size} alignfull has-btn-row" style="...">
  <div class="hero-overlay"></div>
  <video id="media-video" autoplay loop muted>
    <source src="{video url}" type="video/mp4">
  </video>
  <div class="hero-video-controls">
    <button id="playHeroVid" class="btn btn-circle btn-circle-alt-white btn-circle-large"><span class="fa-solid fa-play"></span><span class="sr-only">Play hero video</span></button>
    <button id="pauseHeroVid" class="btn btn-circle btn-circle-alt-white btn-circle-large"><span class="fa-solid fa-pause"></span><span class="sr-only">Pause hero video</span></button>
  </div>
  <img class="hero" src="..." alt="...">
  <!-- same subtitle / H1 / content / btn-row InnerBlocks as acf/hero -->
</div>
```
⚠️ Minor cross-block inconsistency confirmed from source: `acf/subtitle`'s own `block.json` restricts its `parent` to `["acf/hero"]` only, yet `hero-video.php`'s `allowedBlocks` list still includes `acf/subtitle` and its default template inserts one. In practice the plugin relies on the parent's `allowedBlocks` to make this work in the editor despite the child's narrower declared `parent`.

⚠️ **Read §7.14 before building a real hero.** The block-editor `InnerBlocks` template order documented above (subtitle → H1 → content → buttons) is the *authoring* order in the editor — it is **not** the same as the *visual* order on the live front end. Production asu.edu heroes consistently render the subtitle line **below** the headline, and put the highlight span on the **headline**, not the subtitle. §7.14 has the screenshot-verified layout to actually reproduce.

### 7.8 Accordion / foldable card (FAQ pattern)

**CONFIRMED from `render.php` + `block.json` source.** This is ASU's brand-standard FAQ/expand-collapse pattern, and it is the clearest example in the whole plugin of parent→child data flow via `providesContext`/`usesContext`.

`acf/accordion` is a thin wrapper: `<div class="accordion" id="{accordion_id}" style="{spacing}">…</div>` — stock Bootstrap 5 `.accordion` component (the SCSS override only touches `$accordion-border-radius: 0`). Block attribute `accordion_id` (string) sets the wrapper `id` and is shared with children via `providesContext: {"pitchfork/accordionId": "accordion_id", "acf/fields": "data"}` — note it also exposes its **entire ACF field data object** to children under the `acf/fields` context key, which is how each child reads the parent's behavior toggle (below). One ACF field, `uds_accordion_behavior` (bool), toggles independent vs. synced (one-open-at-a-time, via Bootstrap's `data-bs-parent`) expand behavior. `supports`: spacing (margin top/bottom, padding) only — **no color/background/className/align support** on the wrapper itself. Only `acf/card-foldable` is allowed as a child.

Each `acf/card-foldable` is a single FAQ/accordion item. It reads the parent's context: `$context['acf/fields']['uds_accordion_behavior']` and `$context['pitchfork/accordionId']`, and only adds `data-bs-parent="#{accordion_id}"` to its body when the parent's synced-behavior toggle is on — this is what actually makes the "only one open at a time" behavior work, and it only functions when the card is a genuine child of `acf/accordion` (`usesContext: ["pitchfork/accordionId", "acf/fields"]`, `parent: ["acf/accordion"]`).

Fields: `uds_foldcard_title` (the clickable question/header text), `uds_foldcard_icon` (FA icon field, object w/ `->element`; when present adds an `accordion-header-icon` class and renders inline, otherwise a placeholder `<i class="fa-placeholder"></i>` is used so the block never errors on an empty icon), `uds_foldcard_collapsed` (bool — **confirmed inverted-sounding but logically consistent**: when true, the panel starts **open**, `aria-expanded="true"`, body class `accordion-body collapse show`; when false/default it starts closed), `uds_foldcard_disabled` (its raw returned value, not just a boolean, is appended directly to the wrapper's class list — treat it as a class-name-or-empty-string field, not a strict on/off flag).

```html
<div class="accordion-item accordion-item-{backgroundColor}" style="...">
  <div class="accordion-header">
    <h4>
      <button id="fCard-{id}" href="#fCardBody-{id}" role="button" data-bs-toggle="collapse"
              data-bs-target="#fCardBody-{id}" aria-controls="fCardBody-{id}"
              aria-expanded="false" class="collapsed">
        <span class="accordion-icon"><i class="fa-placeholder"></i>This is the first card in the accordion.</span>
        <span class="fas fa-chevron-up"></span>
      </button>
    </h4>
  </div>
  <div id="fCardBody-{id}" aria-labelledby="fCard-{id}" class="accordion-body collapse" data-bs-parent="#{accordion_id}">
    <!-- InnerBlocks -->
  </div>
</div>
```

⚠️ **Correction to an earlier version of this sample:** `.accordion-header` is a real wrapper `<div>` that **opens before the `<h4>` and closes immediately after it** — the `<h4>`/`<button>` is nested *inside* it, and `.accordion-body` is a **sibling** of `.accordion-header`, not a child. The exact concatenation in source is `$card_wrap . $card_head . '<h4>' . $card_head_link . $card_title . '</button></h4></div>' . $card_body`, followed by `echo '</div></div>'` after the InnerBlocks — so the closing tags are split across three separate echo statements, which is why this is easy to misread. The `.accordion-icon` span also always contains an icon element: either the real `$fc_icon->element` or, when no icon is set, a literal `<i class="fa-placeholder"></i>` (removing it entirely causes a block render error, per the source comment).
Inner blocks are free-form (`allowedBlocks`: `core/html`, `core/heading`, `core/paragraph`, `core/image`, `core/list`, `core/button`, `core/group`); the plugin's own default template uses `core/heading` level 4 + `core/paragraph`, but a paragraph alone is sufficient for a simple Q&A — nothing is locked inside a foldable card's own content area. `card-foldable` supports a `backgroundColor` restricted (per `theme.json`) to 4 brand slugs: `gold` `#FFC627`, `maroon` `#8C1D40`, `gray` `#BFBFBF`, `dark` `#191919` — this is a `theme.json`-sourced constraint, not something visible in `render.php` itself, but it isn't contradicted by the render logic (which just concatenates whatever `backgroundColor` is present as `accordion-item-{value}`).

A ready-to-use FAQ example built from this is in `patterns/faq-accordion-sample.php`.

#### 7.8.1 🎨 Figma appearance — accordion

**Source: ASU UDS Figma component sheet.** Figma is *design intent*; the plugin PHP/SCSS is *compiled reality*. Where they disagree, say which one you are following. Everything in this subsection is Figma-derived (🎨) unless it cross-confirms something already marked 🟢.

The sheet shows the component as a 4 × 2 matrix: four accent colors across, and the same component rendered at two container widths down (full content width, and roughly half width). Each cell shows a closed item stacked above an open one.

**🟢 CONFIRMED — the four `backgroundColor` slugs are a LEFT ACCENT BAR, not a fill.** This is the single most misleading thing about the component's field naming and Figma settles it. `accordion-item-dark` sounds like it produces a dark card; it produces a **white** card with a black left edge. The bar runs the full height of the item — header only when closed, header *and* body when open. All four slugs behave identically apart from the bar color:

| Slug | Rendered class | Bar color | Reads as |
|---|---|---|---|
| `gold` | `accordion-item-gold` | ASU Gold `#FFC627` | Warm, promotional. The default choice for a marketing-facing FAQ. |
| `maroon` | `accordion-item-maroon` | ASU Maroon `#8C1D40` | Institutional, the safest neutral-but-branded pick. |
| `gray` | `accordion-item-gray` | Gray4 `#BFBFBF` (code `gray-4`) | Recedes. Use when the accordion is a secondary element on a busy page. |
| `dark` | `accordion-item-dark` | Gray1 `#191919` (code `gray-7`) | Highest contrast, most editorial. |

⚠️ Note the §7.1 slug inversion bites here: the *field* value is `dark` and `gray`, but the *token* they resolve to are code-slug `gray-7` and `gray-4`. Do not write `accordion-item-gray-4`.

**🎨 Open vs. closed is signalled by fill, not just the chevron.** A closed item is plain white. An open item takes a light gray tint — the header strip picks up the heavier gray and the body sits on the lighter one beneath it. The kit previously rendered both states white, which left the chevron doing all the work; `preview/uds-preview.css` §10 now implements the tint. Not present in the reviewed SCSS, so treat as design intent.

**🎨 The chevron reads neutral dark, not maroon.** `render.php` emits a bare `<span class="fas fa-chevron-up">` with no color class (§7.8), so the color lives in CSS that was never part of the source dump. The kit previously guessed maroon; Figma shows dark, and the kit now follows Figma. Flagging it because it is a guess replaced by better evidence, not a confirmed value.

**🎨 The component is fluid and is designed to work in a narrow column.** The second row of the sheet is the same accordion at roughly half width, with body copy reflowing to a much narrower measure and the title wrapping. This is an explicit, designed-for use — an accordion is not obliged to span the full content width. Putting one inside a `wp:column` beside a block of prose, or in a sidebar, is a supported composition and a genuinely different page shape from the full-width FAQ band that every ASU page defaults to.

**Composition notes for varied pages.** Things this sheet legitimises that are easy to forget:
- Accent color is a real editorial lever — a gold-barred FAQ and a dark-barred one feel like different pages. Vary it between sites rather than defaulting to one.
- Accordions do not have to be the FAQ at the bottom of the page. At half width beside an image or intro paragraph, the same block reads as a spec list, an itinerary, or a set of programme details.
- Because the accent bar is the only chrome, an accordion sits cleanly on a patterned `background-section` — the white items lift off a light tile without needing a container.



Confirmed spacing from `blocks/_accordion.scss`: `1.5rem` (`uds-size-spacing-3`) vertical margin around the whole accordion and `1.5rem` bottom margin between each `.accordion-item`/`acf/card-foldable` — i.e. foldable cards render with visible gaps between them, not flush against each other like a plain Bootstrap accordion.

### 7.9 Alerts, banners, and quotes

#### 7.9.1 `acf/alert`

Field: `uds_alert_dismissible` (bool). Alert **type is chosen purely via block style (`className`), not a field** — confirmed from a `switch ($block['className'])` statement:

| Block style | `className` | Icon rendered | Background | Border |
|---|---|---|---|---|
| Success | `is-style-alert-success` | `fas fa-bell` | `#e9f5db` | `#78be20` (ASU Green) |
| Info | `is-style-alert-info` | `fas fa-check-circle` | `#d6f0fa` | `#00a3e0` (ASU Blue) |
| Error | `is-style-alert-error` | `fas fa-info-circle` | `#f7dddd` | `#cc2f2f` |
| Warning (also the default/fallback when no style is chosen) | `is-style-alert-warning` | `fas fa-exclamation-triangle` | `#ffeade` | `#ff7f32` (ASU Orange) |

Background/border hex values confirmed from `blocks/_alert-notification.scss` (`.wp-block-alert.alert.is-style-alert-*`) and cross-match the canonical `$uds-color-background-*`/`$uds-color-alerts-*` tokens in §7.13.

⚠️ Confirmed exactly as coded — the icon-to-type pairing is **not** the intuitive one (success gets a bell, not a check; error gets an info-circle, not a warning symbol); reproduce it as-is rather than "correcting" it.

```html
<div id="{anchor}" class="wp-block-alert alert is-style-alert-warning alert-dismissable" style="...">
  <div class="alert-icon"><span class="fas fa-exclamation-triangle"></span></div>
  <div class="alert-content">
    <!-- InnerBlocks: core/paragraph, core/list -->
  </div>
  <div class="alert-close">
    <button type="button" class="btn btn-circle btn-circle-alt-black close" data-bs-dismiss="alert" aria-label="Close"><span class="fas fa-times"></span></button>
  </div>
</div>
```
Note the dismiss class is literally `alert-dismissable` (one "s"), not Bootstrap's usual `alert-dismissible` — confirmed verbatim from source. `supports`: `anchor: true`, spacing margin top/bottom only, **no color/className/align support**. Default InnerBlocks template: single `core/paragraph` placeholder.

#### 7.9.2 `acf/banner`

Fields: `uds_banner_button_count` (0/1/2), `uds_banner_dismissible` (bool), `uds_banner_icon` (FA icon field, `->element`), `uds_banner_button_1_settings` / `uds_banner_button_2_settings` (groups, each with `button_one_text`/`button_one_url` or `button_two_text`/`button_two_url`). Background color comes from the block's native `backgroundColor` support → `banner-{backgroundColor}` (defaults to `banner-gray` if unset).

⚠️ Confirmed source bug worth knowing: if an editor sets a custom **Additional CSS Class** in the Advanced panel, the code **replaces** the entire base class array (`wp-block-banner alignfull banner-{color}`) with just that custom string, rather than appending to it — so using "Additional CSS Class" on a banner silently strips its required wrapper/background classes.

```html
<section id="{anchor}" class="wp-block-banner alignfull banner-gray" style="...">
  <div class="banner alert" role="banner">
    <div class="banner-icon">{icon->element}</div>
    <div class="banner-content">
      <!-- InnerBlocks: core/heading, core/paragraph, core/list -->
    </div>
    <div class="banner-buttons">
      <a href="{url}" class="btn btn-sm btn-dark">Button 1</a>
      <a href="{url}" class="btn btn-sm btn-dark">Button 2</a>
    </div>
    <div class="banner-close">
      <button type="button" class="btn btn-circle btn-circle-alt-white close" aria-label="Close" data-bs-dismiss="alert"><span class="fas fa-times"></span></button>
    </div>
  </div>
</section>
```
Button color class is `dark` by default, switched to `gold` specifically when `backgroundColor === 'black'` (to avoid black-on-black buttons). `supports`: `anchor: true`, spacing margin top/bottom, **`multiple: false` — only one banner per page**, `align: ["full"]` (also the `attributes.align` default), `color.background: true`. Default InnerBlocks template: H3 "Example Notification Headline (H3)" + paragraph.

Confirmed from `blocks/_alert-notification.scss`: the inner `.banner` content area is centered and width-capped at `1200px + 2rem` with `2rem` padding (i.e. it aligns to the same 1200px content column as everything else despite the outer `<section>` being `alignfull`/edge-to-edge), and it's restyled to behave like a borderless, transparent-background Bootstrap alert (`&.alert { background-color: transparent; border: 0; }`) — the banner's actual color comes entirely from the outer `banner-{backgroundColor}` class, not from Bootstrap's alert coloring.

#### 7.9.3 `acf/blockquote`

Fields: `uds_blockquote_quote`, `uds_blockquote_cite` (name), `uds_blockquote_description` (role/title), `uds_blockquote_style` (`default` vs. a "testimonial" style — anything not `'default'` takes the testimonial branch), `uds_blockquote_accent` (color slug, used as `accent-{value}`), `uds_blockquote_alt` (bool, adds `alt-citation`), `uds_blockquote_image_include` (bool), `uds_blockquote_image_src` (image ID), `uds_blockquote_reversed` (bool).

Class logic, confirmed exactly:
- **Default style + image** → `with-image` (+ `reversed` if set); **no glyph SVG**.
- **Default style, no image** → `accent-{accent}` (+ `alt-citation` if `uds_blockquote_alt`); glyph SVG **is** rendered.
- **Testimonial style** → always `uds-testimonial accent-{accent}` (+ `with-image` if an image is included); glyph SVG **always** rendered regardless of image.

The block's native `textColor` support appends `has-{color}-color`.

```html
<div id="{anchor}" class="uds-blockquote accent-black" style="...">
  <svg title="Open quote" ...>…</svg>
  <blockquote>
    Quote text here.
    <div class="citation"><div class="citation-content">
      <cite class="name">Jane Doe</cite>
      <cite class="description">Title, Department</cite>
    </div></div>
  </blockquote>
</div>
```
`supports`: `anchor: true`, spacing margin top/bottom, `color.text: true` only, `align: false`, `classname: false`.

#### 7.9.4 `acf/blockquote-carousel`

A Bootstrap carousel of the same blockquote formatting, driven by a repeater field `uds_blockquote_carousel_quotes` (sub-fields: `uds_blockquote_carousel_quote`, `_cite`, `_description`, `_image_src`) plus block-level `uds_blockquote_carousel_style`/`_accent`/`_alt`/`_image_include`/`_reversed` that apply **uniformly to every quote in the carousel** (one shared style setting, not per-row). Defaults: `style` falls back to `'default'` and `accent` falls back to `'black'` when unset. Same class-building logic as §7.9.3, computed once and reused per slide.

```html
<div class="uds-blockquote-carousel carousel slide" id="{anchor-or-generated}" style="..." data-bs-wrap="false">
  <div class="carousel-inner">
    <div class="carousel-item active"><div class="uds-blockquote accent-black">…</div></div>
    <div class="carousel-item"><div class="uds-blockquote accent-black">…</div></div>
  </div>
  <div class="uds-blockquote-carousel-nav">
    <div class="carousel-indicators">
      <button data-bs-target="#…" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Quote 1"></button>
      <button data-bs-target="#…" data-bs-slide-to="1" aria-label="Quote 2"></button>
    </div>
    <div class="uds-blockquote-carousel-buttons">
      <button class="carousel-control-prev" data-bs-slide="prev"><span class="btn btn-circle"><span class="carousel-control-prev-icon"></span></span><span class="visually-hidden">Previous quote</span></button>
      <button class="carousel-control-next" data-bs-slide="next"><span class="btn btn-circle"><span class="carousel-control-next-icon"></span></span><span class="visually-hidden">Next quote</span></button>
    </div>
  </div>
</div>
```
The prev/next/indicator nav only renders if there is more than one valid quote row. A row missing all four sub-fields is skipped; if the repeater yields zero valid rows, the block renders **nothing at all**. `supports` identical to `acf/blockquote`.

Confirmed exact nav styling from `blocks/_blockquote-carousel.scss`: indicator dots are `1.125rem` circles, gray `#d9d9d9` default / near-black `#191919` when active, laid out with `1rem` gaps (not Bootstrap's default indicator styling). Prev/next controls are `4rem` circular buttons (`4.25rem` on mobile, `<768px`) on a light-gray `#e8e8e8` disc; whichever control points toward the current end of the carousel (first slide → prev, last slide → next) is visually dimmed to `#f8f8f8` and has `pointer-events: none` — i.e. **the block disables and grays out the "prev" arrow on the first quote and the "next" arrow on the last quote**, it does not loop.

### 7.10 Structural and layout blocks

#### 7.10.1 `acf/background-section`

Full-width `<section>` wrapper for the "content on a background" family from §6.6. Fields: `uds_background_section_choice` (`none` / `pattern` / `upload`), `uds_background_section_pattern` (pattern slug, e.g. `network-white`), `uds_background_section_upload_url` (image URL), `uds_background_image_repeat`/`_position`/`_size` (CSS background props), `uds_background_section_color` (fallback color under an uploaded image). A fourth field, `uds_background_section_preset`, exists in the ACF group but its `get_field()` call is **commented out** in source — dead/unwired, not reflected in output.

Three mutually exclusive render branches by `$choice`:
```html
<!-- 'pattern' -->
<section id="{anchor}" class="uds-section alignfull bg network-white" style="...">…</section>

<!-- 'upload' -->
<section id="{anchor}" class="uds-section alignfull media-file" style="background:{color} url({upload}) {position}/{size} {repeat}; ...">…</section>

<!-- 'none' / default -->
<section id="{anchor}" class="uds-section alignfull has-background has-gray-1-background-color" style="...">…</section>
```
The third branch uses the block's native `backgroundColor` support — standard `has-background has-{slug}-background-color`, so the §7.1 gray-slug inversion applies directly here. ⚠️ **If `uds_background_section_choice` is empty/unset, the block outputs literally nothing** — no `<section>` at all, since the entire render is wrapped in `if ($choice) { … }`. Default InnerBlocks template is a single **empty** `core/group` (no prefilled heading/paragraph, unlike most other blocks). `supports`: `anchor: true`, spacing margin top/bottom, `align: ["full"]`, `color.background: true`.

⚠️ **`backgroundColor` is ignored in the `pattern` and `upload` branches.** Only the `none` branch emits `has-background has-{slug}-background-color`. Choosing a pattern means the pattern PNG *is* the background — do not also set a background color and expect it to show.

##### The 12 background patterns — full catalog

**Implementation chain** (three files, confirmed against theme source):

1. `background-section.php` emits the class pair `bg {pattern-slug}` on the section:
   ```html
   <section class="uds-section alignfull bg arrows-dark">…</section>
   ```
2. `src/unity-bootstrap-theme/_backgrounds.scss` maps that class to a variable:
   ```scss
   .bg.arrows-dark { background-image: $arrows-dark; }
   ```
3. `src/unity-bootstrap-theme/_variables_backgrounds.scss` points the variable at the PNG:
   ```scss
   $arrows-dark: url($image-assets-path + "/background-patterns/ArrowsDark.png");
   ```

The compiled result lives in `dist/css/theme.css`; edit the two SCSS files (not the compiled CSS) to change pattern behavior. Assets ship in the theme's `images/background-patterns/` directory.

**Slug convention:** the PascalCase filename becomes a kebab-case class — `ArrowsDark.png` → `arrows-dark`, `TopoPatternBlack.png` → `topo-pattern-black`. Note the suffix is **not consistent across the set**: Arrows, Plus and Semiconductor use `Dark`/`Light`, while MorseCode, Network and TopoPattern use `Black`/`White`. There is no `arrows-black` or `network-dark` — use the exact suffix from the table.

| Pattern slug | File | Tile size | Look |
|---|---|---|---|
| `arrows-dark` | `ArrowsDark.png` | 500×500 | Rows of chevron/arrow runs, base `#393838` |
| `arrows-light` | `ArrowsLight.png` | 500×500 | Same arrows, base `#FEFEFE` |
| `morse-code-black` | `MorseCodeBlack.png` | 328×80 | Dot/dash bands, base `#191919` |
| `morse-code-white` | `MorseCodeWhite.png` | 328×81 | Same bands, base `#FFFFFF` (only tile with partial alpha) |
| `network-black` | `NetworkBlack.png` | 400×400 | Node-and-edge constellation mesh, base `#191919` |
| `network-white` | `NetworkWhite.png` | 400×400 | Same mesh, base `#FFFFFF` — the slug in block.json's `example` |
| `plus-dark` | `PlusDark.png` | 500×500 | Large plus/cross grid, base `#353232` |
| `plus-light` | `PlusLight.png` | 500×500 | Same grid, base `#FEFEFE` |
| `semiconductor-dark` | `SemiconductorDark.png` | 500×500 | Circuit-trace lines and pads, base `#242424` |
| `semiconductor-light` | `SemiconductorLight.png` | 500×500 | Same traces, base `#FEFEFE` |
| `topo-pattern-black` | `TopoPatternBlack.png` | 450×450 | Topographic contour lines, base `#191919` |
| `topo-pattern-white` | `TopoPatternWhite.png` | 450×450 | Same contours, base `#FFFFFF` |

Slugs are directly confirmed for `arrows-dark` (theme source) and `network-white` (block.json `example.attributes`); the other ten follow the same documented filename→class convention but were derived from the asset filenames rather than read out of the SCSS map — verify against `_backgrounds.scss` if a pattern silently fails to render.

⚠️ **These tiles are opaque, not transparent overlays.** Every PNG is fully alpha-255 across its field (the sole exception is `MorseCodeWhite`, which has some partial alpha). The "Dark" / "Black" variants are near-black tiles with slightly lighter marks; the "Light" / "White" variants are near-white tiles with very light gray marks. Consequences:

- A dark pattern makes the section a **dark section** — its contents need white text (`textColor: white` on headings, `has-white-color` on paragraphs). Nothing in the block does this for you.
- A light pattern reads as an **approved off-white background** (§2) and takes normal Gray1/`#191919` body text.
- Because they are opaque and monochrome, patterns satisfy §2's "approved background colors" rule — they are textured white/near-black, never maroon or gold fills.
- All marks are low-contrast by design. They are texture, not imagery: they should never compete with foreground content.

##### Usage rule — never stack background sections back to back

Patterned and color-filled sections are the primary tool for breaking up long stretches of white page, and are used liberally for that. But **two sections with backgrounds should not sit directly adjacent** — there needs to be plain white space between them. Alternate: patterned/colored section → white section → patterned/colored section. A block that sits on the page's own white background (e.g. an `acf/content-image-overlap`, or plain heading/paragraph content outside any `background-section`) counts as the white breather between two backgrounded sections.

Stacking two backgrounded sections directly produces a 192px double-padding gap (96px from each section, §7.10.1's own padding) with two competing textures meeting at a hard seam — visually muddy and off-pattern for asu.edu.

#### 7.10.2 `acf/content-image-overlap` (folder `content-media-overlap`)

⚠️ Registers under a **different slug than its folder name**: folder is `content-media-overlap`, block name is `acf/content-image-overlap`. Implements the "Image overlap" component from §6.6. Fields: `uds_image_overlap_background` (image; falls back to a placeholder URL if empty), `uds_image_overlap_orientation` (`left` → adds `content-left` wrapper class + `ml-auto` on the image; anything else = default/right).

```html
<div id="{anchor}" class="uds-image-overlap content-left" style="...">
  <img class="img-fluid ml-auto" src="..." alt="...">
  <div class="content-wrapper">
    <!-- InnerBlocks -->
  </div>
</div>
```
Allowed inner blocks: `core/heading`, `core/paragraph`, `core/separator`, `core/list`, `core/buttons`. Default template (no `lock` anywhere — fully free-form): empty heading placeholder, paragraph "Sample content in a paragraph block.", and a `core/buttons` row with one maroon button (`className: "is-style-uds-md"`). `supports`: `anchor: true`, spacing margin top/bottom, **no color support**, `align: false`.

#### 7.10.2a 🎨 Figma appearance — the overlay family (§6.6 Featured content)

**Source: UDS Figma overlay sheet.** These are the big image + content compositions that carry most ASU feature sections. Four related shapes live here and it matters which are actually buildable:

| Shape | Block | Status |
|---|---|---|
| **Image overlap** | `acf/content-image-overlap` | 🟢 registered block (§7.10.2) |
| **Image and text block** | `core/media-text` | 🟢 core WP block, confirmed used in Pitchfork `patterns/` |
| **CTA on image background** | `core/cover` *(inferred)* | ⚪ shape confirmed, block not |
| **Inset card on image background** | `core/cover` *(inferred)* | ⚪ shape confirmed, block not |

The bottom two are rendered in this kit using genuine WordPress **core cover** classes rather than invented ones, but which block ASU actually ships them as was never in the reviewed source. Build them; do not assert the block name. Treat them as §7.16-adjacent: safe in a preview, and say "this is a cover-style composition, I could not confirm the block" rather than emitting confident `wp:` markup.

**🟡 The gold accent bar is confirmed design intent.** §7.14.2 previously carried it as ⚪ — a convention spotted on live pages with no matching markup in `content-image-overlap.php`. The Figma sheet settles the design question: it is deliberate and it appears in **three positions** — running down the image's **left** edge, its **right** edge, or across its **top** edge. The kit previously only did left/right; `.bar-top` is now available and reads as a chapter opener, which is the most distinct of the three. The *source* question is unchanged: the bar is still not in the reviewed PHP, so it comes from CSS or a pattern-level decorative element.

**🎨 The overlap heading is two-part, not one long headline.** Figma consistently shows a gold-highlighted short line with a plain heading beneath it:

```html
<h2><span class="highlight-gold">Lorem ipsum dolor</span></h2>
<h3>Lorem ipsum dolor sit amet</h3>
```

This is worth copying. A single long headline in that narrow white card runs to four or five lines and swamps the photo — which is exactly what §6.6's own caution warns about ("don't overload the white content area").

**🎨 Content inside the white card runs: heading pair → body → up to two buttons → an "Additional text link".** That trailing text link is the `card-link` pattern (bare maroon underlined `<a>`, no button chrome) doing the same job it does in cards — the secondary escape hatch under the primary action.

**🎨 These compositions sit on gray section backgrounds, not just white.** The sheet devotes an entire panel to the overlap family on a mid-gray field. Since the content card is opaque white, it lifts off gray far more strongly than off white — this is one of the few places a `gray-2` section genuinely earns its keep rather than just adding noise.

**🎨 The CTA band uses a directional scrim, not a flat tint.** The wide dark banner variant (heading left, gold button right, one line) gradients from heavy dark on the left to nearly clear on the right, so the type stays readable while the right of the photograph survives as an image. A flat overlay over the whole photo is the common mistake and it kills the picture.

**⚠️ Two gold buttons appear in the Figma image-and-text panels.** Do not read that as licence to break the one-gold-CTA rule (§6.2). Component sheets show components in isolation, with no page around them to establish a hierarchy. On a real page, the page-level rule wins.

**Composition value.** The overlay family is the strongest antidote to card-grid monotony in the whole system: a media-text block, an overlap with a top gold bar, and a full-bleed CTA band produce three completely different page rhythms, none of which is a row of cards.

#### 7.10.3 `acf/grid-links`

Fields: `uds_grid_links_source` (`arbitrary` / `tag` / `category`), `uds_grid_links_columns` (a column-count class, e.g. `three-columns`; the special value `mobile` suppresses adding any column class), `uds_grid_links_breakpoint` (fetched via `get_field()` but **never used anywhere in the render output** — a dead field), `uds_grid_links_created` (repeater, used when source = `arbitrary`: sub-fields `uds_grid_links_created_icon` — ⚠️ concatenated directly as a ready-made markup string, unlike the FA-object icon fields used elsewhere in this plugin that need `->element` — and `uds_grid_links_created_link`, a link field), `uds_grid_links_tag` / `uds_grid_links_category` (taxonomy term pickers, used when source is `tag`/`category`).

No `InnerBlocks` — entirely field/taxonomy driven:
```html
<div id="{anchor}" class="uds-grid-links three-columns text-white" style="...">
  <a href="{url}" target="{target}">{icon}{title}</a>
  <a href="{url}" target="{target}">{icon}{title}</a>
</div><!-- end .uds-grid-links -->
```
Text color comes from the block's native `textColor` support: `text-{color}` prepended (this is the "light and dark variant" referenced in §6.2's Grid link entry). If the `arbitrary` repeater is empty, renders `<a href="#">No links defined.</a>`; if a tag/category source resolves no terms, renders `<a href="#">No {source} selected.</a>`. `supports`: `anchor: true`, spacing margin+padding, `color.text: true` only, `align: false`.

#### 7.10.4 `acf/uds-sidebar` (folder `sidebar`)

⚠️ Registers as `acf/uds-sidebar`, not `acf/sidebar`. Implements the Sidebar menu component (§6.15) from an existing WP nav menu — not manually authored content, no `InnerBlocks`. Fields: `uds_sidebar_menu_name` (WP nav-menu selector), `uds_sidebar_no_title` (bool — suppresses the auto `<h3>{menu name}</h3>` heading when true), `uds_sidebar_mobile_prompt` (text label on the mobile toggle).

```html
<h3>Menu Name</h3>
<div class="sidebar-toggler" data-bs-toggle="collapse" data-bs-target="#sidebar-{slug}" aria-expanded="false" aria-controls="sidebar-{slug}">
  <p>In this section</p>
  <span class="fas fa-chevron-up"></span>
</div>
<nav id="sidebar-{slug}" class="sidebar collapse" aria-label="Secondary">
  <!-- wp_nav_menu() output via custom PFBlocks_Sidebar walker, depth 2 -->
</nav>
```
`supports`: spacing margin top/bottom only — **no anchor, no color, no classname, no align support at all**.

#### 7.10.5 `acf/subtitle`

Small kicker/eyebrow line used above a hero H1 (§7.7). Fields: `uds_subtitle_text`, `uds_subtitle_highlight_color` (a highlight span class, e.g. `highlight-gold`/`highlight-black`/`highlight-white`, or the literal string `none` to render plain unhighlighted text). `block.json` restricts `"parent": ["acf/hero"]` only (see the `acf/hero-video` cross-block inconsistency noted in §7.7.3). `supports.multiple: false` — only one subtitle per hero.

```html
<div role="doc-subtitle"><span class="highlight-gold">Your hero subtitle</span></div>
```
Renders nothing at all if `uds_subtitle_text` is empty.

#### 7.10.6 `acf/breadcrumb`

No manually-authored ACF fields — auto-generates from `Hybrid\Breadcrumbs\Trail::display()` (an external "Hybrid Breadcrumbs" library), only user input is the block's built-in Additional CSS Class. In editor preview mode, shows static placeholder markup (`Home` / `Current Page`); on the front end renders the real trail with `list_tag: ul`, `item_tag: li`, `list_class: breadcrumb`, `item_class: breadcrumb-item`, `title_class: d-none`, `container_class: breadcrumbs {className}`. `supports`: `anchor: true`, `multiple: false` (one per page), `classname: true`, `align: ["full"]`, no color support.

A **dark-mode block style is confirmed** from `blocks/_breadcrumb.scss`/`block-editor.scss`: block style `is-style-crumb-dark` (added as `className`) renders breadcrumb text white and links gold — `.breadcrumbs.is-style-crumb-dark .breadcrumb-item { color: #fff; a { color: #ffc627; } }` — for use when a breadcrumb sits over a dark/black section background. No corresponding `is-style-crumb-default`/light style is defined in SCSS (light mode is just the unstyled default).

### 7.11 Dividers, dropdowns, icons — small but exact details

- **Body copy divider** (§6.17): `<hr class="wp-block-separator has-alpha-channel-opacity is-style-copy-divider"/>`.
- **Section divider** (§6.17): plain `wp:separator` (no `is-style-copy-divider` class) — full-width `<hr>`.
- **Icons in ACF blocks**: three different plugin blocks (`acf/banner`, `acf/card-foldable`, `acf/card-v2-icon`) use ACF's Font Awesome icon-picker field type, but its return shape is used inconsistently across them — `banner.php` and `card-foldable.php` both call `$icon->element` (a ready-made `<i>`/`<span>` markup string), while `card-v2-icon.php` instead uses `$icon->class` and builds its own `<span class="{icon->class} card-icon-top">` wrapper. `grid-links.php`'s repeater icon sub-field is used as a raw pre-built string with neither `->element` nor `->class`. Reproduce whichever pattern matches the specific block being generated — they are not interchangeable.
- **`icons.php`** (in `acf-block-templates/`) is a small standalone helper defining two raw SVG strings as `$block_icon->users_rectangle` and `$block_icon->image_user` for use as block-registration icons (the little icon shown next to a block's name in the inserter) — not a content-facing icon system, not related to the FA icon-picker fields above.
- **Icons (design-system icon blocks)**: rendered via the core `wp:outermost/icon-block` (Icon Block plugin), e.g. `iconName="asu-icons-3_dodecahedron"`, sized with an inline `width` (e.g. `2rem`). ASU's custom icon set is namespaced `asu-icons-*` in this block — separate from the Font Awesome classes used for utility icons (§5).
- **Dropdown** (`_dropdown.scss`): border radius 0, border color `gray-2` (code slug) 1px, link color `gray-7` (code slug = near-black), hover color maroon, item padding-y = `uds-size-spacing-1` (8px).
- **Breadcrumb** (`_breadcrumb.scss`): font-size 0.875rem (14px, matches Body Small in §3), divider character `"/"`, divider color gray-4 (code slug), active/current-page color gray-7 (code slug).
- **Pagination** (`_pager.scss`): active page = white text on maroon background, no border, focus outline removed (replaced by the global blue focus ring).
- **Tooltip** (`_tooltips.scss`): background `rgba(25, 25, 25, 0.85)` — Gray1/Black at 85% opacity.
- **Modal overlay** (`_modals.scss`): background `rgba(25, 25, 25, .75)` — Gray1/Black at 75% opacity.
- **Icon sizes** (`_icons.scss`): `$icon-small` / `$icon-base` / `$icon-large` / `$icon-xl` / `$icon-xxl` — named scale, values inherited from the base UDS package (not overridden locally).

### 7.12 Remaining gaps — what's still not source-confirmed

Full `render.php` + `block.json` source has now been reviewed for every block in the **Pitchfork Blocks** plugin: `accordion`, `alert`, `background-section`, `banner`, `blockquote`, `blockquote-carousel`, `breadcrumb`, `card` (deprecated v1), `card-foldable`, `card-imagebased`, `card-v2` and its 8 sub-blocks, `content-media-overlap`, `grid-links`, `hero`, `hero-post`, `hero-video`, `sidebar`, `subtitle` — and the plugin's own block-level SCSS (`blocks/*.scss`, `editor/*.scss`) plus the canonical `_custom-asu-variables.scss` token file has been folded in throughout §§7.6–7.13 (exact hex values, spacing, breakpoints, and per-block layout/responsive behavior). A handful of things genuinely remain outside that source and are still inference-level, not confirmed:

- **Person profile** (`acf/profiles` / `acf/profile-data` / `acf/profile-manual`, §6.10) — not part of the reviewed plugin source; the earlier description (columns, `is-style-large`/`small`/`micro`, `fill-white`/`fill` background variants) is still `patterns/`-inferred only.
- **Enumerated select-field option lists** — many fields above are confirmed by *name* and by how their returned value gets concatenated into a class name (`uds_hero_size`, `card_imagebase_orientation`, `uds_banner_post_btn_color`, `uds_grid_links_columns`, etc.), but the actual list of valid choices for each select field lives in the ACF field-group definitions (JSON/PHP registered elsewhere in the plugin), which were not part of this source dump.
- **Registered block styles** (the JS `registerBlockStyle()` calls that define the exact list of selectable style labels, e.g. every `is-style-card-*`/`is-style-alert-*`/`is-style-uds-*` slug) live in the plugin's JS/build files, not in the PHP reviewed here — the style *slugs* used above are all confirmed as literal strings from `render.php` switch/strip logic, but whether any *additional* undocumented style slugs exist cannot be ruled out.
- The real `@asu/component-header` and `@asu/component-footer` npm packages (global header/footer, §6.5) are loaded as external dependencies, not vendored in the theme or plugin source reviewed. §7.14.2 now has their confirmed visual tiering from live screenshots, even without source.
- The base hero grid template (which CSS Grid rows/columns the H1, content group, and button row actually occupy on the front end) lives in the vendored `@asu/unity-bootstrap-theme` npm package, not in anything reviewed — only one editor-only rule (`.wp-block-acf-subtitle { grid-row: 2 }`) hints at it. §7.14.1 documents the confirmed *visual result* (subtitle below headline) from live screenshots even though the underlying grid CSS itself is still unseen.
- A handful of real, repeated visual conventions have no matching block in the reviewed plugin source at all: the gold accent bar on `content-image-overlap` images, the short gold underline rule under headings inside boxed content, and the thumbnail photo carousel. See §7.14.2 — these are documented as observed conventions to reproduce, not as confirmed block code.

### 7.13 Canonical SCSS design tokens (ground truth variable file)

**CONFIRMED from `unity-bootstrap-theme/_custom-asu-variables.scss`** — the single SCSS partial that defines every `$uds-*` variable consumed by the block styles above and by the base `@asu/unity-bootstrap-theme` package. Where a value here differs slightly from the zeroheight design guide (§§1–4), the design guide is still the *design intent* to follow; this table is what's actually compiled into `theme.css` and is useful for exact reproduction (pixel-for-pixel spacing, precise hex codes) or for writing new SCSS that stays token-consistent with the rest of the theme.

**Breakpoints & grid**

| Token | Value |
|---|---|
| `$uds-breakpoint-xs` | 0 |
| `$uds-breakpoint-sm` | 576px |
| `$uds-breakpoint-md` | 768px |
| `$uds-breakpoint-lg` | 992px |
| `$uds-breakpoint-xl` | 1260px |
| `$uds-breakpoint-xxxl` | 1920px (§4 max-width ceiling) |
| `$uds-grid-column-count` | 12 |
| `$uds-grid-gutter-width` | 24px |

**Spacing scale** (all `$uds-size-spacing-N`, base unit 0.5rem/8px per step, confirming §4):

| Token | rem | px |
|---|---|---|
| `-0` | 0 | 0 |
| `-half` | 0.25rem | 4px |
| `-1` | 0.5rem | 8px |
| `-2` | 1rem | 16px |
| `-3` | 1.5rem | 24px |
| `-4` | 2rem | 32px |
| `-5` | 2.5rem | 40px |
| `-6` | 3rem | 48px |
| `-7` | 3.5rem | 56px |
| `-8` | 4rem | 64px |
| `-9` | 4.5rem | 72px |
| `-10` | 5rem | 80px |
| `-12` | 6rem | 96px |
| `-14` | 7rem | 112px |
| `-16` | 8rem | 128px |
| `-32` | 16rem | 256px |
| `-64` | 32rem | 512px |

**Colors** — this is the base-truth palette; cross-reference §7.1 for the gray-number inversion before using any `gray-N` slug in block markup:

| Token | Hex | Notes |
|---|---|---|
| `$uds-color-base-gold` | `#ffc627` | ASU Gold |
| `$uds-color-base-maroon` | `#8c1d40` | ASU Maroon |
| `$uds-color-base-white` | `#ffffff` | |
| `$uds-color-base-green` | `#78be20` | ASU Green |
| `$uds-color-base-orange` | `#ff7f32` | ASU Orange |
| `$uds-color-base-blue` | `#00a3e0` | ASU Blue |
| `$uds-color-base-bluefocus` | `#00baff` | Accessibility focus-ring color, used on all interactive elements |
| `$uds-color-base-darkgold` | `#7f6227` | **Visited** state of a gold-context link |
| `$uds-color-base-darkmaroon` | `#440e22` | **Visited** state of a maroon-context link |
| `$uds-color-base-gray-1` | `#fafafa` | = design-guide Gray7 |
| `$uds-color-base-gray-2` | `#e8e8e8` | = design-guide Gray6 |
| `$uds-color-base-gray-3` | `#d0d0d0` | = design-guide Gray5 |
| `$uds-color-base-gray-4` | `#bfbfbf` | = design-guide Gray4 (only one that lines up) |
| `$uds-color-base-gray-5` | `#747474` | = design-guide Gray3 |
| `$uds-color-base-gray-6` | `#484848` | = design-guide Gray2 |
| `$uds-color-base-gray-7` | `#191919` | = design-guide Gray1; "base font color and default black level" |
| `$uds-color-alerts-error` | `#cc2f2f` | |
| `$uds-color-alerts-warning` | `#ff7f32` | = base-orange |
| `$uds-color-alerts-info` | `#00a3e0` | = base-blue |
| `$uds-color-alerts-success` | `#78be20` | = base-green |
| `$uds-color-background-success` | `#e9f5db` | Alert success background, §7.9.1 |
| `$uds-color-background-error` | `#f7dddd` | Alert error background |
| `$uds-color-background-warning` | `#ffeade` | Alert warning background |
| `$uds-color-background-info` | `#d6f0fa` | Alert info background |
| `$uds-color-font-dark-error` | `#ff7b7d` | Error text *on a dark background* |
| `$uds-color-font-dark-success` | `#446d12` | Success text on a dark background |
| `$uds-color-font-light-link` | `#ffc627` | = gold; link color on dark backgrounds |
| `$uds-color-font-light-visited` | `#7f6227` | = darkgold; visited-link color on dark backgrounds |
| `$uds-color-font-light-info` | `#00b0f3` | Info text on dark backgrounds (distinct from `alerts-info`) |
| `$uds-color-divider-darker` / `-lighter` | `#1e1e1e` / `#393939` | Footer accent dividers |

**Typography & icon scale**

| Token | Value |
|---|---|
| `$uds-font-family-base` | `Arial, Helvetica, 'Nimbus Sans L', 'Liberation Sans', FreeSans, sans-serif` |
| `$uds-font-weight-normal` / `-bold` | 400 / 700 (only two in real use, per §3; `-lighter`(100)/`-light`(300)/`-bolder`(900) exist as tokens but are not used for ASU brand type) |
| `$uds-size-font-tiny` → `-xxxl` | 0.75rem / 0.875rem (small) / 1rem (medium) / 1.25rem (large) / 1.5rem (xl) / 2rem (xxl) / 3rem (xxxl) |
| `$uds-size-icon-small` → `-xxl` | 1.5rem / 2rem (base) / 2.5rem (large) / 3rem (xl) / 5rem (xxl) |

**Component tokens** — notably, `$uds-component-border-radius: 400rem` is the token behind ASU's fully-pill-shaped buttons (`.btn`, `.badge`, tag chips) confirmed elsewhere (§7.6.3's `card-v2-tag` badge, button classes in §7.5) — any brand-accurate button/badge/pill element should use a very large radius, not a small rounded-corner radius. Button padding: `$uds-component-button-padding-y: 1rem` / `-x: 2rem` (default size), with explicit `-small` (0.25rem / 0.75rem) and `-medium` (0.5rem / 1rem) pairs backing the Default/Small/Extra-small button sizes from §6.2.

### 7.14 Field-verified patterns from live asu.edu production pages

Everything above §7.14 comes from reading the plugin's own PHP/SCSS. This section is different in kind: it's derived from **screenshots of a real, live UDS site** (ASU's Sun Devil Club — homepage, About, Your Experience, and Membership Groups pages), checked against §§7.6–7.13. Screenshots can't show field names or PHP logic, so nothing here is "confirmed from source" the way §§7.1–7.13 are — but where a screenshot pattern is consistent across multiple independent pages of a real site, it should be treated as the actual brand standard to reproduce, even where it refines or corrects an inference made earlier in this document. Each item below is tagged:

- 🟢 **Confirmed + matches source** — what's on screen is exactly what §§7.1–7.13 predicted.
- 🟡 **Corrects/refines source-based text** — the live site does something the reviewed PHP/SCSS didn't fully pin down, or that earlier sections guessed wrong.
- ⚪ **New, not in reviewed source at all** — a real pattern with no corresponding block.json/render.php in the material reviewed; treat as observed convention, not confirmed code.

#### 7.14.1 🟡 Hero layout — the part to get exactly right

Four distinct live heroes were reviewed (three static/interior-page heroes: "Join the Junior Sun Devil Club," "Our Mission," "Wings of Gold"; one homepage video hero: "Investing in Sun Devil student-athletes"). All four share the same layout convention, and it differs from a literal reading of §7.7's `InnerBlocks` order in two important ways:

1. **The subtitle renders visually *below* the headline, not above it — even though it's authored *before* the H1 in the block editor.** This isn't a contradiction of §7.7 so much as an incomplete picture: `editor/_hero.scss` (already in §7.11) places `.wp-block-acf-subtitle` at `grid-row: 2` inside the hero's grid layout — i.e. the hero is CSS Grid, not simple document flow, and the grid explicitly seats the subtitle in a *later* visual row regardless of its earlier position in the `InnerBlocks` markup. This is now **directly confirmed**, not just inferred from one editor rule: `hero-video.php`'s own file header literally describes itself as "UDS Hero v2 (CSS Grid-based)" (§7.7.3) — the plugin's own authors documented the grid-based rebuild in the source comment. The *exact* grid-template-rows definition (which piece occupies which row/column) still lives in the vendored `@asu/unity-bootstrap-theme` npm package, not in anything reviewed — so the precise CSS is unseen, but the mechanism and the visual result (subtitle after headline) are both confirmed now, from source wording and from four independent live pages agreeing with each other.
2. **The highlight span goes on the headline, not the subtitle.** All three static heroes show the highlight box wrapping the H1 text itself (`<h1>...<span class="highlight-gold">Join the Junior Sun Devil...</span>...</h1>` — style — the highlight box visibly wraps per line as the heading wraps, matching the generic inline-highlight mechanism from §7.4, not `acf/subtitle`'s own `uds_subtitle_highlight_color` field). The subtitle line underneath is small, plain white, **un-highlighted**, functioning as a short caption ("Sun Devils in training," "Sun Devil Club," "2026"). The subtitle's dedicated highlight field still exists and is presumably used elsewhere, but it is *not* the pattern to default to — default to highlighting (part of) the headline instead.

**Practical hero-building rules to follow from now on** (supersedes the plain reading of §7.7.1's default template for anything meant to look like a real ASU page):

- Content block sits **bottom-left anchored** within the hero image, not vertically or horizontally centered — a left-aligned column roughly 40–50% of the hero's width, sitting in the lower third of the image.
- Order, top to bottom, within that block: **headline (H1, with a highlight span around all or part of the text) → short plain-white subtitle/caption line → optional button row.**
- Interior/content-page heroes are **short, banner-style** (roughly 300–400px tall) with **no buttons** — just headline + caption. Reserve buttons for a homepage-style hero.
- The homepage hero example carries **two buttons** (maroon "Give now" + gold "Login to ASU Link") confirming the standard maroon-primary/gold-secondary hierarchy from §6.2, positioned in the same bottom-left block, below the caption line.
- Don't apply a strong flat dark tint across the whole photo the way a naive `.hero-overlay: rgba(0,0,0,0.4)` (as used in this repo's own test preview, see below) would — live heroes keep the photo bright/clear across most of the frame; only enough darkening exists near the text corner for legibility. Prefer a **directional gradient** (dark toward the bottom-left where text sits, transparent elsewhere) over a uniform tint if an overlay is needed at all.
- 🟢 Confirms §7.7.3 exactly: the homepage hero shows a circular pause control, bottom-right, at reduced opacity — this is `acf/hero-video`'s documented `.hero-video-controls`/`btn-circle-large` behavior, matching source precisely.

#### 7.14.2 🟢 / ⚪ Other components spotted in the wild

- 🟢 **Blockquote/testimonial glyph** — both an on-image quote ("Congratulations...") and a plain-background testimonial show the gold opening-quote mark and a thin gold rule near the attribution line, matching §7.9.3's documented SVG glyph and the "Testimonials" (§6.16) gold-rule-under-attribution description exactly.
- 🟢 **Background-section with a pattern texture on a dark section — now asset-confirmed.** The "Membership benefits" section is a full-bleed near-black section (`acf/background-section`, `uds_background_section_choice: pattern`, §7.10.1) with a subtle topographic contour texture. Having since reviewed the actual `background-patterns/` asset set, that texture is **`topo-pattern-black` (`TopoPatternBlack.png`)** — an exact visual match. My earlier guess that it was "a `network`-family pattern in a darker variant" was wrong; `network-black` is a node-and-edge mesh, a visibly different pattern. The light contour texture behind the Wings of Gold testimonial section is correspondingly `topo-pattern-white`. Full catalog in §7.10.1.
- 🟡 **Image overlap — accent bar CONFIRMED by the Figma overlay sheet (was ⚪).** The UDS Figma overlay sheet shows the gold bar as a designed, intentional part of the component, in three positions (image's left edge, right edge, and top edge). It is no longer an "observed convention" — it is design intent, and §7.10.2a documents it. The note below is kept because the *source* question is unchanged: the bar still does not appear in the reviewed `content-image-overlap.php`. Original note: ⚪ **accent bar detail not in the reviewed render.php.** Two live examples ("Upcoming events" on the Membership Groups page, "How to get involved" on the About page) confirm `acf/content-image-overlap`'s general shape (photo + overlapping white content card, §7.10.2) but add a visual detail the PHP source doesn't mention: a **thin gold vertical accent bar running along the outer edge of the photo**, on the same side the image sits. `content-image-overlap.php` (as reviewed) only handles the image, its `ml-auto`/`content-left` orientation class, and the overlapping `.content-wrapper` — no gold bar markup appears in that render function, so this accent is either added via the block's own CSS (not in the `blocks/*.scss` partials reviewed) or via a separate decorative element in the page pattern. Treat the gold accent bar as a real, expected part of this component visually, even though its exact class name isn't confirmed.
- ⚪ **Short gold underline rule beneath sub-headings inside content boxes.** A short (roughly 32–40px wide), thick gold horizontal rule sits directly under headings inside bordered white content boxes/cards — seen under "Junior benefits"/"Free tickets," "Heather Farr award"/"Coach of the year award," and the "By becoming a member..." card heading on the About page. This is visually distinct from both the highlight-span treatment (§3/§7.4) and the full-width Section/Body-copy dividers (§6.17) — it reads as a small heading-accent rule specific to boxed content, not attached to any block reviewed in §§7.6–7.11. No confirmed class name; note it as a real, repeated ASU convention to reproduce when building a heading inside a bordered content box, not as a block to generate from source.
- ⚪ **Section headings on dark backgrounds are often plain, not highlighted.** "Membership benefits" (white H2 on the near-black background-section) has no highlight span at all — a reminder that the highlight treatment is a tool for emphasis, not a mandatory treatment on every heading; per §3's approved combos, plain Gray7-on-Gray1 (white-on-black) is itself an approved, common Do.
- ⚪ **Video embeds** use a red circular YouTube play button centered on the thumbnail and a "Watch on YouTube" pill badge in the bottom-right corner, with a small caption line and share/loop icons below the embed. No `acf/video`-style block was present in the reviewed plugin source — this is very likely just a styled `core/embed` (YouTube) rather than a custom ACF block; treat the play-button/badge styling as CSS applied globally to embeds, not a block-level field.
- ⚪ **Global header** (not in reviewed source, §6.5/§7.9 note): two-tier structure confirmed — a slim gray utility bar above (ASU Home / My ASU / Colleges and Schools / Sign In / Search) and a white primary bar below (unit logo + site name, primary nav with a gold underline on the active item). The Figma header/footer sheet independently confirms this same structure with exact copy — see §7.17, now implemented as a real component rather than a per-page stand-in.
- ⚪ **Global footer** (not in reviewed source, §6.5): three-tier structure confirmed — a black main footer (unit branding, social icons, a gold "Support ASU" pill button, and up to four link columns), a gold utility bar (Maps and Locations / Jobs / Directory / Contact ASU / My ASU, plus a "Repeatedly ranked #1" ranking badge), and a light-gray legal bar (Copyright and Trademark, Accessibility, Terms of Use, Emergency, Privacy, Manage my privacy settings) — matches the §6.5 description almost exactly, now with confirmed visual order/tiering. See §7.17 for the implemented version, including the collapsed/minimal compositions the Figma sheet adds.
- ⚪ **Thumbnail image carousel** (small photo strip with numbered/arrow nav, seen under the Wings of Gold "Our awards" photo) doesn't match the documented `acf/blockquote-carousel` (§7.9.4, which carousels *quotes*, not arbitrary photo thumbnails) — likely a separate gallery/slider component with no corresponding source in the plugin files reviewed. Flag as unconfirmed if asked to reproduce.

---

### 7.16 🎨 DESIGN-ONLY COMPONENTS — in Figma, not in the block set

Working through the UDS Figma sheets surfaced a structural fact that matters more than any single component:

> **The UDS Figma library is broader than the Pitchfork Blocks plugin.**
> Some components are fully designed and brand-approved, but have **no registered WordPress block** in the reviewed source. They are real, and they are not buildable in the block editor.

That splits every component into two classes, and the distinction changes what you are allowed to emit:

| | **Block-backed** | **Design-only** |
|---|---|---|
| Evidence | registered block in the plugin source | Figma / zeroheight only |
| Preview HTML | ✅ render it | ✅ render it |
| `wp:acf/…` markup | ✅ emit it | ❌ **never emit it** |
| What to tell the user | normal | say plainly that it has no block yet |

**The rule:** you may render a design-only component in a *preview mockup*, because it is genuinely part of ASU's design system and refusing would make mockups worse. You may **not** invent a `wp:acf/whatever` block comment for it — that markup would look authoritative and paste into WordPress as nothing. If a page needs one of these to ship, the block name has to be found first.

Three components are currently in this bucket.

#### 7.16.1 Card carousel (§6.4)

A horizontal track of cards with paging. **The only carousel block in the reviewed source is `acf/blockquote-carousel` (§7.9.4), which carousels quotes, not cards.**

The good news: the nav is **not** guesswork. The Figma card carousel uses the identical nav pattern to the blockquote carousel, whose SCSS *is* source-confirmed — so these values are 🟢, reused:

- Indicator dots: `1.125rem` circles, `#d9d9d9` idle / `#191919` active, `1rem` gaps.
- Prev/next: `4rem` circular buttons (`4.25rem` below 768px) on an `#e8e8e8` disc.
- **It does not loop.** Whichever control points past the end dims to `#f8f8f8` and gets `pointer-events: none`.

🎨 From the card sheet:
- **ASU moves the controls out of Bootstrap's default position.** Stock Bootstrap overlays prev/next on the left and right edges of the slide. ASU stacks **indicators, then controls, both centred, underneath the track**. Do not assume stock Bootstrap here.
- **Cards per view is a real variable** — the sheet shows the same carousel at 2, 4 and 5 cards across, driven by card width, not by a separate component.
- **The trailing card is deliberately clipped and faded.** That peek is the affordance that says "there is more"; the dots alone read as decoration. Reproduce the fade.

⚠️ §6.4's own caution still applies and is worth repeating to anyone who asks for a carousel: *users may not see every card, so do not put critical content in one.* A static grid or an accordion is usually the better answer. Reach for a carousel when the content is genuinely browsable and genuinely optional.

#### 7.16.2 Percentage circle (donut)

A ring showing a percentage, with the figure and a short supporting line in the middle. **No block, and no entry in the §6 component list either** — it appears only in Figma.

This is worth flagging loudly because of an earlier conclusion in this guide: §7.6.5 and the deal-flow work both state that UDS has no stat or KPI component. **That was right about the block set and wrong about the design system.** A percentage donut exists; it just cannot be built as a block. Correct framing going forward: *there is a designed way to show a percentage, and no way to ship it through the block editor yet.*

Two color treatments, each shown at 100 / 75 / 50 / 25:

| | Track | Fill | Centre figure | Supporting line |
|---|---|---|---|---|
| **On light** | very light gray | Gold **or** Maroon | dark, large, bold | dark, small, bold |
| **On dark** | **white** | Gold **or** Maroon | dark on a **white highlight box** | white |

Geometry: arc starts at 12 o'clock and runs clockwise; ring thickness is roughly an eighth of the diameter.

⚠️ In the dark Figma frame the supporting line renders dark-on-black, which fails contrast — almost certainly an artefact of the component being dropped onto a black frame without its dark-mode text override, rather than an intended style. Render it white on dark and say you did.

**Emit it as a self-contained inline `<svg>`.** No CSS classes, no invented markup, nothing to paste wrongly into WordPress — see `snippets/components.md` for the template.

#### 7.16.3 Ranking cards (§6.3)

Covered in §7.6.5 E. Gold top rule, photo, H4 title beneath the photo, citation body, "Read more →", collapsed/expanded states. Still **not implemented in this kit** — unlike the carousel and the donut, its layout has enough moving parts that approximating it would mean inventing structure rather than drawing a shape. Find the block name first.

### 7.17 🎨 Global header & footer (§6.5) — implemented from the Figma header/footer sheet

**Same "design-only" caveat as §7.16, for a different reason.** The header and footer aren't missing from the Figma library — they're missing from *this kit's build target*. They ship as separate compiled npm packages, `@asu/component-header` and `@asu/component-footer`, injected outside the WordPress content area entirely; there's no ACF block for either, and their real compiled DOM/class names were never in the material reviewed. §7.14.2 already noted their two-tier/three-tier structure from **live-site screenshots** (⚪). The Figma header/footer sheet now gives the same structure with **exact copy and spacing** (🎨) — two independent sources agreeing is about as much confidence as this kit gets without the literal package source, so this is implemented as a real, usable component (`.uds-global-header` / `.uds-global-footer` in the stylesheet), not left as a per-page stand-in. **Say plainly it's a visual approximation if anyone needs the literal package output** — don't imply these classes are what `@asu/component-header` actually emits.

**Header — two tiers:**
1. A slim dark utility bar: ASU Home / My ASU / Colleges and Schools / Sign In, right-aligned, plus a search icon.
2. A white main bar: the ASU wordmark (kept typographic in this kit, not a logo image — see the CSS comment) separated by a vertical rule from the unit name, then primary nav right of that. The active nav item gets a gold underline; items with children get a chevron. A single gold CTA button (e.g. "Enroll") may sit at the far right — optional, not every unit has one.

The nav collapses below 900px into a hamburger/off-canvas panel: unit search field, primary links (one may itself expand — a nested accordion inside the panel), then the utility links repeated as a 2×2 grid at the bottom. This kit renders that panel as a **static reference block**, not a working JS toggle — mockups are static HTML.

**Footer — three real compositions, same building blocks.** Don't default to "full" out of habit; pick by how much the unit actually needs to link to:

| Composition | Contains |
|---|---|
| **Full** | Brand row (unit name + social icons) → columns (brand column with "Support ASU" CTA, plus however many link columns the unit needs) → gold utility ribbon → light legal bar |
| **Collapsed** | Brand row → **only** the brand column (no other columns) → ribbon → legal bar — for a unit with nothing to put in extra columns |
| **Minimal** | No brand row at all — just the ribbon → legal bar — for a sub-page section that only needs the legal/utility links |

The gold ribbon carries the utility links (Maps and Locations / Jobs / Directory / Contact ASU / My ASU) plus a "Repeatedly ranked #1 / 30+ lists in the last 3 years" callout, right-aligned. The legal bar is light gray, small text: Copyright and Trademark, Accessibility, Terms of Use, Emergency, Privacy, Manage My Privacy Settings — this exact set, this exact order, per both the live-site screenshots and the Figma sheet. On mobile the footer columns collapse into an accordion (chevron per column header); this kit again renders that collapsed/closed by default as a static reference.

Full markup for both: `snippets/components.md` §Header/Footer. Rendered examples of every composition: `examples/card-gallery.html` §O–P.

⚠️ **The footer's gold "Support ASU" button doesn't count against "gold once per page."** That rule (§8, §3) is about the single highest-priority *editorial* CTA in page content; the footer button is fixed chrome present on every page regardless of content, same exemption logic as image-based cards (§7.6.5 D). Don't remove a legitimate content CTA's gold to "make room" for the footer, and don't read the footer button as using up the page's one.

### 7.18 🎨 Testimonial / quote — Figma composition variants (extends §7.9.3/§7.9.4)

The block fields and class logic in §7.9.3 (`acf/blockquote`) and §7.9.4 (`acf/blockquote-carousel`) are 🟢 source-confirmed — style/image/accent combination, `with-image`, `reversed`, `alt-citation`. None of those confirmed variants had ever been rendered in this kit before this pass. The testimonial Figma sheet doesn't add new fields; it shows what those same confirmed classes actually look like composed on a page:

- **Stack, don't repeat one accent.** Three or more quotes in a column read as one long gray block if every glyph is the same color — the sheet shows gold/maroon/black alternating across a stacked list. Treat accent choice as per-quote, not per-page.
- **`alt-citation` is a name chip, not a plain byline.** `uds_blockquote_alt` is confirmed to add the class; the sheet is what confirms it renders the name in a solid color chip (gold on a gold-accent quote, dark otherwise) sitting *above* the quote text, next to a circular photo — not the plain citation line the base component uses. Built with a flex `order: -1` on the citation, same reordering technique as the hero's subtitle (§7.14.1) — the real DOM stays citation-last; only the visual position moves.
- **`with-image` collapses to stacked in a narrow column.** Three quotes across in `wp-block-columns` are too narrow for the photo-beside-text layout; the sheet shows the same block with the photo dropped above the text instead (`.stacked` in this kit). Same fields, no new component.
- **"Quote on image background" (§6.16) reuses the overlay family's own `core/cover` scrim (§7.10.2a/§19), not a new block.** Two widths in the sheet are the same composition — a full-measure quote straight in the scrim, or a narrower one boxed into a white inset card (§19's `uds-inset-card`, reused). Block name still unconfirmed, same caveat as the rest of the overlay family.

Full markup: `snippets/components.md` §6. Every variant rendered: `examples/card-gallery.html` §Q.

---

## 8. Quick-reference summary (for a Claude skill / style checker)

- **Typeface:** Arial (regular 400 / bold 700 only — no light, no italic). Underline = hyperlinks only.
- **Primary colors:** Maroon `#8C1D40`, Gold `#FFC627`, Rich Black `#000000`, White `#FFFFFF`. Maroon/Gold never as page backgrounds; Gold buttons reserved for the single most important CTA on a page.
- **Grayscale:** Gray1 `#191919` → Gray7 `#FAFAFA` (see full table in §1) — **but note the code uses inverted `gray-1`…`gray-7` slugs, see §7.1 before generating code.**
- **Base spacing unit:** 8px; standard scale 96/72/56/48/40/32/24/16/8px; sections need 96px clear space (48px mobile). In code: `uds-size-12` = 96px section spacing.
- **Grid:** 12-col / 1200px max desktop, 4-col mobile.
- **Headlines:** sentence case only (not title case), except the first word after a colon. Highlight spans: `highlight-gold` / `highlight-black` / `highlight-white`, headings 1–4 only.
- **Icons:** Font Awesome Free/Pro/Brands for utility icons (§5); ASU's custom icon set ships as `wp:outermost/icon-block` with `iconName="asu-icons-*"` in the block editor.
- **Buttons:** default = maroon (`btn-maroon` / `has-asu-maroon-background-color`), gold reserved for the single primary CTA (`btn-gold` / `has-asu-gold-background-color`), white text on maroon, black text on gold. All buttons/badges/tag-chips use a fully-pill border radius (`$uds-component-border-radius: 400rem`, §7.13) — never a small rounded-corner radius.
- **Cards — four brand-standard types, no others:** Default / Story / Event / Degree. Current system: `acf/card-v2` container + `card-{orientation}` class, with the type chosen via block style (`is-style-card-story`/`-event`/`-degree`; the `is-style-` prefix is stripped in render, so the final class is plain `card-story`/`card-event`/`card-degree` — identical to the classic `.card.card-story`/`.card-event`/`.card-degree` selectors, §7.6.3). Title + body copy are structurally locked (cannot be removed); the image/icon slot and the button row are individually removable. Sub-blocks: `card-v2-image`/`card-v2-icon` (top slot), `card-v2-header`, `card-v2-links`→`card-v2-link`, `card-v2-event` (Event only), `card-v2-tags`→`card-v2-tag` (Story only). `acf/card-imagebased` is a separate, standalone full-bleed-image CTA card, not part of this family. Legacy `card`/`uds-card` (v1) is **deprecated and not insertable** — recognize, don't generate.
- **Heroes — one fixed structure, content toggles:** `acf/hero` (base), `acf/hero-post` (auto-pulled from a post, no InnerBlocks), `acf/hero-video` (adds MP4 background). Base hero's default content — subtitle, H1, paragraph group, button row — has its **order permanently locked in the editor but each piece is individually removable** (so "has buttons or not" is a real, source-confirmed toggle: delete the `core/buttons` block). Only one hero per page (`multiple: false`). Full detail: §7.7. **But when actually building one, follow §7.14.1's live-site pattern, not a literal top-to-bottom reading of the editor order:** headline highlighted (not the subtitle), subtitle rendered as a small plain caption *below* the headline, both bottom-left anchored over the image, buttons (if any) below that — the CSS grid used on the front end visually reorders subtitle-after-headline regardless of `InnerBlocks` authoring order.
- **Accordion/FAQ:** `acf/accordion` (Bootstrap `.accordion` wrapper, `uds_accordion_behavior` toggles synced vs. independent expand) containing only `acf/card-foldable` items (`uds_foldcard_title` = question text; `uds_foldcard_collapsed` = starts-open toggle). Parent→child data flows via `providesContext`/`usesContext`, not props. Full detail: §7.8.
- **Every page requires** the Global header and Global footer, unconstrained by the 1920px max-width rule that applies to backgrounds/images. Implemented as `.uds-global-header`/`.uds-global-footer` (🎨 Figma, §7.17) — use them on every mockup page, they are not optional page furniture.
- **Component rule:** only use components from the official UDS library / Pitchfork block set — no ad hoc/custom components on asu.edu properties.

---

*This guide was compiled by (1) scanning all 5 Design pages and all 44 Components pages of the ASU Unity Design System UI Kit on zeroheight (50 pages total), (2) inspecting the actual "Pitchfork" WordPress theme source code (408 files) that implements UDS for asu.edu sites — SCSS variables, `theme.json` block-editor presets, WordPress block patterns, compiled CSS, and classic PHP templates — (3) reading the full `render.php` + `block.json` (and legacy `register.php`) source for every block registered by the companion **Pitchfork Blocks** ACF plugin (accordion, alert, background-section, banner, blockquote, blockquote-carousel, breadcrumb, card v1/deprecated, card-foldable, card-imagebased, the full card-v2 family, content-image-overlap, grid-links, hero, hero-post, hero-video, sidebar, subtitle — see §§7.6–7.11), (4) reading that plugin's own block-level SCSS partials and its canonical `_custom-asu-variables.scss` token file, folded in as exact hex/spacing/breakpoint/layout detail throughout §§7.6–7.13, and (5) reviewing screenshots of a live production UDS site (four pages of ASU's Sun Devil Club) against all of the above — confirming most of it, and correcting the hero layout specifically (§7.14.1) where a literal reading of the editor's `InnerBlocks` order didn't match what's actually on asu.edu. Where sources agreed, values were cross-confirmed (see §7.2–7.4, §7.13); where they diverged or contained literal bugs/quirks, that is called out explicitly (§7.1's gray-scale slug inversion, §7.5's black-on-gold button text, and the various source-confirmed quirks flagged with ⚠️ throughout §§7.6–7.11 — e.g. card-v2's blank button style suffix, banner's class-replacement bug, background-section rendering nothing when unconfigured). What remains unconfirmed is narrower now: the Person profile block family, the enumerated option lists for several select fields, the JS-registered block-style slug list (§7.12), the base hero grid-template CSS, and the handful of screenshot-only conventions in §7.14.2 that have no matching block in the reviewed source at all.*
