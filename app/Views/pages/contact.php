<section class="page-hero">
    <div class="container page-hero__inner">
        <div class="reveal">
            <span class="eyebrow"><?= e($page['eyebrow']) ?></span>
            <h1><?= e($page['h1']) ?></h1>
            <p><?= e($page['summary']) ?></p>
            <div class="hero__actions">
                <a class="btn btn--gold" href="https://wa.me/<?= e($site['whatsapp']) ?>" target="_blank" rel="noopener">واتساب</a>
                <a class="btn btn--ghost" href="tel:<?= e($site['phoneTel']) ?>">اتصال</a>
            </div>
        </div>
        <img src="<?= e($page['image']) ?>" alt="<?= e($page['alt']) ?>" loading="eager" width="1600" height="1600">
    </div>
</section>

<section class="section">
    <div class="container contact-grid">
        <div class="contact-cards reveal">
            <a class="contact-card" href="tel:<?= e($site['phoneTel']) ?>">
                <span>الهاتف</span>
                <strong><?= e($site['phoneDisplay']) ?></strong>
            </a>
            <a class="contact-card" href="https://wa.me/<?= e($site['whatsapp']) ?>" target="_blank" rel="noopener">
                <span>واتساب</span>
                <strong>إرسال رسالة مباشرة</strong>
            </a>
            <a class="contact-card" href="mailto:<?= e($site['email']) ?>">
                <span>البريد</span>
                <strong><?= e($site['email']) ?></strong>
            </a>
            <div class="contact-card">
                <span>الموقع</span>
                <strong><?= e($site['address']) ?></strong>
            </div>
        </div>
        <div class="reveal">
            <?php $formTitle = 'نموذج تواصل سريع'; require __DIR__ . '/../partials/quote-form.php'; ?>
        </div>
    </div>
</section>

<section class="section section--champagne">
    <div class="container map-card reveal">
        <iframe
            title="خريطة الرياض"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps?q=<?= rawurlencode($site['mapQuery']) ?>&output=embed">
        </iframe>
        <div>
            <span class="eyebrow">تغطية محلية</span>
            <h2>نخدم جميع أحياء الرياض حسب الجدولة</h2>
            <p><?= e(implode('، ', $site['districts'])) ?>، وغيرها من الأحياء السكنية والتجارية.</p>
        </div>
    </div>
</section>
