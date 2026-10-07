# Placeholders

Photos that are referenced by the design but do not exist yet. They render as hatched, dashed-border `.photo-placeholder` boxes with a camera icon and "Photo coming soon", so nothing looks broken while they are pending.

To fill one in: drop the file into `assets/` with the name below, replace the placeholder `<div class="photo-placeholder">...</div>` with the standard `<picture>` pattern used by neighbouring tiles (`.webp` source + `.jpg` fallback, `loading="lazy"`, descriptive `alt`), delete the `data-placeholder` attribute and the HTML comment, then run `python _build.py && python _check.py`.

## Missing images

| File | Ratio | Where | Notes |
| --- | --- | --- | --- |
| `parking.jpg` | 4:3 | Homepage → The Big Hall Package, bottom-left tile | **CONFIRM with client: dedicated parking?** — do not photograph or caption parking until confirmed. |
| `guest-room-2.jpg` | 4:3 | Homepage → The Big Hall Package, feature tile (`.feature-angle`) | Second angle of a VIP guest room, to sit beside the main `guest-room.jpg`. |

## Open questions for the client

- Is there dedicated on-site parking to photograph and advertise? (Currently marked `data-placeholder="CONFIRM with client: dedicated parking?"` on the parking line.)

## Already available (do not re-request)

`hero-hall`, `small-hall`, `dining-hall`, `vip-dining`, `guest-room`, `venue-exterior`, `about-portrait`, `about-venue`, `contact-map` — each as `.jpg` + `.webp`.
