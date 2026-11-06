<?php
/*
Template Name: About Us
*/

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_uri = get_template_directory_uri();

/*
 * Static, trusted SVG icon paths (24x24, stroke based).
 * Used by the Team, Values and Strengths sections.
 */
$about_icons = array(
    'code'     => '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>',
    'document' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="14" y2="17"/>',
    'diagram'  => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="8.5" y="14" width="7" height="7" rx="1"/><path d="M6.5 10v2.5h11V10M12 12.5V14"/>',
    'flag'     => '<path d="M4 22V4"/><path d="M4 4h13l-2 4 2 4H4"/>',
    'users'    => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
    'bulb'     => '<path d="M9 18h6M10 22h4"/><path d="M12 2a7 7 0 0 0-4 12.7c.6.5 1 1.3 1 2.3h6c0-1 .4-1.8 1-2.3A7 7 0 0 0 12 2z"/>',
    'shield'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>',
    'book'     => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>',
    'target'   => '<circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/>',
    'message'  => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>',
    'star'     => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
);

/**
 * Outputs a static inline SVG icon.
 *
 * @param string $key   Icon key.
 * @param array  $icons Icon library.
 */
$about_render_icon = static function ($key, $icons) {
    if (!isset($icons[$key])) {
        return;
    }
    // Static, trusted markup defined above (no user input).
    echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $icons[$key] . '</svg>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
};

/* ---------- Content for the new sections (edit text here) ---------- */

$team_roles = array(
    array(
        'icon'  => 'code',
        'role'  => 'Programmer / Web Developer',
        'name'  => 'Kerby Talara',
        'text'  => 'Turns our plans and designs into a working, responsive website.',
        'tasks' => array(
            'Builds pages, features, and interactions',
            'Keeps the site responsive and functional',
            'Tests, debugs, and fixes technical issues',
        ),
    ),
    array(
        'icon'  => 'document',
        'role'  => 'Technical Writer',
        'name'  => 'Claire Cabilao',
        'text'  => 'Makes our work clear, organized, and easy for anyone to understand.',
        'tasks' => array(
            'Writes and organizes project documentation',
            'Prepares guides, reports, and page content',
            'Reviews text for clarity and consistency',
        ),
    ),
    array(
        'icon'  => 'diagram',
        'role'  => 'System Analyst',
        'name'  => 'Ann Jelie Dalde',
        'text'  => 'Studies what the system needs and shapes how it should work.',
        'tasks' => array(
            'Gathers and analyzes project requirements',
            'Plans the structure, flow, and features',
            'Checks that the solution meets its goals',
        ),
    ),
    array(
        'icon'  => 'flag',
        'role'  => 'Project Manager',
        'name'  => 'Dhelay Mae Laid',
        'text'  => 'Keeps the team aligned, organized, and moving toward deadlines.',
        'tasks' => array(
            'Plans schedules and assigns tasks',
            'Tracks progress and coordinates the team',
            'Keeps communication open and clear',
        ),
    ),
);

$core_values = array(
    array('icon' => 'users',  'title' => 'Collaboration',       'text' => 'We listen, share ideas, and reach better results by working as one team.'),
    array('icon' => 'bulb',   'title' => 'Innovation',          'text' => 'We look for fresh, practical ways to solve problems and improve our work.'),
    array('icon' => 'shield', 'title' => 'Responsibility',      'text' => 'We own our tasks, respect deadlines, and stand behind what we produce.'),
    array('icon' => 'book',   'title' => 'Continuous Learning', 'text' => 'We treat every challenge as a chance to grow our skills and knowledge.'),
    array('icon' => 'target', 'title' => 'Commitment',          'text' => 'We stay focused and give our best effort from the first plan to the final output.'),
);

