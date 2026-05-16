<?php $formTitle = $formTitle ?? 'اطلب عرض سعر أو معاينة مجانية'; ?>
<form class="quote-form" data-whatsapp-form>
    <h2><?= e($formTitle) ?></h2>
    <p>املأ البيانات وسيتم تجهيز رسالة واتساب تلقائيا مع تفاصيل طلبك.</p>

    <div class="form-grid">
        <label>
            الاسم
            <input type="text" name="name" placeholder="مثال: أبو عبدالله" required>
        </label>
        <label>
            رقم الجوال
            <input type="tel" name="phone" placeholder="05XXXXXXXX" required>
        </label>
        <label>
            الحي في الرياض
            <input type="text" name="district" placeholder="مثال: الملقا">
        </label>
        <label>
            الخدمة المطلوبة
            <select name="service">
                <option>تفصيل ستائر</option>
                <option>تركيب ستائر</option>
                <option>ستائر كهربائية</option>
                <option>تنجيد كنب</option>
                <option>تصليح كنب</option>
                <option>تنجيد مجالس</option>
            </select>
        </label>
    </div>

    <label>
        تفاصيل مختصرة
        <textarea name="message" rows="4" placeholder="اذكر عدد النوافذ أو نوع الكنب أو موعد الزيارة المناسب"></textarea>
    </label>

    <button class="btn btn--gold btn--wide" type="submit">إرسال الطلب عبر واتساب</button>
    <small>لا يتم حفظ البيانات في الموقع؛ سيتم فتح واتساب برسالة جاهزة.</small>
</form>
