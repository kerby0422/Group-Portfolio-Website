
<?php
/*
Template Name: Our Projects
*/

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$images = get_stylesheet_directory_uri() . '/assets/images/';

$projects = array(
    array(
        'number' => '01',
        'title' => 'DEVHUB Group Portfolio',
        'category' => 'Group Project',
        'type' => 'group',
        'description' => 'The DEVHUB Group Portfolio brings the team’s member profiles and project work together in a shared WordPress website.',
        'objective' => 'Create a central portfolio where visitors can learn about the four members, their areas of work, and the group’s projects.',
        'focus' => 'Present member information and project work in one organized, accessible website.',
        'approach' => 'A WordPress theme using PHP templates, HTML, and CSS to organize and display the group’s portfolio content.',
        'features' => array('Member profiles and individual portfolio links', 'Project collection with group and individual work', 'Skills and background information organized for visitors'),
        'status' => 'In development; portfolio content and pages continue to be refined.',
        'learning' => 'The team is applying web development, content organization, requirements analysis, and project coordination while learning to keep a shared website clear and consistent.',
        'contributions' => array(
            array('member' => 'Kerby Talara', 'role' => 'Programmer / Web Developer', 'contribution' => 'Developed the WordPress theme and PHP page templates and worked on the presentation of the portfolio content.'),
            array('member' => 'Claire Justine Cabilao', 'role' => 'Technical Writer', 'contribution' => 'Organized website information and refined descriptions to communicate project details clearly and consistently.'),
            array('member' => 'Ann Jelie Dalde', 'role' => 'System Analyst', 'contribution' => 'Identified visitor information needs and helped organize the website requirements and content.'),
            array('member' => 'Dhelay Mae Laid', 'role' => 'Project Manager', 'contribution' => 'Coordinated group tasks and project activities and monitored progress toward the website goals.'),
        ),
        'technologies' => array('HTML', 'CSS', 'PHP', 'WordPress'),
        'image' => 'our.png',
        'year' => '2026',
        'featured' => true
    ),
    array(
        'number' => '02',
        'title' => 'Pet Adoption Application',
        'category' => 'Mobile Application',
        'type' => 'group',
        'description' => 'A mobile application that helps prospective adopters discover pets and start the adoption process.',
        'objective' => 'Help connect pets in need of homes with prospective adopters through an accessible adoption application.',
        'focus' => 'Present clear pet profiles and provide a straightforward way to submit and follow adoption applications.',
        'approach' => 'Build a mobile adoption experience with React Native and a Laravel backend for pet listings and adoption applications.',
        'features' => array('Browse pet profiles with photos and details', 'Explore available pets', 'Submit adoption applications', 'Follow application progress'),
        'status' => 'In Progress; application development and refinement are ongoing.',
        'learning' => 'The project focuses on designing a clear mobile experience and organizing the information needed to support pet listings and adoption applications.',
        'contributions' => array(
            array('member' => 'Kerby Talara', 'role' => 'Programmer / Web Developer', 'contribution' => 'Contributed to building the mobile application with Laravel and React Native.'),
            array('member' => 'Claire Justine Cabilao', 'role' => 'Technical Writer', 'contribution' => 'Organized project information to explain the application and its adoption process.'),
            array('member' => 'Ann Jelie Dalde', 'role' => 'System Analyst', 'contribution' => 'Helped outline user needs and requirements for pet listings and adoption applications.'),
            array('member' => 'Dhelay Mae Laid', 'role' => 'Project Manager', 'contribution' => 'Helped coordinate tasks and monitor progress during application development.'),
        ),
        'technologies' => array('Laravel', 'React Native'),
        'image' => 'app.jpeg',
        'year' => '2026',
        'featured' => false
    ),
    array(
        'number' => '03',
        'title' => 'PTA Accounting and Membership System',
        'category' => 'Group Project',
        'type' => 'group',
        'description' => 'A responsive web-based system for managing PTA membership, student and guardian information, contributions, and school-related records at Alubijid National Comprehensive High School.',
        'objective' => 'Improve the organization, accuracy, transparency, and monitoring of PTA membership records and funds.',
        'focus' => 'Provide role-based access and a clear view of membership, contributions, financial activity, and announcements.',
        'approach' => 'Develop a responsive management interface with a dashboard and core tools for membership, contributions, finances, announcements, and reports.',
        'features' => array('Dashboard overview of students, guardians, collections, expenses, and available funds', 'Membership and contribution management', 'Financial records, announcements, and reports with role-based access'),
        'status' => 'In Progress; the dashboard and core management interface have been developed, with further functionality, testing, and refinement ongoing.',
        'learning' => 'The project focuses on organizing records and financial activity clearly, supporting role-based access, and refining the system through continued development and testing.',
        'contributions' => array(
            array('member' => 'Kerby Talara', 'role' => 'Programmer / Web Developer', 'contribution' => 'Developed the responsive system interface and core management features.'),
            array('member' => 'Claire Justine Cabilao', 'role' => 'Technical Writer', 'contribution' => 'Helped organize and explain the system purpose, features, and records.'),
            array('member' => 'Ann Jelie Dalde', 'role' => 'System Analyst', 'contribution' => 'Helped define system requirements for membership, contributions, and financial monitoring.'),
            array('member' => 'Dhelay Mae Laid', 'role' => 'Project Manager', 'contribution' => 'Supported task organization, team coordination, and progress monitoring during development.'),
        ),
        'technologies' => array('Laravel', 'Inertia', 'React'),
        'image' => 'alub.png',
        'year' => '2026',
        'featured' => true
    ),
    array(
        'number' => '04',
        'title' => 'ESP32 Experiments',
        'category' => 'Individual Experiments',
        'type' => 'individual',
        'description' => 'Kerby Talara’s individual hands-on experiments explore ESP32 boards, sensors, displays, indicators, and connected IoT applications.',
        'objective' => 'Build practical familiarity with ESP32 hardware and explore how sensors and output components can be used in small experiments.',
        'focus' => 'Individual practice with sensor readings, visual indicators, displays, and connectivity.',
        'approach' => 'Separate experiments use an ESP32 with components such as a DHT22, LCD, LED indicators, and soil-moisture sensor, with Wi-Fi and Blynk connectivity explored where applicable.',
        'features' => array('DHT22 temperature and humidity monitoring', 'LCD display and LED status indicator experiments', 'Soil-moisture monitoring experiments', 'Wi-Fi and Blynk connectivity exploration'),
        'status' => 'Ongoing individual experiments; these are learning exercises, not one claimed finished system.',
        'learning' => 'The experiments provide practice connecting components, reading sensor data, presenting output, and exploring connectivity. Each setup is treated as an individual learning exercise.',
        'contributions' => array(
            array('member' => 'Kerby Talara', 'role' => 'Programmer / Web Developer', 'contribution' => 'Carried out the ESP32 experiments, practicing component connections and exploring sensor-based applications.'),
        ),
        'technologies' => array('ESP32', 'C++', 'Arduino IDE', 'Blynk'),
        'image' => 'esp32.jpg',
        'year' => '2026',
        'featured' => false
    )
);
?>

