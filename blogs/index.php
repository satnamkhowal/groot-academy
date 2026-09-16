<?php
$posts = [
    ['title' => 'IT Career Course Guidance for Students in Jaipur', 'slug' => 'it-career-course-guidance-jaipur', 'description' => 'Choose a learning path across programming, development, analytics and digital marketing.'],
    ['title' => 'Software Development and Coding Career Guidance in Jaipur', 'slug' => 'software-development-coding-career-guide-jaipur', 'description' => 'Build programming fundamentals and move toward frontend, backend or full stack development.'],
    ['title' => 'Data Analytics and Power BI Career Guidance in Jaipur', 'slug' => 'data-analytics-power-bi-career-guide-jaipur', 'description' => 'Learn a practical roadmap with Excel, SQL, Power BI, Python and real datasets.'],
    ['title' => 'Digital Marketing Career Guidance for Beginners in Jaipur', 'slug' => 'digital-marketing-career-guide-jaipur', 'description' => 'Explore SEO, social media, paid ads, content, email marketing and analytics.'],
    ['title' => 'Full Stack Web Development Career Guidance in Jaipur', 'slug' => 'full-stack-web-development-career-guide-jaipur', 'description' => 'Learn frontend, backend, databases, APIs, Git and complete web application development.'],
    ['title' => 'Python Programming Career Guidance for Beginners in Jaipur', 'slug' => 'python-programming-career-guide-jaipur', 'description' => 'Start with Python fundamentals and move into projects, web development, analytics and automation.'],
    ['title' => 'Java Programming and Software Development Career Guide in Jaipur', 'slug' => 'java-programming-software-development-jaipur', 'description' => 'Build Core Java skills, then progress to JDBC, SQL, Spring Boot and REST APIs.'],
    ['title' => 'MERN Stack and React Development Career Guidance in Jaipur', 'slug' => 'mern-stack-react-development-career-guide-jaipur', 'description' => 'Learn JavaScript, React, Node.js, Express, MongoDB and full stack project development.'],
    ['title' => 'SQL and Database Career Guidance for Students in Jaipur', 'slug' => 'sql-database-career-guide-jaipur', 'description' => 'Build database skills with queries, joins, subqueries, CRUD operations and practical datasets.'],
    ['title' => 'Web Designing and Frontend Development Career Guide in Jaipur', 'slug' => 'web-designing-frontend-development-jaipur', 'description' => 'Learn HTML, CSS, responsive design, Bootstrap, JavaScript, UI basics and website projects.'],
    ['title' => 'C, C++ and Data Structures Career Guidance in Jaipur', 'slug' => 'c-cpp-dsa-career-guide-jaipur', 'description' => 'Strengthen programming logic, OOP, Data Structures and Algorithms through coding practice.'],
    ['title' => 'Excel and Advanced Excel Career Guidance in Jaipur', 'slug' => 'excel-advanced-excel-career-guide-jaipur', 'description' => 'Learn formulas, lookups, Pivot Tables, dashboards, data cleaning and business reporting.'],
];

$collectionSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    'name' => 'Groot Academy Career & Technology Blog',
    'url' => 'https://grootacademy.com/blogs/',
    'description' => 'Practical career guides for coding, development, data analytics, digital marketing and technology learning in Jaipur.',
    'inLanguage' => 'en-IN',
];
?>
<!doctype html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Technology & Career Guides in Jaipur | Groot Academy Blog</title>
    <meta name="description" content="Explore practical Groot Academy guides for coding, web development, data analytics, SQL, Excel, digital marketing and IT career learning in Jaipur.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://grootacademy.com/blogs/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Groot Academy">
    <meta property="og:title" content="Technology & Career Guides in Jaipur | Groot Academy Blog">
    <meta property="og:description" content="Practical guides for students exploring coding, development, analytics, databases, Excel and digital marketing careers.">
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
