<?php
/**
 * Title: Page: ASU Foundation Home
 * Slug: pitchfork/page-asu-foundation-home
 * Categories: pitchfork-page
 * Block Types: core
 *
 * =====================================================================
 * DEMONSTRATION MOCKUP — not official ASU Foundation content.
 * ---------------------------------------------------------------------
 * All body copy, names, quotes, event listings and links below are
 * fictional placeholder content written to exercise the block library at
 * realistic length. The one real, externally-documented figure used is
 * Campaign ASU 2020's published total (>$2.2 billion). Replace all copy
 * before this goes anywhere near production.
 *
 * ACF field-key mappings (the "_fieldname":"field_xxxxx" pairs ACF adds
 * alongside each data value) are intentionally omitted — those keys are
 * environment-specific and ACF regenerates them on save. Paste this in,
 * then re-save each block once so ACF writes the correct key pairs.
 * =====================================================================
 *
 * BLOCK INVENTORY (every component below is a real registered Pitchfork
 * block or core block — nothing hand-rolled):
 *   acf/hero + acf/subtitle .............. §7.7.1 / §7.14.1
 *   acf/alert (is-style-alert-info) ...... §7.9.1
 *   acf/background-section x6 ............ §7.10.1
 *   acf/card-v2 (+ -icon/-image/-header/
 *     -links/-link/-tags/-tag/-event) .... §7.6.3
 *   acf/content-image-overlap ............ §7.10.2
 *   acf/blockquote (testimonial style) ... §7.9.3
 *   acf/accordion + acf/card-foldable .... §7.8
 *   acf/grid-links ....................... §7.10.3
 *   core/columns, heading, paragraph, buttons, separator
 *
 * DELIBERATE BRAND DECISIONS (checkable against the guide):
 *  - Gold button used EXACTLY ONCE on the page (hero "Give now"), per
 *    §6.2's "gold reserved for the single highest-priority CTA". Every
 *    other CTA on the page is maroon.
 *  - Section backgrounds use White, flat gray-1, and three of the 12
 *    UDS background patterns (plus-light, topo-pattern-white,
 *    topo-pattern-black). Note the §7.1 slug inversion: gray-1 = #FAFAFA
 *    (design-guide "Gray7", near-white). No maroon or gold section
 *    backgrounds — prohibited by §2.
 *  - NO TWO BACKGROUNDED SECTIONS ARE ADJACENT. Running order is
 *    white -> plus-light -> (image-overlap on page white) ->
 *    topo-pattern-white -> white -> gray-1 -> white -> topo-pattern-black.
 *    Every patterned/filled section has a plain white breather next to it,
 *    per the usage rule in §7.10.1.
 *  - Pattern sections carry NO backgroundColor attribute: the pattern
 *    branch of background-section.php ignores it, because the pattern PNG
 *    is itself an opaque background. The dark pattern section therefore
 *    sets its own white text explicitly (textColor on the heading,
 *    text-white on grid-links) — the block does not do it for you.
 *  - Highlight spans appear on H1/H2 only (§3: headings 1-4 only), never
 *    on body copy, and use only highlight-gold / highlight-black.
 *  - All headlines are sentence case (§3).
 *  - Section rhythm comes from acf/background-section's own 96px desktop
 *    / 48px mobile padding (§7.10.1) rather than hand-set margins, which
 *    is what satisfies §4's 96px section-spacing rule automatically.
 *  - Cards are VERTICAL. Horizontal card-v2 relies on a .card-body grid
 *    child that the block's own default template never actually emits
 *    (the content group carries only metadata.name "Card Content", no
 *    className) — see the note in §7.6.3. Vertical avoids that bug.
 *  - Only the four brand-standard card types appear: Default (icon
 *    cards), Story, Event. No invented card variants.
 */
?>

