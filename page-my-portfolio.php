
<?php
wp_enqueue_style(
    'bootstrap-5',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
    array(),
    '5.3.3'
);

wp_enqueue_script(
    'bootstrap-5',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
    array(),
    '5.3.3',
    true
);

get_header();
?>

<style>
/* =====================================
   MY PORTFOLIO - MAIN DESIGN
===================================== */

.my-portfolio {
    --green: #243b2d;
    --lime: #c7f36b;
    --cream: #f7f8f3;
    --dark: #17251f;
    --muted: #748078;
    --border: #e1e7dd;

    color: var(--dark);
    overflow: hidden;
}

.my-portfolio .container {
    max-width: 1120px;
}

.my-portfolio h1,
.my-portfolio h2,
.my-portfolio h3 {
    font-family: 'Space Grotesk', sans-serif;
    letter-spacing: -1.5px;
    line-height: 1.15;
}

.my-portfolio p {
    line-height: 1.8;
}

.portfolio-eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--muted);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 22px;
}

.portfolio-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #a5d94c;
    box-shadow: 0 0 0 5px rgba(165,217,76,.15);
}

.portfolio-heading {
    font-size: clamp(36px, 5vw, 55px);
    font-weight: 700;
    margin-bottom: 25px;
}

.portfolio-muted {
    color: #929c93;
}

/* BUTTONS */

.portfolio-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    padding: 14px 23px;
    border-radius: 50px;
    background: var(--lime);
    color: var(--dark);
    border: 1px solid var(--lime);
    text-decoration: none;
    font-size: 13px;
    font-weight: 700;
    transition: .25s ease;
}

.portfolio-btn:hover {
    background: white;
    border-color: white;
    color: var(--dark);
    transform: translateY(-3px);
}

.portfolio-btn-outline {
    background: transparent;
    border-color: rgba(255,255,255,.4);
    color: white;
}

.portfolio-btn-outline:hover {
    background: white;
    color: var(--dark);
}

/* =====================================
   HERO
===================================== */

.portfolio-hero {
    background: var(--green);
    color: white;
    padding: 100px 0 80px;
    border-radius: 0 0 35px 35px;
    position: relative;
    overflow: hidden;
}

.portfolio-hero::before {
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    right: -150px;
    top: -230px;
    border: 1px solid rgba(199,243,107,.2);
    border-radius: 50%;
    box-shadow:
        0 0 0 50px rgba(199,243,107,.04),
        0 0 0 100px rgba(199,243,107,.025);
}

.portfolio-hero .portfolio-eyebrow {
    color: #c7d5c8;
}

.portfolio-hero h1 {
    position: relative;
    z-index: 1;
    font-size: clamp(45px, 6vw, 75px);
    font-weight: 700;
    letter-spacing: -4px;
    margin-bottom: 25px;
}

.portfolio-hero h1 span {
    color: var(--lime);
}

.portfolio-hero .hero-description {
    color: #c6d1c8;
    max-width: 550px;
    font-size: 15px;
    margin-bottom: 30px;
}

.portfolio-hero .hero-bottom-note {
    margin-top: 55px;
    font-size: 10px;
    letter-spacing: 2px;
    color: #b9c8ba;
    font-weight: 700;
}