$process_steps = array(
    array('title' => 'Planning and Research',          'text' => 'Define goals, gather information, and decide what the project needs.'),
    array('title' => 'System Analysis and Design',     'text' => 'Study requirements, then outline the structure, layout, and flow.'),
    array('title' => 'Development and Implementation', 'text' => 'Build the features and pages according to the approved design.'),
    array('title' => 'Documentation and Testing',      'text' => 'Record how everything works and check that it performs correctly.'),
    array('title' => 'Evaluation and Improvement',     'text' => 'Review the results, gather feedback, and refine the final product.'),
);

$shared_strengths = array(
    array('icon' => 'message', 'title' => 'Communication',        'text' => 'Regular updates keep the analyst, developer, writer, and manager working from the same understanding.'),
    array('icon' => 'users',   'title' => 'Teamwork',             'text' => 'Each role depends on the others, so progress is made together instead of in isolation.'),
    array('icon' => 'code',    'title' => 'Technical Knowledge',  'text' => 'Analysis and development skills turn requirements into a website that works as planned.'),
    array('icon' => 'star',    'title' => 'Creativity',           'text' => 'Different viewpoints lead to better layouts, clearer content, and more original ideas.'),
    array('icon' => 'shield',  'title' => 'Shared Responsibility','text' => 'Everyone is accountable for the quality of the final result, not only for their own part.'),
);

$role_chips = array('Development', 'Documentation', 'Analysis', 'Management');
?>

