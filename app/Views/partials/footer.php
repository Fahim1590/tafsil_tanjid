<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a class="brand brand--footer" href="<?= e(SiteData::path()) ?>">
                <span class="brand__mark">تس</span>
                <span>
                    <strong><?= e($site['brand']) ?></strong>
                    <small><?= e($site['tagline']) ?></small>
                </span>
            </a>
            <p>موقع عربي مخصص للتحويلات المحلية في الرياض: اتصال، واتساب، طلب عرض سعر، ومعاينة مجانية للستائر والتنجيد.</p>
            <div class="footer-ctas">
                <a class="btn btn--gold" href="https://wa.me/<?= e($site['whatsapp']) ?>" target="_blank" rel="noopener">واتساب الآن</a>
                <a class="btn btn--outline-light" href="tel:<?= e($site['phoneTel']) ?>">اتصال مباشر</a>
            </div>
        </div>

        <div>
            <h2>الخدمات</h2>
            <ul class="footer-links">
                <?php foreach (SiteData::services() as $service): ?>
                    <li><a href="<?= e(SiteData::path($service['slug'])) ?>"><?= e($service['h1']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div>
            <h2>روابط مهمة</h2>
            <ul class="footer-links">
                <li><a href="<?= e(SiteData::path('gallery')) ?>">معرض الأعمال</a></li>
                <li><a href="<?= e(SiteData::path('about')) ?>">من نحن</a></li>
                <li><a href="<?= e(SiteData::path('blog')) ?>">المدونة</a></li>
                <li><a href="<?= e(SiteData::path('contact')) ?>">تواصل معنا</a></li>
                <li><a href="<?= e(SiteData::path('free-measurement')) ?>">طلب معاينة مجانية</a></li>
            </ul>
        </div>

        <div>
            <h2>نخدم أحياء الرياض</h2>
            <p class="district-list"><?= e(implode('، ', $site['districts'])) ?>، وجميع الأحياء حسب الجدولة.</p>
            <p><strong>ساعات العمل:</strong><br><?= e($site['hours']) ?></p>
            <p><strong>الهاتف:</strong><br><a href="tel:<?= e($site['phoneTel']) ?>"><?= e($site['phoneDisplay']) ?></a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <span>© <?= date('Y') ?> <?= e($site['brand']) ?>. جميع الحقوق محفوظة.</span>
            <span>صور Free-use من Unsplash ومهيأة محليا للأداء.</span>
        </div>
    </div>
</footer>
