# Placeholders

Items the design references that are not confirmed or not shot yet. They are marked with `data-placeholder` attributes (and HTML comments) rather than visible boxes, so nothing looks broken while they are pending.

To fill one in: confirm with the client, drop the file into `assets/` with the name below (`.webp` + `.jpg`), give the row a standard `<picture>` frame following the neighbouring package rows (`.webp` source + `.jpg` fallback, `loading="lazy"`, descriptive `alt`), delete the `data-placeholder` attribute and the HTML comment, then run `python _build.py && python _check.py`.

## Missing images

| File | Ratio | Where | Notes |
| --- | --- | --- | --- |
| `parking.jpg` | 4:3 | Homepage → The Big Hall Package, parking row | **CONFIRM with client: dedicated parking?** — do not photograph or caption parking until confirmed. The row currently renders as an icon + label line only (car icon, "On-site Parking") with no figure and no photo, carrying `data-placeholder="CONFIRM with client: dedicated parking?"`. |
| `guest-room-2.jpg` | 4:3 | Homepage → The Big Hall Package, featured Guest Rooms row | Second angle of a VIP guest room, to sit beside the main `guest-room.jpg`. The row shows the main photo already; only the HTML comment `<!-- placeholder: guest-room-2.jpg | 4:3 | VIP guest room, second angle -->` marks the spot for the second angle. |

## Open questions for the client

- Is there dedicated on-site parking to photograph and advertise? Marked in two places: `data-placeholder="CONFIRM with client: dedicated parking?"` on the homepage parking row, and `data-placeholder="CONFIRM parking"` on the **Safety & Access** lists (homepage + `facilities.html`). The "Ample parking" bullet was removed from both lists until confirmed.

## Already available (do not re-request)

`hero-hall`, `small-hall`, `dining-hall`, `vip-dining`, `guest-room`, `venue-exterior`, `about-portrait`, `about-venue`, `contact-map` — each as `.jpg` + `.webp`.
