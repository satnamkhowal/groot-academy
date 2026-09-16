<?php
$esc = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');

$metaTitle = $blog['meta_title'] ?? $blog['title'] ?? 'Groot Academy Blog';
$metaDescription = $blog['meta_description'] ?? $blog['excerpt'] ?? '';
$canonical = $blog['canonical'] ?? '';
$robots = $blog['robots'] ?? 'index,follow';
$featuredImage = $blog['featured_image'] ?? '';
$authorName = $blog['author'] ?? 'Groot Academy';
$datePublished = $blog['date_published'] ?? '';
$dateModified = $blog['date_modified'] ?? $datePublished;

$articleSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BlogPosting',
    'headline' => $blog['title'] ?? '',
    'description' => $metaDescription,
    'author' => [
        '@type' => 'Organization',
        'name' => $authorName,
        'url' => 'https://grootacademy.com/',
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Groot Academy',
        'url' => 'https://grootacademy.com/',
    ],
    'inLanguage' => 'en-IN',
];

if ($datePublished) {
    $articleSchema['datePublished'] = $datePublished;
}
if ($dateModified) {
    $articleSchema['dateModified'] = $dateModified;
}
if ($canonical) {
    $articleSchema['url'] = $canonical;
    $articleSchema['mainEntityOfPage'] = [
        '@type' => 'WebPage',
        '@id' => $canonical,
    ];
}
if ($featuredImage) {
    $articleSchema['image'] = $featuredImage;
}

$breadcrumbSchema = null;
if ($canonical && !empty($blog['title'])) {
    $breadcrumbSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => 'https://grootacademy.com/',
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Blogs',
                'item' => 'https://grootacademy.com/blogs/',
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => $blog['title'],
                'item' => $canonical,
            ],
        ],
    ];
}
?>
<!doctype html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $esc($metaTitle) ?></title>
    <meta name="description" content="<?= $esc($metaDescription) ?>">
    <meta name="robots" content="<?= $esc($robots) ?>">

    <?php if ($canonical): ?>
        <link rel="canonical" href="<?= $esc($canonical) ?>">
    <?php endif; ?>

    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Groot Academy">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="<?= $esc($metaTitle) ?>">
    <meta property="og:description" content="<?= $esc($metaDescription) ?>">
    <?php if ($canonical): ?><meta property="og:url" content="<?= $esc($canonical) ?>"><?php endif; ?>
    <?php if ($featuredImage): ?><meta property="og:image" content="<?= $esc($featuredImage) ?>"><?php endif; ?>
    <?php if ($datePublished): ?><meta property="article:published_time" content="<?= $esc($datePublished) ?>"><?php endif; ?>
    <?php if ($dateModified): ?><meta property="article:modified_time" content="<?= $esc($dateModified) ?>"><?php endif; ?>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $esc($metaTitle) ?>">
    <meta name="twitter:description" content="<?= $esc($metaDescription) ?>">
    <?php if ($featuredImage): ?><meta name="twitter:image" content="<?= $esc($featuredImage) ?>"><?php endif; ?>

    <link rel="stylesheet" href="/blogs/_shared/assets/blog.css">
    <script type="application/ld+json"><?= json_encode($articleSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
    <?php if ($breadcrumbSchema): ?>
        <script type="application/ld+json"><?= json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
    <?php endif; ?>
</head>
<body>
