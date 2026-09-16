<?php
/**
 * Groot Academy homepage configuration.
 *
 * The visual theme stays here so the reusable course-single.php template can
 * inherit the same colours while the landing-page structure remains reusable.
 */

$siteUrl = 'https://grootacademy.com/';
$siteName = 'Groot Academy';
$canonicalUrl = $siteUrl;
$pageTitle = 'Groot Academy Jaipur | IT Training, Coding & Career Courses';
$pageDescription = 'Groot Academy offers practical IT training in Jaipur for Python, Full Stack Development, Java, Data Analytics, Power BI, Data Science, Web Development and Digital Marketing.';

$logo = '/assets/images/Groot-Logo-transparent.png';
$siteIcon = '/assets/images/Groot-Logo-icon-transparent-png-on-white.png';

// Existing default.php colour direction: clean white, dark text and black CTA.
$theme = [
    'background' => '#ffffff',
    'surface' => '#f7f7f7',
    'surfaceStrong' => '#efefef',
    'text' => '#222222',
    'muted' => '#555555',
    'primary' => '#111111',
    'border' => '#e6e6e6',
];

$heroEyebrow = 'Groot Academy · Jaipur';
$heroTitle = 'Learn practical IT skills. Build projects. Create your next career path.';
$heroDescription = 'Explore coding, full stack development, Python, Java, data analytics, Power BI, data science and digital skills through a structured, practical learning approach.';

require __DIR__ . '/course-single.php';
