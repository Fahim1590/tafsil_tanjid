# تفصيل ستارة | Tafsil Sitara Website Brief

## Website Structure
- `/` Home: Google Ads landing page with hero CTA, trust badges, services, gallery, reviews, FAQ, and quote form.
- `/services`: overview of all conversion-focused service pages.
- `/curtains`: تفصيل ستائر بالرياض.
- `/sofas`: تفصيل وتنجيد كنب بالرياض.
- `/upholstery`: تنجيد كنب وأثاث بالرياض.
- `/electric-curtains`: ستائر كهربائية وسمارت بالرياض.
- `/sofa-repair`: تصليح كنب بالرياض.
- `/majlis-upholstery`: تنجيد مجالس بالرياض.
- `/gallery`: categorized portfolio grid with filters.
- `/about`: brand trust and local authority.
- `/contact`: phone, WhatsApp, email, map, and quote form.
- `/free-measurement`: dedicated conversion page for free measurement.
- `/blog` and `/blog/{slug}`: Arabic SEO article hub.

## MVC Architecture
- `index.php`: front controller and route resolver.
- `app/Controllers/PageController.php`: maps SEO-friendly URLs to views.
- `app/Models/SiteData.php`: site config, page content, services, FAQs, articles, gallery, and schema.
- `app/Views/layouts/main.php`: shared document layout, meta tags, schema, header, footer, scripts.
- `app/Views/pages/*.php`: page templates.
- `app/Views/partials/*.php`: header, footer, sticky CTAs, quote form.
- `public/assets/css/styles.css`: full RTL luxury UI.
- `public/assets/js/app.js`: mobile menu, WhatsApp form, gallery filter, reveal animation, English micro-toggle.

## UI/UX Concept
Arabic-first luxury service design for Riyadh homeowners. The first viewport immediately communicates premium curtains and upholstery, offers WhatsApp and call actions, and reinforces local trust through free measurement, Riyadh coverage, and service clarity.

The palette uses black, ivory, champagne, gold, olive, and terracotta accents to feel premium without becoming a flat single-color beige theme. Cards are used only for repeated service, review, article, and form modules.

## Homepage Layout
1. Hero with luxury curtains image, Arabic H1, WhatsApp CTA, call CTA, and trust chips.
2. Proof strip for quick trust and conversion signals.
3. Service grid linking to SEO landing pages.
4. Dark conversion section explaining mobile-first Saudi behavior.
5. Before/after transformation cards.
6. Gallery preview.
7. Quote/free-measurement form.
8. Reviews/social proof.
9. FAQ and SEO article links.

## Conversion Strategy
- Sticky WhatsApp and call buttons on desktop.
- Sticky bottom CTA bar on mobile.
- Above-fold WhatsApp and call buttons.
- Quote forms convert submissions into prefilled WhatsApp messages.
- Dedicated `/free-measurement` page for Google Ads campaigns.
- Trust copy mentions Riyadh, free measurement, villas, majlis, hotels, and commercial projects.

## SEO Strategy
- Dedicated pages target high-intent keywords:
  - تفصيل ستائر بالرياض
  - تركيب ستائر بالرياض
  - ستائر مودرن الرياض
  - ستائر كهربائية الرياض
  - ستائر سومفي
  - تنجيد كنب بالرياض
  - تنجيد مجالس بالرياض
  - تصليح كنب بالرياض
  - upholstery Riyadh
  - curtains Riyadh
- Each service has unique title, meta description, H1, FAQ content, and internal links.
- LocalBusiness, Service, FAQPage, and Article schema are generated in PHP.
- Arabic alt text is included for all content images.
- `robots.txt` and `sitemap.xml` are included.

## Blog Strategy
Articles target discovery and mid-funnel searches:
- Curtain trends in Riyadh.
- Best curtain fabrics for Riyadh homes.
- Majlis upholstery and decoration.
- Electric curtains guide.
- Sofa repair decision tips.
- Luxury curtain and sofa coordination.

## Image Strategy
Downloaded free-use Unsplash images are stored locally under `public/assets/images` and optimized into smaller runtime files. Replace them with real project photos when available while keeping the same filenames or updating `SiteData.php`.

## Launch Notes
- Replace placeholder phone and WhatsApp values in `app/Models/SiteData.php`.
- Replace `https://tafsilsitara.sa` with the final production domain in `SiteData.php`, `robots.txt`, and `sitemap.xml`.
- Add real Google review links and real project images when available.