<main class="our-projects-page">

    <!-- HERO -->
    <section class="projects-hero" id="projects-top">

        <div class="projects-hero-grid-bg"></div>

        <div class="projects-container projects-hero-inner">

            <div class="projects-hero-content">

                <div class="projects-eyebrow">
                    <span class="projects-status-dot"></span>
                    DEVHUB / DEVELOPMENT PORTFOLIO
                </div>

                <div class="projects-hero-index">
                    <span>SELECTED WORK</span>
                    <span>2026 — PRESENT</span>
                </div>

                <h1>
                    We turn<br>
                    ideas into<br>
                    <span>digital reality.</span>
                </h1>

                <p>
                    A collection of creative developments, technology
                    experiments, and collaborative projects built
                    through curiosity, teamwork, and continuous learning.
                </p>

                <div class="projects-hero-actions">

                    <a href="#project-gallery" class="projects-primary-button">
                        Explore Our Work
                        <span>↗</span>
                    </a>

                    <a href="#development-process" class="projects-text-link">
                        Our Development Process
                        <span>↓</span>
                    </a>

                </div>

            </div>


            <div class="projects-hero-visual">

                <div class="hero-code-window">

                    <div class="code-window-header">
                        <div class="code-window-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <span>devhub.dev</span>

                        <span class="code-window-status">● ONLINE</span>
                    </div>

                    <div class="hero-code-content">
                        <div class="code-line">
                            <span class="code-line-number">01</span>
                            <span class="code-purple">const</span>
                            <span class="code-blue">ourProjects</span>
                            <span>= [</span>
                        </div>

                        <div class="code-line indent">
                            <span class="code-line-number">02</span>
                            <span>{</span>
                        </div>

                        <div class="code-line indent-more">
                            <span class="code-line-number">03</span>
                            <span class="code-orange">name:</span>
                            <span class="code-green">'DEVHUB Group Portfolio'</span>
                        </div>

                        <div class="code-line indent-more">
                            <span class="code-line-number">04</span>
                            <span class="code-orange">type:</span>
                            <span class="code-green">'Web Development'</span>
                        </div>

                        <div class="code-line indent">
                            <span class="code-line-number">05</span>
                            <span>}</span>
                        </div>

                        <div class="code-line">
                            <span class="code-line-number">06</span>
                            <span>];</span>
                        </div>

                        <div class="code-line code-comment">
                            <span class="code-line-number">07</span>
                            // Building something meaningful.
                        </div>
                    </div>

                    <div class="code-window-footer">
                        <span>HTML · CSS · PHP · IoT</span>
                        <span>BUILDING / 2026</span>
                    </div>

                </div>

                <div class="hero-floating-card">
                    <span class="floating-card-icon">✳</span>
                    <div>
                        <strong>Ideas in progress</strong>
                        <span>Learning through building</span>
                    </div>
                </div>

            </div>

            <div class="projects-hero-bottom">
                <span>DESIGN / DEVELOPMENT / INNOVATION</span>
                <a href="#project-gallery">SCROLL TO EXPLORE ↓</a>
            </div>

        </div>

        <div class="projects-hero-watermark">WORK.</div>

    </section>


    <!-- INTRODUCTION -->
    <section class="projects-intro">

        <div class="projects-container projects-intro-grid">

            <div class="projects-intro-heading">

                <span class="projects-label">
                    THE WORK BEHIND THE IDEAS
                </span>

                <h2>
                    Built with purpose.<br>
                    <span>Driven by curiosity.</span>
                </h2>

            </div>

            <div class="projects-intro-content">

                <p>
                    Our projects represent our creativity, teamwork,
                    technical skills, and continuous learning. From
                    collaborative developments to individual experiments,
                    every project reflects our effort to transform ideas
                    into meaningful digital and technological solutions.
                </p>

                <div class="projects-intro-bottom">
                    <span>DEVHUB CREATIVE TEAM</span>
                    <span>01 — 04 / PROJECT COLLECTION</span>
                </div>

            </div>

        </div>

    </section>


    <!-- PROJECT GALLERY -->
    <section class="projects-gallery" id="project-gallery">

        <div class="projects-container">

            <div class="projects-section-heading">

                <div>
                    <span class="projects-label">
                        SELECTED PROJECTS / 2026
                    </span>

                    <h2>
                        Things we've <span>built.</span>
                    </h2>
                </div>

                <p>
                    Explore our collaborative developments,
                    personal experiments, and technology-based creations.
                    Open a project brief for its objective, features, technical approach, current status, and member contributions.
                </p>

            </div>


            <!-- FILTERS -->
            <div class="projects-filter-wrapper">

                <div class="projects-filter-label">
                    FILTER BY CATEGORY
                </div>

                <div class="projects-filters" role="group" aria-label="Filter projects">

                    <button
                        type="button"
                        class="project-filter active"
                        data-filter="all"
                        aria-pressed="true"
                    >
                        All Projects
                        <span>04</span>
                    </button>

                    <button
                        type="button"
                        class="project-filter"
                        data-filter="group"
                        aria-pressed="false"
                    >
                        Group Projects
                        <span>03</span>
                    </button>

                    <button
                        type="button"
                        class="project-filter"
                        data-filter="individual"
                        aria-pressed="false"
                    >
                        Individual Projects
                        <span>01</span>
                    </button>

                </div>

            </div>


            <!-- PROJECT GRID -->
            <div class="projects-grid">

                <?php foreach ($projects as $project) : ?>
                    <?php
                    $is_app_image = $project['image'] === 'app.jpeg';
                    $is_showcase_image = $is_app_image || $project['image'] === 'alub.png';
                    ?>

                    <article
                        class="project-card"
                        data-category="<?php echo esc_attr($project['type']); ?>"
                    >

                        <div class="project-image<?php echo $is_showcase_image ? ' project-image-showcase' : ''; ?><?php echo $is_app_image ? ' project-image-app' : ''; ?>">

                            <img
                                src="<?php echo esc_url($images . $project['image']); ?>"
                                class="<?php echo $is_showcase_image ? 'project-image-contain' : ''; ?>"
                                alt="<?php echo esc_attr($project['title']); ?> project preview"
                                loading="lazy"
                            >

                            <div class="project-image-shade"></div>

                            <div class="project-image-top">
                                <span class="project-number">
                                    / <?php echo esc_html($project['number']); ?>
                                </span>

                                <span class="project-year">
                                    <?php echo esc_html($project['year']); ?>
                                </span>
                            </div>

                            <div class="project-image-bottom">
                                <span class="project-category">
                                    <?php echo esc_html($project['category']); ?>
                                </span>

                                <?php if ($project['featured']) : ?>
                                    <span class="project-featured">
                                        FEATURED
                                    </span>
                                <?php endif; ?>
                            </div>

                        </div>


                        <div class="project-content">

                            <div class="project-content-top">
                                <span class="project-type-label">
                                    <?php echo esc_html(strtoupper($project['type'])); ?>
                                    DEVELOPMENT
                                </span>

                                <span class="project-card-arrow">↗</span>
                            </div>

                            <h3>
                                <?php echo esc_html($project['title']); ?>
                            </h3>

                            <p class="project-description">
                                <?php echo esc_html($project['description']); ?>
                            </p>

                            <div class="project-tech-heading">
                                <span>TECH STACK</span>
                            </div>

                            <div class="project-technologies">

                                <?php foreach ($project['technologies'] as $technology) : ?>

                                    <span>
                                        <?php echo esc_html($technology); ?>
                                    </span>

                                <?php endforeach; ?>

                            </div>

                            <details class="project-brief">
                                <summary>View project brief <span aria-hidden="true">+</span></summary>
                                <div class="project-brief-content">
                                    <div>
                                        <h4>Project objective</h4>
                                        <p><?php echo esc_html($project['objective']); ?></p>
                                    </div>
                                    <div>
                                        <h4>Project focus</h4>
                                        <p><?php echo esc_html($project['focus']); ?></p>
                                    </div>
                                    <div>
                                        <h4>Key features / areas explored</h4>
                                        <ul class="project-contributions">
                                            <?php foreach ($project['features'] as $feature) : ?>
                                                <li><span><?php echo esc_html($feature); ?></span></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4>Technical approach</h4>
                                        <p><?php echo esc_html($project['approach']); ?></p>
                                    </div>
                                    <div>
                                        <h4>Project status</h4>
                                        <p><?php echo esc_html($project['status']); ?></p>
                                    </div>
                                    <div>
                                        <h4>Member contributions</h4>
                                        <ul class="project-contributions">
                                            <?php foreach ($project['contributions'] as $contribution) : ?>
                                                <li>
                                                    <strong><?php echo esc_html($contribution['member']); ?> — <?php echo esc_html($contribution['role']); ?></strong>
                                                    <span><?php echo esc_html($contribution['contribution']); ?></span>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4>Challenges and learning outcomes</h4>
                                        <p><?php echo esc_html($project['learning']); ?></p>
                                    </div>
                                </div>
                            </details>

                            <div class="project-card-footer">
                                <span>DEVHUB PROJECT ARCHIVE</span>
                                <span class="project-footer-line"></span>
                            </div>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>


            <div class="projects-empty" hidden>
                No projects found in this category.
            </div>

            <div class="projects-gallery-footer">
                <span>END OF CURRENT COLLECTION</span>
                <span>MORE IDEAS. MORE BUILDS. MORE TO COME.</span>
            </div>

        </div>

    </section>


    <!-- DEVELOPMENT PROCESS -->
    <section class="projects-process" id="development-process">

        <div class="projects-container">

            <div class="projects-process-header">

                <div>
                    <span class="projects-label">
                        HOW WE WORK
                    </span>

                    <h2>
                        The process behind<br>
                        <span>every creation.</span>
                    </h2>
                </div>

                <p>
                    Good projects are not built in one step.
                    We learn, experiment, solve problems, and
                    improve every part of the process.
                </p>

            </div>


            <div class="projects-process-grid">

                <article class="process-item">

                    <div class="process-top">
                        <span>01 / DISCOVERY</span>
                        <span class="process-icon">⌕</span>
                    </div>

                    <h3>Discover</h3>

                    <p>
                        Research the topic, identify the problem,
                        define requirements, and agree on practical
                        goals and a plan before development begins.
                    </p>

                    <div class="process-bottom">
                        RESEARCH & PLANNING
                    </div>

                </article>


                <article class="process-item">

                    <div class="process-top">
                        <span>02 / DEVELOPMENT</span>
                        <span class="process-icon">&lt;/&gt;</span>
                    </div>

                    <h3>Build</h3>

                    <p>
                        Use the project plan to develop an implementation
                        with suitable tools and technologies, keeping
                        the intended requirements in view.
                    </p>

                    <div class="process-bottom">
                        DESIGN & IMPLEMENTATION
                    </div>

                </article>


                <article class="process-item">

                    <div class="process-top">
                        <span>03 / IMPROVEMENT</span>
                        <span class="process-icon">↗</span>
                    </div>

                    <h3>Test & Improve</h3>

                    <p>
                        Test what has been built against its goals,
                        review issues and limitations, and use the
                        findings to guide improvements.
                    </p>

                    <div class="process-bottom">
                        TESTING & EVALUATION
                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- CLOSING -->
    <section class="projects-closing">

        <div class="projects-container projects-closing-content">

            <div class="projects-closing-decoration">
                DEVHUB
            </div>

            <span class="projects-label">
                THE JOURNEY CONTINUES
            </span>

            <h2>
                We're not done<br>
                <span>building yet.</span>
            </h2>

            <p>
                Every project is another opportunity to learn,
                create, and grow. Get to know the people behind
                the ideas and the work.
            </p>

            <a
                href="<?php echo esc_url(home_url('/our-members/')); ?>"
                class="projects-closing-button"
            >
                Meet Our Members
                <span>↗</span>
            </a>

           

        </div>

    </section>

