<?php
$pageTitle = $pageTitle ?? 'Groot Academy Jaipur';
$pageDescription = $pageDescription ?? 'Career-focused IT training in Jaipur with practical learning, projects and guidance.';
?>
<!doctype html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="robots" content="noindex,follow">
    <meta name="theme-color" content="#0d47a1">
    <link rel="icon" href="../assets/images/Groot-Logo-icon-transparent-png-on-white.png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header" id="top">
    <div class="container nav-wrap">
        <a class="brand" href="./" aria-label="Groot Academy home">
            <img src="../assets/images/Groot-Logo-transparent.png" alt="Groot Academy">
        </a>

        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-nav" aria-label="Open navigation">
            <span></span><span></span><span></span>
        </button>

        <nav class="primary-nav" id="primary-nav" aria-label="Primary navigation">
            <a href="#courses">Courses</a>
            <a href="#why-us">Why Groot</a>
            <a href="#learning">Learning</a>
            <a href="#centers">Centers</a>
            <a href="../blogs/">Blog</a>
            <a href="#contact">Contact</a>
        </nav>

        <a class="btn btn-primary nav-cta" href="#enquiry">Enquire Now</a>
    </div>
</header>
