
document.addEventListener("DOMContentLoaded", function () {

    /* ========================================
       01. MOBILE NAVIGATION
    ======================================== */

    const menuToggle = document.querySelector(".menu-toggle");
    const navigation = document.querySelector(".primary-navigation");

    if (menuToggle && navigation) {

        menuToggle.addEventListener("click", function () {

            const isOpen = navigation.classList.toggle("is-open");

            menuToggle.setAttribute("aria-expanded", isOpen);

            menuToggle.classList.toggle("is-active", isOpen);

        });

        // Close menu when clicking a navigation link
        navigation.querySelectorAll("a").forEach(function (link) {

            link.addEventListener("click", function () {

                navigation.classList.remove("is-open");

                menuToggle.classList.remove("is-active");

                menuToggle.setAttribute("aria-expanded", "false");

            });

        });

    }

    /* ========================================
       02. PROJECT PREVIEW MODAL
    ======================================== */

    const projectCardSelector = ".hub-project-card, .project-card, .kp-project-card, .portfolio-project-card";
    const projectCards = document.querySelectorAll(projectCardSelector);

    if (projectCards.length) {
        const dialog = document.createElement("dialog");
        dialog.className = "project-preview-dialog";
        dialog.setAttribute("aria-labelledby", "project-preview-title");

        const layout = document.createElement("div");
        layout.className = "project-preview-layout";

        const media = document.createElement("div");
        media.className = "project-preview-media";

        const image = document.createElement("img");
        media.appendChild(image);

        const content = document.createElement("div");
        content.className = "project-preview-content";

        const closeButton = document.createElement("button");
        closeButton.className = "project-preview-close";
        closeButton.type = "button";
        closeButton.setAttribute("aria-label", "Close project preview");
        closeButton.textContent = "×";

        const label = document.createElement("p");
        label.className = "project-preview-label";
        label.textContent = "PROJECT PREVIEW";

        const title = document.createElement("h2");
        title.id = "project-preview-title";

        const description = document.createElement("p");
        description.className = "project-preview-description";

        const role = document.createElement("div");
        role.className = "project-preview-role";

        const brief = document.createElement("div");
        brief.className = "project-preview-brief";

        const technologiesHeading = document.createElement("h3");
        technologiesHeading.className = "project-preview-technologies-heading";
        technologiesHeading.textContent = "TECH STACK";

        const technologies = document.createElement("ul");
        technologies.className = "project-preview-technologies";

        content.append(label, title, description, role, brief, technologiesHeading, technologies);
        layout.append(media, content);
        dialog.append(closeButton, layout);
        document.body.appendChild(dialog);

        function closeProjectPreview() {
            if (typeof dialog.close === "function" && dialog.open) {
                dialog.close();
            } else {
                dialog.removeAttribute("open");
            }
        }

        function openProjectPreview(card) {
            const cardTitle = card.querySelector("h3");
            const cardImage = card.querySelector(
                ".hub-project-image img, .project-image img, .kp-project-image img, .project-cover img"
            );
            const cardContent = card.querySelector(
                ".hub-project-content, .project-content, .kp-project-info, .project-details"
            );

            title.textContent = cardTitle ? cardTitle.textContent.trim() : "Project";

            if (cardImage) {
                image.src = cardImage.currentSrc || cardImage.src;
                image.alt = cardImage.alt || title.textContent + " preview";
                media.hidden = false;
                dialog.classList.add("has-image");
            } else {
                image.removeAttribute("src");
                image.alt = "";
                media.hidden = true;
                dialog.classList.remove("has-image");
            }

            description.textContent = "";
            role.replaceChildren();
            brief.replaceChildren();
            technologies.replaceChildren();
            technologiesHeading.hidden = true;

            if (cardContent) {
                const cardDescription = cardContent.querySelector("p");
                const cardRole = cardContent.querySelector(".kp-project-role");
                const projectBrief = cardContent.querySelector(".project-brief-content");

                if (cardDescription) {
                    description.textContent = cardDescription.textContent.trim();
                }

                if (cardRole) {
                    role.appendChild(cardRole.cloneNode(true));
                }

                if (projectBrief) {
                    brief.appendChild(projectBrief.cloneNode(true));
                }
            }

            card.querySelectorAll(
                ".hub-project-tags li, .project-technologies span, .kp-project-stack span, .project-tag"
            ).forEach(function (tag) {
                const item = document.createElement("li");
                item.textContent = tag.textContent.trim();
                technologies.appendChild(item);
            });
            technologiesHeading.hidden = technologies.childElementCount === 0;

            if (typeof dialog.showModal === "function") {
                if (!dialog.open) {
                    dialog.showModal();
                }
            } else {
                dialog.setAttribute("open", "");
            }

            closeButton.focus();
        }

        projectCards.forEach(function (card) {
            if (!card.matches(".hub-project-card")) {
                const cardTitle = card.querySelector("h3");
                card.tabIndex = 0;
                card.setAttribute("aria-haspopup", "dialog");
                card.setAttribute(
                    "aria-label",
                    "View project details for " + (cardTitle ? cardTitle.textContent.trim() : "project")
                );
            }
        });

        document.addEventListener("click", function (event) {
            const card = event.target.closest(projectCardSelector);

            if (!card) {
                return;
            }

            if (card.matches(".hub-project-card")) {
                event.preventDefault();
            } else if (event.target.closest("details, a, button, input, select, textarea")) {
                return;
            }

            openProjectPreview(card);
        });

        document.addEventListener("keydown", function (event) {
            const card = event.target.closest(projectCardSelector);

            if (!card || card.matches(".hub-project-card") || event.target !== card) {
                return;
            }

            if (event.key === "Enter" || event.key === " ") {
                event.preventDefault();
                openProjectPreview(card);
            }
        });

        closeButton.addEventListener("click", closeProjectPreview);
        dialog.addEventListener("click", function (event) {
            if (event.target === dialog) {
                closeProjectPreview();
            }
        });
    }


    /* ========================================
       03. ENABLE SCROLL ANIMATIONS
    ======================================== */

    document.documentElement.classList.add("js-motion");


    /* ========================================
       04. SELECT ELEMENTS TO ANIMATE
    ======================================== */

    const revealElements = [

        ".intro-heading",
        ".intro-content",
        ".stat-item",
        ".section-heading",
        ".hub-member-card",
        ".members-bottom",
        ".explore-content"

    ];


    /* ========================================
       05. ADD REVEAL ATTRIBUTES
    ======================================== */

    revealElements.forEach(function (selector) {

        document.querySelectorAll(selector).forEach(function (element) {

            element.setAttribute("data-reveal", "up");

        });

    });


    /* ========================================
       06. GET ALL REVEAL ELEMENTS
    ======================================== */

    const elements = document.querySelectorAll("[data-reveal]");


    /* ========================================
       07. BROWSER COMPATIBILITY
    ======================================== */

    if (!("IntersectionObserver" in window)) {

        elements.forEach(function (element) {

            element.classList.add("is-visible");

        });

        return;

    }


    /* ========================================
       08. INTERSECTION OBSERVER
    ======================================== */

    const observer = new IntersectionObserver(

        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add("is-visible");

                    // Stop observing after animation
                    observer.unobserve(entry.target);

                }

            });

        },

        {

            threshold: 0.12,

            rootMargin: "0px 0px -40px 0px"

        }

    );


    /* ========================================
       09. OBSERVE ELEMENTS
    ======================================== */

    elements.forEach(function (element) {

        observer.observe(element);

    });


});


