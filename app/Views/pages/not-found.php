<section class="page-hero">
    <div class="container page-hero__inner">
        <div class="reveal">
            <span class="eyebrow"><?= e($page['eyebrow']) ?></span>
            <h1><?= e($page['h1']) ?></h1>
            <p><?= e($page['summary']) ?></p>
            <div class="hero__actions">
                <a class="btn btn--gold" href="<?= e(SiteData::path()) ?>">العودة للرئيسية</a>
                <a class="btn btn--ghost" href="<?= e(SiteData::path('free-measurement')) ?>">طلب معاينة</a>
            </div>
        </div>
        <img src="<?= e($page['image']) ?>" alt="<?= e($page['alt']) ?>" loading="eager" width="1600" height="1600">
    </div>
</section>
