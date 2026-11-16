document.addEventListener("DOMContentLoaded", function () {
    const page = document.querySelector(".members-page");

    if (!page) {
        return;
    }

    const revealElements = page.querySelectorAll("[data-reveal]");
    const workflowTrack = page.querySelector(".workflow-track");
    const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    if (reduceMotion || !("IntersectionObserver" in window)) {
        revealElements.forEach(function (element) {
            element.classList.add("is-revealed");
        });

        if (workflowTrack) {
            workflowTrack.classList.add("is-revealed");
        }

        return;
    }

    page.classList.add("has-reveal");

    page.querySelectorAll(".member-profile-card[data-reveal]").forEach(function (card, index) {
        card.style.setProperty("--reveal-delay", (index % 2) * 0.12 + "s");
    });

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-revealed");
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12,
        rootMargin: "0px 0px -40px 0px"
    });

    revealElements.forEach(function (element) {
        observer.observe(element);
    });
});
