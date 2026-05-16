(function () {
    const body = document.body;
    const menuToggle = document.querySelector("[data-menu-toggle]");
    const primaryNav = document.querySelector("[data-primary-nav]");

    if (menuToggle && primaryNav) {
        menuToggle.addEventListener("click", () => {
            const isOpen = primaryNav.classList.toggle("is-open");
            body.classList.toggle("menu-open", isOpen);
            menuToggle.setAttribute("aria-expanded", String(isOpen));
        });

        primaryNav.addEventListener("click", (event) => {
            if (event.target.closest("a")) {
                primaryNav.classList.remove("is-open");
                body.classList.remove("menu-open");
                menuToggle.setAttribute("aria-expanded", "false");
            }
        });
    }

    const revealItems = document.querySelectorAll(".reveal");
    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        revealItems.forEach((item) => observer.observe(item));
    } else {
        revealItems.forEach((item) => item.classList.add("is-visible"));
    }

    const forms = document.querySelectorAll("[data-whatsapp-form]");
    forms.forEach((form) => {
        form.addEventListener("submit", (event) => {
            event.preventDefault();
            const data = new FormData(form);
            const phone = body.dataset.whatsapp || "";
            const message = [
                "مرحبا تفصيل ستارة، أريد طلب عرض سعر في الرياض.",
                "الاسم: " + (data.get("name") || ""),
                "الجوال: " + (data.get("phone") || ""),
                "الحي: " + (data.get("district") || ""),
                "الخدمة: " + (data.get("service") || ""),
                "التفاصيل: " + (data.get("message") || "")
            ].join("\n");

            window.open("https://wa.me/" + phone + "?text=" + encodeURIComponent(message), "_blank", "noopener");
        });
    });

    const filter = document.querySelector("[data-gallery-filter]");
    if (filter) {
        const cards = document.querySelectorAll("[data-category]");
        filter.addEventListener("click", (event) => {
            const button = event.target.closest("[data-filter]");
            if (!button) {
                return;
            }

            filter.querySelectorAll("button").forEach((item) => item.classList.remove("is-active"));
            button.classList.add("is-active");
            const value = button.dataset.filter;

            cards.forEach((card) => {
                const shouldShow = value === "all" || card.dataset.category === value;
                card.classList.toggle("is-hidden", !shouldShow);
            });
        });
    }

    const languageToggle = document.querySelector("[data-language-toggle]");
    if (languageToggle) {
        let english = false;
        const translatable = document.querySelectorAll("[data-en]");
        translatable.forEach((node) => {
            node.dataset.ar = node.textContent.trim();
        });

        languageToggle.addEventListener("click", () => {
            english = !english;
            translatable.forEach((node) => {
                const next = english ? node.dataset.en : node.dataset.ar;
                if (next) {
                    node.textContent = next;
                }
            });
            document.documentElement.lang = english ? "en" : "ar-SA";
            languageToggle.textContent = english ? "AR" : "EN";
        });
    }
}());
