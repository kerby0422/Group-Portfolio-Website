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
        'text'  => 'Builds the website by translating the team’s requirements and approved layouts into functional, responsive pages.',
        'tasks' => array(
            'Develops and maintains the site’s pages and features',
            'Checks responsive behavior and working navigation',
            'Tests the implementation and addresses technical issues',
        ),
    ),
    array(
        'icon'  => 'document',
        'role'  => 'Technical Writer',
        'name'  => 'Claire Cabilao',
        'text'  => 'Communicates project information clearly and keeps written content organized and consistent.',
        'tasks' => array(
            'Prepares and organizes project documentation',
            'Writes clear reports, guides, and website content',
            'Reviews written material for accuracy and consistency',
        ),
    ),
    array(
        'icon'  => 'diagram',
        'role'  => 'System Analyst',
        'name'  => 'Ann Jelie Dalde',
        'text'  => 'Analyzes the project’s requirements and helps define how the website should organize and present information.',
        'tasks' => array(
            'Identifies user needs and clarifies requirements',
            'Maps the site’s information structure and page flow',
            'Reviews whether planned features address the project goals',
        ),
    ),
    array(
        'icon'  => 'flag',
        'role'  => 'Project Manager',
        'name'  => 'Dhelay Mae Laid',
        'text'  => 'Coordinates the team’s tasks, schedule, and communication throughout the project.',
        'tasks' => array(
            'Organizes the work plan, schedule, and task assignments',
            'Monitors progress and follows up on agreed responsibilities',
            'Facilitates communication and team coordination',
        ),
    ),
);

$core_values = array(
    array('icon' => 'star',   'title' => 'Creativity',           'text' => 'We explore thoughtful ways to organize information, present our work, and address project challenges.'),
    array('icon' => 'users',  'title' => 'Collaboration',        'text' => 'We share ideas, listen to different perspectives, and coordinate our efforts toward a common goal.'),
    array('icon' => 'shield', 'title' => 'Responsibility',       'text' => 'We take ownership of our assigned work, communicate progress, and consider the quality of the whole project.'),
    array('icon' => 'book',   'title' => 'Continuous Learning',  'text' => 'We use feedback and practical challenges to strengthen our skills and understanding.'),
    array('icon' => 'bulb',   'title' => 'Innovation',           'text' => 'We stay open to useful ideas and approaches that can make our work clearer and more effective.'),
);

$process_steps = array(
    array('title' => 'Planning and Research',          'text' => 'Agree on the website’s purpose and audience, gather the information to present, and define the project requirements.'),
    array('title' => 'System Analysis and Design',     'text' => 'Organize the content and map the page structure, navigation, and intended visitor experience.'),
    array('title' => 'Development and Implementation', 'text' => 'Build the WordPress pages and integrate the prepared content according to the project plan.'),
    array('title' => 'Documentation and Testing',      'text' => 'Document relevant project details and review page content, navigation, and functionality.'),
    array('title' => 'Evaluation and Improvement',     'text' => 'Use team review and feedback to identify updates and refine the website over time.'),
);

$shared_strengths = array(
    array('icon' => 'message', 'title' => 'Communication', 'text' => 'Clear updates help the analyst, developer, writer, and project manager stay informed and coordinate decisions.'),
    array('icon' => 'users',   'title' => 'Teamwork', 'text' => 'Members contribute their expertise while reviewing and supporting work across the project.'),
    array('icon' => 'code',    'title' => 'Technical Problem-Solving', 'text' => 'We apply analysis and development knowledge to address requirements and resolve implementation issues.'),
    array('icon' => 'star',    'title' => 'Adaptability', 'text' => 'We consider feedback and adjust plans or content when review reveals a clearer approach.'),
    array('icon' => 'shield',  'title' => 'Shared Responsibility', 'text' => 'Each person owns their assignments and contributes to the quality and consistency of the group portfolio.'),
);

$role_chips = array('Development', 'Documentation', 'Analysis', 'Management');
?>

