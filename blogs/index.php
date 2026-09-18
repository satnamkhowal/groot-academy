<?php
$blogRegistry = require __DIR__ . '/_shared/blog-registry.php';
$posts = array_values($blogRegistry);

$itemList = [];
foreach ($posts as $index => $post) {
    $itemList[] = [
        '@type' => 'ListItem',
        'position' => $index + 1,
        'name' => $post['title'],
        'url' => 'https://grootacademy.com/blogs/' . $post['slug'] . '/',
    ];
}

$collectionSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    'name' => 'Groot Academy Career & Technology Blog',
    'url' => 'https://grootacademy.com/blogs/',
    'description' => 'Practical career guides for coding, development, DevOps, Cloud Computing, data analytics, Business Intelligence, AI, digital marketing and technology learning in Jaipur.',
    'inLanguage' => 'en-IN',
    'mainEntity' => [
        '@type' => 'ItemList',
        'itemListElement' => $itemList,
    ],
];
?>
<!doctype html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Technology & Career Guides in Jaipur | Groot Academy Blog</title>
    <meta name="description" content="Explore Groot Academy guides for coding, web development, DevOps, CI/CD, Cloud Computing, AWS, data analytics, Power BI, AI, SQL, Excel and digital marketing in Jaipur.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://grootacademy.com/blogs/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Groot Academy">
    <meta property="og:title" content="Technology & Career Guides in Jaipur | Groot Academy Blog">
    <meta property="og:description" content="Practical guides for students exploring coding, development, DevOps, CI/CD, Cloud Computing, AWS, analytics, Power BI, AI, databases and digital marketing careers.">
    <meta property="og:url" content="https://grootacademy.com/blogs/">
    <link rel="stylesheet" href="/blogs/_shared/assets/blog.css">
    <script type="application/ld+json"><?= json_encode($collectionSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body>
<?php require __DIR__ . '/_shared/partials/header.php'; ?>
<main class="ga-blog-page">
    <section class="ga-blog-hero">
        <div class="ga-container ga-blog-hero-inner">
            <span class="ga-blog-category">Groot Academy Blog</span>
            <h1>Technology & Career Guides for Students in Jaipur</h1>
            <p class="ga-blog-excerpt">Explore step-by-step learning paths, practical skill guides and career-oriented technology articles from Groot Academy Vijay Path, Mansarovar, Jaipur.</p>
        </div>
    </section>
    <div class="ga-container ga-blog-grid">
        <div class="ga-blog-main">
            <div class="ga-blog-content">
                <h2>Explore Career-Focused Learning Guides</h2>
                <p>Use these guides to understand what to learn first, how technologies connect, which practical projects can strengthen your skills and what to explore next.</p>
                <?php foreach ($posts as $post): ?>
                    <article>
                        <h3><a href="/blogs/<?= htmlspecialchars($post['slug'], ENT_QUOTES, 'UTF-8') ?>/"><?= htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8') ?></a></h3>
                        <p><?= htmlspecialchars($post['description'], ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>
<?php require __DIR__ . '/_shared/partials/footer.php'; ?>