</main>


<style>

/* ========================================
   DEVHUB GROUP PORTFOLIO — PROJECTS
======================================== */

.our-projects-page {
    --project-black: #111111;
    --project-dark: #1c1c1c;
    --project-orange: #f97316;
    --project-orange-dark: #ea580c;
    --project-cream: #171717;
    --project-white: #ffffff;
    --project-gray: #777777;
    --project-border: #383838;

    background: var(--project-black);
    color: #f5f3ef;
    overflow: hidden;
}

.our-projects-page *,
.our-projects-page *::before,
.our-projects-page *::after {
    box-sizing: border-box;
}

.projects-container {
    width: min(1180px, 90%);
    margin: 0 auto;
}

.projects-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: var(--project-orange);
    font-size: 10px;
    font-weight: 900;
    letter-spacing: 2px;
}

.projects-label::before {
    content: "";
    width: 24px;
    height: 2px;
    background: var(--project-orange);
}


/* ========================================
   HERO
======================================== */

.projects-hero {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    padding: 100px 0 30px;
    background: var(--project-black);
    color: var(--project-white);
}

.projects-hero-grid-bg {
    position: absolute;
    z-index: -1;
    inset: 0;
    opacity: .13;
    background-image:
        linear-gradient(rgba(255,255,255,.08) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.08) 1px, transparent 1px);
    background-size: 65px 65px;
    mask-image: linear-gradient(to right, black, transparent 85%);
}

