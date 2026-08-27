# Component snippets

Every component below gives you two things:

- **WP block markup** — paste into the WordPress block editor's Code Editor view (or a `patterns/*.php` file). This is the real deliverable.
- **Preview HTML** — paste into a mockup page that links `preview/uds-preview.css`. This is what you show people before it exists in WordPress.

They are kept side by side deliberately: the preview HTML is *what the block renders to*, so if you change one you should change the other.

> **ACF field keys.** The block markup omits the `"_fieldname":"field_xxxxx"` pairs ACF normally writes alongside each value, because those keys are environment-specific. Paste, then re-save each block once and ACF regenerates them. The block will look empty in the editor until you do.

Section references (§) point at [`docs/asu-uds-brand-guide.md`](../docs/asu-uds-brand-guide.md).

---

## Contents

1. [Hero](#1-hero) · 2. [Subtitle](#2-subtitle) · 3. [Background section](#3-background-section) · 4. [Cards](#4-cards) · 5. [Content image overlap](#5-content-image-overlap) · 6. [Blockquote / testimonial](#6-blockquote--testimonial) · 7. [Accordion / FAQ](#7-accordion--faq) · 8. [Alert](#8-alert) · 9. [Banner](#9-banner) · 10. [Grid links](#10-grid-links) · 11. [Buttons](#11-buttons) · 12. [Dividers](#12-dividers) · 13. [Design-only components ⚠️](#13-design-only-components-️) · 14. [Global header & footer ⚠️](#14-global-header--footer-️)

---

## 1. Hero

`acf/hero` — **one per page** (`supports.multiple: false`). Sizes: `uds-hero-sm` / `-md` / `-lg`.

The four inner pieces have `lock: {move: true, remove: false}` — the **order is fixed, but every piece can be deleted**. That is the whole variability model: same structure every time, you choose what's present.

**Critical layout note (§7.14.1):** the hero is CSS Grid. `acf/subtitle` is authored *first* but renders *below* the headline. Put the highlight span on the **headline**, and let the subtitle be a small plain caption underneath.

### WP block markup

```html
<!-- wp:acf/hero {"name":"acf/hero","mode":"preview","data":{"uds_hero_size":"uds-hero-lg","uds_hero_image":0},"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|uds-size-8"}}}} -->

<!-- wp:acf/subtitle {"name":"acf/subtitle","mode":"preview","data":{"uds_subtitle_text":"Short caption line","uds_subtitle_highlight_color":"none"}} /-->

<!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color">Your headline <span class="highlight-gold">with a highlight</span></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"content"} -->
<div class="wp-block-group content">
<!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color">One or two sentences of intro copy.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"btn-row"} -->
<div class="wp-block-buttons btn-row">
<!-- wp:button {"backgroundColor":"asu-maroon","metadata":{"name":"CTA: Hero"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-asu-maroon-background-color has-background wp-element-button">Primary CTA</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- /wp:acf/hero -->
```

### Preview HTML

```html
<div class="uds-hero-lg alignfull has-btn-row" style="background-image:url(img/hero.jpg)">
  <div class="hero-overlay"></div>
  <h1 class="has-white-color">Your headline <span class="highlight-gold">with a highlight</span></h1>
  <div role="doc-subtitle" class="has-white-color">Short caption line</div>
  <div class="content">
    <p class="has-white-color">One or two sentences of intro copy.</p>
  </div>
  <div class="btn-row">
    <a class="wp-block-button__link has-asu-maroon-background-color" href="#">Primary CTA</a>
  </div>
</div>
```

### Variations

| Want | Do |
|---|---|
| No subtitle | Delete the `acf/subtitle` block entirely |
| No intro paragraph | Delete the `core/group.content` block |
| No buttons | Delete the `core/buttons` block |
| Two buttons | Add a second `core/button` with `"backgroundColor":"asu-gold"` |
| Different highlight | `highlight-gold` / `highlight-black` / `highlight-white`, or no span at all |
| Short banner hero | `uds-hero-sm`, headline + caption only, no buttons |

> The wrapper always carries `has-btn-row` even when you delete the button row. That's a source quirk, not a bug in your markup.

### Video hero

`acf/hero-video` — same four inner pieces, but **no locks at all** (freely reorderable). Adds `uds_herovideo_source` (MP4) and `uds_herovideo_image` (still). **The video is hidden below 992px**, so mobile falls back to the still image — always supply one.

```html
<!-- wp:acf/hero-video {"name":"acf/hero-video","mode":"edit","data":{"uds_herovideo_size":"uds-hero-md","uds_herovideo_source":"","uds_herovideo_image":0}} -->
<!-- …same subtitle / h1 / content / buttons as acf/hero… -->
<!-- /wp:acf/hero-video -->
```

> Known upstream bug: `hero-video.php` references an undefined `$spacing` variable, so its declared 64px bottom margin is not reliably applied inline. If a video hero looks like it's missing bottom spacing, that's why.

---

## 2. Subtitle

`acf/subtitle` — small kicker line inside a hero. `parent: ["acf/hero"]`, one per hero. Renders nothing if the text field is empty.

```html
<!-- wp:acf/subtitle {"name":"acf/subtitle","mode":"preview","data":{"uds_subtitle_text":"Your caption","uds_subtitle_highlight_color":"none"}} /-->
```

```html
<div role="doc-subtitle" class="has-white-color">Your caption</div>
```

`uds_subtitle_highlight_color` accepts `highlight-gold` / `highlight-black` / `highlight-white` / `none`. Live ASU pages almost always use `none` here and highlight the headline instead.

---

## 3. Background section

`acf/background-section` — the workhorse. Supplies the 96px desktop / 48px mobile section rhythm automatically, so **prefer it over hand-set margins**.

Three mutually exclusive modes via `uds_background_section_choice`:

### 3a. Flat color (`none`)

Only these four backgrounds are approved (§2). **Mind the gray inversion** — `gray-1` is near-**white**, `gray-7` is near-**black**.

```html
<!-- wp:acf/background-section {"name":"acf/background-section","mode":"preview","align":"full","backgroundColor":"gray-1","data":{"uds_background_section_choice":"none"}} -->
<!-- …your content blocks… -->
<!-- /wp:acf/background-section -->
```

```html
<section class="uds-section alignfull has-background has-gray-1-background-color">
  <div class="acf-innerblocks-container">
    <!-- your content -->
  </div>
</section>
```

Omit `backgroundColor` entirely for a plain white section that still contributes correct section padding.

### 3b. Pattern

```html
<!-- wp:acf/background-section {"name":"acf/background-section","mode":"preview","align":"full","data":{"uds_background_section_choice":"pattern","uds_background_section_pattern":"topo-pattern-black"}} -->
<!-- …your content blocks… -->
<!-- /wp:acf/background-section -->
```

```html
<section class="uds-section alignfull bg topo-pattern-black">
  <div class="acf-innerblocks-container">
    <!-- your content -->
  </div>
</section>
```

| Light patterns | Dark patterns |
|---|---|
| `arrows-light` | `arrows-dark` |
| `morse-code-white` | `morse-code-black` |
| `network-white` | `network-black` |
| `plus-light` | `plus-dark` |
| `semiconductor-light` | `semiconductor-dark` |
| `topo-pattern-white` | `topo-pattern-black` |

Visual catalog: [`docs/background-pattern-sheet.png`](../docs/background-pattern-sheet.png)

**Two things that trip people up:**

1. **Tiles are opaque.** The PNG *is* the background — `backgroundColor` is ignored on a patterned section. Don't set both.
2. **Dark patterns don't set their own text color.** Add `textColor:"white"` to headings and `has-white-color` to paragraphs yourself.

> Note the suffixes are inconsistent across the set: Arrows/Plus/Semiconductor use `Dark`/`Light`, MorseCode/Network/TopoPattern use `Black`/`White`. There is no `arrows-black`.

### 3c. Uploaded image

```html
<!-- wp:acf/background-section {"name":"acf/background-section","mode":"preview","align":"full","data":{"uds_background_section_choice":"upload","uds_background_section_upload_url":"https://…","uds_background_image_repeat":"no-repeat","uds_background_image_position":"center","uds_background_image_size":"cover","uds_background_section_color":"#191919"}} -->
```

> **If `uds_background_section_choice` is empty, the block renders literally nothing** — no `<section>` at all. If a section vanishes, check this field first.

### The stacking rule

**Never put two backgrounded sections back to back.** Alternate: patterned/filled → plain white → patterned/filled. Anything sitting on the page's own white background (an image-overlap, plain headings and paragraphs) counts as the breather.

Stacking two produces a 192px double-padding gap with two textures meeting at a hard seam.

---

## 4. Cards

`acf/card-v2` + sub-blocks. **Four brand-standard types, no others:** Default, Story, Event, Degree.

Type is chosen by **block style**, and the block strips the `is-style-` prefix at render — so `is-style-card-story` becomes plain `.card-story` in the final HTML.

**Use `card-vertical`.** Stock horizontal cards have a real upstream bug: the default template never emits `.card-body` or `.card-buttons`, which the horizontal grid rules depend on, so body copy and buttons land in the wrong column.

### Structural rules

| Slot | Removable? |
|---|---|
| `acf/card-v2-image` or `acf/card-v2-icon` | Yes |
| `acf/card-v2-header` (the title) | **No — locked** |
| `core/group` "Card Content" (body copy) | **No — locked** |
| `core/buttons` | Yes |

Every card is guaranteed a title and body area in fixed order. The image/icon slot and the button row are the parts you toggle.

### 4a. Default card with icon

An icon card is a *slot substitution* — `card-v2-icon` replaces `card-v2-image`. It is not a separate style, so it carries no `is-style-` class.

```html
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","data":{"uds_card2_orientation":"vertical"}} -->

<!-- wp:acf/card-v2-icon {"name":"acf/card-v2-icon","mode":"preview","data":{"uds_card2_icon":"fa-solid fa-graduation-cap"}} /-->

<!-- wp:acf/card-v2-header {"name":"acf/card-v2-header","mode":"preview"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Card title</h3>
<!-- /wp:heading -->
<!-- /wp:acf/card-v2-header -->

<!-- wp:group {"metadata":{"name":"Card Content"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>Card body copy.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:acf/card-v2-links {"name":"acf/card-v2-links","mode":"preview"} -->
<!-- wp:acf/card-v2-link {"name":"acf/card-v2-link","mode":"preview","data":{"uds_card2_link":{"title":"Learn more","url":"/path","target":""}}} /-->
<!-- /wp:acf/card-v2-links -->

<!-- /wp:acf/card-v2 -->
```

```html
<div class="wp-card-v2 card card-vertical">
  <span class="fa-solid fa-graduation-cap card-icon-top"></span>
  <div class="card-header"><h3>Card title</h3></div>
  <div class="wp-block-group"><p>Card body copy.</p></div>
  <div class="card-link"><a href="#">Learn more</a></div>
</div>
```

> If no icon is picked, `card-v2-icon` falls back to `fa-light fa-circle-question` **on the front end**, not just in the editor. Always set one.

### 4b. Story card

Adds `acf/card-v2-tags`. Tags are Story-card-only (§6.3).

```html
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","className":"is-style-card-story","data":{"uds_card2_orientation":"vertical"}} -->

<!-- wp:acf/card-v2-image {"name":"acf/card-v2-image","mode":"preview","data":{"uds_card2_image":0}} /-->

<!-- wp:acf/card-v2-header {"name":"acf/card-v2-header","mode":"preview"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Story headline</h3>
<!-- /wp:heading -->
<!-- /wp:acf/card-v2-header -->

<!-- wp:group {"metadata":{"name":"Card Content"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>Story excerpt.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:acf/card-v2-tags {"name":"acf/card-v2-tags","mode":"preview"} -->
<!-- wp:acf/card-v2-tag {"name":"acf/card-v2-tag","mode":"preview","data":{"uds_card2_tag_text":"Research"}} /-->
<!-- wp:acf/card-v2-tag {"name":"acf/card-v2-tag","mode":"preview","data":{"uds_card2_tag_text":"Engineering"}} /-->
<!-- /wp:acf/card-v2-tags -->

<!-- wp:acf/card-v2-links {"name":"acf/card-v2-links","mode":"preview"} -->
<!-- wp:acf/card-v2-link {"name":"acf/card-v2-link","mode":"preview","data":{"uds_card2_link":{"title":"Read the story","url":"/path","target":""}}} /-->
<!-- /wp:acf/card-v2-links -->

<!-- /wp:acf/card-v2 -->
```

```html
<div class="wp-card-v2 card card-vertical card-story">
  <img class="card-img-top" src="img/story.jpg" alt="">
  <div class="card-header"><h3>Story headline</h3></div>
  <div class="wp-block-group"><p>Story excerpt.</p></div>
  <div class="card-tags">
    <span class="badge text-bg-gray-2">Research</span>
    <span class="badge text-bg-gray-2">Engineering</span>
  </div>
  <div class="card-link"><a href="#">Read the story</a></div>
</div>
```

### 4c. Event card

Adds `acf/card-v2-event`. Layout `compact` puts date and location in one wrapper; `newline` splits them into two.

```html
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","className":"is-style-card-event","data":{"uds_card2_orientation":"vertical"}} -->

<!-- wp:acf/card-v2-image {"name":"acf/card-v2-image","mode":"preview","data":{"uds_card2_image":0}} /-->

<!-- wp:acf/card-v2-header {"name":"acf/card-v2-header","mode":"preview"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Event name</h3>
<!-- /wp:heading -->
<!-- /wp:acf/card-v2-header -->

<!-- wp:group {"metadata":{"name":"Card Content"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>What the event is.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:acf/card-v2-event {"name":"acf/card-v2-event","mode":"preview","data":{"uds_card2_event_date":"October 15, 2026","uds_card2_event_start":"5:30 pm","uds_card2_event_end":"7:30 pm","uds_card2_event_location":"Old Main, Tempe campus","uds_card2_event_layout":"compact"}} /-->

<!-- wp:acf/card-v2-links {"name":"acf/card-v2-links","mode":"preview"} -->
<!-- wp:acf/card-v2-link {"name":"acf/card-v2-link","mode":"preview","data":{"uds_card2_link":{"title":"RSVP","url":"/path","target":""}}} /-->
<!-- /wp:acf/card-v2-links -->

<!-- /wp:acf/card-v2 -->
```

```html
<div class="wp-card-v2 card card-vertical card-event">
  <img class="card-img-top" src="img/event.jpg" alt="">
  <div class="card-header"><h3>Event name</h3></div>
  <div class="wp-block-group"><p>What the event is.</p></div>
  <div class="card-event-details">
    <div class="card-event-icons"><div><span class="fa-regular fa-calendar"></span></div><div>October 15, 2026, 5:30&ndash;7:30 p.m.</div></div>
    <div class="card-event-icons"><div><span class="fa-solid fa-location-dot"></span></div><div>Old Main, Tempe campus</div></div>
  </div>
  <div class="card-link"><a href="#">RSVP</a></div>
</div>
```

The block formats times for you: `am`/`pm` become `a.m.`/`p.m.`, `12:00 pm` becomes "noon", and a shared meridian is trimmed from the start time (`5:30–7:30 p.m.`). Enter plain values like `5:30 pm` and let it do the work. `uds_card2_event_override` replaces the whole computed string if you need something custom.

> `acf/card-v2-event` declares `parent: ["acf/card-v2"]` but is **missing from card-v2.php's own `allowedBlocks` array**. It may not appear in the top-level inserter in every editor version. It is still the correct child for an Event card.

### 4d. Degree card

No dedicated block — it's the shared `card-degree` style plus a **two-button** row (maroon "Degree details" + gold "Apply"), which is the two-tier CTA hierarchy from §6.2.

```html
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","className":"is-style-card-degree","data":{"uds_card2_orientation":"vertical"}} -->
<!-- …image / header / content group… -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"asu-maroon"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-asu-maroon-background-color has-background wp-element-button">Degree details</a></div>
<!-- /wp:button -->
<!-- wp:button {"backgroundColor":"asu-gold"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-asu-gold-background-color has-background wp-element-button">Apply</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- /wp:acf/card-v2 -->
```

### 4f. The full variant space 🎨

Cards are the biggest source of page-to-page sameness. **Read `docs/asu-uds-brand-guide.md` §7.6.5 before building any card grid** — it documents the whole system from the UDS Figma card sheet. The short version:

**Slots** (order fixed, most optional): top image *or* icon *or* nothing → **title (locked)** → **body (locked)** → event details *(Event only)* → buttons (0–2) → inline link → tags *(Story only)*.

**Types** are just different gold accents: Default (none) · Story (rule under title, unlocks tags) · Event (rule under image, unlocks event details) · Degree (rule above buttons, convention is maroon + gold).

**Orientation:** `card-vertical` or `card-horizontal`. Horizontal is a real designed variant — the kit used to refuse it. Add `card-body` and `card-buttons` classes via Advanced ▸ Additional CSS Class or the stock template's grid breaks (§7.6.3).

**Story + horizontal** is its own treatment: full-bleed photo with the text floating over it in an opaque white panel.

**Image-based cards** (`acf/card-imagebased`) are a separate family — photo, scrim, heading, optional **gold** button. `{orientation}-{size}`: landscape/square/portrait × sm/md/lg. `portrait-lg` is force-downgraded upstream.

**Arrangements that are not a 3-across grid:** stacked horizontal feed · image / content / image · one large + two small · mixed slot counts · single full-width featured card · image cards on a dark section.

📎 **Live reference:** `examples/card-gallery/index.html` renders every variant above.

⚠️ **Month abbreviation.** With a specific day, abbreviate only **Jan., Feb., Aug., Sept., Oct., Nov., Dec.** March, April, May, June, July are never abbreviated. Governs every Event card date line.

---

### 4e. Card grid

Wrap cards in plain `core/columns`. A single trailing CTA closes out a grid rather than repeating a button in every card.

```html
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column --><div class="wp-block-column"><!-- card 1 --></div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column"><!-- card 2 --></div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column"><!-- card 3 --></div><!-- /wp:column -->
</div>
<!-- /wp:columns -->
```

> **Don't use `acf/uds-card` (card v1).** It's registered as "UDS Card (Deprecated)" with `inserter: false` — it can't be newly inserted. If you find one on an existing page, migrate it to `acf/card-v2`.

---

## 5. Content image overlap

`acf/content-image-overlap` (folder is `content-media-overlap` — the slug and folder differ). Orientation `left` adds `.content-left` and `.ml-auto`.

```html
<!-- wp:acf/content-image-overlap {"name":"acf/content-image-overlap","mode":"preview","data":{"uds_image_overlap_background":0,"uds_image_overlap_orientation":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|uds-size-12","bottom":"var:preset|spacing|uds-size-12"}}}} -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Section heading <span class="highlight-gold">with highlight</span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Keep this area light — too much copy undercuts the image.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"asu-maroon","className":"is-style-uds-md","metadata":{"name":"CTA: Content Overlap"}} -->
<div class="wp-block-button is-style-uds-md"><a class="wp-block-button__link has-asu-maroon-background-color has-background wp-element-button">Read more</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- /wp:acf/content-image-overlap -->
```

```html
<div class="uds-image-overlap content-left">
  <img class="img-fluid ml-auto" src="img/overlap.jpg" alt="">
  <div class="content-wrapper">
    <h2>Section heading <span class="highlight-gold">with highlight</span></h2>
    <p>Keep this area light — too much copy undercuts the image.</p>
    <div class="wp-block-buttons">
      <div class="wp-block-button is-style-uds-md"><a class="wp-block-button__link has-asu-maroon-background-color" href="#">Read more</a></div>
    </div>
  </div>
</div>
```

Allowed inner blocks: heading, paragraph, separator, list, buttons. Nothing is locked — fully reorderable.

The **gold accent bar** on the outer edge of the photo is an observed live convention that `content-media.php` does not emit itself; `uds-preview.css` draws it with a `::before`. Because this block sits on the page's own white background, it counts as the white breather between two backgrounded sections.

---

## 6. Blockquote / testimonial

`acf/blockquote`. The style/image combination decides whether the gold quote glyph appears:

| Style | Image | Result |
|---|---|---|
| `default` | yes | `.with-image` (+`.reversed`), **no glyph** |
| `default` | no | `.accent-{color}` (+`.alt-citation`), glyph renders |
| testimonial (any non-`default` value) | either | `.uds-testimonial .accent-{color}`, glyph **always** |

```html
<!-- wp:acf/blockquote {"name":"acf/blockquote","mode":"preview","data":{"uds_blockquote_quote":"The quote text.","uds_blockquote_cite":"Person Name","uds_blockquote_description":"Title, department","uds_blockquote_style":"testimonial","uds_blockquote_accent":"gold","uds_blockquote_alt":false,"uds_blockquote_image_include":false,"uds_blockquote_reversed":false}} /-->
```

```html
<div class="uds-blockquote uds-testimonial accent-gold">
  <svg title="Open quote" role="presentation" viewBox="0 0 302.87 245.82">
    <path d="M113.61,245.82H0V164.56q0-49.34,8.69-77.83T40.84,35.58Q64.29,12.95,100.67,0l22.24,46.9q-34,11.33-48.72,31.54T58.63,132.21h55Zm180,0H180V164.56q0-49.74,8.7-78T221,35.58Q244.65,12.95,280.63,0l22.24,46.9q-34,11.33-48.72,31.54t-15.57,53.77h55Z"/>
  </svg>
  <blockquote>The quote text.
    <div class="citation"><div class="citation-content">
      <cite class="name">Person Name</cite>
      <cite class="description">Title, department</cite>
    </div></div>
  </blockquote>
</div>
```

**Carousel version:** `acf/blockquote-carousel` takes a repeater (`uds_blockquote_carousel_quotes`) and applies one shared style to every slide. Nav only renders with more than one quote; it does **not** loop — the prev arrow greys out on the first slide and next on the last. Renders nothing at all if every row is empty.

### 6b. Figma composition variants (🎨) — same block, real layouts

Nothing here is a new field. It's what the confirmed classes above actually look like composed on a page — see brand guide §7.18. **Stack multiple quotes with alternating accents** (gold/maroon/black), don't repeat one color down a column.

**With a photo** (`uds_blockquote_image_include`), reversed to alternate sides when stacking more than one:

```html
<div class="uds-blockquote with-image accent-gold">
  <img src="person.jpg" alt="">
  <blockquote>The quote text.
    <div class="citation"><div class="citation-content">
      <cite class="name">Person Name</cite>
      <cite class="description">Title, department</cite>
    </div></div>
  </blockquote>
</div>
<div class="uds-blockquote with-image reversed accent-maroon">…</div>
```

**Three across** — add `.stacked` when `with-image` sits in a column too narrow for the side-by-side layout (same fields, no new component):

```html
<div class="uds-blockquote with-image stacked accent-black">…</div>
```

**Name chip** (`uds_blockquote_alt` → `alt-citation`, confirmed field/class; the chip-above-quote *look* is 🎨). Real DOM order is unchanged — citation stays last in markup; CSS `order: -1` moves it above the quote visually, same technique as the hero's subtitle reorder (§7.14.1):

```html
<div class="uds-blockquote alt-citation accent-gold">
  <img src="person.jpg" alt="">
  <blockquote>The quote text.
    <div class="citation"><div class="citation-content">
      <cite class="name">Person Name</cite>
    </div></div>
  </blockquote>
</div>
```

**On an image background** — reuses the overlay family's `core/cover` scrim (§5 in this file / §19 of the stylesheet), not a new block. Full measure straight in the scrim, or boxed into a white inset card:

```html
<div class="wp-block-cover alignfull">
  <img src="photo.jpg" alt="">
  <div class="wp-block-cover__inner-container">
    <div class="uds-blockquote accent-gold">…</div>
  </div>
</div>

<div class="wp-block-cover alignfull">
  <img src="photo.jpg" alt="">
  <div class="wp-block-cover__inner-container" style="display:flex;justify-content:flex-end">
    <div class="uds-inset-card" style="max-width:420px">
      <div class="uds-blockquote accent-maroon">…</div>
    </div>
  </div>
</div>
```

⚠️ Don't nest a plain (non-`uds-inset-card`) `.uds-blockquote` any deeper than shown — the on-photo white-text rule targets `.wp-block-cover__inner-container`'s **direct child**, and the inset-card rule separately forces the card's own text dark. Nesting differently than the two patterns above can land a quote with no color rule applied to it at all.

---

## 7. Accordion / FAQ

`acf/accordion` wraps `acf/card-foldable` children (nothing else is allowed). `uds_accordion_behavior: true` makes it synced — one open at a time via `data-bs-parent`.

`accordion_id` is a **block attribute, not a field**, and passes to children through block context.

```html
<!-- wp:acf/accordion {"name":"acf/accordion","mode":"preview","accordion_id":"faq","data":{"uds_accordion_behavior":true}} -->

<!-- wp:acf/card-foldable {"name":"acf/card-foldable","mode":"preview","data":{"uds_foldcard_title":"First question?","uds_foldcard_collapsed":false}} -->
<!-- wp:paragraph -->
<p>Answer copy.</p>
<!-- /wp:paragraph -->
<!-- /wp:acf/card-foldable -->

<!-- wp:acf/card-foldable {"name":"acf/card-foldable","mode":"preview","data":{"uds_foldcard_title":"Second question?","uds_foldcard_collapsed":false}} -->
<!-- wp:paragraph -->
<p>Answer copy.</p>
<!-- /wp:paragraph -->
<!-- /wp:acf/card-foldable -->

<!-- /wp:acf/accordion -->
```

```html
<div class="accordion" id="faq">
  <div class="accordion-item">
    <div class="accordion-header">
      <h4>
        <button id="fCard-1" href="#fCardBody-1" role="button" data-bs-toggle="collapse"
                data-bs-target="#fCardBody-1" aria-controls="fCardBody-1"
                aria-expanded="false" class="collapsed">
          <span class="accordion-icon"><i class="fa-placeholder"></i>First question?</span>
          <span class="fas fa-chevron-up"></span>
        </button>
      </h4>
    </div>
    <div id="fCardBody-1" aria-labelledby="fCard-1" class="accordion-body collapse" data-bs-parent="#faq">
      <p>Answer copy.</p>
    </div>
  </div>
</div>
```

**Watch the nesting:** `.accordion-header` is a wrapper `div` that **closes before** `.accordion-body`. The body is a *sibling* of the header, not a child. The closing tags are split across three separate `echo` statements in source, which makes this easy to get wrong.

`uds_foldcard_collapsed` reads backwards from what you'd expect: **`true` means the panel starts OPEN** (`class="accordion-body collapse show"`). Default `false` starts closed.

### Accent variants 🎨

Background color is limited to four slugs → `accordion-item-{slug}`. **They render as an 8px LEFT ACCENT BAR, not a background fill** — `accordion-item-dark` is a white item with a black edge, not a dark item. Confirmed against the UDS Figma component sheet.

| Slug | Bar | When to reach for it |
|---|---|---|
| `gold` | `#FFC627` | Marketing-facing FAQ. Warm, promotional. |
| `maroon` | `#8C1D40` | Institutional default. Safe and branded. |
| `gray` | `#BFBFBF` (code `gray-4`) | Secondary element on an already-busy page. |
| `dark` | `#191919` (code `gray-7`) | Editorial, highest contrast. |

Set it via the block's own `backgroundColor` support:

```html
<!-- wp:acf/card-foldable {"name":"acf/card-foldable","mode":"preview","backgroundColor":"gold","data":{"uds_foldcard_title":"First question?","uds_foldcard_collapsed":false}} -->
```
```html
<div class="accordion-item accordion-item-gold"> … </div>
```

**Open state is tinted.** A closed item is plain white; an open one takes a light gray — heavier on the header strip, lighter on the body. Figma-derived; not in the reviewed SCSS.

### Half-width accordion 🎨

The Figma sheet renders the component at two container widths, so a narrow accordion is a designed-for use, not a compromise. Dropping one into a `wp:column` beside prose or an image gives you a page shape that a full-width FAQ band cannot:

```html
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
  <!-- intro prose, an image, a blockquote… -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
  <!-- wp:acf/accordion … --> <!-- the accordion, at half width -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
```

⚠️ `preview/uds-preview.css` sets `.wp-block-column { display: flex }` with no direction, so a column holding **two or more** children lays them out in a row. Give each column a single child (the accordion, or a `core/group` wrapping several blocks).

Use it for spec lists, itineraries, programme details, eligibility rules — anything enumerable that is not literally a FAQ.

---

## 8. Alert

`acf/alert`. **Type comes from the block style, not a field.** The icon pairing in source is deliberately non-intuitive — reproduce it as-coded rather than "fixing" it.

| Block style | Icon | Background | Border |
|---|---|---|---|
| `is-style-alert-warning` (default) | `fa-exclamation-triangle` | `#FFEADE` | `#FF7F32` |
| `is-style-alert-success` | `fa-bell` | `#E9F5DB` | `#78BE20` |
| `is-style-alert-info` | `fa-check-circle` | `#D6F0FA` | `#00A3E0` |
| `is-style-alert-error` | `fa-info-circle` | `#F7DDDD` | `#CC2F2F` |

```html
<!-- wp:acf/alert {"name":"acf/alert","mode":"preview","className":"is-style-alert-info","data":{"uds_alert_dismissible":true},"style":{"spacing":{"margin":{"top":"var:preset|spacing|uds-size-4","bottom":"var:preset|spacing|uds-size-4"}}}} -->
<!-- wp:paragraph -->
<p>Your message. Lists are allowed too.</p>
<!-- /wp:paragraph -->
<!-- /wp:acf/alert -->
```

```html
<div class="wp-block-alert alert is-style-alert-info alert-dismissable">
  <div class="alert-icon"><span class="fas fa-check-circle"></span></div>
  <div class="alert-content"><p>Your message. Lists are allowed too.</p></div>
  <div class="alert-close">
    <button type="button" class="btn btn-circle btn-circle-alt-black close" aria-label="Close">
      <span class="fas fa-times"></span>
    </button>
  </div>
</div>
```

The dismiss class is spelled `alert-dismissable` (one "s") in source, not Bootstrap's usual `alert-dismissible`.

---

## 9. Banner

`acf/banner` — full-bleed, **one per page** (`multiple: false`). Inner content still caps to the 1200px column.

```html
<!-- wp:acf/banner {"name":"acf/banner","mode":"preview","align":"full","backgroundColor":"gray","data":{"uds_banner_button_count":1,"uds_banner_dismissible":true,"uds_banner_button_1_settings":{"button_one_text":"Learn more","button_one_url":"/path"}}} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Notification headline</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Message body.</p>
<!-- /wp:paragraph -->
<!-- /wp:acf/banner -->
```

```html
<section class="wp-block-banner alignfull banner-gray">
  <div class="banner alert" role="banner">
    <div class="banner-icon"><span class="fas fa-bullhorn"></span></div>
    <div class="banner-content">
      <h3>Notification headline</h3>
      <p>Message body.</p>
    </div>
    <div class="banner-buttons">
      <a href="#" class="btn btn-sm btn-dark">Learn more</a>
    </div>
  </div>
</section>
```

Buttons are `btn-dark` on every background except `black`, where they switch to `btn-gold`. Max two.

> **Don't use the Advanced "Additional CSS Class" field on a banner.** Source *replaces* the whole base class array with your string instead of appending, silently stripping `wp-block-banner alignfull banner-{color}`.

---

## 10. Grid links

`acf/grid-links`. `textColor` produces the `.text-{color}` modifier the block needs for its dark variant.

```html
<!-- wp:acf/grid-links {"name":"acf/grid-links","mode":"preview","textColor":"white","data":{"uds_grid_links_source":"arbitrary","uds_grid_links_columns":"three-columns","uds_grid_links_created":4}} /-->
```

```html
<div class="uds-grid-links three-columns text-white">
  <a href="#"><i class="fa-solid fa-credit-card"></i>Link one</a>
  <a href="#"><i class="fa-solid fa-chart-line"></i>Link two</a>
  <a href="#"><i class="fa-solid fa-building"></i>Link three</a>
</div>
```

`uds_grid_links_columns` takes a column class (`two-columns` / `three-columns` / `four-columns`); the special value `mobile` suppresses the class entirely. Source can also be `tag` or `category` to pull terms automatically instead of the repeater.

> The icon sub-field here is concatenated as a **raw markup string**, unlike the icon-object fields on banner and card-v2-icon. The three blocks use ACF's icon field differently and are not interchangeable.

---

## 11. Buttons

```html
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"asu-maroon"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-asu-maroon-background-color has-background wp-element-button">Maroon</a></div>
<!-- /wp:button -->
<!-- wp:button {"backgroundColor":"asu-gold"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-asu-gold-background-color has-background wp-element-button">Gold</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
```

Maroon is the default and carries white text. Gold carries **black** text and is reserved for the single highest-priority CTA on the page — if you have two gold buttons, one is wrong. All buttons use the fully-pill radius (`400rem`); a small rounded corner is off-brand.

---

## 12. Dividers

```html
<!-- Section divider — full width -->
<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- Body copy divider — inset, for related content within a section -->
<!-- wp:separator {"className":"is-style-copy-divider"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-copy-divider"/>
<!-- /wp:separator -->
```

A divider between sections needs 96px of clear space on either side (§4) — which `acf/background-section` already provides, so you rarely need an explicit one between sections.


## 13. Design-only components ⚠️

These are real, brand-approved UDS components with **no registered WordPress block** (§7.16). Render them in previews; **never emit `wp:acf/…` markup for them**.

### 13a. Percentage circle (donut)

Self-contained inline SVG — no classes, nothing paste-able into WordPress by mistake. Swap `PCT`, the fill (`#FFC627` gold or `#8C1D40` maroon) and the track (`#F2F2F2` on light sections, `#FFFFFF` on dark).

`stroke-dasharray` is `circumference × pct/100` then the full circumference; circumference for `r=80` is **502.65**. The `rotate(-90)` starts the arc at 12 o'clock.

```html
<svg viewBox="0 0 200 200" width="100%" style="max-width:230px" role="img" aria-label="75 percent. Supporting text">
  <circle cx="100" cy="100" r="80" fill="none" stroke="#F2F2F2" stroke-width="22"/>
  <circle cx="100" cy="100" r="80" fill="none" stroke="#FFC627" stroke-width="22"
          stroke-dasharray="376.99 502.65" transform="rotate(-90 100 100)"/>
  <text x="100" y="103" text-anchor="middle" font-family="Arial,sans-serif"
        font-size="30" font-weight="700" fill="#191919">75%</text>
  <text x="100" y="128" text-anchor="middle" font-family="Arial,sans-serif"
        font-size="13" font-weight="700" fill="#191919">Supporting text</text>
</svg>
```

**On a dark section:** track becomes `#FFFFFF`, the supporting line becomes `#FFFFFF`, and the figure sits on a white box — add `<rect x="52" y="76" width="96" height="34" fill="#FFFFFF"/>` before the `<text>`.

### 13b. Card carousel

Nav values are 🟢 (reused from the source-confirmed `_blockquote-carousel.scss`): `1.125rem` dots at `#d9d9d9` / `#191919` active with `1rem` gaps; `4rem` circular controls on `#e8e8e8`; the control pointing past the end is dimmed to `#f8f8f8` and inert — **it does not loop**.

```html
<div class="carousel per-4">
  <div class="carousel-inner">
    <div class="carousel-item"><!-- a normal acf/card-v2 --></div>
    <!-- …more cards… -->
  </div>
  <div class="carousel-nav">
    <div class="carousel-indicators">
      <button class="active" aria-label="Slide 1"></button>
      <button aria-label="Slide 2"></button>
    </div>
    <div class="carousel-buttons">
      <button class="carousel-control-prev" disabled aria-label="Previous">&lsaquo;</button>
      <button class="carousel-control-next" aria-label="Next">&rsaquo;</button>
    </div>
  </div>
</div>
```

`per-2` / `per-3` / `per-4` / `per-5` set cards-per-view. Controls sit **centred below** the track — ASU moves them out of Bootstrap's default edge-overlay position. The trailing card is deliberately clipped and faded; that peek is the affordance.

⚠️ §6.4's caution: users may not see every card, so never put critical content in a carousel.

---

## 14. Global header & footer ⚠️

Not a Pitchfork block — no ACF field, no `wp:acf/…` markup. The real header/footer ship as the external `@asu/component-header` / `@asu/component-footer` npm packages, outside the WordPress content area. This is a Figma-accurate **visual approximation** (brand guide §7.17), built to be used as the real header/footer on every mockup page since both are required on every asu.edu page — say plainly it's an approximation if someone needs the literal package output.

### 14a. Header

```html
<div class="uds-global-header">
  <div class="ugh-utility"><div class="ugh-utility-inner">
    <a href="#">ASU Home</a><a href="#">My ASU</a><a href="#">Colleges and Schools</a><a href="#">Sign In</a>
    <button aria-label="Search"><i class="fas fa-search"></i></button>
  </div></div>
  <div class="ugh-main"><div class="ugh-main-inner">
    <a class="ugh-logo" href="#">Arizona State<br>University</a>
    <span class="ugh-unit">Unit Name</span>
    <nav class="ugh-nav">
      <a href="#" class="active">Primary Link</a>
      <a href="#">Primary Link</a>
      <a href="#">Dropdown Link <i class="fas fa-chevron-down"></i></a>
    </nav>
    <a class="btn btn-gold ugh-cta" href="#">Enroll</a>  <!-- optional, not every unit has one -->
  </div></div>
</div>
```

Nav hides below 900px in favor of the off-canvas panel (`.ugh-mobile-panel` — see the gallery for full markup); this kit renders that panel as a static reference, not a working JS toggle.

### 14b. Footer — pick the composition, don't default to "full"

```html
<footer class="uds-global-footer">
  <div class="ugf-top"><div class="ugf-top-inner">
    <div class="ugf-brand">
      <div class="ugf-logo"><strong>Unit Name</strong><span>Arizona State University</span></div>
      <div class="ugf-social"><a href="#"><i class="fab fa-facebook-f"></i></a><!-- …more --></div>
    </div>
    <div class="ugf-columns">
      <div class="ugf-col ugf-col-brand">
        <strong>Complete Name of College, School or Unit Title Here</strong>
        <a href="#">Secondary Nav Link</a>
        <a class="btn btn-gold" href="#">Support ASU</a>
      </div>
      <!-- omit everything below for the "collapsed" composition; omit .ugf-top
           entirely (keep only .ugf-ribbon + .ugf-legal) for "minimal" -->
      <div class="ugf-col"><strong>Column Header</strong><a href="#">Secondary Nav Link</a></div>
    </div>
  </div></div>
  <div class="ugf-ribbon"><div class="ugf-ribbon-inner">
    <a href="#">Maps and Locations</a><a href="#">Jobs</a><a href="#">Directory</a><a href="#">Contact ASU</a><a href="#">My ASU</a>
    <span class="ugf-rank"><i class="fas fa-flag"></i> Repeatedly ranked #1<small>30+ lists in the last 3 years</small></span>
  </div></div>
  <div class="ugf-legal"><div class="ugf-legal-inner">
    <a href="#">Copyright and Trademark</a><a href="#">Accessibility</a><a href="#">Terms of Use</a><a href="#">Emergency</a><a href="#">Privacy</a><a href="#">Manage My Privacy Settings</a>
  </div></div>
</footer>
```

This exact legal-link set, in this exact order, every time — it's the one piece of footer copy that isn't placeholder.

Columns collapse to an accordion (chevron per header) below 767px; rendered closed by default in this kit, same static-reference approach as the header's mobile panel.

---
