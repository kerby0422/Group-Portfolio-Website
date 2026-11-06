
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
       02. ENABLE SCROLL ANIMATIONS
    ======================================== */

    document.documentElement.classList.add("js-motion");


    /* ========================================
       03. SELECT ELEMENTS TO ANIMATE
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
       04. ADD REVEAL ATTRIBUTES
    ======================================== */

    revealElements.forEach(function (selector) {

        document.querySelectorAll(selector).forEach(function (element) {

            element.setAttribute("data-reveal", "up");

        });

    });


    /* ========================================
       05. GET ALL REVEAL ELEMENTS
    ======================================== */

    const elements = document.querySelectorAll("[data-reveal]");


    /* ========================================
       06. BROWSER COMPATIBILITY
    ======================================== */

    if (!("IntersectionObserver" in window)) {

        elements.forEach(function (element) {

            element.classList.add("is-visible");

        });

        return;

    }


    /* ========================================
       07. INTERSECTION OBSERVER
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
       08. OBSERVE ELEMENTS
    ======================================== */

    elements.forEach(function (element) {

        observer.observe(element);

    });


});


