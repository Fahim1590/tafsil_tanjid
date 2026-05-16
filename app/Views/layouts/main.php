<?php
$metaTitle = $page['title'] ?? $site['brand'];
$metaDescription = $page['metaDescription'] ?? $site['tagline'];
$canonicalRoute = $route === 'home' ? '' : $route;
$canonical = SiteData::canonical($canonicalRoute);
$heroImage = $page['image'] ?? SiteData::image('luxury-curtains-living-room-optimized.jpg');
$bodyClass = 'route-' . (($route === '' || $route === 'home') ? 'home' : str_replace('/', '-', $route));
?>
<!doctype html>
<html lang="ar-SA" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($metaTitle) ?></title>
    <meta name="description" content="<?= e($metaDescription) ?>">
    <meta name="keywords" content="<?= e($page['keywords'] ?? 'تفصيل ستائر بالرياض, تركيب ستائر بالرياض, ستائر كهربائية الرياض, تنجيد كنب بالرياض, تنجيد مجالس بالرياض') ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?= e($canonical) ?>">
    <meta property="og:locale" content="ar_SA">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($metaTitle) ?>">
    <meta property="og:description" content="<?= e($metaDescription) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:image" content="<?= e($site['baseUrl'] . $heroImage) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="theme-color" content="#17120d">
    <link rel="preload" as="image" href="<?= e($heroImage) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;500;600;700;800&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e(SiteData::asset('css/styles.css')) ?>">
    <?php foreach ($schema as $schemaItem): ?>
        <script type="application/ld+json"><?= json_encode($schemaItem, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?></script>
    <?php endforeach; ?>
</head>
<body class="<?= e($bodyClass) ?>" data-whatsapp="<?= e($site['whatsapp']) ?>" data-phone="<?= e($site['phoneTel']) ?>">
    <a class="skip-link" href="#main-content">تجاوز إلى المحتوى</a>
    <?php require __DIR__ . '/../partials/header.php'; ?>
    <main id="main-content">
        <?php require $viewFile; ?>
    </main>
    <?php require __DIR__ . '/../partials/footer.php'; ?>
    <?php require __DIR__ . '/../partials/sticky-ctas.php'; ?>
    <script src="<?= e(SiteData::asset('js/app.js')) ?>" defer></script>
</body>
</html>
