# Groot Academy Blog Template

This folder contains the reusable PHP blog system for Groot Academy.

## Structure

```text
blogs/
├── _shared/
│   ├── blog-layout.php
│   ├── blog-data.php
│   └── assets/
│       └── blog.css
├── sample-blog/
│   ├── index.php
│   └── images/
│       └── README.md
└── README.md
```

## Add a new blog

1. Copy the `sample-blog` folder.
2. Rename it using an SEO-friendly slug, for example `python-course-in-jaipur`.
3. Edit only the `$blog` data inside the new folder's `index.php`.
4. Keep that blog's images inside its own `images/` folder.
5. Do not copy the shared layout or CSS.

## Change the design for every blog

Edit only:

- `_shared/blog-layout.php` for markup/layout.
- `_shared/assets/blog.css` for styling.

All blogs that include the shared layout will automatically use the updated template.
