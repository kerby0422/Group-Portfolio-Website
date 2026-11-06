<?php get_header(); ?>

<main class="my-portfolio-page">

    <!-- HERO / PROFILE -->
    <section class="portfolio-hero section">
        <div class="container portfolio-grid">

            <div>
                <p class="eyebrow">
                    <span class="status-dot"></span>
                    ASPIRING WEB DEVELOPER
                </p>

                <h1>
                    Hi, I'm <span class="accent">Your Name.</span><br>
                    I build websites and digital experiences.
                </h1>

                <p class="hero-description">
                    I am an aspiring web developer who enjoys
                    creating responsive websites and learning
                    new technologies.
                </p>

                <div class="hero-actions">
                    <a class="button" href="#my-projects">
                        Explore My Projects ↘
                    </a>

                    <a class="text-link" href="#my-contact">
                        Contact Me ↗
                    </a>
                </div>
            </div>

            <div class="portfolio-art">
                <div class="art-circle">
                    YN
                    <span>✳</span>
                </div>

                <p>DESIGN · CODE · LEARN</p>

                <div class="art-tags">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT ME -->
    <section class="section">
        <div class="container about-grid">

            <div>
                <p class="eyebrow">01 / ABOUT ME</p>

                <h2 class="section-heading">
                    Learning today.<br>
                    <span class="muted">
                        Building for tomorrow.
                    </span>
                </h2>
            </div>

            <div class="about-copy">
                <p>
                    Hello! I'm Your Name. I am passionate about
                    technology and web development. I enjoy
                    learning how websites work and turning
                    ideas into functional web pages.
                </p>

                <p>
                    My goal is to improve my programming skills
                    by creating projects and exploring new tools.
                </p>
            </div>

        </div>
    </section>

    <!-- SKILLS -->
    <section class="section projects-section">
        <div class="container">

            <p class="eyebrow">02 / MY SKILLS</p>

            <h2 class="section-heading">
                Technologies I'm <span class="muted">learning.</span>
            </h2>

            <div class="tag-list">
                <span>HTML5</span>
                <span>CSS3</span>
                <span>JavaScript</span>
                <span>PHP</span>
                <span>WordPress</span>
                <span>MySQL</span>
                <span>Git</span>
            </div>

        </div>
    </section>

    <!-- PROJECTS -->
    <section class="section" id="my-projects">
        <div class="container">

            <p class="eyebrow">03 / MY PROJECTS</p>

            <h2 class="section-heading">
                Things I've <span class="muted">created.</span>
            </h2>

            <div class="project-grid">

                <article class="project-card">
                    <div class="project-art art-green">
                        <span>01</span>
                        <b>DIGITAL<br>CLOCK</b>
                    </div>

                    <h3>Digital Clock & Calendar</h3>

                    <p>
                        A website that displays the current time
                        and a calendar using JavaScript.
                    </p>

                    <div class="tag-list">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-art art-peach">
                        <span>02</span>
                        <b>MY WEB<br>PROJECT</b>
                    </div>

                    <h3>Personal Website</h3>

                    <p>
                        A responsive website designed to introduce
                        myself and showcase my skills.
                    </p>

                    <div class="tag-list">
                        <span>HTML</span>
                        <span>CSS</span>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-art art-blue">
                        <span>03</span>
                        <b>WORD<br>PRESS</b>
                    </div>

                    <h3>Custom WordPress Website</h3>

                    <p>
                        A portfolio website developed with a
                        custom WordPress theme using PHP and CSS.
                    </p>

                    <div class="tag-list">
                        <span>WordPress</span>
                        <span>PHP</span>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact-section" id="my-contact">
        <div class="container">

            <p class="eyebrow">04 / CONTACT ME</p>

            <h2>
                Let's connect.<br>
                <em>Let's create.</em>
            </h2>

            <p>
                Have a question or want to work together?
                Feel free to contact me.
            </p>

            <a class="button button-light"
                href="mailto:your-email@example.com">
                Email Me ↗
            </a>

            <p>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    ← Back to Home
                </a>
            </p>

        </div>
    </section>

</main>

<?php get_footer(); ?>