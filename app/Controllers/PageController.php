<?php
declare(strict_types=1);

final class PageController
{
    public function handle(string $route): void
    {
        $site = SiteData::site();
        $route = $route === '' ? 'home' : trim($route, '/');

        if ($route === 'home') {
            $this->render('home', [
                'site' => $site,
                'route' => '',
                'page' => SiteData::homePage(),
                'services' => SiteData::services(),
                'gallery' => SiteData::gallery(),
                'reviews' => SiteData::reviews(),
                'faqs' => SiteData::homeFaqs(),
                'articles' => SiteData::articles(),
                'schema' => SiteData::schema('home'),
            ]);
            return;
        }

        if ($route === 'services') {
            $this->render('services', [
                'site' => $site,
                'route' => $route,
                'page' => SiteData::staticPage('services'),
                'services' => SiteData::services(),
                'schema' => SiteData::schema('services'),
            ]);
            return;
        }

        $services = SiteData::services();
        if (isset($services[$route])) {
            $service = $services[$route];
            $this->render('service', [
                'site' => $site,
                'route' => $route,
                'page' => $service,
                'service' => $service,
                'services' => $services,
                'faqs' => $service['faq'],
                'schema' => SiteData::schema('service', $service),
            ]);
            return;
        }

        if ($route === 'gallery') {
            $this->render('gallery', [
                'site' => $site,
                'route' => $route,
                'page' => SiteData::staticPage('gallery'),
                'gallery' => SiteData::gallery(),
                'schema' => SiteData::schema('gallery'),
            ]);
            return;
        }

        if ($route === 'about') {
            $this->render('about', [
                'site' => $site,
                'route' => $route,
                'page' => SiteData::staticPage('about'),
                'schema' => SiteData::schema('about'),
            ]);
            return;
        }

        if ($route === 'contact') {
            $this->render('contact', [
                'site' => $site,
                'route' => $route,
                'page' => SiteData::staticPage('contact'),
                'schema' => SiteData::schema('contact'),
            ]);
            return;
        }

        if ($route === 'free-measurement') {
            $this->render('measurement', [
                'site' => $site,
                'route' => $route,
                'page' => SiteData::staticPage('free-measurement'),
                'schema' => SiteData::schema('measurement'),
            ]);
            return;
        }

        if ($route === 'blog') {
            $this->render('blog', [
                'site' => $site,
                'route' => $route,
                'page' => SiteData::staticPage('blog'),
                'articles' => SiteData::articles(),
                'schema' => SiteData::schema('blog'),
            ]);
            return;
        }

        if (str_starts_with($route, 'blog/')) {
            $slug = substr($route, strlen('blog/'));
            $article = SiteData::article($slug);
            if ($article !== null) {
                $this->render('article', [
                    'site' => $site,
                    'route' => $route,
                    'page' => $article,
                    'article' => $article,
                    'articles' => SiteData::articles(),
                    'schema' => SiteData::schema('article', $article),
                ]);
                return;
            }
        }

        http_response_code(404);
        $this->render('not-found', [
            'site' => $site,
            'route' => $route,
            'page' => SiteData::staticPage('not-found'),
            'schema' => SiteData::schema('not-found'),
        ]);
    }

    private function render(string $view, array $data): void
    {
        extract($data, EXTR_SKIP);
        $viewFile = __DIR__ . '/../Views/pages/' . $view . '.php';
        require __DIR__ . '/../Views/layouts/main.php';
    }
}