.projects-hero::after {
    content: "";
    position: absolute;
    z-index: -1;
    width: 500px;
    height: 500px;
    right: -180px;
    top: -170px;
    border-radius: 50%;
    background: rgba(249,115,22,.1);
    filter: blur(90px);
}

.projects-hero-inner {
    position: relative;
}

.projects-hero-content {
    position: relative;
    z-index: 2;
    max-width: 700px;
}

.projects-eyebrow {
    display: flex;
    align-items: center;
    gap: 11px;
    color: #aaa;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 2px;
    margin-bottom: 35px;
}

.projects-status-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--project-orange);
    box-shadow: 0 0 12px var(--project-orange);
}

.projects-hero-index {
    display: flex;
    gap: 30px;
    color: #777;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 1.7px;
    margin-bottom: 23px;
}

.projects-hero h1 {
    margin: 0;
    color: #fff;
    font-size: clamp(62px, 8.5vw, 105px);
    font-weight: 900;
    letter-spacing: -6px;
    line-height: .98;
}

.projects-hero h1 span {
    color: var(--project-orange);
}

.projects-hero-content > p {
    max-width: 510px;
    margin: 28px 0;
    color: #aaa;
    font-size: 14px;
    line-height: 1.9;
}

.projects-hero-actions {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 28px;
}

.projects-primary-button {
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
    padding: 16px 20px;
    background: var(--project-orange);
    color: #111;
    font-size: 11px;
    font-weight: 900;
    text-decoration: none;
    transition: .3s ease;
}

.projects-primary-button:hover {
    background: var(--project-cream);
    color: #111;
    transform: translateY(-3px);
}

.projects-primary-button span {
    font-size: 18px;
}

.projects-text-link {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    color: #bbb;
    font-size: 11px;
    font-weight: 700;
    text-decoration: none;
    transition: .3s ease;
}

.projects-text-link:hover {
    color: var(--project-orange);
}

.projects-hero-visual {
    position: absolute;
    right: 0;
    top: 55px;
    width: 420px;
    z-index: 1;
}

.hero-code-window {
    overflow: hidden;
    border: 1px solid #383838;
    border-radius: 8px;
    background: #191919;
    box-shadow: 0 30px 80px rgba(0,0,0,.3);
    transform: rotate(2deg);
    transition: .4s ease;
}

