# WORKLOG — venutaihall.com

This is the in-repo worklog (survives sandbox resets). Append-only. Newest group at the bottom.

---
Date: 2026-10-10
Group: Spaces We Offer — ship modified Option A (editorial split) onto index.html
Branch: wip (off main @ 7c90a17)
Status: in progress

Plan:
- Replace the homepage Spaces We Offer section (the Group-2 pkg-num-grid + chips layout) with the modified Option A editorial split: solid wine numbers panel beside the photo, ivory numerals (weight 400-500, 64-88px desktop / >=56px mobile), brass hairline row dividers, Guest Rooms row featured (1.4x, brass/gold numeral, sage Speciality badge), 4 chips, Full details button, alternating photo side (Big left / Small right), mobile photo-on-top + 2x2 numerals.
- Delete design-lab.html + _labshots/ (user authorised). Remove design-lab generation from _build.py.
- Verify 320/360/390/768/1280 + 1366x768 + 1920x1080: zero overflow/console, AA contrast.
- Screenshots outside repo. Append results here. Commit + push to wip only.

Open questions:
- None blocking. Small Hall dining row keeps data-placeholder="CONFIRM with client: small hall dining details".

---
Date: 2026-10-10
Group: Spaces We Offer — shipped modified Option A (editorial split) onto index.html
Branch: wip
Commit: (pending)
Status: DONE — verified, ready for review

What changed:
- index.html: replaced the Group-2 pkg-num-grid + chips layout in #spaces with the modified Option A editorial split. Per hall: solid WINE panel beside the photo (not on it), ivory numerals (Fraunces weight 450, opsz 144; desktop 64-84px, mobile >=56px), brass hairline dividers between rows, row labels in small caps ivory (desktop 17px / mobile 16px) with the exact wording: "Full A/C Hall · up to 1200 guests" etc. Guest Rooms row is the star: gold (#f2dcae) numeral at 1.40x the others (desktop 96.8px vs 69.1px; mobile 78px vs 56px), sage Speciality badge. 4 chips (Catering/Acoustic/Parking/CCTV, 14px text + 22px icon, icon color #c9a866 for AA on wine). "Full details" button-light on each hall. Kept the section heading eyebrow + Marathi bracket + "See everything included" link. Alternating photo side: Big Hall photo left, Small Hall photo right. Mobile (<=960): photo on top, panel below; Big Hall's 4 numerals become a 2x2 grid at <=768, each cell numeral-on-top + label-below.
- styles.css: removed the now-dead .pkg-num-grid/.pkg-num-cell/.pkg-chip block (homepage-only). Added the .hall-* system (hall-card, hall-photo, hall-panel, hall-row, hall-row-num, hall-row-featured, hall-row-num-featured, hall-speciality, hall-chips, hall-chip, hall-cta) + responsive overrides at <=960 (stack), <=768 (2x2 numeral grid), <=480 (chip tighten), prefers-reduced-motion (hover transforms off).
- _build.py: removed the design-lab SEO entry, the design_lab_main f-string, and the page("design-lab.html", ...) call. (extra_head param kept on page() — harmless, reusable.)
- Deleted: design-lab.html (the generated file) and _labshots/ (the temp screenshot-serving folder). Neither referenced anywhere.
- Small Hall dining row keeps data-placeholder="CONFIRM with client: small hall dining details".

Verification:
- _build.py: 28 pages (was 29; design-lab no longer generated). _check.py: 1217 local refs all resolve. CSS braces 0. node --check OK. _build.py syntax OK.
- Overflow + console + page-errors sweep at 320x568, 360x640, 390x844, 768x1024, 1280x800, 1366x768, 1920x1080 => ALL ZERO.
- Desktop 1280: 2 cards, Big Hall photo-left/panel-right, Small Hall photo-right/panel-left (alternating OK), panel bg wine #641c2c, numeral ivory #f6f1e8 weight 450 @ 69.1px, featured gold #f2dcae @ 96.8px (ratio 1.40), sage Speciality badge, 8 chips (4/hall), chip text 14px, chip icon 22px @ #c9a866, 2 Full-details CTAs, Marathi bracket + See-everything link present.
- Mobile 390: photo order -1 (top), panel below, card 1-col, Big Hall 4 numerals in 2x2 grid (145px cols), normal 56px, featured 78px, label 16px, row dir column.
- AA contrast: ivory numerals on wine = ~10.7:1; gold featured on wine = ~8.6:1; chip ivory text on wine = ~10.7:1; chip icons #c9a866 on wine = ~5:1. All pass.
- Screenshots (outside repo): /home/z/qa-shots/spaces-a-modified/spaces-desktop-1280.png, spaces-mobile-390.png.

