<section class="page-hero">
    <div class="container page-hero__inner">
        <div class="reveal">
            <span class="eyebrow"><?= e($page['eyebrow']) ?></span>
            <h1><?= e($page['h1']) ?></h1>
            <p><?= e($page['summary']) ?></p>
            <div class="hero__actions">
                <a class="btn btn--gold" href="<?= e(SiteData::path('contact')) ?>">تواصل معنا</a>
                <a class="btn btn--ghost" href="<?= e(SiteData::path('gallery')) ?>">شاهد المعرض</a>
            </div>
        </div>
        <img src="<?= e($page['image']) ?>" alt="<?= e($page['alt']) ?>" loading="eager" width="1600" height="1600">
    </div>
</section>

<section class="section">
    <div class="container content-grid">
        <article class="feature-block reveal">
            <span class="eyebrow">فلسفتنا</span>
            <h2>الفخامة ليست زخرفة كثيرة</h2>
            <p>الفخامة في الستائر والتنجيد تظهر عندما تكون القياسات صحيحة، الطيات منتظمة، الألوان متوازنة، والخامة مناسبة لاستخدام البيت اليومي.</p>
        </article>
        <article class="feature-block reveal">
            <span class="eyebrow">ما يهمنا</span>
            <h2>خصوصية، راحة، ومظهر يدوم</h2>
            <p>نصمم لكل غرفة حسب احتياجها: تعتيم لغرف النوم، حضور فاخر للمجالس، خامات عملية للكنب، وحلول سمارت للنوافذ العالية.</p>
        </article>
    </div>
</section>

<section class="section section--champagne">
    <div class="container section-heading">
        <span class="eyebrow">خبرة محلية</span>
        <h2>نخدم الفلل، الشقق، المصممين، والمشاريع التجارية</h2>
        <p>نراعي طبيعة الإضاءة في الرياض، الغبار، الاستخدام العائلي، ومكانة المجلس في البيت السعودي.</p>
    </div>
    <div class="container values-grid">
        <div class="value-card reveal"><strong>قياس دقيق</strong><span>تجنب هدر القماش ومشاكل الطول والعرض.</span></div>
        <div class="value-card reveal"><strong>خامات منتقاة</strong><span>اختيارات مناسبة للفخامة والاستخدام اليومي.</span></div>
        <div class="value-card reveal"><strong>تنفيذ نظيف</strong><span>تركيب وتشطيب يليق بالمنازل الراقية.</span></div>
        <div class="value-card reveal"><strong>تواصل سريع</strong><span>واتساب واتصال ونموذج مختصر للتحويلات.</span></div>
    </div>
</section>
