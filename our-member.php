<?php
/*
Template Name: Our Members
*/

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_images = get_stylesheet_directory_uri() . '/assets/images/';

/* ----------------------------------------
   MEMBERS
   'position' = kung anong parte ng photo ang ipapakita (object-position)
   Format: 'x y' -> halimbawa 'center 30%'
   Mas mataas ang y%, mas bumababa ang ipinapakita sa photo.
---------------------------------------- */

$members = array(

    array(
        'number' => '01',
        'name' => 'Kerby Talara',
        'image' => 'ker.jpg',
        'position' => 'center 50%',
        'role' => 'WEB DEVELOPER / PROGRAMMER',
        'skills' => array('WordPress', 'PHP', 'HTML / CSS'),
        'description' => 'Builds and maintains the group website by turning agreed requirements and layouts into functional pages. Contributes programming work and checks that site features and navigation behave as intended.',
        'facebook' => 'https://www.facebook.com/kerby.villalobos.talara',
        'instagram' => 'https://www.instagram.com/kercby/',
        'portfolio' => '/ker-portfolio/'
    ),

    array(
        'number' => '02',
        'name' => 'Claire Justine Cabilao',
        'image' => 'calire.jpg',
        'initials' => 'CC',
        'position' => 'center 30%',
        'role' => 'TECHNICAL WRITER',
        'skills' => array('Technical Research', 'Content Organization', 'Documentation'),
        'description' => 'Organizes project information and prepares clear documentation and website content. Helps the team explain its work, decisions, and processes in a consistent, understandable way.',
        'facebook' => 'https://www.facebook.com/claire.cabilao.2025?rdid=e6qCyTA00fNYEG7O&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1EpM3HTbXU#',
        'instagram' => 'https://www.instagram.com/tfti.ne?rpxt=MTQ2c3c5OXN5anRpdg%3D%3D&fbclid=IwY2xjawVXmNFleHRuA2FlbQIxMABwZG9mBWJyaWQRMUdRUXpxRU5pT1lRR0JpcGJzcnRjBmFwcF9pZBAyMjIwMzkxNzg4MjAwODkyAAEfA1xHMogHArq-NNJD09TKbw9MYcUkv_Oqk1e99mjXn_TMOsaySIdV319eZ_U_aem_NlGNgiyzOzUZTPG908oCAg',
        'portfolio' => '/clair-portfolio/'
    ),

    array(
        'number' => '03',
        'name' => 'Ann Jelie Dalde',
        'image' => 'ann.jpg',
        'position' => 'center 75%',
        'role' => 'SYSTEM ANALYST',
        'skills' => array('Requirements Analysis', 'Systems Analysis', 'System Documentation'),
        'description' => 'Studies the project requirements and the needs of its visitors, then helps define the site’s content structure and flow. Identifies gaps early so the team can make informed planning and development decisions.',
        'facebook' => 'https://www.facebook.com/annjelie.dalde.3',
        'instagram' => 'https://www.instagram.com/xoxo.jeil/?fbclid=IwY2xjawVXf6hleHRuA2FlbQIxMABwZG9mBWJyaWQRMUdRUXpxRU5pT1lRR0JpcGJzcnRjBmFwcF9pZBAyMjIwMzkxNzg4MjAwODkyAAEfBAQpGURPeuHXbYO75hCkIbujU3fhMV-ziw9h4aRGJ3P1ILRSoeFfCgoGud8_aem_-35azWf2i6fhvEXC12jg9g',
        'portfolio' => '/ann-portfolio/'
    ),

    array(
        'number' => '04',
        'name' => 'Dhelay Mae Laid',
        'image' => 'Dhelay.jpg',
        'position' => 'center 90%',
        'role' => 'PROJECT MANAGER',
        'skills' => array('Project Planning', 'Team Coordination', 'Progress Monitoring'),
        'description' => 'Organizes the group’s project activities by coordinating assignments, schedules, and progress updates. Helps members stay aligned on responsibilities and communicate as the work moves forward.',
        'facebook' => 'https://www.facebook.com/dm.laid?mibextid=wwXIfr&rdid=VNyhAH3shrQhRx1U&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1KZDxhCbus%2F%3Fmibextid%3DwwXIfr#',
        'instagram' => 'https://www.instagram.com/laiflssse?rpxt=emVsa212cWl2ZXc5&utm_source=qr&fbclid=IwY2xjawVXdx9leHRuA2FlbQIxMABwZG9mBWJyaWQRMUdRUXpxRU5pT1lRR0JpcGJzcnRjBmFwcF9pZBAyMjIwMzkxNzg4MjAwODkyAAEf8iySb-4ZYNHlAxDC92KunDW9eNA2RZE3OS1sYf5p6NvopXrSqcy7OtyMofI_aem_SV_HVx4TapJmGv7WK6YKKw',
        'portfolio' => '/laid-portfolio/'
    )

);

