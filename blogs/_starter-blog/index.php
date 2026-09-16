<?php
/*
 * HOW TO USE THIS STARTER
 * 1. Copy this entire folder.
 * 2. Rename the copied folder to the blog slug, e.g. python-course-in-jaipur.
 * 3. Replace the metadata below.
 * 4. Write the article inside the output-buffer section.
 * 5. Put all images for this article in this folder's /images directory.
 * 6. Change robots to index,follow only when the article is ready to publish.
 */

$blog = [
    'title' => 'Your Blog Title Goes Here',
    'meta_title' => 'Your SEO Title | Groot Academy',
    'meta_description' => 'Write a clear 150-160 character description explaining what the reader will learn from this Groot Academy article.',
    'canonical' => '', // Example: https://grootacademy.com/blogs/your-blog-slug/
    'robots' => 'noindex,follow',

    'category' => 'Career Guide',
    'author' => 'Groot Academy',
    'display_date' => 'September 16, 2026',
    'date_published' => '2026-09-16',
    'date_modified' => '2026-09-16',
    'reading_time' => '6 min read',

    'excerpt' => 'Add a short, useful summary that introduces the topic and gives readers a reason to continue.',

    // Keep blog-specific images inside this blog folder.
    // Example after adding the file: 'featured_image' => 'images/featured-image.webp',
    'featured_image' => '',
    'featured_image_alt' => 'Descriptive SEO-friendly image alt text',

    'toc' => [
        ['id' => 'introduction', 'label' => 'Introduction'],
        ['id' => 'main-section', 'label' => 'Main Section'],
        ['id' => 'practical-tips', 'label' => 'Practical Tips'],
        ['id' => 'conclusion', 'label' => 'Conclusion'],
    ],

    'cta_title' => 'Want practical, career-focused training?',
    'cta_text' => 'Explore Groot Academy programs and choose a learning path based on your current level and career goal.',
    'cta_label' => 'Explore Groot Academy',
    'cta_url' => '/',
];

ob_start();
?>
<h2 id="introduction">Introduction</h2>
<p>
    Start your article here. Keep the opening focused on the reader's question, problem, or goal.
    The shared template handles the page design, SEO meta tags, header, footer, table of contents, and CTA.
</p>

<h2 id="main-section">Main Section</h2>
<p>
    Write the main content using normal HTML headings, paragraphs, lists, tables, and links. Because the
    article content stays inside this file, every blog can have completely different content while sharing
    the same visual template.
</p>

<h3>Example subheading</h3>
<ul>
    <li>Use clear, useful points.</li>
    <li>Keep sections easy to scan.</li>
    <li>Add internal links where relevant.</li>
</ul>

<!--
Example local blog image:
<figure>
    <img src="images/example-section-image.webp" alt="Describe the image accurately">
    <figcaption>Optional image caption.</figcaption>
</figure>
-->

<h2 id="practical-tips">Practical Tips</h2>
<p>
    Add actionable advice, examples, comparisons, or project-focused information that helps the reader
    make progress after reading the article.
</p>

<h2 id="conclusion">Conclusion</h2>
<p>
    Summarize the key takeaway naturally. When this article is ready to publish, update the canonical URL,
    add the final images, and change <code>robots</code> from <code>noindex,follow</code> to <code>index,follow</code>.
</p>
<?php
$blogContent = ob_get_clean();

require __DIR__ . '/../_shared/blog-layout.php';
