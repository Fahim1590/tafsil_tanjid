<article class="article-page">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <div class="reveal">
                <span class="eyebrow"><?= e($article['eyebrow']) ?></span>
                <h1><?= e($article['h1']) ?></h1>
                <p><?= e($article['summary']) ?></p>
            </div>
            <img src="<?= e($article['image']) ?>" alt="<?= e($article['alt']) ?>" loading="eager" width="1600" height="1200">
        </div>
    </section>

    <section class="section">
        <div class="container article-layout">
            <div class="article-content reveal">
                <?php foreach ($article['sections'] as $section): ?>
                    <h2><?= e($section['h']) ?></h2>
                    <p><?= e($section['p']) ?></p>
                <?php endforeach; ?>
                <div class="article-cta">
                    <h2>هل تريد تطبيق هذه الأفكار في منزلك؟</h2>
                    <p>أرسل صور المكان على واتساب وسنقترح لك خامة واتجاه لون مناسبين لمساحتك في الرياض.</p>
                    <a class="btn btn--gold" href="https://wa.me/<?= e($site['whatsapp']) ?>?text=<?= rawurlencode('مرحبا، قرأت مقال: ' . $article['title'] . ' وأريد استشارة') ?>" target="_blank" rel="noopener">استشارة واتساب</a>
                </div>
            </div>
            <aside class="article-sidebar reveal">
                <h2>مقالات أخرى</h2>
                <?php foreach ($articles as $related): ?>
                    <?php if ($related['slug'] === $article['slug']) { continue; } ?>
                    <a href="<?= e(SiteData::path('blog/' . $related['slug'])) ?>"><?= e($related['title']) ?></a>
                <?php endforeach; ?>
            </aside>
        </div>
    </section>
</article>
