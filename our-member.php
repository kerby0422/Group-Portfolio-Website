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
        'position' => 'center 75%',
        'role' => 'PROGRAMMER',
        'description' => 'Responsible for developing, coding, and maintaining the website. Transforms ideas and designs into functional digital experiences through programming.',
        'facebook' => 'https://www.facebook.com/kerby.villalobos.talara',
        'instagram' => 'https://www.instagram.com/kercby/',
        'portfolio' => '/ker-portfolio/'
    ),

    array(
        'number' => '02',
        'name' => 'Clair Cabilao',
        'image' => 'clair.jpg',
        'position' => 'center 30%',
        'role' => 'TECH WRITER',
        'description' => 'Responsible for preparing technical documentation, organizing project information, and explaining technical processes clearly and effectively.',
        'facebook' => 'https://www.facebook.com/claire.cabilao.2025?rdid=e6qCyTA00fNYEG7O&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1EpM3HTbXU#',
        'instagram' => 'https://www.instagram.com/tfti.ne?rpxt=MTQ2c3c5OXN5anRpdg%3D%3D&fbclid=IwY2xjawVXmNFleHRuA2FlbQIxMABwZG9mBWJyaWQRMUdRUXpxRU5pT1lRR0JpcGJzcnRjBmFwcF9pZBAyMjIwMzkxNzg4MjAwODkyAAEfA1xHMogHArq-NNJD09TKbw9MYcUkv_Oqk1e99mjXn_TMOsaySIdV319eZ_U_aem_NlGNgiyzOzUZTPG908oCAg',
        'portfolio' => '/clair-portfolio/'
    ),

    array(
        'number' => '03',
        'name' => 'Ann Jelie Dalde',
        'image' => 'ann.jpg',
        'position' => 'center 85%',
        'role' => 'ANALYST',
        'description' => 'Responsible for analyzing project requirements, gathering information, identifying problems, and helping the team make informed decisions.',
        'facebook' => 'https://www.facebook.com/annjelie.dalde.3',
        'instagram' => 'https://www.instagram.com/xoxo.jeil/?fbclid=IwY2xjawVXf6hleHRuA2FlbQIxMABwZG9mBWJyaWQRMUdRUXpxRU5pT1lRR0JpcGJzcnRjBmFwcF9pZBAyMjIwMzkxNzg4MjAwODkyAAEfBAQpGURPeuHXbYO75hCkIbujU3fhMV-ziw9h4aRGJ3P1ILRSoeFfCgoGud8_aem_-35azWf2i6fhvEXC12jg9g',
        'portfolio' => '/ann-portfolio/'
    ),

    array(
        'number' => '04',
        'name' => 'Dhelay Mae Laid',
        'image' => 'dhelay.jpg',
        'position' => 'center 90%',
        'role' => 'MANAGER',
        'description' => 'Responsible for coordinating team activities, organizing tasks, monitoring project progress, and ensuring effective collaboration among members.',
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
        'description' => 'We set the goal, divide responsibilities, and agree on a schedule so everyone knows what comes next.'
    ),

    array(
        'number' => '02',
        'title' => 'Research and Analysis',
        'description' => 'We gather information, study the requirements, and find problems early, before anything is built.'
    ),

    array(
        'number' => '03',
        'title' => 'Development and Implementation',
        'description' => 'Plans and designs become a working result through code, content, and steady teamwork.'
    ),

    array(
        'number' => '04',
        'title' => 'Documentation',
        'description' => 'We record processes, decisions, and results so the work stays clear and easy to maintain.'
    ),

    array(
        'number' => '05',
        'title' => 'Review and Improvement',
        'description' => 'We check the output together, gather feedback, and refine it until it meets our standards.'
    )

);

/* ----------------------------------------
   HOW EACH ROLE CONTRIBUTES
---------------------------------------- */

$contributions = array(
    'PROGRAMMER' => 'Turns plans and designs into a working website.',
    'TECH WRITER' => 'Documents the work and explains it clearly.',
    'ANALYST' => 'Studies requirements and spots problems early.',
    'MANAGER' => 'Coordinates tasks and keeps the team on track.'
);

