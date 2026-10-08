# Changelog

All notable changes to the venutaihall.com website. Dates are local.

## 2026-10-08 — Hero focus legibility + functional QA pass

- **Hero focus contrast**: the "Up to 1200 Guests" / "Fully Air-Conditioned" block now sits on a feathered scrim (`.hero-focus::before`, `rgba(20,11,10,0.58)` blurred 32px — a first attempt with a hard-edged radial gradient showed a visible rectangle, so it was rejected), the numbers carry a double `text-shadow`, and the focus icons are `#f2dcae` gold. Mean band luminance dropped 0.145 → 0.119 with no hard edge at any breakpoint; the highlight stays color-only.
- **Functional/UI sweep across the site, all green**: every header/drawer/footer link resolves (13 local targets, HTTP 200), Location jump lands the section heading 110px below the 86px header (header link and drawer link both), drawer opens/closes with `aria-expanded` + body lock and unlocks on Escape and on navigation, FAQ accordion toggles all 10 items, gallery lightbox opens with the right caption and closes on Escape, the footer Compare Spaces link renders the comparison table, sticky header behaves at top and under scroll. The booking wizard was tested end to end: empty-step Next shows 3 inline errors and stays put, Back keeps entered values, guest-count recommendation flips Small/Big Hall correctly at 150/900, the honeypot silently blocks submission (zero POSTs), and a clean submit sends exactly one `POST booking.php` with all ten fields (honeypot empty) and reveals the success panel. Zero console errors or warnings throughout.

## 2026-10-08 — Big Hall Package points pass

- **The five package points are now the loudest thing on the homepage.** Pattern chosen: an **oversized-number editorial spec list** — one full-width row per point, hairline-separated — instead of keeping the photo bento or switching to a stat-card grid. Why: the brief is that the client's figures must dominate, giant display numerals read at hero scale while photos demote to supporting evidence, and a list keeps every figure legible at a glance on a phone, where competing imagery was exactly the old problem.
- The client's points, verbatim and in order: **Full A/C Hall — up to 1200 guests**, **Separate Dining — 400 at a time**, **VIP A/C Dining Hall — max 50 at a time**, **VIP Guest Rooms — 8 A/C rooms**, **On-site Parking** (icon + label only, no figure, keeps `data-placeholder="CONFIRM with client: dedicated parking?"`). Labels are semantic `<h3>`s; "up to" / "max" sit as small-caps prefixes above the numeral, units in `--ink-2` for contrast.
- Numerals are h1-scale `clamp(56px, 7vw, 104px)` (never below 56px on mobile) in wine — the base-layer `strong { color: var(--ink) }` rule beats inheritance, so `.pkg-num` sets wine explicitly. The Guest Rooms row is clearly the biggest: numerals `clamp(72px, 9.5vw, 132px)`, sage **Speciality** badge raised to 19px/800 (large-bold text only needs 3:1; white on sage is 4.27:1) with its guest-room photo running large beside the text.
- Contrast sweep after the rebuild: numerals 10.7:1 and headings 13.5:1 on ivory; prefixes, units and the "Enquire for pricing" note (moved off `--ink-3`, 4.31:1 fail → `--ink-2`, 8.25:1) all pass; eyebrow 5.08:1, wine button 10.7:1, badge 4.27:1 at its large-bold size. Rows stack to one column below 640px with thumbnails capped at 340px. Dead bento CSS (`.package-grid`, `.package-hero*`, `.package-tile*`, `.package-point*`, `.feature-foot`, `.compact-*`, `.cap-value`) and its media-query overrides removed.
- Verified: `python _build.py` writes 28 pages, `_check.py` resolves 1381 local refs, `node --check` passes, CSS braces balance; no-store harness audit at 320/360/768/1280 — five rows, five h3s in client order, numerals ≥56px, featured row biggest at every width, parking placeholder intact, zero horizontal overflow, zero console errors.

## 2026-10-08 — Header, compare and emphasis pass

