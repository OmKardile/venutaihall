# Changelog

All notable changes to the venutaihall.com website. Dates are local.

## 2026-10-08 — Header, compare and emphasis pass

- Brand plate everywhere: the ivory plate now wraps the logo **and** the English name in the header and footer, reading as one badge — logo up to 46px (header) / 96px (footer), the name sits inside the plate on dark ink instead of under a rule line, and the footer plate is centred and narrower so the name wraps to two lines.
- Hero eyebrow line "— Late Venutai Chavan Multipurpose Hall" removed (markup and CSS).
- Package tiles: capacity points bolder — titles `clamp(24px, 2.3vw, 33px)`, wine kickers, 34px icons, more padding; the feature-foot point follows.
- **Compare the Spaces** moved off the homepage to its own page (`compare.html`, breadcrumb header, SEO entry, sitemap 0.7) with a differences-and-advantages table: the new **What sets it apart** column (highlighted lead phrase per space) replaces the all-Yes AC column. The duplicate table was removed from `spaces.html`, the footer Explore nav gained **Compare Spaces**, and `details.html` prose links to the new page. Orphaned `.compare-yes` styles dropped.
- Devanagari bracket headings enlarged and emboldened: `clamp(18px, 1.9vw, 23px)` at weight 650 (16px on small screens).
- Navbar gained a **Location** jump (header nav and drawer) targeting `#location-title`; hash scrolling made reliable — fragment jumps are re-asserted with an instant scroll because `scroll-behavior: smooth` swallowed them — and `script.js` is cache-busted with a content-hash `?v=` stamped by `_build.py`.
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