/* ----------------------------------------
   TEAM WORKFLOW
---------------------------------------- */

$workflow = array(

    array(
        'number' => '01',
        'title' => 'Planning and Organization',
        'description' => 'We agree on the project goal, organize the work into manageable tasks, assign responsibilities, and set a schedule that fits our student team.'
    ),

    array(
        'number' => '02',
        'title' => 'Research and Analysis',
        'description' => 'We identify the intended visitors, collect the information the site should present, and analyze requirements so the team can plan pages and features before implementation.'
    ),

    array(
        'number' => '03',
        'title' => 'Development and Implementation',
        'description' => 'We implement the planned pages and features, bringing together website code, prepared content, and the contributions of each assigned team role.'
    ),

    array(
        'number' => '04',
        'title' => 'Documentation',
        'description' => 'We organize project information and record relevant requirements, decisions, and guidance so team members and visitors can understand the work.'
    ),

    array(
        'number' => '05',
        'title' => 'Review and Improvement',
        'description' => 'We review the site together, check content and navigation, and use feedback to identify practical improvements for the next iteration.'
    )

);

/* ----------------------------------------
   HOW EACH ROLE CONTRIBUTES
---------------------------------------- */

$contributions = array(
    'WEB DEVELOPER / PROGRAMMER' => 'Implements and maintains the website pages and features.',
    'TECHNICAL WRITER' => 'Organizes project information and communicates it through clear documentation.',
    'SYSTEM ANALYST' => 'Clarifies requirements and helps plan the site’s structure and content flow.',
    'PROJECT MANAGER' => 'Coordinates assignments, schedules, and progress across the team.'
);

/* ----------------------------------------
   PAGE SCRIPT (scroll-reveal)
   Place the file at: /assets/js/our-members.js
---------------------------------------- */

$members_js = get_stylesheet_directory() . '/assets/js/our-members.js';

if (file_exists($members_js)) {
    wp_enqueue_script(
        'devhub-members',
        get_stylesheet_directory_uri() . '/assets/js/our-members.js',
        array(),
        filemtime($members_js),
        true
    );
}
?>

