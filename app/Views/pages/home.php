<section class="hero hero--home">
    <div class="hero__media">
        <img src="<?= e($page['image']) ?>" alt="<?= e($page['alt']) ?>" width="1600" height="1600" fetchpriority="high">
    </div>
    <div class="container hero__content">
        <div class="hero__copy reveal">
            <span class="eyebrow"><?= e($page['eyebrow']) ?></span>
            <h1><?= e($page['h1']) ?></h1>
            <p><?= e($page['summary']) ?></p>
            <div class="hero__actions">
                <a class="btn btn--gold" href="https://wa.me/<?= e($site['whatsapp']) ?>?text=<?= rawurlencode('مرحبا، أريد تفصيل ستائر أو تنجيد في الرياض') ?>" target="_blank" rel="noopener">استشارة واتساب</a>
                <a class="btn btn--light" href="tel:<?= e($site['phoneTel']) ?>">اتصل الآن</a>
            </div>
            <div class="trust-row" aria-label="عناصر ثقة">
                <span>معاينة مجانية</span>
                <span>قياس داخل الرياض</span>
                <span>ستائر وتنجيد فاخر</span>
            </div>
        </div>
    </div>
</section>

<section class="quick-proof">
    <div class="container proof-grid">
        <div class="proof-item reveal">
            <strong>+12</strong>
            <span>حيا رئيسيا نخدمه في الرياض</span>
        </div>
        <div class="proof-item reveal">
            <strong>48 ساعة</strong>
            <span>لتجهيز عرض مبدئي من الصور والمقاسات</span>
        </div>
        <div class="proof-item reveal">
            <strong>100%</strong>
            <span>تفصيل حسب المقاس والاستخدام</span>
        </div>
        <div class="proof-item reveal">
            <strong>5</strong>
            <span>مسارات تحويل: اتصال، واتساب، نموذج، معرض، خريطة</span>
        </div>
    </div>
</section>

<section class="section">
    <div class="container section-heading">
        <span class="eyebrow">خدماتنا الأكثر طلبا</span>
        <h2>حلول راقية للمنازل والفيلات والمجالس في الرياض</h2>
        <p>كل خدمة مصممة لتحويل الزيارة إلى قرار واضح: خامة مناسبة، قياس دقيق، سعر مفهوم، وتنفيذ نظيف.</p>
    </div>
    <div class="container service-grid">
        <?php foreach ($services as $service): ?>
            <article class="service-card reveal">
                <a href="<?= e(SiteData::path($service['slug'])) ?>" aria-label="<?= e($service['h1']) ?>">
                    <img src="<?= e($service['image']) ?>" alt="<?= e($service['alt']) ?>" loading="lazy" width="800" height="600">
                    <div>
                        <span><?= e($service['eyebrow']) ?></span>
                        <h3><?= e($service['h1']) ?></h3>
                        <p><?= e($service['summary']) ?></p>
                        <b>تفاصيل الخدمة</b>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section section--dark">
    <div class="container split-layout">
        <div class="split-copy reveal">
            <span class="eyebrow">مصمم لسلوك العميل السعودي</span>
            <h2>قرار سريع من الجوال، وثقة قبل الزيارة</h2>
            <p>أغلب العملاء في الرياض يبدأون من واتساب وصور المكان. لذلك صممنا تجربة الموقع حول التواصل السريع، المعاينة المجانية، وإجابات واضحة على الأسئلة التي تمنع العميل من التأجيل.</p>
            <ul class="check-list">
                <li>أزرار واتساب واتصال ثابتة على الجوال.</li>
                <li>نماذج مختصرة تفتح رسالة واتساب جاهزة.</li>
                <li>صفحات خدمة مستقلة لكلمات Google Ads وSEO.</li>
                <li>نصوص عربية محلية تذكر الرياض والأحياء والفيلات والمجالس.</li>
            </ul>
            <a class="btn btn--gold" href="<?= e(SiteData::path('free-measurement')) ?>">احجز قياس مجاني</a>
        </div>
        <div class="luxury-panel reveal">
            <img src="<?= e(SiteData::image('modern-luxury-sofa-optimized.jpg')) ?>" alt="كنب فاخر وستائر مودرن في الرياض" loading="lazy" width="1600" height="905">
            <div class="panel-stat">
                <strong>Google Ads Ready</strong>
                <span>CTA فوق الطية + صفحات خدمات + Schema</span>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container section-heading">
        <span class="eyebrow">قبل وبعد</span>
        <h2>تغييرات ملموسة بدون تعقيد</h2>
        <p>نحوّل المساحة من شكل عادي إلى مشهد متناسق عبر القماش، القياس، اللون، وطريقة التركيب.</p>
    </div>
    <div class="container before-after-grid">
        <article class="before-after reveal">
            <img src="<?= e(SiteData::image('curtain-fabric-detail-optimized.jpg')) ?>" alt="اختيار قماش ستائر فاخر قبل التفصيل" loading="lazy" width="800" height="1200">
            <div>
                <span>قبل</span>
                <h3>نافذة بلا هوية واضحة</h3>
                <p>إضاءة قوية، خصوصية محدودة، وتناسق ضعيف مع الأثاث.</p>
            </div>
            <div>
                <span>بعد</span>
                <h3>ستائر طبقات بتفصيل فاخر</h3>
                <p>تحكم بالضوء، خصوصية، ومظهر متوازن مع الصالة أو المجلس.</p>
            </div>
        </article>
        <article class="before-after reveal">
            <img src="<?= e(SiteData::image('sofa-upholstery-texture-optimized.jpg')) ?>" alt="تنجيد كنب فاخر بعد التصليح" loading="lazy" width="800" height="1200">
            <div>
                <span>قبل</span>
                <h3>كنب متعب أو قماش باهت</h3>
                <p>هبوط في الجلسات وتفاصيل لا تناسب الديكور الحالي.</p>
            </div>
            <div>
                <span>بعد</span>
                <h3>تنجيد نظيف وراحة أفضل</h3>
                <p>قماش جديد، حشوة مدروسة، ومظهر يليق بالاستقبال اليومي.</p>
            </div>
        </article>
    </div>