.hero-photo-wrapper {
    position: relative;
    min-height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero-photo-card {
    position: relative;
    z-index: 2;
    width: 340px;
    height: 370px;
    background: var(--lime);
    border-radius: 30px;
    transform: rotate(4deg);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 0 25px 60px rgba(0,0,0,.18);
}

.portfolio-profile-photo {
    width: 210px;
    height: 210px;
    border-radius: 50%;
    object-fit: cover;
    object-position: center;
    border: 1px solid rgba(23,37,31,.2);
    background: rgba(255,255,255,.3);
}

.hero-photo-card h3 {
    color: var(--dark);
    font-size: 30px;
    margin-top: 20px;
    margin-bottom: 5px;
}

.hero-photo-card p {
    color: var(--dark);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    margin: 0;
}

.photo-floating-label {
    position: absolute;
    z-index: 3;
    padding: 17px 22px;
    background: white;
    color: var(--dark);
    border-radius: 20px;
    font-size: 13px;
    font-weight: 700;
    box-shadow: 0 10px 30px rgba(0,0,0,.15);
}

.photo-label-one {
    top: 35px;
    right: -5px;
}

.photo-label-two {
    bottom: 35px;
    left: -10px;
}

/* =====================================
   ABOUT ME
===================================== */

.portfolio-about {
    padding: 100px 0;
    background: var(--cream);
}

.about-text {
    color: var(--muted);
    font-size: 15px;
}

.about-highlight {
    margin-top: 25px;
    padding: 25px;
    border-left: 4px solid #a5d94c;
    background: #edf2e8;
    border-radius: 0 15px 15px 0;
    color: #46564b;
    font-size: 14px;
    line-height: 1.8;
}

.about-number {
    display: flex;
    gap: 20px;
    margin-top: 30px;
}

.about-number div {
    padding-right: 25px;
    border-right: 1px solid var(--border);
}

.about-number div:last-child {
    border: none;
}

.about-number strong {
    display: block;
    font-size: 15px;
}

.about-number span {
    font-size: 11px;
    color: var(--muted);
}

/* =====================================
   TECHNICAL SKILLS
===================================== */

.portfolio-skills {
    padding: 90px 0;
    background: #edf2e9;
}

.skill-card {
    height: 100%;
    padding: 30px;
    background: white;
    border: 1px solid var(--border);
    border-radius: 22px;
    transition: .25s ease;
}

.skill-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 40px rgba(28,47,35,.08);
}

.skill-icon {
    width: 52px;
    height: 52px;
    display: grid;
    place-items: center;
    background: var(--lime);
    border-radius: 15px;
    font-size: 23px;
    margin-bottom: 22px;
}

.skill-card h3 {
    font-size: 21px;
    margin-bottom: 15px;
}

.skill-card p {
    color: var(--muted);
    font-size: 13px;
}

.skill-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 7px;
    margin-top: 20px;
}

.skill-tags span {
    padding: 7px 11px;
    background: #f0f3ed;
    border-radius: 30px;
    font-size: 10px;
    font-weight: 700;
}

/* =====================================
   PROJECTS
===================================== */

.portfolio-projects {
    padding: 100px 0;
    background: var(--cream);
}

.portfolio-project-card {
    height: 100%;
    padding: 13px;
    border: 1px solid var(--border);
    border-radius: 22px;
    background: white;
    transition: .3s ease;
}

.portfolio-project-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 20px 45px rgba(28,47,35,.09);
}