.hero-code-window:hover {
    transform: rotate(0deg) translateY(-5px);
}

.code-window-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 15px 17px;
    border-bottom: 1px solid #333;
    color: #999;
    font-size: 10px;
}

.code-window-dots {
    display: flex;
    gap: 5px;
}

.code-window-dots span {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #555;
}

.code-window-dots span:first-child {
    background: #f97316;
}

.code-window-dots span:nth-child(2) {
    background: #d9a441;
}

.code-window-dots span:nth-child(3) {
    background: #69a77c;
}

.code-window-status {
    color: #8ecb9b;
    font-size: 8px;
}

.hero-code-content {
    padding: 25px 15px;
    font-family: Consolas, monospace;
}

.code-line {
    display: flex;
    gap: 8px;
    min-height: 31px;
    align-items: center;
    color: #d5d5d5;
    font-size: 11px;
    white-space: nowrap;
}

.code-line-number {
    width: 20px;
    color: #555;
}

.code-purple {
    color: #c792ea;
}

.code-blue {
    color: #82aaff;
}

.code-orange {
    color: #ffcb8b;
}

.code-green {
    color: #c3e88d;
}

.code-comment {
    color: #6f9b78;
}

.code-line.indent {
    padding-left: 20px;
}

.code-line.indent-more {
    padding-left: 40px;
}

.code-window-footer {
    display: flex;
    justify-content: space-between;
    padding: 12px 17px;
    border-top: 1px solid #333;
    color: #777;
    font-size: 8px;
    letter-spacing: 1px;
}

.hero-floating-card {
    position: absolute;
    right: -25px;
    bottom: -45px;
    display: flex;
    align-items: center;
    gap: 13px;
    padding: 15px 20px;
    background: var(--project-cream);
    color: #111;
    box-shadow: 0 15px 35px rgba(0,0,0,.2);
}

.floating-card-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 37px;
    height: 37px;
    background: rgba(249,115,22,.13);
    color: var(--project-orange);
    font-size: 21px;
}

.hero-floating-card strong,
.hero-floating-card span:last-child {
    display: block;
}

.hero-floating-card strong {
    font-size: 11px;
}

.hero-floating-card div span {
    margin-top: 4px;
    color: #888;
    font-size: 9px;
}

.projects-hero-watermark {
    position: absolute;
    right: -20px;
    bottom: 75px;
    color: rgba(255,255,255,.025);
    font-size: clamp(100px, 18vw, 220px);
    font-weight: 900;
    pointer-events: none;
}

.projects-hero-bottom {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin-top: 105px;
    padding: 20px 0 0;
    border-top: 1px solid #333;
    color: #777;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 1.5px;
}

.projects-hero-bottom a {
    color: var(--project-orange);
    text-decoration: none;
}


/* ========================================
   INTRO
======================================== */

.projects-intro {
    padding: 105px 0;
    background: var(--project-black);
    color: #f5f3ef;
}

.projects-intro-grid {
    display: grid;
    grid-template-columns: 1.1fr .9fr;
    gap: 80px;
    align-items: center;
}

.projects-intro-heading h2 {
    margin: 20px 0 0;
    color: #f5f3ef;
    font-size: clamp(36px, 5vw, 57px);
    line-height: 1.1;
    letter-spacing: -2.5px;
    font-weight: 900;
}

.projects-intro-heading h2 span {
    color: var(--project-orange);
}

.projects-intro-content p {
    color: #b7b7b7;
    font-size: 14px;
    line-height: 2;
    margin: 0;
}

.projects-intro-bottom {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 30px;
    padding-top: 18px;
    border-top: 1px solid #383838;
    color: #929292;
    font-size: 8px;
    font-weight: 900;
    letter-spacing: 1px;
}


/* ========================================
   GALLERY
======================================== */

.projects-gallery {
    padding: 105px 0;
    background: var(--project-black);
    color: #f5f3ef;
}

.projects-section-heading {
    display: flex;
    justify-content: space-between;
    align-items: end;
    gap: 40px;
    margin-bottom: 45px;
}

.projects-section-heading h2 {
    margin: 17px 0 0;
    color: #f5f3ef;
    font-size: clamp(39px, 5vw, 60px);
    line-height: 1.05;
    letter-spacing: -2.5px;
    font-weight: 900;
}

.projects-section-heading h2 span {
    color: var(--project-orange);
}

.projects-section-heading .projects-label,
.projects-intro .projects-label {
    color: #ff8a3d;
}

.projects-section-heading > p {
    max-width: 330px;
    margin: 0 0 5px;
    color: #b7b7b7;
    font-size: 13px;
    line-height: 1.9;
}

.projects-filter-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px 0;
    margin-bottom: 35px;
    border-top: 1px solid #383838;
    border-bottom: 1px solid #383838;
}

.projects-filter-label {
    color: #a6a6a6;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1.5px;
}

.projects-filters {
    display: flex;
    flex-wrap: wrap;
    gap: 7px;
}

.project-filter {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 10px 13px;
    border: 1px solid transparent;
    background: transparent;
    color: #b7b7b7;
    font-family: inherit;
    font-size: 10px;
    font-weight: 800;
    cursor: pointer;
    transition: .25s ease;
}

.project-filter span {
    color: #888;
    font-size: 9px;
}

.project-filter:hover {
    border-color: #555;
    background: #1c1c1c;
    color: #fff;
}

.project-filter.active {
    border-color: var(--project-orange);
    background: var(--project-orange);
    color: #111;
}

.project-filter.active span {
    color: var(--project-orange);
}

.projects-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 25px;
}

