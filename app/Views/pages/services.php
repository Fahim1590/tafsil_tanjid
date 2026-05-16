<section class="page-hero">
    <div class="container page-hero__inner">
        <div class="reveal">
            <span class="eyebrow"><?= e($page['eyebrow']) ?></span>
            <h1><?= e($page['h1']) ?></h1>
            <p><?= e($page['summary']) ?></p>
            <div class="hero__actions">
                <a class="btn btn--gold" href="<?= e(SiteData::path('free-measurement')) ?>">طلب معاينة مجانية</a>
                <a class="btn btn--ghost" href="https://wa.me/<?= e($site['whatsapp']) ?>" target="_blank" rel="noopener">واتساب</a>
            </div>
        </div>
        <img src="<?= e($page['image']) ?>" alt="<?= e($page['alt']) ?>" loading="eager" width="1600" height="905">
    </div>
</section>

<section class="section">
    <div class="container service-grid service-grid--wide">
        <?php foreach ($services as $service): ?>
            <article class="service-card reveal">
                <a href="<?= e(SiteData::path($service['slug'])) ?>">
                    <img src="<?= e($service['image']) ?>" alt="<?= e($service['alt']) ?>" loading="lazy" width="800" height="600">
                    <div>
                        <span><?= e($service['eyebrow']) ?></span>
                        <h2><?= e($service['h1']) ?></h2>
                        <p><?= e($service['summary']) ?></p>
                        <b>اعرف المزيد</b>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section section--champagne">
    <div class="container section-heading">
        <span class="eyebrow">لماذا بنية صفحات منفصلة؟</span>
        <h2>كل خدمة لها نية بحث مختلفة في الرياض</h2>
        <p>من يبحث عن ستائر كهربائية ليس مثل من يبحث عن تصليح كنب. لذلك تم فصل الصفحات بعناوين وميتا ووصف وأسئلة Schema وروابط داخلية مخصصة.</p>
    </div>
</section>
