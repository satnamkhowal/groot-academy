<?php
/**
 * Reusable Groot Academy course/landing-page template.
 *
 * Pages can define the variables below before requiring this file.
 * default.php currently acts as the homepage configuration and loads this template.
 */

$siteUrl = $siteUrl ?? 'https://grootacademy.com/';
$siteName = $siteName ?? 'Groot Academy';
$pageTitle = $pageTitle ?? 'Groot Academy Jaipur | IT Training, Coding & Career Courses';
$pageDescription = $pageDescription ?? 'Practical IT training in Jaipur for coding, full stack development, Python, Java, data analytics, Power BI and digital skills.';
$logo = $logo ?? '/assets/images/Groot-Logo-transparent.png';
$siteIcon = $siteIcon ?? '/assets/images/Groot-Logo-icon-transparent-png-on-white.png';
$canonicalUrl = $canonicalUrl ?? $siteUrl;
$heroEyebrow = $heroEyebrow ?? 'Practical IT Training in Jaipur';
$heroTitle = $heroTitle ?? 'Build job-relevant technology skills with practical learning.';
$heroDescription = $heroDescription ?? 'Learn coding, software development, data analytics and digital skills through structured concepts, guided practice and portfolio-focused projects.';

$theme = $theme ?? [
    'background' => '#ffffff',
    'surface' => '#f7f7f7',
    'surfaceStrong' => '#efefef',
    'text' => '#222222',
    'muted' => '#555555',
    'primary' => '#111111',
    'border' => '#e6e6e6',
];

$courses = $courses ?? [
    [
        'name' => 'Full Stack Development',
        'tag' => 'Web Development',
        'description' => 'Build complete web applications while learning frontend, backend, databases and practical deployment workflows.',
        'skills' => ['HTML & CSS', 'JavaScript', 'Backend', 'Databases'],
        'url' => '/blogs/full-stack-web-development-career-guide-jaipur/',
    ],
    [
        'name' => 'Python Programming',
        'tag' => 'Programming',
        'description' => 'Develop strong programming fundamentals with Python and progress toward automation, backend or data-focused pathways.',
        'skills' => ['Python', 'Logic Building', 'OOP', 'Projects'],
        'url' => '/blogs/python-programming-career-guide-jaipur/',
    ],
    [
        'name' => 'Java Programming',
        'tag' => 'Software Development',
        'description' => 'Learn Java fundamentals, object-oriented programming and the problem-solving skills used in software development.',
        'skills' => ['Core Java', 'OOP', 'Collections', 'Problem Solving'],
        'url' => '/blogs/java-programming-software-development-jaipur/',
    ],
    [
        'name' => 'Data Analytics & Power BI',
        'tag' => 'Analytics',
        'description' => 'Turn raw data into clear business insights using spreadsheets, SQL, Power BI, dashboards and analytical thinking.',
        'skills' => ['Excel', 'SQL', 'Power BI', 'Dashboards'],
        'url' => '/blogs/data-analytics-power-bi-career-guide-jaipur/',
    ],
    [
        'name' => 'Data Science & Machine Learning',
        'tag' => 'AI & Data',
        'description' => 'Build a practical foundation in data preparation, analysis, machine learning concepts and project-based workflows.',
        'skills' => ['Python', 'Data Analysis', 'ML Concepts', 'Projects'],
        'url' => '/blogs/data-science-machine-learning-career-guide-jaipur/',
    ],
    [
        'name' => 'Digital Marketing',
        'tag' => 'Marketing',
        'description' => 'Understand search, content, performance marketing and measurement with a practical digital campaign workflow.',
        'skills' => ['SEO', 'Content', 'Campaigns', 'Analytics'],
        'url' => '/blogs/digital-marketing-career-guide-jaipur/',
    ],
];

$learningSteps = $learningSteps ?? [
    ['number' => '01', 'title' => 'Learn the fundamentals', 'text' => 'Start with concepts and tools in a structured sequence so the basics are clear before moving ahead.'],
    ['number' => '02', 'title' => 'Practice with guided tasks', 'text' => 'Apply each concept through exercises, coding tasks, datasets, dashboards or campaign activities.'],
    ['number' => '03', 'title' => 'Build practical projects', 'text' => 'Combine multiple skills into realistic projects that demonstrate how the workflow works end to end.'],
    ['number' => '04', 'title' => 'Prepare for the next step', 'text' => 'Review your work, strengthen weak areas and build a clear roadmap for internships, interviews or advanced learning.'],
];

