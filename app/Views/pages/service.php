<section class="page-hero service-hero">
    <div class="container page-hero__inner">
        <div class="reveal">
            <span class="eyebrow"><?= e($service['eyebrow']) ?></span>
            <h1><?= e($service['h1']) ?></h1>
            <p><?= e($service['summary']) ?></p>
            <div class="keyword-row">
                <?php foreach ($service['keywords'] as $keyword): ?>
                    <span><?= e($keyword) ?></span>
                <?php endforeach; ?>
            </div>
            <div class="hero__actions">
                <a class="btn btn--gold" href="https://wa.me/<?= e($site['whatsapp']) ?>?text=<?= rawurlencode('مرحبا، أريد عرض سعر لخدمة: ' . $service['h1']) ?>" target="_blank" rel="noopener">اطلب عرض سعر</a>
                <a class="btn btn--ghost" href="tel:<?= e($site['phoneTel']) ?>">اتصال مباشر</a>
            </div>
        </div>
        <img src="<?= e($service['image']) ?>" alt="<?= e($service['alt']) ?>" loading="eager" width="1600" height="1200">
    </div>
</section>

<section class="section">
    <div class="container content-grid">
        <div class="feature-block reveal">
            <span class="eyebrow">ما الذي تحصل عليه؟</span>
            <h2>تنفيذ مصمم للمساحات السعودية</h2>
            <ul class="check-list check-list--dark">
                <?php foreach ($service['features'] as $feature): ?>
                    <li><?= e($feature) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="feature-block reveal">
            <span class="eyebrow">طريقة العمل</span>
            <h2>خطوات واضحة من أول رسالة</h2>
            <ol class="step-list">
                <?php foreach ($service['process'] as $step): ?>
                    <li><?= e($step) ?></li>
                <?php endforeach; ?>
            </ol>
        </div>
    </div>
</section>

<section class="section section--dark">
    <div class="container split-layout">
        <div class="split-copy reveal">
            <span class="eyebrow">تحويلات أسرع</span>
            <h2>لا تنتظر زيارة طويلة لتعرف الاتجاه الصحيح</h2>
            <p>أرسل صور المكان أو الأثاث على واتساب، وسنساعدك بتقدير أولي للخامة، اللون، وطريقة التنفيذ المناسبة قبل الحجز.</p>
            <a class="btn btn--gold" href="https://wa.me/<?= e($site['whatsapp']) ?>?text=<?= rawurlencode('مرحبا، أرفقت صور المكان وأريد نصيحة لخدمة: ' . $service['h1']) ?>" target="_blank" rel="noopener">أرسل الصور الآن</a>
        </div>
        <div class="service-proof reveal">
            <h3>مناسب لـ</h3>
            <div class="mini-badges">
                <span>فيلات</span>
                <span>شقق</span>
                <span>مجالس</span>
                <span>فنادق</span>
                <span>مطاعم</span>
                <span>مكاتب</span>
            </div>
            <p>نغطي الرياض مع جدولة زيارات حسب الحي وتوفر الفريق.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container split-layout split-layout--form">
        <div class="faq-block reveal">
            <span class="eyebrow">أسئلة الخدمة</span>
            <h2>ما يحتاجه العميل قبل القرار</h2>
            <?php foreach ($faqs as $faq): ?>
                <details>
                    <summary><?= e($faq['q']) ?></summary>
                    <p><?= e($faq['a']) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
        <div class="reveal">
            <?php $formTitle = 'طلب معاينة لهذه الخدمة'; require __DIR__ . '/../partials/quote-form.php'; ?>
        </div>
    </div>
</section>

<section class="section section--champagne">
    <div class="container section-heading">
        <span class="eyebrow">خدمات مرتبطة</span>
        <h2>قد تحتاج أيضا إلى</h2>
    </div>
    <div class="container related-grid">
        <?php foreach ($services as $related): ?>
            <?php if ($related['slug'] === $service['slug']) { continue; } ?>
            <a class="related-card reveal" href="<?= e(SiteData::path($related['slug'])) ?>">
                <span><?= e($related['eyebrow']) ?></span>
                <strong><?= e($related['h1']) ?></strong>
            </a>
        <?php endforeach; ?>
    </div>
</section>