/* ----------------------------------------
   PAGE SCRIPT (scroll-reveal)
   Place the file at: /assets/js/our-members.js
---------------------------------------- */

$members_js = get_stylesheet_directory() . '/assets/js/our-members.js';

if (file_exists($members_js)) {
    wp_enqueue_script(
        'ourspace-members',
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
                    Every great project starts with people who share
                    ideas, creativity, and passion. Get to know the
                    individuals behind our work and discover what
                    each member brings to the group.
                </p>

                <a href="#member-profiles" class="members-hero-button">
                    Meet Our Members
                    <span aria-hidden="true">&rarr;</span>
                </a>

            </div>

            <div class="members-hero-visual" data-reveal>

                <div class="members-hero-circle circle-large"></div>
                <div class="members-hero-circle circle-small"></div>

                <div class="members-hero-card">

                    <span class="members-card-label">
                        OUR GROUP
                    </span>

                    <div class="members-card-number">
                        <?php echo esc_html(sprintf('%02d', count($members))); ?>
                    </div>

                    <h3>
                        Different people.
                        One shared purpose.
                    </h3>

                    <div class="members-card-bottom">
                        <span>INDIVIDUALITY</span>
                        <span>TEAMWORK</span>
                    </div>

                </div>

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
                    We are a group of individuals with different
                    interests, abilities, and experiences. Each
                    member has something unique to offer, and
                    together, we turn our ideas into meaningful
                    projects and creative outputs.
                </p>

                <p>
                    Explore our profiles to learn more about us,
                    discover our individual portfolios, and see
                    the work that reflects our skills and growth.
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
                    Four individuals, different strengths,
                    and countless opportunities to create.
                </p>

            </div>

            <div class="member-profile-grid">

                <?php foreach ($members as $member) : ?>

                    <article class="member-profile-card" data-reveal>

                        <!-- MEMBER IMAGE -->

                        <div class="member-profile-image">

                            <img
                                src="<?php echo esc_url($theme_images . $member['image']); ?>"
                                alt="<?php echo esc_attr($member['name']); ?> - Group member"
                                style="object-position: <?php echo esc_attr($member['position']); ?>;"
                                loading="lazy"
                                decoding="async"
                            >

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

                            <!-- SOCIAL MEDIA -->

                            <div class="member-social-links">

                                <a
                                    class="is-facebook"
                                    href="<?php echo esc_url($member['facebook']); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="<?php echo esc_attr($member['name']); ?> on Facebook"
                                >
                                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true" focusable="false">
                                        <path d="M13.5 21v-7.5h2.6l.4-3h-3V8.6c0-.9.3-1.5 1.6-1.5h1.6V4.4c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4v2.2H8v3h2.5V21h3z"/>
                                    </svg>
                                    Facebook
                                </a>

                                <a
                                    class="is-instagram"
                                    href="<?php echo esc_url($member['instagram']); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="<?php echo esc_attr($member['name']); ?> on Instagram"
                                >
                                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true" focusable="false">
                                        <rect x="3.5" y="3.5" width="17" height="17" rx="5"/>
                                        <circle cx="12" cy="12" r="4"/>
                                        <circle cx="17.2" cy="6.8" r="1" fill="currentColor" stroke="none"/>
                                    </svg>
                                    Instagram
                                </a>

                            </div>

                            <!-- INDIVIDUAL PORTFOLIO -->

                            <a
                                href="<?php echo esc_url(home_url($member['portfolio'])); ?>"
                                class="member-portfolio-link"
                                aria-label="<?php echo esc_attr('View ' . $member['name'] . '\'s portfolio'); ?>"
                            >
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
                    Five steps guide every project we take on,
                    from the first idea to the final result.
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
                    Planning, research, code, and documentation each
                    come from a different person, yet they point to the
                    same outcome: work that is clear, useful, and
                    complete. Every idea and responsibility has a place,
                    and the result belongs to all of us.
                </p>

                <a
                    href="<?php echo esc_url(home_url('/our-projects/')); ?>"
                    class="members-cta-button"
                >
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
                        A finished project we are proud to present together.
                    </strong>

                </div>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>