- Brand plate everywhere: the ivory plate now wraps the logo **and** the English name in the header and footer, reading as one badge — logo up to 46px (header) / 96px (footer), the name sits inside the plate on dark ink instead of under a rule line, and the footer plate is centred and narrower so the name wraps to two lines.
- Hero eyebrow line "— Late Venutai Chavan Multipurpose Hall" removed (markup and CSS).
- Package tiles: capacity points bolder — titles `clamp(24px, 2.3vw, 33px)`, wine kickers, 34px icons, more padding; the feature-foot point follows.
- **Compare the Spaces** moved off the homepage to its own page (`compare.html`, breadcrumb header, SEO entry, sitemap 0.7) with a differences-and-advantages table: the new **What sets it apart** column (highlighted lead phrase per space) replaces the all-Yes AC column. The duplicate table was removed from `spaces.html`, the footer Explore nav gained **Compare Spaces**, and `details.html` prose links to the new page. Orphaned `.compare-yes` styles dropped.
- Devanagari bracket headings enlarged and emboldened: `clamp(18px, 1.9vw, 23px)` at weight 650 (16px on small screens).
- Navbar gained a **Location** jump (header nav and drawer) targeting `#location-title`; hash scrolling made reliable — fragment jumps are re-asserted with an instant scroll because `scroll-behavior: smooth` swallowed them — and `script.js` is cache-busted with a content-hash `?v=` stamped by `_build.py`.
- Package capacity points now sit **above** their photos (dining, VIP and feature tiles); the brand logo is zoomed ~18% inside the plate (transparent artwork scales cleanly, plate dimensions unchanged).
- Verified: `python _build.py` writes 28 pages, `_check.py` resolves 1381 local refs, `node --check` passes, CSS braces balance; sweep at 320/360/641/768/961/1280 with zero horizontal overflow, zero `.hl` backgrounds, the brand plate fitting the header at every width, all three hash-jump paths landing below the header, and zero console errors.

## 2026-10-08 — Package and polish pass

- Package bento photos now fill their frames edge to edge: the `picture` inside every `.media-frame` gets a definite height, so dining, VIP, feature, celebrate, setup, event and editorial cards no longer show a beige strip under the photo. The two pending-photo boxes were dropped — the parking tile is now a compact icon + title tile (car icon, "On-site Parking") carrying `data-placeholder="CONFIRM with client: dedicated parking?"`, and the second-angle guest room keeps only an HTML comment (see `PLACEHOLDERS.md`).
- Hero package cap reworked: gold display title **Full A/C Hall** with a plain **up to 1200 guests** value line (was small kicker + gold number).
- Logo up ~20% on desktop: mark 36 → 43px, English name 10 → 12px, plate padding and footer sizes with it (46 → 55px / 11 → 13px); header height raised 76 → 86px to fit. Below 960px logo sizes stay as before, and 961–1100px gets tighter tracking so the English name never touches the navigation.
- Marathi heading brackets: larger (`clamp(14px, 1.5vw, 17px)`, 13.5px on small screens), wine accent on light sections (brass kept on the hero, sand on dark bands), and more spacing around the line so it reads as a proper bracket.
- Dining/VIP capacity wording unified to **400 at a time** / **50 at a time** wherever it reads as a title or chip: space page specs, chips, asides and gallery labels, homepage gallery overlays, compare table, explorer chips; `Max 50 at a time` → `50 at a time`. Prose, FAQ answers, form options and SEO titles keep the plain wording.
- **Ample parking** claim removed from the homepage and `facilities.html` Safety & Access lists; both lists carry `data-placeholder="CONFIRM parking"` until the client confirms (see `PLACEHOLDERS.md`).
- Verified: `python _build.py` writes 27 pages, `_check.py` resolves 1268 local refs, `node --check` passes, CSS braces balance; responsive sweep at 320/360/641/700/768/900/961/1024/1100/1280 with zero horizontal overflow and zero console errors.

## 2026-10-08 — First-sight homepage pass

