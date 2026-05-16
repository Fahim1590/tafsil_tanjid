<section class="page-hero page-hero--offer">
    <div class="container page-hero__inner">
        <div class="reveal">
            <span class="eyebrow"><?= e($page['eyebrow']) ?></span>
            <h1><?= e($page['h1']) ?></h1>
            <p><?= e($page['summary']) ?></p>
            <div class="hero__actions">
                <a class="btn btn--gold" href="#measurement-form">احجز الآن</a>
                <a class="btn btn--ghost" href="https://wa.me/<?= e($site['whatsapp']) ?>?text=<?= rawurlencode('مرحبا، أريد حجز معاينة مجانية داخل الرياض') ?>" target="_blank" rel="noopener">واتساب سريع</a>
            </div>
        </div>
        <img src="<?= e($page['image']) ?>" alt="<?= e($page['alt']) ?>" loading="eager" width="848" height="1200">
    </div>
</section>

<section class="section">
    <div class="container offer-grid">
        <article class="value-card reveal">
            <strong>قياس دقيق</strong>
            <span>نقيس الطول والعرض ونحدد نوع السكة والبطانة.</span>
        </article>
        <article class="value-card reveal">
            <strong>عينات أقمشة</strong>
            <span>اختيار اللون والخامة في إضاءة منزلك الحقيقية.</span>
        </article>
        <article class="value-card reveal">
            <strong>توصية فنية</strong>
            <span>نقترح الأفضل للخصوصية والحرارة والمظهر.</span>
        </article>
        <article class="value-card reveal">
            <strong>عرض سعر واضح</strong>
            <span>تفاصيل الخدمة قبل بدء التنفيذ.</span>
        </article>
    </div>
</section>

<section class="section section--dark" id="measurement-form">
    <div class="container split-layout split-layout--form">
        <div class="split-copy reveal">
            <span class="eyebrow">معاينة مجانية</span>
            <h2>احجز الموعد المناسب لك</h2>
            <p>املأ النموذج أو استخدم واتساب مباشرة. كلما كانت صور المكان واضحة كان تقدير التكلفة أسرع.</p>
            <ul class="check-list">
                <li>ارسل صور النوافذ أو الكنب.</li>
                <li>اكتب الحي والموعد المفضل.</li>
                <li>حدد إن كنت تريد ستائر، تنجيد، أو كلاهما.</li>
            </ul>
        </div>
        <div class="reveal">
            <?php $formTitle = 'حجز معاينة مجانية'; require __DIR__ . '/../partials/quote-form.php'; ?>
        </div>
    </div>
</section>
