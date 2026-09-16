# Groot Academy — New Site Scratch Build

This folder is an isolated from-scratch redesign workspace for Groot Academy.

## Purpose

- Build a fresh modern website without changing the current live/root pages.
- Keep the new design modular with shared PHP includes.
- Reuse approved Groot Academy brand assets already stored in the repository.
- Move approved sections into production only after review.

## Current structure

```text
newsite/
├── index.php
├── includes/
│   ├── header.php
│   └── footer.php
├── assets/
│   ├── css/style.css
│   └── js/main.js
└── README.md
```

## Current design direction

- White, blue and green Groot Academy branding.
- Premium education/technology layout.
- Sticky responsive header and mobile navigation.
- Homepage hero, course cards, practical-learning benefits, learning flow, Jaipur centers and enquiry UI.
- Existing SEO career-guide URLs are reused for course links.
- `noindex,follow` is intentionally set while this remains a staging/scratch build.
- The enquiry form is visual only for now; backend lead handling is not connected yet.

## Next steps

1. Review homepage visual direction.
2. Create reusable course, center, about, placement, contact and blog templates inside `newsite`.
3. Connect a production lead form only after field/workflow confirmation.
4. Add final approved hero and course images.
5. Run responsive/accessibility/SEO checks.
6. Remove `noindex` only when the new site is approved for publishing.
