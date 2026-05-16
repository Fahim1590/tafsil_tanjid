<header class="site-header" data-header>
    <div class="top-strip">
        <div class="container top-strip__inner">
            <span>خدمة معاينة داخل الرياض</span>
            <a href="tel:<?= e($site['phoneTel']) ?>"><?= e($site['phoneDisplay']) ?></a>
            <a href="https://wa.me/<?= e($site['whatsapp']) ?>" target="_blank" rel="noopener">واتساب مباشر</a>
        </div>
    </div>
    <div class="container nav-shell">
        <a class="brand" href="<?= e(SiteData::path()) ?>" aria-label="تفصيل ستارة الرئيسية">
            <span class="brand__mark">تس</span>
            <span>
                <strong><?= e($site['name']) ?></strong>
                <small>Tafsil Sitara</small>
            </span>
        </a>

        <button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-controls="primary-nav">
            <span></span>
            <span></span>
            <span></span>
            <b>القائمة</b>
        </button>

        <nav class="primary-nav" id="primary-nav" data-primary-nav aria-label="التنقل الرئيسي">
            <?php foreach (SiteData::nav() as $item): ?>
                <a href="<?= e($item['url']) ?>" data-en="<?= e($item['en']) ?>"><?= e($item['label']) ?></a>
            <?php endforeach; ?>
        </nav>

        <div class="header-actions">
            <button class="language-toggle" type="button" data-language-toggle data-en="AR">EN</button>
            <a class="btn btn--ghost" href="tel:<?= e($site['phoneTel']) ?>" data-en="Call">اتصال</a>
            <a class="btn btn--gold" href="<?= e(SiteData::path('free-measurement')) ?>" data-en="Free Measure">معاينة مجانية</a>
        </div>
    </div>
</header>