.project-card {
    min-width: 0;
    overflow: hidden;
    border: 1px solid #383838;
    background: #1a1a1a;
    transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
}

.project-card:hover {
    transform: translateY(-6px);
    border-color: rgba(249,115,22,.5);
    box-shadow: 0 20px 45px rgba(0,0,0,.35);
}

.project-card.hidden {
    display: none;
}

.project-image {
    position: relative;
    height: 290px;
    overflow: hidden;
    background: #252525;
}

.project-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .55s ease;
}

.project-card:hover .project-image img {
    transform: scale(1.06);
}

.project-image-shade {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        180deg,
        rgba(0,0,0,.25),
        transparent 35%,
        rgba(0,0,0,.55)
    );
}

.project-image-top,
.project-image-bottom {
    position: absolute;
    left: 22px;
    right: 22px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.project-image-top {
    top: 20px;
}

.project-number,
.project-year {
    color: #fff;
    font-size: 10px;
    font-weight: 900;
    letter-spacing: 1px;
}

.project-year {
    padding: 7px 10px;
    border: 1px solid rgba(255,255,255,.4);
    background: rgba(0,0,0,.25);
    backdrop-filter: blur(6px);
}

.project-image-bottom {
    bottom: 20px;
}

.project-category,
.project-featured {
    padding: 8px 11px;
    font-size: 8px;
    font-weight: 900;
    letter-spacing: 1px;
}

.project-category {
    background: var(--project-orange);
    color: #111;
}

.project-featured {
    border: 1px solid rgba(255,255,255,.4);
    background: rgba(0,0,0,.35);
    color: #fff;
}

.project-content {
    padding: 27px;
}

.project-content-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.project-type-label {
    color: #ff8a3d;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1.4px;
}

.project-card-arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border: 1px solid #454545;
    border-radius: 50%;
    color: var(--project-orange);
    font-size: 16px;
    transition: .3s ease;
}

.project-card:hover .project-card-arrow {
    background: var(--project-orange);
    border-color: var(--project-orange);
    color: #111;
    transform: rotate(45deg);
}

.project-content h3 {
    margin: 18px 0 12px;
    color: #f5f3ef;
    font-size: 25px;
    font-weight: 900;
    letter-spacing: -.8px;
}

.project-description {
    min-height: 75px;
    margin: 0 0 23px;
    color: #b7b7b7;
    font-size: 12px;
    line-height: 1.9;
}

.project-tech-heading {
    padding-bottom: 11px;
    border-bottom: 1px solid #383838;
    color: #a6a6a6;
    font-size: 8px;
    font-weight: 900;
    letter-spacing: 1.5px;
}

.project-technologies {
    display: flex;
    flex-wrap: wrap;
    gap: 7px;
    margin-top: 13px;
}

.project-technologies span {
    padding: 7px 10px;
    border: 1px solid #3c3c3c;
    background: #252525;
    color: #dedbd6;
    font-size: 9px;
    font-weight: 700;
}

.project-brief {
    margin-top: 21px;
    border-top: 1px solid #383838;
}

.project-brief summary {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 15px 0;
    color: #f5f3ef;
    cursor: pointer;
    font-size: 11px;
    font-weight: 800;
    list-style: none;
}

.project-brief summary::-webkit-details-marker {
    display: none;
}

.project-brief summary span {
    color: var(--project-orange-dark);
    font-size: 18px;
    font-weight: 400;
    transition: transform .2s ease;
}

.project-brief[open] summary span {
    transform: rotate(45deg);
}

.project-brief summary:focus-visible {
    outline: 2px solid var(--project-orange-dark);
    outline-offset: 3px;
}

.project-brief-content {
    display: grid;
    gap: 14px;
    padding: 0 0 17px;
}

.project-brief-content h4 {
    margin: 0 0 5px;
    color: #ff8a3d;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.project-brief-content p {
    margin: 0;
    color: #b7b7b7;
    font-size: 11px;
    line-height: 1.7;
}

.project-contributions {
    display: grid;
    gap: 10px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.project-contributions li {
    display: grid;
    gap: 3px;
    color: #b7b7b7;
    font-size: 11px;
    line-height: 1.65;
}

.project-contributions strong {
    color: #f5f3ef;
    font-size: 10px;
}

.project-card-footer {
    display: flex;
    align-items: center;
    gap: 13px;
    margin-top: 25px;
    color: #929292;
    font-size: 8px;
    font-weight: 900;
    letter-spacing: 1px;
}

.project-footer-line {
    flex: 1;
    height: 1px;
    background: #383838;
}

.projects-empty {
    padding: 35px;
    text-align: center;
    color: #b7b7b7;
    font-size: 13px;
}

.projects-empty[hidden] {
    display: none;
}

.projects-gallery-footer {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
    padding-top: 22px;
    margin-top: 40px;
    border-top: 1px solid #383838;
    color: #929292;
    font-size: 8px;
    font-weight: 900;
    letter-spacing: 1px;
}


/* ========================================
   DEVELOPMENT PROCESS
======================================== */

.projects-process {
    padding: 110px 0;
    background: var(--project-black);
    color: #fff;
}

.projects-process-header {
    display: flex;
    align-items: end;
    justify-content: space-between;
    gap: 50px;
    margin-bottom: 60px;
}

.projects-process-header h2 {
    margin: 18px 0 0;
    font-size: clamp(38px, 5vw, 58px);
    line-height: 1.08;
    letter-spacing: -2px;
    font-weight: 900;
}

.projects-process-header h2 span {
    color: var(--project-orange);
}

.projects-process-header > p {
    max-width: 330px;
    margin: 0 0 5px;
    color: #999;
    font-size: 13px;
    line-height: 1.9;
}

.projects-process-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
}