What's next:
- Awaiting user review of the shipped Option A. If approved, the next "PUSH NOW" will push wip -> main + mirror. If tweaks wanted, another group on wip.

Open questions:
- Small Hall dining details still need client confirmation (placeholder kept).

---
Date: 2026-10-10
Group: Restore design-lab.html (keep it) + push wip to mirror
Branch: wip
Commit: (pending)
Status: DONE

What changed:
- Restored design-lab.html (deleted in ee016ab) and its generation in _build.py (SEO entry + design_lab_main f-string + page() call) from 7c90a17. The design lab page (Option A original + Option B) is kept as a reference. noindex intact, not linked from nav/footer/sitemap.
- _labshots/ stays deleted (it was a temp screenshot-serving folder, not the design lab).
- Homepage Spaces section unchanged from ee016ab (the modified Option A editorial split is still shipped on index.html).
- Verified: design-lab.html HTTP 200 (2 Option A cards + 2 Option B bands); homepage Spaces = 2 hall-cards, wine panel, featured ratio 1.40; 0 console/errors; build 29 pages, refs resolve, braces 0, JS OK.

Push:
- wip pushed to primary (OmKardile/venutaihall) — plain push.
- wip pushed to mirror (megatechzy-boop/VCMhall) — user-authorised override of the standing "not to the mirror" rule; plain push (new branch on the mirror, no force).
- main + mirror main untouched (still 7c90a17) — no "PUSH NOW" given.

What's next:
- Awaiting user review. On "PUSH NOW", push wip -> main (fast-forward) + mirror main (plain push).

---
Date: 2026-10-10
Group: Spaces fixes — bigger row labels + both photos on the left (no alternation)
Branch: wip
Commit: (pending)
Status: DONE

What changed (per user: "increase the font size of: Full A/C Hall · up to 1200 guests on those damn cards and i told u to start from the left not right"):
- styles.css: .hall-row-label font-size bumped from clamp(16px,1.4vw,17px) -> clamp(20px,2.2vw,26px) desktop; mobile override 16px -> 18px.
- styles.css: removed the .hall-alt .hall-photo { order: 2; } rule (the photo alternation). Both cards now have the photo on the LEFT (start from the left), Small Hall no longer flips its photo to the right.
- Mobile (<=960) still: photo on top, panel below; <=768: Big Hall 4 numerals in 2x2 grid.

Verification:
- Desktop 1280: both photos order 0 (left), label 26px ivory, overflow 0.
- Mobile 390: label 18px, photo order -1 (top), overflow 0.
- Sweep 320/360/390/768/1280 + 1366x768 + 1920x1080: 0 overflow, 0 console, 0 errors.
- build 29 pages, refs resolve, braces 0, JS OK.

Push:
- wip -> primary (OmKardile/venutaihall) plain push.
- Mirror main NOT updated this round (still 526e747 from the prior force-push; no "PUSH NOW" given). Mirror is now 1 commit behind wip on this fix.

What's next:
- If the user wants the mirror's main updated with this fix too, they can say so or "PUSH NOW".

---
Date: 2026-10-10
Group: Prep for cPanel deploy — delete design-lab.html + add frontend-only .cpanel.yml
Branch: wip
Commit: (pending)
Status: DONE, pushed to wip on BOTH repos. main untouched.

Why:
- cPanel GitDeployment (pulls from mirror megatechzy-boop/VCMhall main) cannot deploy: "The system cannot deploy" because no .cpanel.yml exists at the repo root.
- The live public_html (/home/venutaihall/public_html/) contains SERVER-ONLY files NOT in the git repo: booking-config.php, booking-store.php, admin/, error_log. These must NOT be overwritten by a deploy.
- design-lab.html is a design-study page, not for the public live site, so it should not ship.