<!-- ============================================================
     1. HERO  (acf/hero, one per page — supports.multiple: false)
     Layout per §7.14.1: headline carries the highlight, subtitle is a
     plain caption seated below it by the hero's CSS grid, both anchored
     bottom-left. Subtitle authored FIRST here because that is the
     block's own locked InnerBlocks order (lock.move: true on all four).
     ============================================================ -->
<!-- wp:acf/hero {"name":"acf/hero","mode":"preview","data":{"uds_hero_size":"uds-hero-lg","uds_hero_image":0},"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|uds-size-8"}}}} -->

<!-- wp:acf/subtitle {"name":"acf/subtitle","mode":"preview","data":{"uds_subtitle_text":"ASU Foundation for A New American University","uds_subtitle_highlight_color":"none"}} /-->

<!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color">Your generosity <span class="highlight-gold">changes what's possible</span></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"content"} -->
<div class="wp-block-group content">
<!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color">Private support fuels scholarships, research and community programs across every ASU college and campus.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"btn-row"} -->
<div class="wp-block-buttons btn-row">
<!-- wp:button {"backgroundColor":"asu-gold","metadata":{"name":"CTA: Hero"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-asu-gold-background-color has-background wp-element-button">Give now</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"asu-maroon"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-asu-maroon-background-color has-background wp-element-button">Explore ways to give</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- /wp:acf/hero -->

<!-- ============================================================
     2. TIMELY NOTICE  (acf/alert)
     Type is set by BLOCK STYLE, not a field. is-style-alert-info maps to
     the fa-check-circle icon in alert.php's switch — the deliberately
     non-intuitive pairing documented in §7.9.1. Reproduced as-coded.
     ============================================================ -->
<!-- wp:acf/alert {"name":"acf/alert","mode":"preview","className":"is-style-alert-info","data":{"uds_alert_dismissible":true},"style":{"spacing":{"margin":{"top":"var:preset|spacing|uds-size-4","bottom":"var:preset|spacing|uds-size-4"}}}} -->
<!-- wp:paragraph -->
<p>Gifts completed online by 11:59 p.m. Dec. 31 are receipted for the current tax year. Questions about stock, IRA or donor-advised fund gifts? Contact gift services at 480-965-3759.</p>
<!-- /wp:paragraph -->
<!-- /wp:acf/alert -->

<!-- ============================================================
     3. MISSION STATEMENT  (background-section, no bg color = white)
     'none' is a truthy $choice so the section renders; with no
     backgroundColor set the wrapper is just .uds-section.alignfull,
     giving the standard 96px desktop / 48px mobile padding and the
     1200px inner container for free.
     ============================================================ -->
<!-- wp:acf/background-section {"name":"acf/background-section","mode":"preview","align":"full","data":{"uds_background_section_choice":"none"}} -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|uds-size-4","bottom":"var:preset|spacing|uds-size-2"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--uds-size-4);margin-bottom:var(--wp--preset--spacing--uds-size-2)">Philanthropy that <span class="highlight-gold">moves ASU forward</span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">The ASU Foundation raises and stewards private support for Arizona State University, connecting donors with the people, programs and ideas they care most about.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>We are a separate nonprofit organization with a single purpose: making sure every gift to ASU is invested where it does the most good and managed responsibly for the long term. That work spans need-based scholarships, endowed faculty positions, research infrastructure and the community partnerships that extend the university's reach across Arizona.</p>
<!-- /wp:paragraph -->

<!-- /wp:acf/background-section -->

<!-- ============================================================
     4. GIVING PRIORITIES — three DEFAULT cards with icon headers
     (background-section, gray-1 = #FAFAFA per §7.1 inversion)
     Icon card = slot substitution: acf/card-v2-icon replaces
     acf/card-v2-image in the top slot. It is NOT a separate block style,
     so these carry no is-style-* class and render as Default cards.
     ============================================================ -->
<!-- wp:acf/background-section {"name":"acf/background-section","mode":"preview","align":"full","data":{"uds_background_section_choice":"pattern","uds_background_section_pattern":"plus-light"}} -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|uds-size-4","bottom":"var:preset|spacing|uds-size-2"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--uds-size-4);margin-bottom:var(--wp--preset--spacing--uds-size-2)">Where your giving goes</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|uds-size-6"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--uds-size-6)">Every gift is directed by the donor. These are the three areas our supporters fund most often.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","data":{"uds_card2_orientation":"vertical"}} -->

<!-- wp:acf/card-v2-icon {"name":"acf/card-v2-icon","mode":"preview","data":{"uds_card2_icon":"fa-solid fa-graduation-cap"}} /-->

<!-- wp:acf/card-v2-header {"name":"acf/card-v2-header","mode":"preview"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Scholarships and student success</h3>
<!-- /wp:heading -->
<!-- /wp:acf/card-v2-header -->

<!-- wp:group {"metadata":{"name":"Card Content"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>Need- and merit-based awards that close the gap between financial aid and the real cost of a degree, so students can finish what they started.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:acf/card-v2-links {"name":"acf/card-v2-links","mode":"preview"} -->
<!-- wp:acf/card-v2-link {"name":"acf/card-v2-link","mode":"preview","data":{"uds_card2_link":{"title":"Support a scholarship","url":"/give/scholarships","target":""}}} /-->
<!-- /wp:acf/card-v2-links -->

<!-- /wp:acf/card-v2 -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","data":{"uds_card2_orientation":"vertical"}} -->

<!-- wp:acf/card-v2-icon {"name":"acf/card-v2-icon","mode":"preview","data":{"uds_card2_icon":"fa-solid fa-flask"}} /-->

<!-- wp:acf/card-v2-header {"name":"acf/card-v2-header","mode":"preview"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Research and discovery</h3>
<!-- /wp:heading -->
<!-- /wp:acf/card-v2-header -->

<!-- wp:group {"metadata":{"name":"Card Content"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>Seed funding for early-stage work, endowed faculty positions and the lab instruments that let ASU researchers pursue questions before the grants arrive.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:acf/card-v2-links {"name":"acf/card-v2-links","mode":"preview"} -->
<!-- wp:acf/card-v2-link {"name":"acf/card-v2-link","mode":"preview","data":{"uds_card2_link":{"title":"Fund research","url":"/give/research","target":""}}} /-->
<!-- /wp:acf/card-v2-links -->

<!-- /wp:acf/card-v2 -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","data":{"uds_card2_orientation":"vertical"}} -->

<!-- wp:acf/card-v2-icon {"name":"acf/card-v2-icon","mode":"preview","data":{"uds_card2_icon":"fa-solid fa-people-group"}} /-->

<!-- wp:acf/card-v2-header {"name":"acf/card-v2-header","mode":"preview"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Community and access</h3>
<!-- /wp:heading -->
<!-- /wp:acf/card-v2-header -->

<!-- wp:group {"metadata":{"name":"Card Content"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>Programs that bring ASU faculty, students and resources into Arizona communities — from K-12 partnerships to free legal and health clinics.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:acf/card-v2-links {"name":"acf/card-v2-links","mode":"preview"} -->
<!-- wp:acf/card-v2-link {"name":"acf/card-v2-link","mode":"preview","data":{"uds_card2_link":{"title":"Invest in community","url":"/give/community","target":""}}} /-->
<!-- /wp:acf/card-v2-links -->

<!-- /wp:acf/card-v2 -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- /wp:acf/background-section -->

<!-- ============================================================
     5. CAMPAIGN IMPACT  (acf/content-image-overlap)
     orientation "left" adds the .content-left wrapper class and .ml-auto
     on the image. Default template's button style is-style-uds-md is
     kept (§7.10.2) rather than substituted.
     ============================================================ -->
<!-- wp:acf/content-image-overlap {"name":"acf/content-image-overlap","mode":"preview","data":{"uds_image_overlap_background":0,"uds_image_overlap_orientation":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|uds-size-12","bottom":"var:preset|spacing|uds-size-12"}}}} -->

<!-- wp:heading -->
<h2 class="wp-block-heading">What a campaign <span class="highlight-gold">actually builds</span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Campaign ASU 2020 closed having raised more than $2.2 billion from hundreds of thousands of donors — the largest fundraising effort in the university's history.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>What that total looks like on the ground: endowed scholarships that renew every year, faculty chairs that recruit researchers ASU could not otherwise attract, and buildings that opened years earlier than public funding alone would have allowed.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"asu-maroon","className":"is-style-uds-md","metadata":{"name":"CTA: Content Overlap"}} -->
<div class="wp-block-button is-style-uds-md"><a class="wp-block-button__link has-asu-maroon-background-color has-background wp-element-button">Read the impact report</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- /wp:acf/content-image-overlap -->

<!-- ============================================================
     6. TESTIMONIAL  (acf/blockquote, testimonial style)
     Any style value other than "default" takes the testimonial branch:
     adds .uds-testimonial + .accent-{accent}, and the gold quote glyph
     renders ALWAYS in this branch (§7.9.3).
     ============================================================ -->
<!-- wp:acf/background-section {"name":"acf/background-section","mode":"preview","align":"full","data":{"uds_background_section_choice":"pattern","uds_background_section_pattern":"topo-pattern-white"}} -->

<!-- wp:acf/blockquote {"name":"acf/blockquote","mode":"preview","data":{"uds_blockquote_quote":"I was working two jobs and still coming up short every semester. The scholarship didn't just cover tuition — it gave me back the hours I needed to actually be a student.","uds_blockquote_cite":"Daniela Ortiz","uds_blockquote_description":"B.S. biomedical engineering, Ira A. Fulton Schools of Engineering","uds_blockquote_style":"testimonial","uds_blockquote_accent":"gold","uds_blockquote_alt":false,"uds_blockquote_image_include":false,"uds_blockquote_reversed":false}} /-->

<!-- /wp:acf/background-section -->

<!-- ============================================================
     7. STORIES OF IMPACT — three STORY cards
     is-style-card-story: the "is-style-" prefix is STRIPPED by
     card-v2.php, so the rendered class is plain .card-story (§7.6.3).
     Tags (acf/card-v2-tags) are Story-card-only per §6.3.
     ============================================================ -->
<!-- wp:acf/background-section {"name":"acf/background-section","mode":"preview","align":"full","data":{"uds_background_section_choice":"none"}} -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|uds-size-4","bottom":"var:preset|spacing|uds-size-2"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--uds-size-4);margin-bottom:var(--wp--preset--spacing--uds-size-2)">Stories of <span class="highlight-black">impact</span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|uds-size-6"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--uds-size-6)">What private support looks like once it reaches a student, a lab or a neighborhood.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","className":"is-style-card-story","data":{"uds_card2_orientation":"vertical"}} -->

<!-- wp:acf/card-v2-image {"name":"acf/card-v2-image","mode":"preview","data":{"uds_card2_image":0}} /-->

<!-- wp:acf/card-v2-header {"name":"acf/card-v2-header","mode":"preview"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">A gift that rebuilt a lab from the ground up</h3>
<!-- /wp:heading -->
<!-- /wp:acf/card-v2-header -->

<!-- wp:group {"metadata":{"name":"Card Content"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>When aging equipment started limiting what a materials group could test, an alumni couple funded a full replacement — and a graduate fellowship to go with it.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:acf/card-v2-tags {"name":"acf/card-v2-tags","mode":"preview"} -->
<!-- wp:acf/card-v2-tag {"name":"acf/card-v2-tag","mode":"preview","data":{"uds_card2_tag_text":"Research"}} /-->
<!-- wp:acf/card-v2-tag {"name":"acf/card-v2-tag","mode":"preview","data":{"uds_card2_tag_text":"Engineering"}} /-->
<!-- /wp:acf/card-v2-tags -->

<!-- wp:acf/card-v2-links {"name":"acf/card-v2-links","mode":"preview"} -->
<!-- wp:acf/card-v2-link {"name":"acf/card-v2-link","mode":"preview","data":{"uds_card2_link":{"title":"Read the story","url":"/stories/materials-lab","target":""}}} /-->
<!-- /wp:acf/card-v2-links -->

<!-- /wp:acf/card-v2 -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","className":"is-style-card-story","data":{"uds_card2_orientation":"vertical"}} -->

<!-- wp:acf/card-v2-image {"name":"acf/card-v2-image","mode":"preview","data":{"uds_card2_image":0}} /-->

<!-- wp:acf/card-v2-header {"name":"acf/card-v2-header","mode":"preview"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">First-generation students find a foothold</h3>
<!-- /wp:heading -->
<!-- /wp:acf/card-v2-header -->

<!-- wp:group {"metadata":{"name":"Card Content"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>A donor-funded emergency aid program covers the small, unexpected costs — a car repair, a deposit — that quietly push students out of school.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:acf/card-v2-tags {"name":"acf/card-v2-tags","mode":"preview"} -->
<!-- wp:acf/card-v2-tag {"name":"acf/card-v2-tag","mode":"preview","data":{"uds_card2_tag_text":"Scholarships"}} /-->
<!-- wp:acf/card-v2-tag {"name":"acf/card-v2-tag","mode":"preview","data":{"uds_card2_tag_text":"Access"}} /-->
<!-- /wp:acf/card-v2-tags -->

<!-- wp:acf/card-v2-links {"name":"acf/card-v2-links","mode":"preview"} -->
<!-- wp:acf/card-v2-link {"name":"acf/card-v2-link","mode":"preview","data":{"uds_card2_link":{"title":"Read the story","url":"/stories/emergency-aid","target":""}}} /-->
<!-- /wp:acf/card-v2-links -->

<!-- /wp:acf/card-v2 -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","className":"is-style-card-story","data":{"uds_card2_orientation":"vertical"}} -->

<!-- wp:acf/card-v2-image {"name":"acf/card-v2-image","mode":"preview","data":{"uds_card2_image":0}} /-->

<!-- wp:acf/card-v2-header {"name":"acf/card-v2-header","mode":"preview"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Alumni turn a class project into a clinic</h3>
<!-- /wp:heading -->
<!-- /wp:acf/card-v2-header -->

<!-- wp:group {"metadata":{"name":"Card Content"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>Four graduates kept building the community health idea they prototyped as seniors. Foundation-managed gifts helped them open a permanent site in Maryvale.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:acf/card-v2-tags {"name":"acf/card-v2-tags","mode":"preview"} -->
<!-- wp:acf/card-v2-tag {"name":"acf/card-v2-tag","mode":"preview","data":{"uds_card2_tag_text":"Community"}} /-->
<!-- wp:acf/card-v2-tag {"name":"acf/card-v2-tag","mode":"preview","data":{"uds_card2_tag_text":"Health"}} /-->
<!-- /wp:acf/card-v2-tags -->

<!-- wp:acf/card-v2-links {"name":"acf/card-v2-links","mode":"preview"} -->
<!-- wp:acf/card-v2-link {"name":"acf/card-v2-link","mode":"preview","data":{"uds_card2_link":{"title":"Read the story","url":"/stories/maryvale-clinic","target":""}}} /-->
<!-- /wp:acf/card-v2-links -->

<!-- /wp:acf/card-v2 -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|uds-size-4","bottom":"var:preset|spacing|uds-size-2"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--uds-size-4);margin-bottom:var(--wp--preset--spacing--uds-size-2)">
<!-- wp:button {"backgroundColor":"asu-maroon"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-asu-maroon-background-color has-background wp-element-button">All impact stories</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- /wp:acf/background-section -->

<!-- ============================================================
     8. UPCOMING EVENTS — two EVENT cards
     acf/card-v2-event supplies .card-event-details. Note it is declared
     with parent acf/card-v2 in its own block.json but is missing from
     card-v2.php's allowedBlocks array (§7.6.3 caveat) — it is still the
     correct, intended child for an Event card.
     Layout "compact" puts date and location in one .card-event-details
     wrapper; "newline" splits them into two.
     ============================================================ -->
<!-- wp:acf/background-section {"name":"acf/background-section","mode":"preview","align":"full","backgroundColor":"gray-1","data":{"uds_background_section_choice":"none"}} -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|uds-size-4","bottom":"var:preset|spacing|uds-size-6"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--uds-size-4);margin-bottom:var(--wp--preset--spacing--uds-size-6)">Upcoming events</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","className":"is-style-card-event","data":{"uds_card2_orientation":"vertical"}} -->

<!-- wp:acf/card-v2-image {"name":"acf/card-v2-image","mode":"preview","data":{"uds_card2_image":0}} /-->

<!-- wp:acf/card-v2-header {"name":"acf/card-v2-header","mode":"preview"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Donor appreciation reception</h3>
<!-- /wp:heading -->
<!-- /wp:acf/card-v2-header -->

<!-- wp:group {"metadata":{"name":"Card Content"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>An evening with the students and faculty your giving supports. Open to all donors at the Sun Devil Society level and above.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:acf/card-v2-event {"name":"acf/card-v2-event","mode":"preview","data":{"uds_card2_event_date":"October 15, 2026","uds_card2_event_start":"5:30 pm","uds_card2_event_end":"7:30 pm","uds_card2_event_location":"Old Main, Tempe campus","uds_card2_event_layout":"compact"}} /-->

<!-- wp:acf/card-v2-links {"name":"acf/card-v2-links","mode":"preview"} -->
<!-- wp:acf/card-v2-link {"name":"acf/card-v2-link","mode":"preview","data":{"uds_card2_link":{"title":"RSVP","url":"/events/donor-reception","target":""}}} /-->
<!-- /wp:acf/card-v2-links -->

<!-- /wp:acf/card-v2 -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:acf/card-v2 {"name":"acf/card-v2","mode":"preview","className":"is-style-card-event","data":{"uds_card2_orientation":"vertical"}} -->

<!-- wp:acf/card-v2-image {"name":"acf/card-v2-image","mode":"preview","data":{"uds_card2_image":0}} /-->

<!-- wp:acf/card-v2-header {"name":"acf/card-v2-header","mode":"preview"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Scholarship recipient luncheon</h3>
<!-- /wp:heading -->
<!-- /wp:acf/card-v2-header -->

<!-- wp:group {"metadata":{"name":"Card Content"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>Scholarship donors meet the students who received their awards this year. Lunch provided; registration closes one week prior.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:acf/card-v2-event {"name":"acf/card-v2-event","mode":"preview","data":{"uds_card2_event_date":"November 12, 2026","uds_card2_event_start":"11:30 am","uds_card2_event_end":"1:00 pm","uds_card2_event_location":"Memorial Union, Tempe campus","uds_card2_event_layout":"compact"}} /-->

<!-- wp:acf/card-v2-links {"name":"acf/card-v2-links","mode":"preview"} -->
<!-- wp:acf/card-v2-link {"name":"acf/card-v2-link","mode":"preview","data":{"uds_card2_link":{"title":"Register","url":"/events/scholarship-luncheon","target":""}}} /-->
<!-- /wp:acf/card-v2-links -->

<!-- /wp:acf/card-v2 -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- /wp:acf/background-section -->

<!-- ============================================================
     9. GIVING FAQ  (acf/accordion + acf/card-foldable)
     uds_accordion_behavior true = synced, one-open-at-a-time via
     data-bs-parent. accordion_id is a BLOCK ATTRIBUTE (not a field) and
     is passed to children through providesContext (§7.8).
     ============================================================ -->
<!-- wp:acf/background-section {"name":"acf/background-section","mode":"preview","align":"full","data":{"uds_background_section_choice":"none"}} -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|uds-size-4","bottom":"var:preset|spacing|uds-size-2"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--uds-size-4);margin-bottom:var(--wp--preset--spacing--uds-size-2)">Questions about <span class="highlight-gold">giving</span></h2>
<!-- /wp:heading -->

<!-- wp:acf/accordion {"name":"acf/accordion","mode":"preview","accordion_id":"giving-faq","data":{"uds_accordion_behavior":true}} -->

<!-- wp:acf/card-foldable {"name":"acf/card-foldable","mode":"preview","data":{"uds_foldcard_title":"Is my gift tax deductible?","uds_foldcard_collapsed":false}} -->
<!-- wp:paragraph -->
<p>The ASU Foundation is a 501(c)(3) organization, so gifts are tax deductible to the extent allowed by law. You will receive a receipt by email within a few business days, and a consolidated statement each January.</p>
<!-- /wp:paragraph -->
<!-- /wp:acf/card-foldable -->

<!-- wp:acf/card-foldable {"name":"acf/card-foldable","mode":"preview","data":{"uds_foldcard_title":"Can I direct my gift to a specific college or program?","uds_foldcard_collapsed":false}} -->
<!-- wp:paragraph -->
<p>Yes. Every gift is designated by the donor, and designated funds can only be spent on the purpose you choose. If you are not sure which fund fits what you have in mind, a development officer can walk you through the options.</p>
<!-- /wp:paragraph -->
<!-- /wp:acf/card-foldable -->

<!-- wp:acf/card-foldable {"name":"acf/card-foldable","mode":"preview","data":{"uds_foldcard_title":"How much of my gift reaches the program?","uds_foldcard_collapsed":false}} -->
<!-- wp:paragraph -->
<p>Gifts go to the fund you designate. Fundraising and stewardship costs are covered separately rather than deducted from individual gifts, and the Foundation publishes audited financial statements each year.</p>
<!-- /wp:paragraph -->
<!-- /wp:acf/card-foldable -->

<!-- wp:acf/card-foldable {"name":"acf/card-foldable","mode":"preview","data":{"uds_foldcard_title":"Does my employer match gifts to ASU?","uds_foldcard_collapsed":false}} -->
<!-- wp:paragraph -->
<p>Many do, and a match can double or triple what your gift accomplishes. Check your employer's matching gift program, then send us the confirmation — we will handle the rest of the paperwork.</p>
<!-- /wp:paragraph -->
<!-- /wp:acf/card-foldable -->

<!-- /wp:acf/accordion -->

<!-- /wp:acf/background-section -->

<!-- ============================================================
     10. QUICK LINKS  (acf/grid-links on a dark section)
     background-section gray-7 = #191919 (design-guide "Gray1") — an
     approved dark background per §2. grid-links textColor "white"
     produces the .text-white modifier the block requires for its dark
     variant (§7.10.3). Approved combo: Gray7-on-Gray1 per §3.
     ============================================================ -->
<!-- wp:acf/background-section {"name":"acf/background-section","mode":"preview","align":"full","data":{"uds_background_section_choice":"pattern","uds_background_section_pattern":"topo-pattern-black"}} -->

<!-- wp:heading {"textColor":"white","style":{"spacing":{"margin":{"top":"var:preset|spacing|uds-size-4","bottom":"var:preset|spacing|uds-size-4"}}}} -->
<h2 class="wp-block-heading has-white-color has-text-color" style="margin-top:var(--wp--preset--spacing--uds-size-4);margin-bottom:var(--wp--preset--spacing--uds-size-4)">Ways to give</h2>
<!-- /wp:heading -->

<!-- wp:acf/grid-links {"name":"acf/grid-links","mode":"preview","textColor":"white","data":{"uds_grid_links_source":"arbitrary","uds_grid_links_columns":"three-columns","uds_grid_links_created":4}} /-->

<!-- /wp:acf/background-section -->