$faqs = $faqs ?? [
    [
        'question' => 'Which IT course should a beginner choose?',
        'answer' => 'The right starting point depends on your goal. Python or foundational programming can suit learners who want coding basics, while data analytics, web development or digital marketing may fit different career interests. A roadmap should be selected after comparing the skills used in each field.',
    ],
    [
        'question' => 'Are the courses focused on practical learning?',
        'answer' => 'The landing-page learning model is structured around concepts, guided practice and project work so learners can connect theory with practical application.',
    ],
    [
        'question' => 'Can I explore a course before deciding?',
        'answer' => 'Yes. The career guides linked from each course card explain typical skills, learning paths and project ideas so you can compare options before choosing a direction.',
    ],
    [
        'question' => 'Where is Groot Academy focused?',
        'answer' => 'Groot Academy provides technology and career-skills training for learners in Jaipur, with course information and career guides available online through the website.',
    ],
];

if (!function_exists('grootEsc')) {
    function grootEsc($value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }
}

$organizationSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'EducationalOrganization',
            '@id' => $siteUrl . '#organization',
            'name' => $siteName,
            'url' => $siteUrl,
            'logo' => 'https://grootacademy.com' . $logo,
            'description' => $pageDescription,
            'areaServed' => [
                '@type' => 'City',
                'name' => 'Jaipur',
            ],
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonicalUrl . '#webpage',
            'url' => $canonicalUrl,
            'name' => $pageTitle,
            'description' => $pageDescription,
            'isPartOf' => ['@id' => $siteUrl . '#website'],
            'about' => ['@id' => $siteUrl . '#organization'],
        ],
        [
            '@type' => 'WebSite',
            '@id' => $siteUrl . '#website',
            'url' => $siteUrl,
            'name' => $siteName,
            'publisher' => ['@id' => $siteUrl . '#organization'],
        ],
        [
            '@type' => 'ItemList',
            'name' => 'Groot Academy Course Areas',
            'itemListElement' => array_map(static function ($course, $index) use ($siteUrl) {
                return [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'name' => $course['name'],
                    'url' => rtrim($siteUrl, '/') . $course['url'],
                ];
            }, $courses, array_keys($courses)),
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => array_map(static function ($faq) {
                return [
                    '@type' => 'Question',
                    'name' => $faq['question'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq['answer'],
                    ],
                ];
            }, $faqs),
        ],
    ],
];
?>
<!doctype html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= grootEsc($pageTitle); ?></title>
    <meta name="description" content="<?= grootEsc($pageDescription); ?>">
    <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
    <meta name="author" content="Groot Academy">
    <meta name="application-name" content="Groot Academy">
    <meta name="theme-color" content="<?= grootEsc($theme['background']); ?>">

    <link rel="canonical" href="<?= grootEsc($canonicalUrl); ?>">
    <link rel="icon" type="image/png" href="<?= grootEsc($siteIcon); ?>">
    <link rel="shortcut icon" type="image/png" href="<?= grootEsc($siteIcon); ?>">
    <link rel="apple-touch-icon" href="<?= grootEsc($siteIcon); ?>">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:site_name" content="<?= grootEsc($siteName); ?>">
    <meta property="og:title" content="<?= grootEsc($pageTitle); ?>">
    <meta property="og:description" content="<?= grootEsc($pageDescription); ?>">
    <meta property="og:url" content="<?= grootEsc($canonicalUrl); ?>">
    <meta property="og:image" content="https://grootacademy.com<?= grootEsc($logo); ?>">
    <meta property="og:image:alt" content="Groot Academy logo">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= grootEsc($pageTitle); ?>">
    <meta name="twitter:description" content="<?= grootEsc($pageDescription); ?>">
    <meta name="twitter:image" content="https://grootacademy.com<?= grootEsc($logo); ?>">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <script type="application/ld+json"><?= json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

    <style>
        :root {
            --ga-bg: <?= grootEsc($theme['background']); ?>;
            --ga-surface: <?= grootEsc($theme['surface']); ?>;
            --ga-surface-strong: <?= grootEsc($theme['surfaceStrong']); ?>;
            --ga-text: <?= grootEsc($theme['text']); ?>;
            --ga-muted: <?= grootEsc($theme['muted']); ?>;
            --ga-primary: <?= grootEsc($theme['primary']); ?>;
            --ga-border: <?= grootEsc($theme['border']); ?>;
            --ga-radius: 20px;
            --ga-shadow: 0 18px 50px rgba(0, 0, 0, .07);
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            background: var(--ga-bg);
            color: var(--ga-text);
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }
        img { max-width: 100%; height: auto; }
        a { color: inherit; }
        .ga-container { width: min(1160px, calc(100% - 40px)); margin: 0 auto; }
        .ga-section { padding: 92px 0; }
        .ga-section--soft { background: var(--ga-surface); }
        .ga-kicker {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            font-size: 13px;
            line-height: 1;
            font-weight: 800;
            letter-spacing: .11em;
            text-transform: uppercase;
            color: var(--ga-muted);
            margin-bottom: 18px;
        }
        .ga-kicker::before { content: ''; width: 28px; height: 2px; background: var(--ga-primary); }
        .ga-section-title { font-size: clamp(32px, 4vw, 50px); line-height: 1.08; letter-spacing: -.035em; margin: 0 0 18px; }
        .ga-section-copy { max-width: 700px; color: var(--ga-muted); font-size: 18px; margin: 0; }
        .ga-btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            min-height: 50px;
            padding: 13px 22px;
            border: 1px solid var(--ga-primary);
            border-radius: 10px;
            background: var(--ga-primary);
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            transition: transform .2s ease, background .2s ease, color .2s ease;
        }
        .ga-btn:hover { color: #fff; transform: translateY(-2px); }
        .ga-btn--ghost { background: transparent; color: var(--ga-primary); border-color: var(--ga-border); }
        .ga-btn--ghost:hover { background: var(--ga-primary); color: #fff; border-color: var(--ga-primary); }

        .ga-header {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255, 255, 255, .95);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--ga-border);
        }
        .ga-header__inner { min-height: 76px; display: flex; align-items: center; justify-content: space-between; gap: 28px; }
        .ga-brand { display: inline-flex; align-items: center; text-decoration: none; flex: 0 0 auto; }
        .ga-brand img { width: 190px; max-height: 58px; object-fit: contain; object-position: left center; }
        .ga-nav { display: flex; align-items: center; justify-content: flex-end; gap: 26px; flex-wrap: wrap; }
        .ga-nav a { text-decoration: none; font-size: 14px; font-weight: 700; color: var(--ga-muted); }
        .ga-nav a:hover { color: var(--ga-primary); }
        .ga-nav .ga-btn { color: #fff; padding: 10px 17px; min-height: 42px; }

        .ga-hero {
            position: relative;
            overflow: hidden;
            padding: 94px 0 74px;
            background:
                radial-gradient(circle at 82% 20%, rgba(0,0,0,.055), transparent 26%),
                linear-gradient(180deg, #fff 0%, #fafafa 100%);
            border-bottom: 1px solid var(--ga-border);
        }
        .ga-hero::after {
            content: '';
            position: absolute;
            width: 330px;
            height: 330px;
            right: -170px;
            bottom: -170px;
            border: 1px solid #ddd;
            border-radius: 50%;
        }
        .ga-hero__grid { display: grid; grid-template-columns: minmax(0, 1.18fr) minmax(340px, .82fr); gap: 70px; align-items: center; }
        .ga-hero h1 { font-size: clamp(43px, 6.1vw, 76px); line-height: .99; letter-spacing: -.055em; margin: 0 0 24px; max-width: 790px; }
        .ga-hero__lead { font-size: 19px; color: var(--ga-muted); max-width: 700px; margin: 0 0 30px; }
        .ga-hero__actions { display: flex; flex-wrap: wrap; gap: 12px; margin-bottom: 34px; }
        .ga-checks { display: flex; flex-wrap: wrap; gap: 10px 24px; padding: 0; margin: 0; list-style: none; color: var(--ga-muted); font-size: 14px; font-weight: 700; }
        .ga-checks li::before { content: '✓'; color: var(--ga-primary); font-weight: 900; margin-right: 7px; }

        .ga-snapshot {
            position: relative;
            padding: 30px;
            background: #fff;
            border: 1px solid var(--ga-border);
            border-radius: 26px;
            box-shadow: var(--ga-shadow);
        }
        .ga-snapshot__top { display: flex; align-items: center; justify-content: space-between; gap: 16px; padding-bottom: 22px; border-bottom: 1px solid var(--ga-border); }
        .ga-snapshot__label { font-size: 12px; color: var(--ga-muted); text-transform: uppercase; letter-spacing: .12em; font-weight: 800; }
        .ga-snapshot__icon { width: 52px; height: 52px; border-radius: 14px; background: var(--ga-primary); display: grid; place-items: center; color: #fff; font-size: 20px; font-weight: 900; }
        .ga-snapshot h2 { font-size: 30px; line-height: 1.15; letter-spacing: -.025em; margin: 20px 0 8px; }
        .ga-snapshot p { color: var(--ga-muted); margin: 0 0 22px; }
        .ga-snapshot__list { display: grid; gap: 10px; }
        .ga-snapshot__row { display: flex; justify-content: space-between; gap: 20px; padding: 11px 0; border-top: 1px solid var(--ga-border); font-size: 14px; }
        .ga-snapshot__row span:first-child { color: var(--ga-muted); }
        .ga-snapshot__row strong { text-align: right; }

        .ga-proof { border-bottom: 1px solid var(--ga-border); }
        .ga-proof__grid { display: grid; grid-template-columns: repeat(4, 1fr); }
        .ga-proof__item { padding: 30px 24px; border-right: 1px solid var(--ga-border); }
        .ga-proof__item:first-child { border-left: 1px solid var(--ga-border); }
        .ga-proof__item strong { display: block; font-size: 20px; letter-spacing: -.02em; margin-bottom: 5px; }
        .ga-proof__item span { color: var(--ga-muted); font-size: 14px; }

        .ga-courses-head { display: flex; justify-content: space-between; align-items: end; gap: 30px; margin-bottom: 40px; }
        .ga-course-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .ga-course-card {
            min-height: 100%;
            padding: 28px;
            background: #fff;
            border: 1px solid var(--ga-border);
            border-radius: var(--ga-radius);
            display: flex;
            flex-direction: column;
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
        }
        .ga-course-card:hover { transform: translateY(-4px); box-shadow: var(--ga-shadow); border-color: #cecece; }
        .ga-course-card__tag { width: fit-content; padding: 6px 10px; border-radius: 999px; background: var(--ga-surface); color: var(--ga-muted); font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: .06em; margin-bottom: 22px; }
        .ga-course-card h3 { font-size: 25px; line-height: 1.17; letter-spacing: -.025em; margin: 0 0 12px; }
        .ga-course-card p { color: var(--ga-muted); margin: 0 0 20px; }
        .ga-skill-list { display: flex; flex-wrap: wrap; gap: 7px; padding: 0; margin: auto 0 22px; list-style: none; }
        .ga-skill-list li { padding: 6px 9px; border: 1px solid var(--ga-border); border-radius: 7px; font-size: 12px; font-weight: 700; color: var(--ga-muted); }
        .ga-card-link { text-decoration: none; font-weight: 800; font-size: 14px; }
        .ga-card-link span { display: inline-block; margin-left: 5px; transition: transform .2s ease; }
        .ga-card-link:hover span { transform: translateX(4px); }

        .ga-split { display: grid; grid-template-columns: .9fr 1.1fr; gap: 72px; align-items: start; }
        .ga-sticky { position: sticky; top: 112px; }
        .ga-step-list { display: grid; gap: 14px; }
        .ga-step { display: grid; grid-template-columns: 58px 1fr; gap: 18px; padding: 24px; border: 1px solid var(--ga-border); border-radius: 16px; background: #fff; }
        .ga-step__number { width: 58px; height: 58px; border-radius: 50%; border: 1px solid var(--ga-border); display: grid; place-items: center; font-size: 13px; font-weight: 900; }
        .ga-step h3 { margin: 1px 0 6px; font-size: 21px; letter-spacing: -.02em; }
        .ga-step p { color: var(--ga-muted); margin: 0; font-size: 15px; }

        .ga-feature-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-top: 38px; }
        .ga-feature { padding: 26px; background: var(--ga-surface); border-radius: 16px; border: 1px solid var(--ga-border); }
        .ga-feature__mark { width: 40px; height: 40px; border-radius: 10px; background: var(--ga-primary); color: #fff; display: grid; place-items: center; font-weight: 900; margin-bottom: 18px; }
        .ga-feature h3 { font-size: 19px; margin: 0 0 8px; }
        .ga-feature p { color: var(--ga-muted); font-size: 14px; margin: 0; }

        .ga-guides { padding: 38px; background: var(--ga-primary); color: #fff; border-radius: 24px; display: grid; grid-template-columns: 1fr auto; gap: 32px; align-items: center; }
        .ga-guides h2 { font-size: clamp(30px, 4vw, 46px); letter-spacing: -.035em; line-height: 1.08; margin: 0 0 12px; }
        .ga-guides p { color: #d4d4d4; margin: 0; max-width: 710px; }
        .ga-guides .ga-btn { background: #fff; color: #111; border-color: #fff; }

        .ga-faq { max-width: 900px; margin: 38px auto 0; border-top: 1px solid var(--ga-border); }
        .ga-faq details { border-bottom: 1px solid var(--ga-border); padding: 0; }
        .ga-faq summary { cursor: pointer; list-style: none; padding: 22px 4px; font-size: 18px; font-weight: 800; display: flex; justify-content: space-between; gap: 20px; }
        .ga-faq summary::-webkit-details-marker { display: none; }
        .ga-faq summary::after { content: '+'; font-size: 25px; font-weight: 400; line-height: 1; }
        .ga-faq details[open] summary::after { content: '–'; }
        .ga-faq p { color: var(--ga-muted); margin: -3px 0 22px; padding-right: 44px; }

        .ga-footer { padding: 36px 0; border-top: 1px solid var(--ga-border); background: #fff; }
        .ga-footer__inner { display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .ga-footer img { width: 160px; max-height: 52px; object-fit: contain; object-position: left center; }
        .ga-footer p { margin: 0; color: var(--ga-muted); font-size: 13px; text-align: right; }

        @media (max-width: 991px) {
            .ga-nav a:not(.ga-btn) { display: none; }
            .ga-hero__grid, .ga-split { grid-template-columns: 1fr; gap: 42px; }
            .ga-hero { padding-top: 72px; }
            .ga-snapshot { max-width: 620px; }
            .ga-proof__grid { grid-template-columns: repeat(2, 1fr); }
            .ga-proof__item:nth-child(3) { border-left: 1px solid var(--ga-border); border-top: 1px solid var(--ga-border); }
            .ga-proof__item:nth-child(4) { border-top: 1px solid var(--ga-border); }
            .ga-course-grid, .ga-feature-grid { grid-template-columns: repeat(2, 1fr); }
            .ga-sticky { position: static; }
        }
        @media (max-width: 680px) {
            .ga-container { width: min(100% - 28px, 1160px); }
            .ga-section { padding: 66px 0; }
            .ga-header__inner { min-height: 68px; }
            .ga-brand img { width: 158px; }
            .ga-nav .ga-btn { padding: 9px 13px; font-size: 13px; }
            .ga-hero { padding: 62px 0 52px; }
            .ga-hero h1 { font-size: clamp(40px, 13vw, 58px); }
            .ga-hero__lead { font-size: 17px; }
            .ga-hero__actions .ga-btn { width: 100%; }
            .ga-snapshot { padding: 22px; }
            .ga-proof__grid, .ga-course-grid, .ga-feature-grid { grid-template-columns: 1fr; }
            .ga-proof__item, .ga-proof__item:nth-child(3), .ga-proof__item:nth-child(4) { border: 0; border-bottom: 1px solid var(--ga-border); padding-left: 0; }
            .ga-courses-head { display: block; }
            .ga-courses-head .ga-section-copy { margin-bottom: 0; }
            .ga-step { grid-template-columns: 46px 1fr; padding: 20px; }
            .ga-step__number { width: 46px; height: 46px; }
            .ga-guides { grid-template-columns: 1fr; padding: 28px; }
            .ga-guides .ga-btn { width: 100%; }
            .ga-footer__inner { display: block; }
            .ga-footer p { text-align: left; margin-top: 18px; }
        }
    </style>
</head>
<body>
<header class="ga-header">
    <div class="ga-container ga-header__inner">
        <a class="ga-brand" href="/" aria-label="Groot Academy home">
            <img src="<?= grootEsc($logo); ?>" alt="Groot Academy" width="600" height="200">
        </a>
        <nav class="ga-nav" aria-label="Main navigation">
            <a href="#courses">Courses</a>
            <a href="#learning">How You Learn</a>
            <a href="#why-groot">Why Groot</a>
            <a href="#faq">FAQ</a>
            <a class="ga-btn" href="#courses">Explore Courses</a>
        </nav>
    </div>
</header>

<main>
    <section class="ga-hero">
        <div class="ga-container ga-hero__grid">
            <div>
                <div class="ga-kicker"><?= grootEsc($heroEyebrow); ?></div>
                <h1><?= grootEsc($heroTitle); ?></h1>
                <p class="ga-hero__lead"><?= grootEsc($heroDescription); ?></p>
                <div class="ga-hero__actions">
                    <a class="ga-btn" href="#courses">Explore Course Options</a>
                    <a class="ga-btn ga-btn--ghost" href="/blogs/">Read Career Guides</a>
                </div>
                <ul class="ga-checks" aria-label="Learning highlights">
                    <li>Concept + practice approach</li>
                    <li>Project-focused learning</li>
                    <li>Career-path guidance</li>
                </ul>
            </div>
            <aside class="ga-snapshot" aria-label="Learning snapshot">
                <div class="ga-snapshot__top">
                    <div>
                        <div class="ga-snapshot__label">Learning model</div>
                        <strong>Skills before shortcuts</strong>
                    </div>
                    <div class="ga-snapshot__icon" aria-hidden="true">GA</div>
                </div>
                <h2>Choose a path. Build the fundamentals. Practice the workflow.</h2>
                <p>Use the course areas below to compare skill tracks and understand what you would learn before selecting a direction.</p>
                <div class="ga-snapshot__list">
                    <div class="ga-snapshot__row"><span>Format</span><strong>Structured & practical</strong></div>
                    <div class="ga-snapshot__row"><span>Focus</span><strong>Skills + projects</strong></div>
                    <div class="ga-snapshot__row"><span>Location focus</span><strong>Jaipur</strong></div>
                </div>
            </aside>
        </div>
    </section>

    <section class="ga-proof" aria-label="Course landing highlights">
        <div class="ga-container ga-proof__grid">
            <div class="ga-proof__item"><strong>Programming</strong><span>Python, Java, C/C++ and core logic</span></div>
            <div class="ga-proof__item"><strong>Development</strong><span>Frontend, backend and full stack workflows</span></div>
            <div class="ga-proof__item"><strong>Data</strong><span>Analytics, SQL, Power BI and ML foundations</span></div>
            <div class="ga-proof__item"><strong>Digital Skills</strong><span>Marketing, web and practical tool usage</span></div>
        </div>
    </section>

    <section class="ga-section" id="courses">
        <div class="ga-container">
            <div class="ga-courses-head">
                <div>
                    <div class="ga-kicker">Course Areas</div>
                    <h2 class="ga-section-title">Start with the skill track that matches your goal.</h2>
                </div>
                <p class="ga-section-copy">Each path has a different mix of tools and problem-solving. Open a career guide to understand the roadmap before choosing a course.</p>
            </div>
            <div class="ga-course-grid">
                <?php foreach ($courses as $course): ?>
                    <article class="ga-course-card">
                        <div class="ga-course-card__tag"><?= grootEsc($course['tag']); ?></div>
                        <h3><?= grootEsc($course['name']); ?></h3>
                        <p><?= grootEsc($course['description']); ?></p>
                        <ul class="ga-skill-list" aria-label="Skills covered">
                            <?php foreach ($course['skills'] as $skill): ?>
                                <li><?= grootEsc($skill); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a class="ga-card-link" href="<?= grootEsc($course['url']); ?>">View learning roadmap <span aria-hidden="true">→</span></a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="ga-section ga-section--soft" id="learning">
        <div class="ga-container ga-split">
            <div class="ga-sticky">
                <div class="ga-kicker">Course-Single Learning Flow</div>
                <h2 class="ga-section-title">A clear path from concept to project.</h2>
                <p class="ga-section-copy">The page follows a course-detail style structure: understand the outcome, build foundations, practice the tools and combine them in practical work.</p>
            </div>
            <div class="ga-step-list">
                <?php foreach ($learningSteps as $step): ?>
                    <article class="ga-step">
                        <div class="ga-step__number"><?= grootEsc($step['number']); ?></div>
                        <div>
                            <h3><?= grootEsc($step['title']); ?></h3>
                            <p><?= grootEsc($step['text']); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="ga-section" id="why-groot">
        <div class="ga-container">
            <div class="ga-kicker">Why Groot Academy</div>
            <h2 class="ga-section-title">Designed around learning that can be applied.</h2>
            <p class="ga-section-copy">A useful training path should make the concepts understandable, give enough practice and help learners connect individual tools into complete workflows.</p>

            <div class="ga-feature-grid">
                <article class="ga-feature">
                    <div class="ga-feature__mark">01</div>
                    <h3>Structured foundations</h3>
                    <p>Topics are arranged so core concepts come before advanced tools and frameworks.</p>
                </article>
                <article class="ga-feature">
                    <div class="ga-feature__mark">02</div>
                    <h3>Hands-on practice</h3>
                    <p>Exercises and guided activities reinforce concepts through repeated practical use.</p>
                </article>
                <article class="ga-feature">
                    <div class="ga-feature__mark">03</div>
                    <h3>Project thinking</h3>
                    <p>Learners connect multiple skills and understand how a real workflow fits together.</p>
                </article>
                <article class="ga-feature">
                    <div class="ga-feature__mark">04</div>
                    <h3>Tool awareness</h3>
                    <p>Courses introduce tools in context instead of treating software names as the learning goal.</p>
                </article>
                <article class="ga-feature">
                    <div class="ga-feature__mark">05</div>
                    <h3>Clear roadmaps</h3>
                    <p>Career guides explain what to learn next and how related skills connect to a broader path.</p>
                </article>
                <article class="ga-feature">
                    <div class="ga-feature__mark">06</div>
                    <h3>Jaipur-focused learning</h3>
                    <p>Course discovery is designed for learners looking for practical technology training in Jaipur.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="ga-section ga-section--soft">
        <div class="ga-container">
            <div class="ga-guides">
                <div>
                    <h2>Not sure which course direction fits you?</h2>
                    <p>Compare programming, development, analytics, AI and digital-skills pathways through Groot Academy's detailed career guides before making a choice.</p>
                </div>
                <a class="ga-btn" href="/blogs/">Browse Career Guides</a>
            </div>
        </div>
    </section>

    <section class="ga-section" id="faq">
        <div class="ga-container">
            <div style="text-align:center; max-width:760px; margin:0 auto;">
                <div class="ga-kicker">Frequently Asked Questions</div>
                <h2 class="ga-section-title">Before choosing a course</h2>
                <p class="ga-section-copy" style="margin:0 auto;">Use these answers as a starting point, then compare the detailed learning roadmaps linked above.</p>
            </div>
            <div class="ga-faq">
                <?php foreach ($faqs as $index => $faq): ?>
                    <details<?= $index === 0 ? ' open' : ''; ?>>
                        <summary><?= grootEsc($faq['question']); ?></summary>
                        <p><?= grootEsc($faq['answer']); ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<footer class="ga-footer">
    <div class="ga-container ga-footer__inner">
        <a href="/" aria-label="Groot Academy home">
            <img src="<?= grootEsc($logo); ?>" alt="Groot Academy" width="600" height="200">
        </a>
        <p>© <?= date('Y'); ?> Groot Academy. Practical technology learning in Jaipur.</p>
    </div>
</footer>
</body>
</html>