<main class="about-page">

    <!-- ========================================
         01. ABOUT HERO
    ========================================= -->

    <section class="about-hero">
        <div class="container">

            <div class="about-hero-grid">
                <div class="about-hero-copy">
                    <span class="about-eyebrow" data-reveal="up">
                        DEVHUB GROUP PORTFOLIO
                    </span>

                    <h1 data-reveal="up">
                        About <span>DEVHUB.</span>
                    </h1>

                    <p data-reveal="up">
                        DEVHUB GROUP PORTFOLIO brings together four IT students to present
                        our individual portfolios and shared project work. Learn about our
                        roles, the purpose behind the website, and how we apply our skills
                        through planning, development, documentation, and teamwork.
                    </p>
                </div>

                <figure class="about-team-photo" data-reveal="right">
                    <img
                        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/group.jpg'); ?>"
                        alt="The DEVHUB team together"
                        fetchpriority="high"
                        decoding="async"
                    >
                    <figcaption>
                        <span>DEVHUB</span>
                        <strong><?php echo esc_html(sprintf('%02d', count($team_roles))); ?> MEMBERS · ONE TEAM</strong>
                    </figcaption>
                </figure>
            </div>

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
                    One place to explore our team and work.
                </h2>

            </div>

            <div class="about-content" data-reveal="right">

                <p>
                    DEVHUB GROUP PORTFOLIO is a student-developed website that introduces our team
                    and brings our individual portfolios together in one place. DEV refers to
                    development and developers; HUB represents a central place where people can
                    connect, collaborate, and share ideas.
                </p>

                <p>
                    Visitors can learn about each member, explore individual portfolio pages,
                    and review information about skills, educational backgrounds, projects, and
                    certificates. These sections make it easier to understand each member’s
                    interests, learning, and contributions.
                </p>

                <p>
                    The site’s scope is to organize and present this team and portfolio
                    information, along with selected group projects. It gives visitors a
                    clear path to discover our work while helping us practice how information
                    and project outcomes are presented online.
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
                    The goals of our project.
                </h2>

                <p>
                    Our objectives focus on presenting our current work clearly, applying
                    our IT knowledge in a practical website, and giving visitors an
                    organized way to learn about the team.
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
                            Present each member’s skills, educational background,
                            interests, and role so visitors can understand the
                            different contributions within our team.
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
                            Organize selected group and individual projects
                            with clear descriptions, helping visitors see how
                            we apply course knowledge and develop our ideas.
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
                            Coordinate analysis, development, writing, and
                            project management so different responsibilities
                            contribute to one shared website.
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
                            Make it straightforward for classmates, instructors,
                            and other visitors to navigate our profiles and
                            learn about our work through a single website.
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
                    Why we needed a shared portfolio.
                </h2>

            </div>

            <div class="about-content" data-reveal="right">

                <p>
                    As IT students, we develop skills and complete work across
                    different areas. When that information is presented in
                    separate places, it can be difficult for others to see
                    how individual contributions fit together.
                </p>

                <p>
                    We created DEVHUB GROUP PORTFOLIO to provide a shared context
                    for our individual portfolios and group projects. The website
                    reflects our work as a student team while allowing each member
                    to present their own background and areas of interest.
                </p>

                <p>
                    The project gives us a practical setting to apply what we
                    have learned about requirements, content organization,
                    WordPress, and website development. Each team role contributes
                    to planning, building, documenting, and coordinating the site.
                </p>

                <p>
                    Developing the site also gives us experience working through
                    decisions and revisions together. We use review and feedback
                    to improve the content and functionality as the project grows.
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
                    Clear responsibilities. Shared results.
                </h2>

                <p>
                    Our four roles support different parts of the project, from
                    analyzing requirements and developing pages to preparing
                    documentation and coordinating tasks.
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
                        To learn and build together.
                    </h3>

                    <p>
                        Our mission is to maintain a clear, accessible group portfolio
                        where members can present their backgrounds, skills, education,
                        and project work. Through developing and improving the site,
                        we aim to apply our IT knowledge, communicate effectively, and
                        learn from one another as a student team.
                    </p>

                </article>


                <!-- VISION -->
                <article class="vision-card" data-reveal="right">

                    <span class="mv-label">
                        Our Vision
                    </span>

                    <h3>
                        Grow as thoughtful IT professionals.
                    </h3>

                    <p>
                        Our vision is to grow as adaptable IT learners who can work
                        across different roles, present our work responsibly, and
                        develop thoughtful digital solutions. We hope DEVHUB will
                        continue to reflect our progress and provide a useful way
                        for others to explore our work.
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
                    Creativity, collaboration, responsibility, learning, and
                    innovation guide how we approach tasks and support one another.
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
                    How we develop and review the website.
                </h2>

                <p>
                    We use these stages to organize our work and review what
                    needs attention; feedback may lead us to revisit earlier steps.
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
                    Different Roles. <span>One Shared Direction.</span>
                </h2>

                <p>
                    Our roles complement one another: systems analysis clarifies
                    requirements, development implements the site, technical
                    writing organizes information, and project management
                    coordinates tasks and progress. Regular communication helps
                    connect these contributions without losing sight of the
                    group’s shared goals.
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
                    For members, DEVHUB provides an organized way to present
                    individual backgrounds, skills, education, and project
                    experience alongside the group’s work. It also gives us
                    practice maintaining a shared digital portfolio and
                    communicating our contributions clearly.
                </p>

                <p>
                    For visitors, the site brings team and member information
                    together in one place. Clear sections and links make it
                    easier to learn about our roles and explore our projects
                    without searching across separate sources.
                </p>

                <p>
                    Creating the portfolio also helps us apply classroom
                    knowledge to a practical team project. We gain experience
                    in planning, communication, content organization, WordPress
                    development, review, and coordinating work across different
                    responsibilities.
                </p>

                <p>
                    The portfolio is a working record of what we choose to
                    share about our learning and projects. As our experience
                    develops, we can update it with relevant work and improve
                    how we present it.
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
                Explore DEVHUB GROUP PORTFOLIO to learn about our team,
                visit individual portfolios, and discover the projects
                we have worked on and explored.
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