<main class="about-page">

    <!-- ========================================
         01. ABOUT HERO
    ========================================= -->

    <section class="about-hero">
        <div class="container">

            <span class="about-eyebrow" data-reveal="up">
                Get to Know Our Group
            </span>

            <h1 data-reveal="up">
                About <span>Our Group.</span>
            </h1>

            <p data-reveal="up">
                Different talents, individual strengths, and shared ideas
                come together in one digital portfolio. Discover our story,
                our purpose, and what inspires us to create, learn, and grow
                together.
            </p>

        </div>
    </section>


    <!-- ========================================
         02. ABOUT THE PROJECT
    ========================================= -->

    <section class="about-section">
        <div class="container about-grid">

            <div class="about-heading" data-reveal="left">

                <span class="section-label">
                    01 / About the Project
                </span>

                <h2>
                    A digital space that represents who we are.
                </h2>

            </div>

            <div class="about-content" data-reveal="right">

                <p>
                    Our Group Portfolio is a website developed to showcase
                    the different skills, talents, experiences, and
                    accomplishments of our group members. It brings
                    individual portfolios together in one organized
                    and accessible digital platform.
                </p>

                <p>
                    The website allows visitors to explore our members'
                    backgrounds, discover their abilities, and view the
                    projects and activities they have completed. Each
                    member has unique strengths, interests, and experiences
                    that contribute to the identity of our group.
                </p>

                <p>
                    Through this platform, we aim to present our work
                    professionally while making it easier for visitors
                    to understand who we are, what we do, and what we
                    can accomplish through collaboration.
                </p>

            </div>

        </div>
    </section>


    <!-- ========================================
         03. PROJECT OBJECTIVES
    ========================================= -->

    <section class="about-section about-section-light">
        <div class="container">

            <div class="section-heading" data-reveal="up">

                <span class="section-label">
                    02 / Project Objectives
                </span>

                <h2>
                    What we want to achieve.
                </h2>

                <p>
                    This project is designed to bring our individual
                    abilities together while creating opportunities
                    to present our work, develop our skills, and
                    connect with others.
                </p>

            </div>


            <div class="objectives-grid">

                <!-- OBJECTIVE 1 -->
                <article class="objective-card" data-reveal="up">

                    <div class="objective-image">
                        <img
                            src="<?php echo esc_url($theme_uri . '/assets/images/showcase.jpg'); ?>"
                            alt="Student working on a computer"
                            loading="lazy"
                        >
                    </div>

                    <div class="objective-details">

                        <span class="objective-number">01</span>

                        <h3>Showcase Our Skills</h3>

                        <p>
                            Highlight the individual talents, technical
                            abilities, creativity, and knowledge of every
                            group member. We want to demonstrate what each
                            person can contribute through their unique
                            skills and experiences.
                        </p>

                    </div>

                </article>


                <!-- OBJECTIVE 2 -->
                <article class="objective-card" data-reveal="up">

                    <div class="objective-image">
                        <img
                            src="<?php echo esc_url($theme_uri . '/assets/images/eys.jpg'); ?>"
                            alt="Digital projects displayed on a computer"
                            loading="lazy"
                        >
                    </div>

                    <div class="objective-details">

                        <span class="objective-number">02</span>

                        <h3>Present Our Projects</h3>

                        <p>
                            Showcase our completed works, creative outputs,
                            academic activities, and development projects.
                            This section allows visitors to explore our
                            progress and see how we apply our knowledge
                            in actual work.
                        </p>

                    </div>

                </article>


                <!-- OBJECTIVE 3 -->
                <article class="objective-card" data-reveal="up">

                    <div class="objective-image">
                        <img
                            src="<?php echo esc_url($theme_uri . '/assets/images/ai.jpg'); ?>"
                            alt="Group members collaborating on a project"
                            loading="lazy"
                        >
                    </div>

                    <div class="objective-details">

                        <span class="objective-number">03</span>

                        <h3>Build Collaboration</h3>

                        <p>
                            Encourage teamwork, communication, and the
                            sharing of ideas. We aim to demonstrate how
                            different perspectives and individual strengths
                            can work together to achieve a common goal.
                        </p>

                    </div>

                </article>


                <!-- OBJECTIVE 4 -->
                <article class="objective-card" data-reveal="up">

                    <div class="objective-image">
                        <img
                            src="<?php echo esc_url($theme_uri . '/assets/images/sus.jpg'); ?>"
                            alt="People connecting and sharing ideas"
                            loading="lazy"
                        >
                    </div>

                    <div class="objective-details">

                        <span class="objective-number">04</span>

                        <h3>Connect With Others</h3>

                        <p>
                            Provide visitors with an opportunity to discover
                            our members, understand our interests, explore
                            our accomplishments, and connect with us through
                            our shared digital portfolio.
                        </p>

                    </div>

                </article>

            </div>

        </div>
    </section>


    <!-- ========================================
         04. PROJECT BACKGROUND
    ========================================= -->

    <section class="about-section">
        <div class="container about-grid">

            <div class="about-heading" data-reveal="left">

                <span class="section-label">
                    03 / Project Background
                </span>

                <h2>
                    The story behind our project.
                </h2>

            </div>

            <div class="about-content" data-reveal="right">

                <p>
                    In today's digital world, websites play an important
                    role in sharing information, presenting achievements,
                    and showcasing personal and professional work.
                    Having an online presence provides individuals and
                    groups with an opportunity to reach a wider audience
                    and communicate their ideas effectively.
                </p>

                <p>
                    We developed this group portfolio as a way to bring
                    our individual works and personal portfolios together
                    in one website. Instead of presenting our information
                    separately, we wanted to create a shared platform
                    that represents our identity, creativity, and
                    cooperation as a group.
                </p>

                <p>
                    This project also serves as an opportunity to apply
                    the knowledge and technical skills we have gained
                    in website development. From planning the layout
                    to organizing the content and designing the pages,
                    we aim to create a functional, accessible, and
                    visually organized website.
                </p>

                <p>
                    Throughout the development process, we continue
                    to learn, solve problems, exchange ideas, and
                    improve our abilities as individuals and as a team.
                </p>

            </div>

        </div>
    </section>


    <!-- ========================================
         05. OUR TEAM EXPERTISE  (NEW)
    ========================================= -->

    <section class="about-section about-section-light team-section">
        <div class="container">

            <div class="section-heading" data-reveal="up">

                <span class="section-label">
                    04 / Our Team Expertise
                </span>

                <h2>
                    Four roles. One complete team.
                </h2>

                <p>
                    Every project needs more than code. Each member
                    takes a specialized role that covers a different
                    part of planning, building, and presenting our work.
                </p>

            </div>

            <div class="team-grid">

                <?php foreach ($team_roles as $index => $member) : ?>

                    <article class="team-card" data-reveal="up">

                        <div class="team-card-top">
                            <span class="team-icon">
                                <?php $about_render_icon($member['icon'], $about_icons); ?>
                            </span>
                            <span class="team-number">
                                <?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?>
                            </span>
                        </div>

                        <span class="team-role"><?php echo esc_html($member['role']); ?></span>

                        <h3><?php echo esc_html($member['name']); ?></h3>

                        <p><?php echo esc_html($member['text']); ?></p>

                        <ul class="team-tasks">
                            <?php foreach ($member['tasks'] as $task) : ?>
                                <li><?php echo esc_html($task); ?></li>
                            <?php endforeach; ?>
                        </ul>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>
    </section>


    <!-- ========================================
         06. MISSION AND VISION
    ========================================= -->

    <section class="mission-vision-section">
        <div class="container">

            <div class="section-heading" data-reveal="up">

                <span class="section-label">
                    05 / Our Mission &amp; Vision
                </span>

                <h2>
                    What drives us forward.
                </h2>

            </div>


            <div class="mission-vision-grid">

                <!-- MISSION -->
                <article class="mission-card" data-reveal="left">

                    <span class="mv-label">
                        Our Mission
                    </span>

                    <h3>
                        To share, inspire, and grow together.
                    </h3>

                    <p>
                        Our mission is to develop an organized and
                        accessible online platform where every group
                        member can showcase their skills, share their
                        accomplishments, and express their creativity.
                        We aim to promote teamwork, encourage the
                        exchange of ideas, and create opportunities
                        for continuous learning and improvement.
                    </p>

                </article>


                <!-- VISION -->
                <article class="vision-card" data-reveal="right">

                    <span class="mv-label">
                        Our Vision
                    </span>

                    <h3>
                        A space where every talent has a place.
                    </h3>

                    <p>
                        Our vision is to establish a meaningful and
                        creative digital portfolio that represents
                        our group's abilities, achievements, and
                        potential. We aspire to create a platform
                        that inspires others through our shared
                        experiences, individual talents, and
                        collaborative projects.
                    </p>

                </article>

            </div>

        </div>
    </section>


    <!-- ========================================
         07. OUR CORE VALUES  (NEW)
    ========================================= -->

    <section class="about-section values-section">
        <div class="container">

            <div class="section-heading" data-reveal="up">

                <span class="section-label">
                    06 / Our Core Values
                </span>

                <h2>
                    The principles we work by.
                </h2>

                <p>
                    These values guide how we make decisions, support
                    one another, and take pride in what we deliver.
                </p>

            </div>

            <div class="values-grid">

                <?php foreach ($core_values as $value) : ?>

                    <article class="value-card" data-reveal="up">

                        <span class="value-icon">
                            <?php $about_render_icon($value['icon'], $about_icons); ?>
                        </span>

                        <h3><?php echo esc_html($value['title']); ?></h3>

                        <p><?php echo esc_html($value['text']); ?></p>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>
    </section>


    <!-- ========================================
         08. OUR DEVELOPMENT PROCESS  (NEW)
    ========================================= -->

    <section class="about-section about-section-light process-section">
        <div class="container">

            <div class="section-heading" data-reveal="up">

                <span class="section-label">
                    07 / Our Development Process
                </span>

                <h2>
                    How an idea becomes a finished project.
                </h2>

                <p>
                    We follow five clear stages so every project stays
                    organized, tested, and open to improvement.
                </p>

            </div>

            <ol class="process-timeline">

                <?php foreach ($process_steps as $index => $step) : ?>

                    <li class="process-step" data-reveal="up">

                        <span class="process-marker">
                            <?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?>
                        </span>

                        <h3><?php echo esc_html($step['title']); ?></h3>

                        <p><?php echo esc_html($step['text']); ?></p>

                    </li>

                <?php endforeach; ?>

            </ol>

        </div>
    </section>


    <!-- ========================================
         09. OUR SHARED STRENGTHS  (NEW)
    ========================================= -->

    <section class="strengths-section">
        <div class="container strengths-grid">

            <div class="strengths-intro" data-reveal="left">

                <span class="section-label">
                    08 / Our Shared Strengths
                </span>

                <h2>
                    Different Perspectives. <span>One Shared Direction.</span>
                </h2>

                <p>
                    Our four specializations complement one another.
                    Analysis shapes the plan, development builds it,
                    documentation explains it, and management keeps
                    everything on track. Together, they turn separate
                    skills into one successful project.
                </p>

                <ul class="strengths-chips" aria-label="Our specializations">
                    <?php foreach ($role_chips as $chip) : ?>
                        <li><?php echo esc_html($chip); ?></li>
                    <?php endforeach; ?>
                </ul>

            </div>

            <div class="strengths-list" data-reveal="right">

                <?php foreach ($shared_strengths as $strength) : ?>

                    <div class="strength-item">

                        <span class="strength-icon">
                            <?php $about_render_icon($strength['icon'], $about_icons); ?>
                        </span>

                        <div class="strength-text">
                            <h3><?php echo esc_html($strength['title']); ?></h3>
                            <p><?php echo esc_html($strength['text']); ?></p>
                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </section>


    <!-- ========================================
         10. WHY WE CREATED OUR PORTFOLIO
    ========================================= -->

    <section class="about-section why-section">
        <div class="container why-container">

            <div class="why-heading" data-reveal="left">

                <span class="section-label">
                    09 / Why We Created Our Portfolio
                </span>

                <h2>
                    More than just a collection of projects.
                </h2>

            </div>


            <div class="why-content" data-reveal="right">

                <p>
                    We created this portfolio to have one place where
                    we can introduce ourselves, present our individual
                    skills, and share the projects we have worked on.
                    We believe that every member has something valuable
                    to contribute and that our individual strengths
                    become more meaningful when brought together.
                </p>

                <p>
                    Another reason for developing this website is to
                    create a convenient way for people to learn more
                    about our group. Through organized pages and
                    individual portfolio sections, visitors can
                    easily discover our backgrounds, interests,
                    experiences, and accomplishments.
                </p>

                <p>
                    This project also allows us to document our
                    learning experiences, highlight our progress,
                    and demonstrate what we can accomplish through
                    teamwork. It challenges us to apply our technical
                    knowledge, improve our creativity, and develop
                    practical skills in designing and building websites.
                </p>

                <p>
                    Ultimately, this portfolio represents who we are,
                    what we have learned, what we can do, and what
                    we hope to achieve together. It is a reflection
                    of our efforts, dedication, and continuous growth
                    as learners and creators.
                </p>

            </div>

        </div>
    </section>


    <!-- ========================================
         11. CLOSING CTA
    ========================================= -->

    <section class="about-cta">

        <div class="container about-cta-content">

            <span class="section-label">
                Explore Our Group
            </span>

            <h2 data-reveal="up">
                Get to know the people
                behind the projects.
            </h2>

            <p data-reveal="up">
                Meet our members and discover their individual talents,
                skills, experiences, and creative works.
            </p>

            <a
                href="<?php echo esc_url(home_url('/our-members/')); ?>"
                class="button button-orange"
            >
                Explore Our Members
                <span aria-hidden="true">&rarr;</span>
            </a>

        </div>

        <div class="explore-decoration" aria-hidden="true">O.</div>

    </section>

</main>

<?php get_footer(); ?>