- Hero rebuilt for instant understanding: left = eyebrow, headline, CTAs and place line; right = a big display focus block (**Up to 1200 Guests**, **Fully Air-Conditioned**) with icons. Hero paragraph removed.
- All section intro paragraphs and card descriptions (explorer, events, compare, gallery, facilities, setups, heritage, visit, package close) moved off the homepage into a new **Detailed Overview** page (`details.html`, built via `_build.py`, sitemap priority 0.6), linked from the footer, section heads (package, compare, setups) and anchored by section.
- Points restyled as big title-style figures with icons: package points (dining, VIP dining, rooms, parking) now kicker + large title with pictorial icons; explorer spec values, celebrate capacities, setup titles, event card titles and gallery overlay capacities are large display type.
- `.hl` / `.hl-dark` highlight redesigned: **no background** — stands out like a heading (Fraunces display font, semibold); `.hl-dark` is warm gold on dark imagery. Compare capacity column set in display type.
- Fixed the pre-existing compare-table clip gap at 641–767px (scrollable below 960px now) and synced the Google Fonts link in `_build.py` with the homepage (adds Noto Sans Devanagari to all generated pages).
- Verified: build writes 26 pages, 1267 local refs resolve, `node --check` passes; desktop layout, 8-width responsive sweep (320–1280), `details.html`, deep-link navigation, drawer/reveal/lightbox/FAQ interactions — zero console errors.

## 2026-10-08 — Homepage revamp

- Replaced the header and footer text lockup with the logo image (`assets/logo.webp` + `assets/logo.png`) and swapped the favicon to `assets/favicon.svg` (applies to all pages via the build). The Marathi name lives in the logo, so the old Marathi `<small>` lines were removed; the English name **Late Venutai Chavan Multipurpose Hall** now sits under the logo with a hairline divider, and the logo sits on a small ivory plate so it stays readable over the dark hero and footer.
- Added sage `--sage: #688164` accent, used for the new **Speciality** badge.
- Restructured the homepage order: hero → trust stats → **The Big Hall Package** → space explorer → event discovery → compare → gallery → facilities → setups → heritage → visit CTA → location → FAQ → final CTA.
- Added the new **The Big Hall Package** section (bento grid: full A/C hall highlight, dining, VIP dining, guest rooms + second-angle tile, parking tile) with `Check Availability` CTA and `Enquire for pricing` note.
- Removed the **Why this venue** section and the **Space matcher** section entirely: matcher form, results UI, matcher CSS, matcher JavaScript, and every `#match` link (footer "Match My Event", spaces page "Match My Space").
- Marathi heading brackets (Noto Sans Devanagari, new font loaded) on all 13 homepage headings.
- Highlight style `.hl` / `.hl-dark` applied to stats, capacities, and key figures; dining/VIP capacities reworded to **400 at a time** / **50 at a time** (index chips, specs, compare table).
- Image-first treatment on explorer cards (hover zoom) — gallery already renders edge-to-edge cover tiles.
- Responsive verification: homepage audited at 10 widths (320–1440) and 9 other pages at 4 widths via iframe viewport emulation — no horizontal overflow anywhere, header brand clears the navigation and fits the header height at every breakpoint; drawer, gallery filters, FAQ and availability-wizard interactions verified.
- Placeholders for `parking.jpg` and `guest-room-2.jpg` (see `PLACEHOLDERS.md`).

## 2026-10-08 — Developer signature

- Added "Designed & developed by Omkar Kardile" link (`https://omkardile.is-a.dev/`) to the footer bottom bar, between copyright and legal links.

## 2026-10-07 — Initial site build

- 25 static pages, shared sprite/header/footer/drawer/bottom bar extracted by `_build.py` from `index.html`.
- Availability wizard, gallery filters/lightbox, reveal-on-scroll, and event-card interactions in `script.js`.
- PHP booking endpoints (`booking.php`, `popup.php`) and `.htaccess` / `robots.txt` / `sitemap.xml` generated by `_build.py`.
