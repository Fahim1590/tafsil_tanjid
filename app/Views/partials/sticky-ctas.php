<div class="floating-actions" aria-label="أزرار تواصل سريعة">
    <a class="floating-actions__btn floating-actions__btn--whatsapp" href="https://wa.me/<?= e($site['whatsapp']) ?>?text=<?= rawurlencode('مرحبا، أريد عرض سعر من تفصيل ستارة في الرياض') ?>" target="_blank" rel="noopener">
        واتساب
    </a>
    <a class="floating-actions__btn floating-actions__btn--call" href="tel:<?= e($site['phoneTel']) ?>">
        اتصال
    </a>
</div>

<div class="mobile-cta-bar" aria-label="إجراءات سريعة للجوال">
    <a href="tel:<?= e($site['phoneTel']) ?>">اتصال</a>
    <a href="https://wa.me/<?= e($site['whatsapp']) ?>?text=<?= rawurlencode('مرحبا، أريد معاينة مجانية في الرياض') ?>" target="_blank" rel="noopener">واتساب</a>
    <a href="<?= e(SiteData::path('free-measurement')) ?>">معاينة</a>
</div>
