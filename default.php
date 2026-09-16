<?php
$siteUrl = 'https://grootacademy.com/';
$siteName = 'Groot Academy';
$pageTitle = 'Groot Academy Jaipur | IT Training, Coding & Career Courses';
$pageDescription = 'Groot Academy offers practical IT training in Jaipur for Python, Full Stack Development, Java, Data Analytics, Power BI, Web Development, Digital Marketing and other career-focused technology skills.';
$logo = '/assets/images/Groot-Logo-transparent.png';
$siteIcon = '/assets/images/Groot-Logo-icon-transparent-png-on-white.png';
?>
<!doctype html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
    <meta name="author" content="Groot Academy">
    <meta name="application-name" content="Groot Academy">
    <meta name="theme-color" content="#ffffff">

    <link rel="canonical" href="<?= $siteUrl; ?>">
    <link rel="icon" type="image/png" href="<?= $siteIcon; ?>">
    <link rel="shortcut icon" type="image/png" href="<?= $siteIcon; ?>">
    <link rel="apple-touch-icon" href="<?= $siteIcon; ?>">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:site_name" content="<?= $siteName; ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?= $siteUrl; ?>">
    <meta property="og:image" content="https://grootacademy.com<?= $logo; ?>">
    <meta property="og:image:alt" content="Groot Academy logo">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="https://grootacademy.com<?= $logo; ?>">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <script type="application/ld+json">
    <?= json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'EducationalOrganization',
        'name' => $siteName,
        'url' => $siteUrl,
        'logo' => 'https://grootacademy.com' . $logo,
        'description' => $pageDescription,
        'areaServed' => [
            '@type' => 'City',
            'name' => 'Jaipur'
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>

    <style>
        body { margin: 0; background: #fff; color: #222; font-family: Arial, Helvetica, sans-serif; }
        .groot-home { min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 40px 20px; text-align: center; }
        .groot-home__inner { width: 100%; max-width: 760px; }
        .groot-home__logo { width: min(360px, 80vw); height: auto; margin-bottom: 28px; }
        .groot-home h1 { font-size: clamp(30px, 5vw, 48px); margin-bottom: 16px; }
        .groot-home p { font-size: 18px; line-height: 1.7; color: #555; margin: 0 auto 26px; }
        .groot-home a { display: inline-block; padding: 12px 22px; border-radius: 8px; text-decoration: none; background: #111; color: #fff; font-weight: 600; }
    </style>
</head>
<body>
    <main class="groot-home">
        <div class="groot-home__inner">
            <img class="groot-home__logo" src="<?= $logo; ?>" alt="Groot Academy" width="600" height="200">
            <h1>Groot Academy</h1>
            <p>Practical coding, software development, data analytics and digital skills training in Jaipur.</p>
            <a href="/blogs/">Explore Career Guides</a>
        </div>
    </main>
</body>
</html>