.process-item {
    position: relative;
    min-height: 280px;
    padding: 28px;
    border: 1px solid #343434;
    background: #171717;
    transition: .3s ease;
}

.process-item:hover {
    border-color: var(--project-orange);
    transform: translateY(-6px);
}

.process-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #888;
    font-size: 9px;
    font-weight: 900;
    letter-spacing: 1.3px;
}

.process-icon {
    color: var(--project-orange);
    font-family: Consolas, monospace;
    font-size: 25px;
}

.process-item h3 {
    margin: 42px 0 12px;
    color: #fff;
    font-size: 23px;
    font-weight: 900;
}

.process-item p {
    color: #999;
    font-size: 12px;
    line-height: 1.9;
}

.process-bottom {
    position: absolute;
    left: 28px;
    right: 28px;
    bottom: 25px;
    padding-top: 15px;
    border-top: 1px solid #333;
    color: var(--project-orange);
    font-size: 8px;
    font-weight: 900;
    letter-spacing: 1px;
}


/* ========================================
   CLOSING
======================================== */

.projects-closing {
    position: relative;
    overflow: hidden;
    padding: 105px 0 25px;
    background: var(--project-orange);
}

.projects-closing-content {
    position: relative;
    z-index: 1;
}

.projects-closing .projects-label {
    color: #282018;
}

.projects-closing .projects-label::before {
    background: #282018;
}

.projects-closing h2 {
    margin: 24px 0;
    color: #111;
    font-size: clamp(55px, 8vw, 94px);
    font-weight: 900;
    line-height: .98;
    letter-spacing: -5px;
}

.projects-closing h2 span {
    color: #fff;
}

.projects-closing-content > p {
    max-width: 480px;
    color: #382518;
    font-size: 14px;
    line-height: 1.9;
    margin-bottom: 28px;
}

.projects-closing-button {
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
    padding: 16px 21px;
    background: #111;
    color: #fff;
    font-size: 11px;
    font-weight: 900;
    text-decoration: none;
    transition: .3s ease;
}

.projects-closing-button:hover {
    background: var(--project-cream);
    color: #111;
    transform: translateY(-3px);
}

.projects-closing-button span {
    font-size: 18px;
}

.projects-closing-decoration {
    position: absolute;
    right: -10px;
    top: 40px;
    color: rgba(0,0,0,.055);
    font-size: clamp(80px, 15vw, 190px);
    font-weight: 900;
    pointer-events: none;
}

.projects-closing-footer {
    display: flex;
    justify-content: space-between;
    gap: 15px;
    margin-top: 100px;
    padding: 20px 0;
    border-top: 1px solid rgba(0,0,0,.2);
    color: rgba(0,0,0,.65);
    font-size: 8px;
    font-weight: 900;
    letter-spacing: 1.3px;
}

.projects-closing-footer a {
    color: #111;
    text-decoration: none;
}


/* ========================================
   RESPONSIVE
======================================== */

@media (max-width: 1000px) {

    .projects-hero-visual {
        width: 350px;
        top: 100px;
        opacity: .9;
    }

    .projects-hero-content {
        max-width: 620px;
    }

    .projects-hero h1 {
        font-size: 80px;
    }

    .projects-hero-visual {
        right: -35px;
    }
}

@media (max-width: 800px) {

    .projects-hero {
        padding-top: 80px;
    }

    .projects-hero-visual {
        position: relative;
        top: auto;
        right: auto;
        width: min(100%, 460px);
        margin: 65px auto 0;
    }

    .projects-hero-content {
        max-width: 100%;
    }

    .projects-hero h1 {
        font-size: clamp(58px, 10vw, 85px);
    }

    .projects-hero-watermark {
        bottom: 200px;
    }

    .projects-intro-grid {
        grid-template-columns: 1fr;
        gap: 35px;
    }

    .projects-section-heading,
    .projects-process-header {
        display: block;
    }

    .projects-section-heading > p,
    .projects-process-header > p {
        margin-top: 20px;
    }

    .projects-process-grid {
        grid-template-columns: 1fr;
    }

    .process-item {
        min-height: 250px;
    }

}

@media (max-width: 600px) {

    .projects-container {
        width: 90%;
    }

    .projects-hero {
        padding-top: 65px;
    }

    .projects-hero h1 {
        font-size: clamp(50px, 12vw, 70px);
        letter-spacing: -3px;
    }

    .projects-hero-content > p {
        font-size: 13px;
    }

    .projects-hero-actions {
        align-items: flex-start;
        flex-direction: column;
        gap: 20px;
    }

    .projects-hero-bottom {
        flex-direction: column;
        margin-top: 65px;
        font-size: 8px;
    }

    .projects-hero-visual {
        margin-top: 45px;
    }

    .hero-code-content {
        padding: 20px 10px;
    }

    .code-line {
        font-size: 9px;
        gap: 5px;
    }

    .hero-floating-card {
        right: -5px;
    }

    .projects-intro,
    .projects-gallery,
    .projects-process {
        padding: 75px 0;
    }

    .projects-intro-heading h2,
    .projects-section-heading h2,
    .projects-process-header h2 {
        font-size: 40px;
        letter-spacing: -1.7px;
    }

    .projects-filter-wrapper {
        align-items: flex-start;
        flex-direction: column;
    }

    .projects-filters {
        width: 100%;
    }

    .project-filter {
        padding: 9px 10px;
        font-size: 9px;
    }

    .projects-grid {
        grid-template-columns: 1fr;
        gap: 22px;
    }

    .project-image {
        height: 230px;
    }

    .project-content {
        padding: 22px;
    }

    .project-description {
        min-height: auto;
    }

    .projects-gallery-footer {
        flex-direction: column;
    }

    .projects-closing {
        padding-top: 80px;
    }

    .projects-closing h2 {
        font-size: 57px;
        letter-spacing: -3px;
    }

    .projects-closing-footer {
        margin-top: 75px;
        font-size: 7px;
    }

}