</section>

<section class="section section--champagne">
    <div class="container section-heading">
        <span class="eyebrow">معرض مختصر</span>
        <h2>صور تساعد العميل يختار الاتجاه الجمالي</h2>
    </div>
    <div class="container gallery-strip">
        <?php foreach (array_slice($gallery, 0, 6) as $item): ?>
            <a class="gallery-tile reveal" href="<?= e(SiteData::path('gallery')) ?>">
                <img src="<?= e($item['image']) ?>" alt="<?= e($item['alt']) ?>" loading="lazy" width="800" height="800">
                <span><?= e($item['label']) ?></span>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<section class="section">
    <div class="container split-layout split-layout--form">
        <div class="split-copy reveal">
            <span class="eyebrow">عرض معاينة مجاني</span>
            <h2>أرسل طلبك الآن وسنرتب القياس داخل الرياض</h2>
            <p>أفضل نقطة بداية: صور المكان، عدد النوافذ أو الكنب، والحي. بعدها نقترح خامات وتكلفة مبدئية قبل الزيارة.</p>
            <div class="mini-badges">
                <span>فلل</span>
                <span>شقق</span>
                <span>مجالس</span>
                <span>فنادق</span>
                <span>مكاتب</span>
            </div>
        </div>
        <div class="reveal">
            <?php $formTitle = 'طلب عرض سعر سريع'; require __DIR__ . '/../partials/quote-form.php'; ?>
        </div>
    </div>
</section>

<section class="section section--dark">
    <div class="container section-heading section-heading--light">
        <span class="eyebrow">آراء العملاء</span>
        <h2>ثقة محلية مبنية على الالتزام والتفاصيل</h2>
    </div>
    <div class="container review-grid">
        <?php foreach ($reviews as $review): ?>
            <article class="review-card reveal">
                <p><?= e($review['text']) ?></p>
                <strong><?= e($review['name']) ?></strong>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section">
    <div class="container content-grid">
        <div class="faq-block reveal">
            <span class="eyebrow">أسئلة شائعة</span>
            <h2>إجابات مباشرة قبل التواصل</h2>
            <?php foreach ($faqs as $faq): ?>
                <details>
                    <summary><?= e($faq['q']) ?></summary>
                    <p><?= e($faq['a']) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
        <div class="blog-preview reveal">
            <span class="eyebrow">محتوى SEO</span>
            <h2>مقالات تجذب الباحثين في الرياض</h2>
            <?php foreach (array_slice($articles, 0, 3) as $article): ?>
                <a href="<?= e(SiteData::path('blog/' . $article['slug'])) ?>">
                    <span><?= e($article['eyebrow']) ?></span>
                    <strong><?= e($article['title']) ?></strong>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
