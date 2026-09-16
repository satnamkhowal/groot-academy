# AI Work Log — Course Single Landing Page

Date: 2026-09-16
Tool: ChatGPT / GitHub connector
Repository: `satnamkhowal/groot-academy`
Branch: `main`

## Pre-work audit

- Rechecked `/logs` before editing and preserved existing SEO/blog work.
- Rechecked the latest root `default.php`; no newer overlapping homepage change was present.
- Searched the current `main` tree/code for an existing `course-single.php` / `single.php` course template. No matching reusable course-single file was present in the repository.
- Preserved the existing homepage visual direction: white background, dark text, muted grey copy and black CTA treatment.

## Changes completed

- CREATED `/course-single.php` as a reusable PHP landing-page template.
- UPDATED `/default.php` so it acts as the homepage configuration and renders `/course-single.php`.
- Kept homepage SEO title, meta description, canonical URL, favicon, Groot logo, Open Graph and Twitter metadata.
- Kept theme variables in `default.php` so future landing-page design colours can be changed centrally without rewriting the course template.
- Added responsive sticky header and section navigation.
- Added hero section with course discovery CTAs and learning highlights.
- Added course-style snapshot/sidebar presentation.
- Added course-area cards for Full Stack, Python, Java, Data Analytics & Power BI, Data Science & Machine Learning and Digital Marketing.
- Linked course cards to the matching existing SEO career guides under `/blogs/` instead of creating broken course URLs.
- Added a four-step learning flow, practical-learning benefits, career-guide CTA and FAQ section.
- Added EducationalOrganization, WebSite, WebPage, ItemList and FAQPage structured data.
- Kept claims factual and avoided placement/job guarantees.
- Existing `.htaccess` remains unchanged, so `default.php` continues to be the default root document on compatible hosting.

## Reuse model

A future course landing page can define page-specific variables (title, description, hero copy, course data, FAQ data and theme values) and then load:

```php
require __DIR__ . '/course-single.php';
```

This keeps the landing-page layout centralized while allowing page-specific SEO and content.

## Status

COMPLETED — the root homepage now uses the reusable course-single landing-page system while retaining the colour theme originally established in `default.php`.