@media (prefers-reduced-motion: reduce) {

    .our-projects-page *,
    .our-projects-page *::before,
    .our-projects-page *::after {
        transition-duration: .01ms !important;
        animation-duration: .01ms !important;
    }

}

/* Refined surfaces and accent-color interactions */
.our-projects-page {
    background:
        radial-gradient(ellipse at 12% 24%, rgba(249, 115, 22, .055), transparent 34%),
        #101010;
}

.our-projects-page .projects-hero {
    background:
        radial-gradient(ellipse at 78% 12%, rgba(249, 115, 22, .1), transparent 33%),
        linear-gradient(145deg, #101010 0%, #151515 55%, #101010 100%);
}

.our-projects-page .projects-intro,
.our-projects-page .projects-process {
    background:
        radial-gradient(ellipse at 88% 50%, rgba(249, 115, 22, .045), transparent 38%),
        #121212;
}

.our-projects-page .projects-gallery {
    background:
        radial-gradient(ellipse at 5% 18%, rgba(249, 115, 22, .035), transparent 30%),
        #101010;
}

.our-projects-page .hero-floating-card {
    border: 1px solid #383838;
    background: linear-gradient(145deg, #222, #181818);
    color: #f5f3ef;
    box-shadow: 0 18px 45px rgba(0, 0, 0, .35);
}

.our-projects-page .hero-floating-card div span {
    color: #aaa;
}

.our-projects-page .project-card,
.our-projects-page .process-item {
    border-color: #363636;
    background: linear-gradient(145deg, #1d1d1d, #151515);
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease, background .3s ease;
}

.our-projects-page .project-card {
    position: relative;
}

.our-projects-page .project-card::before,
.our-projects-page .process-item::before {
    position: absolute;
    z-index: 1;
    top: 0;
    right: 0;
    left: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--project-orange), transparent);
    content: "";
    opacity: 0;
    transition: opacity .3s ease;
}

.our-projects-page .project-card:hover,
.our-projects-page .process-item:hover {
    transform: translateY(-7px);
    border-color: rgba(249, 115, 22, .75);
    background: linear-gradient(145deg, #24201d, #171717 72%);
    box-shadow: 0 20px 50px rgba(0, 0, 0, .4), 0 0 28px rgba(249, 115, 22, .1);
}

.our-projects-page .project-card:hover::before,
.our-projects-page .process-item:hover::before {
    opacity: 1;
}

.our-projects-page .project-card:hover .project-content h3,
.our-projects-page .process-item:hover h3 {
    color: #ffb17f;
}

.our-projects-page .project-filter:hover {
    border-color: rgba(249, 115, 22, .65);
    background: rgba(249, 115, 22, .1);
    color: #ffb17f;
}

.our-projects-page .project-filter.active span {
    color: #111;
}

.our-projects-page .project-technologies span {
    transition: border-color .25s ease, background .25s ease, color .25s ease;
}

.our-projects-page .project-technologies span:hover {
    border-color: rgba(249, 115, 22, .65);
    background: rgba(249, 115, 22, .12);
    color: #ffb17f;
}

.our-projects-page .project-brief summary:hover {
    color: #ffb17f;
}

.our-projects-page .project-brief summary:hover span {
    color: #ffb17f;
}

.our-projects-page .projects-primary-button:hover {
    background: #ff9a52;
    color: #111;
    box-shadow: 0 10px 28px rgba(249, 115, 22, .24);
}

.our-projects-page .projects-text-link:hover,
.our-projects-page .projects-hero-bottom a:hover,
.our-projects-page .projects-closing-footer a:hover {
    color: #ffd2ad;
}

.our-projects-page .hero-code-window:hover {
    border-color: rgba(249, 115, 22, .6);
    box-shadow: 0 32px 85px rgba(0, 0, 0, .42), 0 0 30px rgba(249, 115, 22, .1);
}

.our-projects-page .projects-closing {
    background:
        radial-gradient(ellipse at 85% 20%, rgba(255, 255, 255, .16), transparent 34%),
        linear-gradient(120deg, #f97316, #e8660e);
}

.our-projects-page .projects-closing-button:hover {
    background: #fff;
    color: #111;
    box-shadow: 0 12px 30px rgba(17, 17, 17, .2);
}

.our-projects-page a:focus-visible,
.our-projects-page button:focus-visible,
.our-projects-page summary:focus-visible {
    outline: 2px solid #ffad79;
    outline-offset: 4px;
}

</style>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const projectPage = document.querySelector('.our-projects-page');

    if (!projectPage) {
        return;
    }

    const filterButtons = projectPage.querySelectorAll('.project-filter');
    const projectCards = projectPage.querySelectorAll('.project-card');
    const emptyMessage = projectPage.querySelector('.projects-empty');

    filterButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            const selectedFilter = this.dataset.filter;
            let visibleCount = 0;

            filterButtons.forEach(function (filter) {

                filter.classList.remove('active');
                filter.setAttribute('aria-pressed', 'false');

            });

            this.classList.add('active');
            this.setAttribute('aria-pressed', 'true');

            projectCards.forEach(function (card) {

                const category = card.dataset.category;

                const shouldShow =
                    selectedFilter === 'all' ||
                    selectedFilter === category;

                card.classList.toggle('hidden', !shouldShow);

                if (shouldShow) {
                    visibleCount++;
                }

            });

            if (emptyMessage) {
                emptyMessage.hidden = visibleCount !== 0;
            }

        });

    });

});
</script>

<?php get_footer(); ?>
