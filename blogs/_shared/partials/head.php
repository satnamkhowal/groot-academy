<?php
$esc = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');

$metaTitle = $blog['meta_title'] ?? $blog['title'] ?? 'Groot Academy Blog';
$metaDescription = $blog['meta_description'] ?? $blog['excerpt'] ?? '';
$canonical = $blog['canonical'] ?? '';
$robots = $blog['robots'] ?? 'index,follow';
$featuredImage = $blog['featured_image'] ?? '';

$articleSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BlogPosting',
    'headline' => $blog['title'] ?? '',
    'description' => $metaDescription,
    'author' => [
        '@type' => 'Organization',
        'name' => $blog['author'] ?? 'Groot Academy',
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Groot Academy',
    ],
];

if (!empty($blog['date_published'])) {
    $articleSchema['datePublished'] = $blog['date_published'];
}
if (!empty($blog['date_modified'])) {
    $articleSchema['dateModified'] = $blog['date_modified'];
}
if ($canonical) {
    $articleSchema['mainEntityOfPage'] = $canonical;
}
if ($featuredImage) {
    $articleSchema['image'] = $featuredImage;
}
?>
<!doctype html>
<html lang="en">
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
    <meta property="og:title" content="<?= $esc($metaTitle) ?>">
    <meta property="og:description" content="<?= $esc($metaDescription) ?>">
    <?php if ($canonical): ?><meta property="og:url" content="<?= $esc($canonical) ?>"><?php endif; ?>
    <?php if ($featuredImage): ?><meta property="og:image" content="<?= $esc($featuredImage) ?>"><?php endif; ?>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $esc($metaTitle) ?>">
    <meta name="twitter:description" content="<?= $esc($metaDescription) ?>">
    <?php if ($featuredImage): ?><meta name="twitter:image" content="<?= $esc($featuredImage) ?>"><?php endif; ?>

    <link rel="stylesheet" href="/blogs/_shared/assets/blog.css">
    <script type="application/ld+json"><?= json_encode($articleSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body>
