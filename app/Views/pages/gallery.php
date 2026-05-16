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
    <div class="container gallery-filter" data-gallery-filter>
        <button class="is-active" type="button" data-filter="all">الكل</button>
        <button type="button" data-filter="curtains">ستائر</button>
        <button type="button" data-filter="electric">كهربائية</button>
        <button type="button" data-filter="sofas">كنب</button>
        <button type="button" data-filter="upholstery">تنجيد</button>
        <button type="button" data-filter="fabrics">أقمشة</button>
    </div>
    <div class="container gallery-grid">
        <?php foreach ($gallery as $item): ?>
            <article class="portfolio-card reveal" data-category="<?= e($item['category']) ?>">
                <img src="<?= e($item['image']) ?>" alt="<?= e($item['alt']) ?>" loading="lazy" width="800" height="800">
                <div>
                    <span><?= e($item['label']) ?></span>
                    <h2><?= e($item['title']) ?></h2>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section section--dark">
    <div class="container split-layout">
        <div class="split-copy reveal">
            <span class="eyebrow">جاهز لإضافة صورك الحقيقية</span>
            <h2>المعرض مبني لرفع أعمالك بسهولة</h2>
            <p>كل بطاقة معرض تستخدم تصنيفا وصورة ونصا بديلا عربيا. عند توفر صور مشاريعك، يمكن استبدال الملفات من مجلد الصور وتحديث العناوين فقط.</p>
        </div>
        <div class="reveal">
            <?php $formTitle = 'أرسل صور المكان للمقارنة'; require __DIR__ . '/../partials/quote-form.php'; ?>
        </div>
    </div>
</section>