<main class="members-page">

    <!-- HERO SECTION -->

    <section class="members-hero">

        <div class="container members-hero-inner">

            <div class="members-hero-content" data-reveal>

                <span class="members-eyebrow">
                    THE PEOPLE BEHIND THE WORK
                </span>

                <h1>
                    Meet the <span>People.</span>
                    <br>
                    Know the Talent.
                </h1>

                <p>
                    We are four aspiring IT professionals bringing different
                    skills together through DEVHUB. Meet the people behind our
                    group portfolio and learn how each member contributes to
                    our shared work.
                </p>

                <a href="#member-profiles" class="members-hero-button">
                    Meet Our Members
                    <span aria-hidden="true">&rarr;</span>
                </a>

            </div>

            <div class="members-hero-visual" data-reveal>

                <div class="members-hero-circle circle-large"></div>
                <div class="members-hero-circle circle-small"></div>

                <figure class="members-hero-card">
                    <img
                        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/group.jpg'); ?>"
                        alt="The DEVHUB team members together"
                        fetchpriority="high"
                        decoding="async"
                    >
                    <figcaption class="members-image-caption">
                        <span>DEVHUB</span>
                        <strong><?php echo esc_html(sprintf('%02d', count($members))); ?> MEMBERS · ONE TEAM</strong>
                    </figcaption>
                </figure>

                <div class="members-floating-label">
                    <span class="members-floating-dot"></span>
                    Scroll to meet everyone
                </div>

            </div>

        </div>

        <div class="container">

            <ul class="members-hero-bottom" aria-label="Team roles">

                <?php foreach ($members as $member) : ?>
                    <li><?php echo esc_html($member['role']); ?></li>
                <?php endforeach; ?>

            </ul>

        </div>

    </section>


    <!-- INTRODUCTION -->

    <section class="members-intro">

        <div class="container members-intro-grid">

            <div data-reveal>

                <span class="members-section-label">
                    GET TO KNOW US
                </span>

                <h2>
                    Meet the minds
                    <span>behind the projects.</span>
                </h2>

            </div>

            <div class="members-intro-content" data-reveal>

                <p>
                    Our team brings together different responsibilities,
                    skills, and perspectives. Development, technical writing,
                    systems analysis, and project management each support a
                    different part of our work, while collaboration helps us
                    connect those contributions.
                </p>

                <p>
                    By sharing ideas, reviewing one another’s work, and
                    learning throughout the process, we build our skills as
                    individuals and as a team. Explore our profiles and
                    individual portfolios to learn about our work.
                </p>

            </div>

        </div>

    </section>


    <!-- MEMBER PROFILES -->

    <section class="member-profiles" id="member-profiles">

        <div class="container">

            <div class="members-section-heading" data-reveal>

                <div>

                    <span class="members-section-label">
                        OUR TEAM
                    </span>

                    <h2>The Members</h2>

                </div>

                <p>
                    Meet four aspiring IT professionals and explore the
                    responsibilities and skills each brings to DEVHUB.
                </p>

            </div>

            <div class="member-profile-grid">

                <?php foreach ($members as $member) : ?>

                    <article class="member-profile-card" data-reveal>

                        <!-- MEMBER IMAGE -->

                        <div class="member-profile-image">

                            <?php if (!empty($member['image'])) : ?>
                                <img
                                    src="<?php echo esc_url($theme_images . $member['image']); ?>"
                                    alt="<?php echo esc_attr($member['name'] . ' — ' . $member['role'] . ', DEVHUB team member'); ?>"
                                    style="object-position: <?php echo esc_attr($member['position']); ?>;"
                                    loading="lazy"
                                    decoding="async">
                            <?php else : ?>
                                <span class="member-profile-placeholder" aria-hidden="true"><?php echo esc_html($member['initials']); ?></span>
                            <?php endif; ?>

                            <span class="member-profile-number">
                                <?php echo esc_html($member['number']); ?>
                            </span>

                            <span class="member-profile-tag">
                                <?php echo esc_html($member['role']); ?>
                            </span>

                        </div>

                        <!-- MEMBER INFORMATION -->

                        <div class="member-profile-info">

                            <div class="member-profile-heading">
                                <h3>
                                    <?php echo esc_html($member['name']); ?>
                                </h3>
                            </div>

                            <p>
                                <?php echo esc_html($member['description']); ?>
                            </p>

                            <ul class="member-profile-skills" aria-label="<?php echo esc_attr($member['name']); ?>'s skills">
                                <?php foreach ($member['skills'] as $skill) : ?>
                                    <li><?php echo esc_html($skill); ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <!-- SOCIAL MEDIA -->

                            <div class="member-social-links">

                                <a
                                    class="is-facebook"
                                    href="<?php echo esc_url($member['facebook']); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="<?php echo esc_attr($member['name']); ?> on Facebook">
                                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true" focusable="false">
                                        <path d="M13.5 21v-7.5h2.6l.4-3h-3V8.6c0-.9.3-1.5 1.6-1.5h1.6V4.4c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4v2.2H8v3h2.5V21h3z" />
                                    </svg>
                                    Facebook
                                </a>

                                <a
                                    class="is-instagram"
                                    href="<?php echo esc_url($member['instagram']); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="<?php echo esc_attr($member['name']); ?> on Instagram">
                                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true" focusable="false">
                                        <rect x="3.5" y="3.5" width="17" height="17" rx="5" />
                                        <circle cx="12" cy="12" r="4" />
                                        <circle cx="17.2" cy="6.8" r="1" fill="currentColor" stroke="none" />
                                    </svg>
                                    Instagram
                                </a>

                            </div>

                            <!-- INDIVIDUAL PORTFOLIO -->

                            <a
                                href="<?php echo esc_url(home_url($member['portfolio'])); ?>"
                                class="member-portfolio-link"
                                aria-label="<?php echo esc_attr('View ' . $member['name'] . '\'s portfolio'); ?>">
                                <span class="member-portfolio-text">View Portfolio</span>
                                <span class="member-portfolio-icon" aria-hidden="true">&rarr;</span>
                            </a>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- TEAM WORKFLOW -->

    <section class="members-workflow" id="team-workflow">

        <div class="container">

            <div class="members-workflow-heading" data-reveal>

                <span class="members-section-label">
                    OUR TEAM WORKFLOW
                </span>

                <h2>How we work together.</h2>

                <p>
                    Our five steps describe how we organize, develop, document,
                    and review a student IT project from its initial plan onward.
                </p>

            </div>

            <ol class="workflow-track" data-reveal>

                <?php foreach ($workflow as $step) : ?>

                    <li class="workflow-step">

                        <span class="workflow-marker">
                            <?php echo esc_html($step['number']); ?>
                        </span>

                        <h3>
                            <?php echo esc_html($step['title']); ?>
                        </h3>

                        <p>
                            <?php echo esc_html($step['description']); ?>
                        </p>

                    </li>

                <?php endforeach; ?>

            </ol>

        </div>

    </section>


    <!-- ONE TEAM, ONE GOAL -->

    <section class="members-goal">

        <div class="container members-goal-grid">

            <div class="members-goal-content" data-reveal>

                <span class="members-section-label">
                    ONE TEAM, ONE GOAL
                </span>

                <h2>
                    Different skills.
                    One shared purpose.
                </h2>

                <p>
                    The system analyst helps clarify requirements, the project
                    manager coordinates tasks and progress, the web developer
                    implements the site, and the technical writer organizes
                    project information. We share updates, review the work, and
                    take responsibility for the result together. DEVHUB reflects
                    what we can achieve by combining our contributions and
                    continuing to learn as a team.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/our-projects/')); ?>"
                    class="members-cta-button">
                    Explore Our Projects
                    <span aria-hidden="true">&rarr;</span>
                </a>

            </div>

            <div class="members-goal-flow" data-reveal>

                <ul class="goal-contributions">

                    <?php foreach ($members as $member) : ?>

                        <li class="goal-contribution">

                            <span class="goal-role">
                                <?php echo esc_html($member['role']); ?>
                            </span>

                            <span class="goal-name">
                                <?php echo esc_html($member['name']); ?>
                            </span>

                            <?php if (isset($contributions[$member['role']])) : ?>
                                <p>
                                    <?php echo esc_html($contributions[$member['role']]); ?>
                                </p>
                            <?php endif; ?>

                        </li>

                    <?php endforeach; ?>

                </ul>

                <div class="goal-result">

                    <span class="goal-result-label">
                        The shared goal
                    </span>

                    <strong>
                        A shared project shaped by every member’s contribution.
                    </strong>

                </div>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>