.project-cover {
    min-height: 210px;
    border-radius: 15px;
    padding: 22px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.project-cover.green {
    background: #c9f17b;
}

.project-cover.peach {
    background: #ffd8c8;
}

.project-cover.blue {
    background: #d9e7ff;
}

.project-cover.purple {
    background: #e7dcff;
}

.project-cover small {
    font-weight: 700;
    font-size: 10px;
    letter-spacing: 2px;
}

.project-cover strong {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 32px;
    line-height: 1.05;
}

.project-details {
    padding: 22px 10px 13px;
}

.project-details h3 {
    font-size: 20px;
    margin-bottom: 12px;
}

.project-details p {
    font-size: 13px;
    color: var(--muted);
}

.project-tag {
    display: inline-block;
    padding: 6px 10px;
    margin: 3px 2px;
    border: 1px solid var(--border);
    border-radius: 30px;
    font-size: 10px;
    font-weight: 700;
}

/* =====================================
   DEVELOPMENT JOURNEY
===================================== */

.portfolio-journey {
    padding: 90px 0;
    background: #edf2e9;
}

.journey-card {
    height: 100%;
    padding: 30px;
    background: white;
    border-radius: 20px;
    border: 1px solid var(--border);
}

.journey-card h3 {
    font-size: 21px;
    margin-bottom: 12px;
}

.journey-card p {
    font-size: 14px;
    color: var(--muted);
    margin: 0;
}

.journey-number {
    font-size: 12px;
    font-weight: 700;
    color: #76944b;
    letter-spacing: 2px;
    margin-bottom: 20px;
}

/* =====================================
   GOALS
===================================== */

.portfolio-goals {
    padding: 100px 0;
    background: var(--cream);
}

.goal-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.goal-list li {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 18px 0;
    border-bottom: 1px solid var(--border);
    color: #536158;
    font-size: 14px;
}

.goal-check {
    width: 25px;
    height: 25px;
    min-width: 25px;
    display: grid;
    place-items: center;
    border-radius: 50%;
    background: var(--lime);
    color: var(--dark);
    font-weight: 700;
}

/* =====================================
   CONTACT
===================================== */

.portfolio-contact {
    padding: 90px 0;
    background: var(--green);
    color: white;
    border-radius: 30px 30px 0 0;
}

.portfolio-contact h2 {
    font-size: clamp(43px, 6vw, 68px);
    font-weight: 700;
}

.portfolio-contact h2 span {
    color: var(--lime);
}

.portfolio-contact p {
    color: #c6d1c8;
    max-width: 550px;
}

.contact-details {
    margin-top: 30px;
}

.contact-details a {
    color: white;
    text-decoration: none;
    font-size: 14px;
}

.contact-details a:hover {
    color: var(--lime);
}

/* =====================================
   RESPONSIVE
===================================== */

@media(max-width: 991px) {
    .portfolio-hero {
        padding: 80px 0 65px;
    }

    .hero-photo-wrapper {
        margin-top: 35px;
        min-height: 380px;
    }
}

@media(max-width: 576px) {
    .portfolio-hero {
        padding: 65px 0 55px;
        border-radius: 0 0 25px 25px;
    }

    .portfolio-hero h1 {
        letter-spacing: -2px;
    }

    .hero-photo-wrapper {
        min-height: 310px;
    }

    .hero-photo-card {
        width: 260px;
        height: 280px;
    }

    .portfolio-profile-photo {
        width: 160px;
        height: 160px;
    }

    .hero-photo-card h3 {
        font-size: 24px;
        margin-top: 12px;
    }

    .photo-floating-label {
        padding: 12px 15px;
        font-size: 11px;
    }

    .portfolio-about,
    .portfolio-projects,
    .portfolio-goals {
        padding: 70px 0;
    }

    .portfolio-skills,
    .portfolio-journey {
        padding: 65px 0;
    }

    .portfolio-contact {
        padding: 70px 0;
    }
}
</style>


<main class="my-portfolio">

    <!-- =================================
         HERO SECTION
    ================================== -->

    <section class="portfolio-hero">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-7">

                    <p class="portfolio-eyebrow">
                        <span class="portfolio-dot"></span>
                        ASPIRING WEB DEVELOPER
                    </p>

                    <h1>
                        Hi, I'm <span>Kerby.</span><br>
                        Building thoughtful<br>
                        digital experiences.
                    </h1>

                    <p class="hero-description">
                        I'm an aspiring web developer passionate
                        about technology, programming, and creating
                        useful digital experiences. I enjoy turning
                        ideas into functional websites and applications
                        while continuously learning new technologies.
                    </p>

                    <div class="d-flex flex-wrap gap-3">

                        <a class="portfolio-btn" href="#portfolio-projects">
                            Explore My Projects ↘
                        </a>

                        <a class="portfolio-btn portfolio-btn-outline"
                           href="#portfolio-contact">
                            Get In Touch ↗
                        </a>

                    </div>

                    <div class="hero-bottom-note">
                        01 / DESIGN &nbsp; 02 / CODE &nbsp; 03 / LEARN
                    </div>

                </div>


                <!-- PROFILE PHOTO -->

                <div class="col-lg-5">

                    <div class="hero-photo-wrapper">

                        <div class="hero-photo-card">

                            <img
                                src="<?php echo esc_url(get_theme_file_uri('/assets/images/kerby.png')); ?>"
                                alt="Kerby - Aspiring Web Developer"
                                class="portfolio-profile-photo"
                            >

                            <h3>Kerby</h3>

                            <p>ASPIRING WEB DEVELOPER</p>

                        </div>

                        <div class="photo-floating-label photo-label-one">
                            ✳ Creative Mind
                        </div>

                        <div class="photo-floating-label photo-label-two">
                            &lt;/&gt; Developer
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- =================================
         ABOUT ME
    ================================== -->

    <section class="portfolio-about" id="about-me">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <p class="portfolio-eyebrow">
                        01 / ABOUT ME
                    </p>

                    <h2 class="portfolio-heading">
                        Learning today.<br>
                        <span class="portfolio-muted">
                            Building for tomorrow.
                        </span>
                    </h2>

                </div>


                <div class="col-lg-6">

                    <p class="about-text">
                        Hello! I'm Kerby, an aspiring web developer
                        with an interest in website development,
                        programming, and information technology.
                    </p>

                    <p class="about-text">
                        I enjoy exploring different technologies,
                        solving problems through code, and transforming
                        ideas into functional digital projects.
                        Through hands-on activities and personal
                        projects, I continue to develop my technical
                        knowledge and creativity.
                    </p>

                    <div class="about-highlight">
                        My goal is to become a skilled developer
                        capable of creating innovative, useful,
                        and user-friendly digital solutions.
                    </div>

                    <div class="about-number">

                        <div>
                            <strong>Web</strong>
                            <span>Development</span>
                        </div>

                        <div>
                            <strong>IoT</strong>
                            <span>Projects</span>
                        </div>

                        <div>
                            <strong>Tech</strong>
                            <span>Exploration</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =================================
         TECHNICAL SKILLS
    ================================== -->

    <section class="portfolio-skills" id="my-skills">

        <div class="container">

            <p class="portfolio-eyebrow">
                02 / TECHNICAL SKILLS
            </p>

            <h2 class="portfolio-heading">
                Technologies I work with.<br>
                <span class="portfolio-muted">
                    Always learning more.
                </span>
            </h2>

            <div class="row g-4 mt-3">

                <!-- FRONTEND -->

                <div class="col-md-6 col-lg-4">

                    <div class="skill-card">

                        <div class="skill-icon">⌘</div>

                        <h3>Frontend Development</h3>

                        <p>
                            Building website interfaces with
                            responsive layouts, styling,
                            and interactive elements.
                        </p>

                        <div class="skill-tags">
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                            <span>Bootstrap</span>
                            <span>React</span>
                        </div>

                    </div>

                </div>


                <!-- BACKEND -->

                <div class="col-md-6 col-lg-4">

                    <div class="skill-card">

                        <div class="skill-icon">⌨</div>

                        <h3>Backend Development</h3>

                        <p>
                            Exploring server-side development,
                            application logic, and database
                            management.
                        </p>

                        <div class="skill-tags">
                            <span>PHP</span>
                            <span>Laravel</span>
                            <span>MySQL</span>
                        </div>

                    </div>

                </div>


                <!-- WORDPRESS -->

                <div class="col-md-6 col-lg-4">

                    <div class="skill-card">

                        <div class="skill-icon">✳</div>

                        <h3>CMS & Web Tools</h3>

                        <p>
                            Customizing websites and working
                            with development tools and
                            content management systems.
                        </p>

                        <div class="skill-tags">
                            <span>WordPress</span>
                            <span>VS Code</span>
                            <span>Git</span>
                        </div>

                    </div>

                </div>


                <!-- IOT -->

                <div class="col-md-6 col-lg-4">

                    <div class="skill-card">

                        <div class="skill-icon">⌁</div>

                        <h3>IoT Development</h3>

                        <p>
                            Building and experimenting with
                            microcontrollers, electronic sensors,
                            and connected devices.
                        </p>

                        <div class="skill-tags">
                            <span>ESP32</span>
                            <span>Arduino IDE</span>
                            <span>Blynk</span>
                            <span>Sensors</span>
                        </div>

                    </div>

                </div>


                <!-- DATABASE -->

                <div class="col-md-6 col-lg-4">

                    <div class="skill-card">

                        <div class="skill-icon">▤</div>

                        <h3>Database Management</h3>

                        <p>
                            Organizing, storing, and managing
                            information for web applications
                            and system projects.
                        </p>

                        <div class="skill-tags">
                            <span>MySQL</span>
                            <span>Database Design</span>
                        </div>

                    </div>

                </div>


                <!-- DESIGN -->

                <div class="col-md-6 col-lg-4">

                    <div class="skill-card">

                        <div class="skill-icon">✎</div>

                        <h3>UI & Web Design</h3>

                        <p>
                            Creating organized and visually
                            appealing layouts with a focus
                            on usability and accessibility.
                        </p>

                        <div class="skill-tags">
                            <span>Responsive Design</span>
                            <span>CSS</span>
                            <span>Bootstrap</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =================================
         FEATURED PROJECTS
    ================================== -->

    <section class="portfolio-projects" id="portfolio-projects">

        <div class="container">

            <p class="portfolio-eyebrow">
                03 / SELECTED WORK
            </p>

            <h2 class="portfolio-heading">
                Projects I'm<br>
                <span class="portfolio-muted">
                    proud to share.
                </span>
            </h2>

            <p class="about-text mb-5">
                Here are some of the projects and systems
                I have worked on or developed as part of
                my learning journey in technology.
            </p>


            <div class="row g-4">


                <!-- PROJECT 1 -->

                <div class="col-md-6 col-lg-6">

                    <article class="portfolio-project-card">

                        <div class="project-cover green">

                            <small>01 / IOT PROTOTYPE</small>

                            <strong>
                                SMARTCAP<br>
                                ALERT
                            </strong>

                        </div>

                        <div class="project-details">

                            <h3>SmartCap Alert</h3>

                            <p>
                                An IoT-based medicine container
                                prototype designed to monitor
                                container opening activity and
                                provide medication reminders
                                through connected technology.
                            </p>

                            <span class="project-tag">ESP32</span>
                            <span class="project-tag">Magnetic Reed Switch</span>
                            <span class="project-tag">IoT</span>
                            <span class="project-tag">Blynk</span>

                        </div>

                    </article>

                </div>


                <!-- PROJECT 2 -->

                <div class="col-md-6 col-lg-6">

                    <article class="portfolio-project-card">

                        <div class="project-cover peach">

                            <small>02 / WEB APPLICATION</small>

                            <strong>
                                PTA FINANCIAL<br>
                                MANAGEMENT
                            </strong>

                        </div>

                        <div class="project-details">

                            <h3>PTA Financial Management System</h3>

                            <p>
                                A web-based financial management
                                application designed to organize
                                student contributions, payment
                                records, balances, and financial
                                reports.
                            </p>

                            <span class="project-tag">Laravel</span>
                            <span class="project-tag">React</span>
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">MySQL</span>

                        </div>

                    </article>

                </div>


                <!-- PROJECT 3 -->

                <div class="col-md-6 col-lg-6">

                    <article class="portfolio-project-card">

                        <div class="project-cover blue">

                            <small>03 / AUTOMATION PROJECT</small>

                            <strong>
                                AGRISENSE<br>
                                IRRIGATION
                            </strong>

                        </div>

                        <div class="project-details">

                            <h3>AgriSense Automatic Irrigation</h3>

                            <p>
                                An automated irrigation project
                                concept that uses sensors and
                                an ESP32 to monitor environmental
                                conditions and support efficient
                                plant watering.
                            </p>

                            <span class="project-tag">ESP32</span>
                            <span class="project-tag">Arduino IDE</span>
                            <span class="project-tag">Sensors</span>
                            <span class="project-tag">Automation</span>

                        </div>

                    </article>

                </div>


                <!-- PROJECT 4 -->

                <div class="col-md-6 col-lg-6">

                    <article class="portfolio-project-card">

                        <div class="project-cover purple">

                            <small>04 / WEB DEVELOPMENT</small>

                            <strong>
                                PERSONAL<br>
                                WEBSITE
                            </strong>

                        </div>

                        <div class="project-details">

                            <h3>Custom WordPress Portfolio</h3>

                            <p>
                                A personal portfolio website
                                developed using a customized
                                WordPress theme to showcase
                                personal information, skills,
                                and development projects.
                            </p>

                            <span class="project-tag">WordPress</span>
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">Bootstrap</span>
                            <span class="project-tag">CSS</span>

                        </div>

                    </article>

                </div>


            </div>

        </div>

    </section>


    <!-- =================================
         DEVELOPMENT JOURNEY
    ================================== -->

    <section class="portfolio-journey" id="my-journey">

        <div class="container">

            <p class="portfolio-eyebrow">
                04 / MY DEVELOPMENT JOURNEY
            </p>

            <h2 class="portfolio-heading">
                Growing through<br>
                <span class="portfolio-muted">
                    every experience.
                </span>
            </h2>

            <div class="row g-4 mt-3">

                <div class="col-md-4">

                    <div class="journey-card">

                        <div class="journey-number">
                            STEP 01
                        </div>

                        <h3>Learning the Fundamentals</h3>

                        <p>
                            Building my foundation in programming,
                            understanding website structures,
                            and exploring how technology works.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="journey-card">

                        <div class="journey-number">
                            STEP 02
                        </div>

                        <h3>Building Projects</h3>

                        <p>
                            Applying what I learn through
                            website development, system creation,
                            and IoT-based experiments.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="journey-card">

                        <div class="journey-number">
                            STEP 03
                        </div>

                        <h3>Improving My Skills</h3>

                        <p>
                            Exploring new tools, improving
                            existing projects, and developing
                            better problem-solving abilities.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =================================
         MY GOALS
    ================================== -->

    <section class="portfolio-goals" id="my-goals">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <p class="portfolio-eyebrow">
                        05 / FUTURE GOALS
                    </p>

                    <h2 class="portfolio-heading">
                        Always learning.<br>
                        <span class="portfolio-muted">
                            Always improving.
                        </span>
                    </h2>

                    <p class="about-text">
                        I believe that becoming a good developer
                        requires curiosity, dedication, and
                        continuous learning. These are the goals
                        that guide my journey in technology.
                    </p>

                </div>


                <div class="col-lg-6">

                    <ul class="goal-list">

                        <li>
                            <span class="goal-check">✓</span>
                            Improve my programming and
                            problem-solving skills.
                        </li>

                        <li>
                            <span class="goal-check">✓</span>
                            Develop more functional and
                            responsive websites.
                        </li>

                        <li>
                            <span class="goal-check">✓</span>
                            Explore modern frameworks and
                            development technologies.
                        </li>

                        <li>
                            <span class="goal-check">✓</span>
                            Create innovative projects that
                            address real-world needs.
                        </li>

                        <li>
                            <span class="goal-check">✓</span>
                            Gain more practical experience
                            in software and web development.
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </section>


    <!-- =================================
         CONTACT
    ================================== -->

    <section class="portfolio-contact" id="portfolio-contact">

        <div class="container">

            <p class="portfolio-eyebrow">
                06 / LET'S CONNECT
            </p>

            <h2>
                Have an idea?<br>
                <span>Let's talk.</span>
            </h2>

            <p class="mt-3">
                Thank you for taking the time to explore
                my portfolio. I'm always excited to learn,
                share ideas, and connect with people who
                are passionate about technology and innovation.
            </p>

            <div class="d-flex flex-wrap gap-3 mt-4">

                <a class="portfolio-btn"
                   href="mailto:your-email@example.com">
                    Send Me an Email ↗
                </a>

                <a class="portfolio-btn portfolio-btn-outline"
                   href="<?php echo esc_url(home_url('/')); ?>">
                    Back to Home ↗
                </a>

            </div>

            <div class="contact-details">

                <p>
                    <a href="mailto:your-email@example.com">
                        your-email@example.com
                    </a>
                </p>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>
