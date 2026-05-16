<section class="page-hero">
    <div class="container page-hero__inner">
        <div class="reveal">
            <span class="eyebrow"><?= e($page['eyebrow']) ?></span>
            <h1><?= e($page['h1']) ?></h1>
            <p><?= e($page['summary']) ?></p>
        </div>
        <img src="<?= e($page['image']) ?>" alt="<?= e($page['alt']) ?>" loading="eager" width="800" height="1200">
    </div>
</section>

<section class="section">
    <div class="container blog-grid">
        <?php foreach ($articles as $article): ?>
            <article class="article-card reveal">
                <a href="<?= e(SiteData::path('blog/' . $article['slug'])) ?>">
                    <img src="<?= e($article['image']) ?>" alt="<?= e($article['alt']) ?>" loading="lazy" width="800" height="800">
                    <div>
                        <span><?= e($article['eyebrow']) ?></span>
                        <h2><?= e($article['title']) ?></h2>
                        <p><?= e($article['summary']) ?></p>
                        <b>قراءة المقال</b>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