What changed:
- _build.py: removed design-lab generation (SEO entry + design_lab_main f-string + page() call). design-lab.html no longer built.
- design-lab.html: deleted.
- .cpanel.yml: created at repo root, frontend-only (user-specified exact content):
    ---
    deployment:
      tasks:
        - export DEPLOYPATH=/home/venutaihall/public_html/
        - /bin/cp *.html $DEPLOYPATH
        - /bin/cp styles.css script.js $DEPLOYPATH
        - /bin/cp -R assets $DEPLOYPATH
  Copies ONLY pages + stylesheet + script + images. Leaves booking.php, popup.php, .htaccess, booking-config.php, booking-store.php, admin/ UNTOUCHED. DEPLOYPATH confirmed = /home/venutaihall/public_html/ via cPanel File Manager screenshot.

Verification:
- _build.py: 28 pages (design-lab gone). _check.py: 1217 refs all resolve. braces 0. node --check OK. _build.py syntax OK.
- .cpanel.yml: valid YAML, 4 tasks.
- Homepage @1280: 2 hall-cards intact (modified Option A), label 26px, featured ratio 1.40, no console/errors. design-lab.html 404.

Push:
- wip -> wip on primary (OmKardile/venutaihall): plain push.
- wip -> wip on mirror (megatechzy-boop/VCMhall): plain push.
- main untouched on both (no "PUSH NOW").

Next (user-driven, cPanel UI, no cmd):
1. Back up public_html in cPanel File Manager first.
2. Confirm git status clean on server (cd /home/venutaihall/VCMhall && git status).
3. "PUSH NOW" -> GLM promotes wip to main on the mirror (fast-forward + plain push).
4. cPanel: Update from Remote, then Deploy HEAD Commit.
5. Test live site (phone, one booking, admin login).

---
Date: 2026-10-10
Group: Deployment prep — delete _src clutter + verify deploy manifest
Branch: wip
Commit: (pending)
Status: DONE, will push wip to both repos. main untouched.

What changed:
- Deleted _src/ folder (orphaned tracked clutter from commit 09c345b; no references in _build.py/_check.py/script.js/any HTML; would NOT have been deployed since *.html is root-only and cp -R assets only copies assets/). Repo root is now clean.
- Confirmed (from prior commit 8950d47): design-lab.html gone + _build.py generation removed; .cpanel.yml present with exact frontend-only content.

Deploy manifest (what .cpanel.yml copies):
- *.html (28 files): about, big-hall, birthdays, check-availability, compare, contact, corporate-events, details, dining-hall, engagements, events, everything-included, facilities, family-functions, gallery, guest-rooms, index, naming-ceremonies, our-spaces, privacy-policy, receptions, small-hall, social-gatherings, spaces, terms, vip-dining, visit, weddings. No design-lab. No unexpected.
- styles.css, script.js.
- assets/ (37 files): all images (.jpg/.webp) + favicon.svg. Note: big-hall-primary.jpg/.webp and parking.jpg/.webp are unused (no HTML references) but harmless (copied to public_html/assets, just not displayed).
- NOT copied (server stays untouched): booking.php, popup.php, .htaccess, robots.txt, sitemap.xml, .cpanel.yml, _build.py, _check.py, *.md, (design-lab gone, _src gone).

Verification:
- _build.py 28 pages, _check.py 1217 refs all resolve, braces 0, node --check OK, _build.py syntax OK.
- Homepage @1280: 2 hall-cards (modified Option A intact), label 26px, featured ratio 1.40, 0 console/errors.
- design-lab.html 404, no _src, no _src refs.

Push:
- wip -> wip on primary (OmKardile/venutaihall): plain push.
- wip -> wip on mirror (megatechzy-boop/VCMhall): plain push.
- main untouched on both (no "PUSH NOW").

Next: user backs up public_html, confirms git status clean on server, says "PUSH NOW" to promote wip -> mirror main, then cPanel Update from Remote + Deploy HEAD Commit.
