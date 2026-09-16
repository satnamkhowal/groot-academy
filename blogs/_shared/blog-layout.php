<?php
if (!isset($blog) || !is_array($blog)) {
    throw new RuntimeException('The $blog array is required before loading the shared blog layout.');
}

$blogContent = $blogContent ?? '';
$esc = static fn($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');

require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="ga-blog-page">
    <article class="ga-blog-article">
        <section class="ga-blog-hero">
            <div class="ga-container ga-blog-hero-inner">
                <?php if (!empty($blog['category'])): ?>
                    <span class="ga-blog-category"><?= $esc($blog['category']) ?></span>
                <?php endif; ?>

                <h1><?= $esc($blog['title'] ?? '') ?></h1>

                <?php if (!empty($blog['excerpt'])): ?>
                    <p class="ga-blog-excerpt"><?= $esc($blog['excerpt']) ?></p>
                <?php endif; ?>

                <div class="ga-blog-meta">
                    <?php if (!empty($blog['author'])): ?><span>By <?= $esc($blog['author']) ?></span><?php endif; ?>
                    <?php if (!empty($blog['display_date'])): ?><span><?= $esc($blog['display_date']) ?></span><?php endif; ?>
                    <?php if (!empty($blog['reading_time'])): ?><span><?= $esc($blog['reading_time']) ?></span><?php endif; ?>
                </div>
            </div>
        </section>

        <div class="ga-container ga-blog-grid">
            <div class="ga-blog-main">
                <?php if (!empty($blog['featured_image'])): ?>
                    <figure class="ga-featured-image-wrap">
                        <img
                            class="ga-featured-image"
                            src="<?= $esc($blog['featured_image']) ?>"
                            alt="<?= $esc($blog['featured_image_alt'] ?? $blog['title'] ?? '') ?>"
                            loading="eager"
                        >
                    </figure>
                <?php endif; ?>

                <div class="ga-blog-content">
                    <?= $blogContent ?>
                </div>

                <?php if (!empty($blog['cta_title']) || !empty($blog['cta_text'])): ?>
                    <section class="ga-blog-cta">
                        <?php if (!empty($blog['cta_title'])): ?><h2><?= $esc($blog['cta_title']) ?></h2><?php endif; ?>
                        <?php if (!empty($blog['cta_text'])): ?><p><?= $esc($blog['cta_text']) ?></p><?php endif; ?>
                        <?php if (!empty($blog['cta_url']) && !empty($blog['cta_label'])): ?>
                            <a class="ga-button" href="<?= $esc($blog['cta_url']) ?>"><?= $esc($blog['cta_label']) ?></a>
                        <?php endif; ?>
                    </section>
                <?php endif; ?>
            </div>

            <?php if (!empty($blog['toc']) && is_array($blog['toc'])): ?>
                <aside class="ga-blog-sidebar" aria-label="Table of contents">
                    <div class="ga-toc-card">
                        <strong>On this page</strong>
                        <nav>
                            <?php foreach ($blog['toc'] as $item): ?>
                                <a href="#<?= $esc($item['id'] ?? '') ?>"><?= $esc($item['label'] ?? '') ?></a>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </aside>
            <?php endif; ?>
        </div>
    </article>
</main>
<?php require __DIR__ . '/partials/footer.php'; ?>
