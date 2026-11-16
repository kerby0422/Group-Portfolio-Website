<?php get_header(); ?>

<?php
// Edit members here only — the cards below are generated from this list.
$members = [
    ['name' => 'Kerby Talara', 'role' => 'Aspiring Web Developer', 'img' => 'ker.jpg', 'contribution' => 'Develops and maintains the website, turning the team’s ideas into working pages and features.', 'portfolio' => '/ker-portfolio/'],
    ['name' => 'Claire Justine Cabilao', 'role' => 'Aspiring Technical Writer', 'img' => 'calire.jpg', 'initials' => 'CC', 'contribution' => 'Organizes project information and writes clear documentation, guides, and explanations for users.', 'portfolio' => '/clair-portfolio/'],
    ['name' => 'Ann Jelie Dalde', 'role' => 'Aspiring System Analyst', 'img' => 'ann.jpg', 'contribution' => 'Studies user needs, clarifies requirements, and helps the team map system behavior before development.', 'portfolio' => '/ann-portfolio/'],
    ['name' => 'Dhelay Mae Laid', 'role' => 'Aspiring Developer', 'img' => 'Dhelay.jpg', 'contribution' => 'Coordinates team tasks and project progress, helping everyone collaborate and deliver their work.', 'portfolio' => '/laid-portfolio/'],
];
$members_url = esc_url(home_url('/our-members/'));
$about_url   = esc_url(home_url('/about-us/'));
$projects_url = esc_url(home_url('/our-projects/'));

// Edit expertise, workflow, and tech here — the new sections are generated from these lists.
$expertise = [
    ['glyph' => '</>', 'title' => 'Web Development', 'lead' => 'Kerby Talara', 'text' => 'Builds and updates the portfolio pages, applies responsive layouts, and checks that links and features work across devices.', 'tags' => ['HTML', 'CSS', 'PHP']],
    ['glyph' => 'Aa', 'title' => 'Technical Writing', 'lead' => 'Claire Justine Cabilao', 'text' => 'Turns project details into readable page content, user guidance, and organized documentation that visitors can follow.', 'tags' => ['Docs', 'Guides', 'Content']],
    ['glyph' => '⇄', 'title' => 'Systems Analysis', 'lead' => 'Ann Jelie Dalde', 'text' => 'Identifies audience needs, defines what the site should communicate, and outlines page flows and information requirements.', 'tags' => ['Requirements', 'Flows', 'Planning']],
    ['glyph' => '✓', 'title' => 'Project Coordination', 'lead' => 'Dhelay Mae Laid', 'text' => 'Coordinates assignments, checks progress against the plan, and brings team feedback together during reviews.', 'tags' => ['Tasks', 'Schedule', 'Review']],
];

$featured_projects = [
    [
        'title' => 'DEVHUB GROUP PORTFOLIO',
        'objective' => 'Bring the team’s individual portfolios, skills, and project work together in one easy-to-explore website.',
        'features' => 'Member portfolio links, team expertise, project highlights, and information about the group.',
        'status' => 'In development',
        'image' => 'our.png',
        'technologies' => ['HTML', 'CSS', 'PHP', 'WordPress'],
    ],
    [
        'title' => 'Pet Adoption Application',
        'objective' => 'Help people discover pets in need of a home and make it easier to begin the adoption process.',
        'features' => 'Browse pet profiles, explore available pets, submit adoption applications, and follow application progress.',
        'status' => 'In Progress',
        'image' => 'app.jpeg',
        'technologies' => ['Laravel', 'React Native'],
    ],
    [
        'title' => 'PTA Accounting and Membership System',
        'objective' => 'Simplify PTA membership, student and guardian records, contributions, and financial monitoring at Alubijid National Comprehensive High School.',
        'features' => 'Dashboard summaries, membership and contribution management, financial records, announcements, and reports.',
        'status' => 'In Progress',
        'image' => 'alub.png',
        'technologies' => ['Laravel', 'Inertia', 'React'],
    ],
];

$workflow = [
    ['title' => 'Plan', 'who' => 'Shared planning', 'text' => 'We define the portfolio’s purpose, identify its audience, divide responsibilities, and set priorities.'],
    ['title' => 'Analyze & organize', 'who' => 'Systems analysis and writing', 'text' => 'We gather the content, map the pages, clarify requirements, and organize each member’s information.'],
    ['title' => 'Build', 'who' => 'Web development', 'text' => 'We create the WordPress pages, add the content, and connect visitors to member portfolios and project details.'],
    ['title' => 'Review & improve', 'who' => 'Whole team', 'text' => 'We check links and content, review the experience on different screen sizes, and refine the site using team feedback.'],
];

$tech = [
    ['name' => 'HTML', 'use' => 'Structures page content', 'group' => 'Frontend'],
    ['name' => 'CSS', 'use' => 'Styles and arranges page layouts', 'group' => 'Frontend'],
    ['name' => 'JavaScript', 'use' => 'Supports interactive behavior', 'group' => 'Frontend'],
    ['name' => 'PHP', 'use' => 'Powers WordPress theme templates', 'group' => 'Backend'],
    ['name' => 'MySQL', 'use' => 'WordPress database technology', 'group' => 'Database'],
    ['name' => 'WordPress', 'use' => 'Manages site content and themes', 'group' => 'CMS'],
    ['name' => 'Arduino IDE', 'use' => 'Used for exploring ESP32 prototypes', 'group' => 'Development Tools'],
    ['name' => 'MySQL', 'use' => 'Supports data storage for WordPress sites', 'group' => 'Database'],
];

$mission_vision = [
    ['glyph' => '01', 'title' => 'Our Mission', 'lead' => 'Learn by building together', 'text' => 'To present our skills and project work in one clear, accessible portfolio while practicing the planning, communication, and technical skills needed to create useful digital experiences.', 'tags' => ['Purpose', 'Learning', 'Teamwork']],
    ['glyph' => '02', 'title' => 'Our Vision', 'lead' => 'Grow into capable IT professionals', 'text' => 'To keep growing as a team that uses creativity, knowledge, and collaboration to develop thoughtful solutions and share our progress with our community.', 'tags' => ['Growth', 'Creativity', 'Impact']],
];

$core_values = [
    ['glyph' => '01', 'title' => 'Creativity', 'lead' => 'Explore ideas', 'text' => 'We look for clear and engaging ways to present information and solve project challenges.', 'tags' => ['Ideas', 'Expression']],
    ['glyph' => '02', 'title' => 'Collaboration', 'lead' => 'Build as a team', 'text' => 'We share knowledge, communicate openly, and value each member’s contribution.', 'tags' => ['Teamwork', 'Respect']],
    ['glyph' => '03', 'title' => 'Responsibility', 'lead' => 'Follow through', 'text' => 'We take ownership of our tasks, meet agreed expectations, and care for the quality of our work.', 'tags' => ['Ownership', 'Care']],
    ['glyph' => '04', 'title' => 'Continuous Learning', 'lead' => 'Keep improving', 'text' => 'We learn from feedback and use each project to strengthen our skills and understanding.', 'tags' => ['Practice', 'Feedback']],
    ['glyph' => '05', 'title' => 'Innovation', 'lead' => 'Try thoughtful solutions', 'text' => 'We explore new approaches and technologies with a focus on practical needs and meaningful outcomes.', 'tags' => ['Curiosity', 'Solutions']],
];

$portfolio_sections = [
    ['glyph' => '01', 'title' => 'Personal Introduction', 'lead' => 'Get to know each member', 'text' => 'A short introduction shares each person’s interests, goals, and role in the team.', 'tags' => ['Background', 'Goals']],
    ['glyph' => '02', 'title' => 'Skills', 'lead' => 'See what each member is learning', 'text' => 'Skills highlight practical strengths and areas of focus, from development to analysis and technical writing.', 'tags' => ['Strengths', 'Specialties']],
    ['glyph' => '03', 'title' => 'Educational Background', 'lead' => 'Understand the learning journey', 'text' => 'Education details the studies and learning experiences that support each member’s growth.', 'tags' => ['Studies', 'Learning']],
    ['glyph' => '04', 'title' => 'Projects', 'lead' => 'Explore work in practice', 'text' => 'Project examples show the goals, contributions, and technologies behind work completed or explored.', 'tags' => ['Work', 'Experience']],
];
?>

<main class="hub-home">

    <!-- HERO -->
    <section class="hub-hero">
        <div class="hero-container">

            <div class="hero-content">
                <p class="eyebrow"><span class="status-dot"></span>DEVHUB · student team portfolio</p>

                <h1>
                    We create.<br>
                    We learn.<br>
                    <span class="hero-accent">We build together<span class="caret"></span></span>
                </h1>

                <p class="hub-description">
                    DEVHUB GROUP PORTFOLIO brings together <?php echo count($members); ?> aspiring IT professionals
                    to share our backgrounds, skills, and projects. Our purpose is to learn through collaboration,
                    celebrate each member’s strengths, and show how a team can turn ideas into practical work.
                </p>

                <div class="hub-buttons">
                    <a class="button" href="<?php echo $members_url; ?>">View portfolios <span>↗</span></a>
                    <a class="button button-outline" href="<?php echo $about_url; ?>">About the project</a>
                </div>
            </div>

            <!-- Team photo paired with the code editor window -->
            <div class="hero-decoration">
                <figure class="hero-team-photo">
                    <img
                        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/group.jpg'); ?>"
                        alt="The DEVHUB team members together"
                        fetchpriority="high"
                        decoding="async"
                    >
                    <figcaption><span></span> DEVHUB · BUILT TOGETHER</figcaption>
                </figure>

                <div class="code-window">
                    <div class="code-bar">
                        <span class="dot dot-r"></span><span class="dot dot-y"></span><span class="dot dot-g"></span>
                        <span class="code-file">devhub.js</span>
                    </div>
                    <pre class="code-body"><code><span class="ln">1</span><span class="c-key">const</span> <span class="c-var">DEVHUB</span> = {
<span class="ln">2</span>  <span class="c-prop">type</span>: <span class="c-str">"group portfolio"</span>,
<span class="ln">3</span>  <span class="c-prop">members</span>: <span class="c-num"><?php echo count($members); ?></span>,
<span class="ln">4</span>  <span class="c-prop">roles</span>: [<span class="c-str">"web dev"</span>, <span class="c-str">"tech writing"</span>, <span class="c-str">"system analysis"</span>],
<span class="ln">5</span>  <span class="c-prop">stack</span>: [<span class="c-str">"HTML"</span>, <span class="c-str">"CSS"</span>, <span class="c-str">"PHP"</span>, <span class="c-str">"WordPress"</span>],
<span class="ln">6</span>  <span class="c-prop">purpose</span>: <span class="c-str">"learn and build together"</span>,
<span class="ln">7</span>};
<span class="ln">8</span>
<span class="ln">9</span><span class="c-key">export default</span> DEVHUB;</code></pre>
                    <div class="code-status">
                        <span><span class="floating-dot"></span> main</span>
                        <span>UTF-8 · JavaScript</span>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ABOUT -->
    <section class="hub-intro">
        <div class="container">

            <div class="intro-grid">
                <div class="intro-heading">
                    <p class="eyebrow">About </p>
                    <h2>
                        One space.<br>
                        <span class="muted">Many talents.</span><br>
                        One shared purpose.
                    </h2>
                </div>

                <div class="intro-content">
                    <p class="intro-lead">Individual portfolios, one shared story.</p>
                    <p>
                        DEVHUB GROUP PORTFOLIO introduces each member and makes our individual work easy to explore.
                        Each person contributes different skills: development turns ideas into pages, analysis helps
                        define what to build, writing makes information clear, and coordination keeps work moving.
                        Sharing responsibility helps us learn from one another and deliver a stronger project together.
                    </p>
                    <a class="text-link" href="<?php echo $about_url; ?>">Read our story <span>↗</span></a>
                </div>
            </div>

            <div class="intro-stats">
                <div class="stat-item"><span class="stat-number">1</span><span class="stat-label">group portfolio</span></div>
                <div class="stat-item"><span class="stat-number"><?php echo count($members); ?></span><span class="stat-label">members, <?php echo count($members); ?> portfolios</span></div>
                <div class="stat-item"><span class="stat-number">∞</span><span class="stat-label">things to build</span></div>
            </div>

        </div>
    </section>


    <!-- MEMBERS -->
    <section class="hub-members">
        <div class="container">

            <div class="section-heading">
                <div>
                    <p class="eyebrow">Team</p>
                    <h2>Meet our <span class="muted">members.</span></h2>
                    <p class="section-description">Meet the people behind DEVHUB. Select a member’s name or arrow to open their individual portfolio.</p>
                </div>
                <a class="text-link" href="<?php echo $members_url; ?>">View all members <span>↗</span></a>
            </div>

            <div class="hub-member-grid">
                <?php foreach ($members as $i => $m) : ?>
                    <a class="hub-member-card" href="<?php echo esc_url(home_url($m['portfolio'])); ?>"
                        aria-label="View <?php echo esc_attr($m['name']); ?>'s portfolio">
                        <div class="member-image">
                            <?php if (!empty($m['img'])) : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $m['img']); ?>"
                                    alt="<?php echo esc_attr($m['name']); ?>" loading="lazy">
                            <?php else : ?>
                                <span class="member-image-placeholder" aria-hidden="true"><?php echo esc_html($m['initials']); ?></span>
                            <?php endif; ?>
                            <span class="member-index">member_<?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                        </div>

                        <div class="member-info">
                            <div>
                                <h3><?php echo esc_html($m['name']); ?></h3>
                                <p><?php echo esc_html($m['role']); ?></p>
                                <p><?php echo esc_html($m['contribution']); ?></p>
                            </div>
                            <span class="member-arrow" aria-hidden="true">↗</span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="members-bottom">
                <p>Different roles. Different strengths. One DEVHUB GROUP PORTFOLIO.</p>
                <a class="button button-dark" href="<?php echo $members_url; ?>">Meet all members <span>↗</span></a>
            </div>

        </div>
    </section>


    <!-- OUR EXPERTISE -->
    <section class="hx-section">
        <div class="container">
            <div class="hx-head">
                <p class="eyebrow">Expertise</p>
                <h2>Our expertise. <span class="muted">In practice.</span></h2>
                <p class="section-description">Each member brings practical responsibilities that help move a project from a clear idea to a usable result.</p>
            </div>

            <div class="hx-expertise-grid">
                <?php foreach ($expertise as $e) : ?>
                    <article class="hx-card">
                        <span class="hx-glyph" aria-hidden="true"><?php echo esc_html($e['glyph']); ?></span>
                        <h3><?php echo esc_html($e['title']); ?></h3>
                        <span class="hx-lead"><?php echo esc_html($e['lead']); ?></span>
                        <p><?php echo esc_html($e['text']); ?></p>
                        <ul class="hx-tags">
                            <?php foreach ($e['tags'] as $t) : ?>
                                <li><?php echo esc_html($t); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FEATURED PROJECTS -->
    <section class="hub-projects">
        <div class="container">
            <div class="hub-projects-heading">
                <div>
                    <p class="eyebrow">Selected work</p>
                    <h2>Featured <span class="muted">projects.</span></h2>
                    <p class="section-description">A few projects that show what we have been learning and building together.</p>
                </div>
                <a class="text-link" href="<?php echo $projects_url; ?>">View all projects <span>↗</span></a>
            </div>

            <div class="hub-project-grid">
                <?php foreach ($featured_projects as $project) : ?>
                    <?php
                    $is_app_image = $project['image'] === 'app.jpeg';
                    $is_showcase_image = $is_app_image || $project['image'] === 'alub.png';
                    ?>
                    <a class="hub-project-card" href="<?php echo $projects_url; ?>">
                        <div class="hub-project-image<?php echo $is_showcase_image ? ' project-image-showcase' : ''; ?><?php echo $is_app_image ? ' project-image-app' : ''; ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $project['image']); ?>"
                                 class="<?php echo $is_showcase_image ? 'project-image-contain' : ''; ?>"
                                 alt="<?php echo esc_attr($project['title']); ?> project preview" loading="lazy">
                            <span class="hub-project-arrow" aria-hidden="true">↗</span>
                        </div>
                        <div class="hub-project-content">
                            <h3><?php echo esc_html($project['title']); ?></h3>
                            <p>
                                <strong>Objective:</strong> <?php echo esc_html($project['objective']); ?><br>
                                <strong>Key features:</strong> <?php echo esc_html($project['features']); ?><br>
                                <strong>Status:</strong> <?php echo esc_html($project['status']); ?>
                            </p>
                            <ul class="hub-project-tags">
                                <?php foreach ($project['technologies'] as $technology) : ?>
                                    <li><?php echo esc_html($technology); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- DEVELOPMENT JOURNEY -->
    <section class="hx-section hx-section-alt">
        <div class="container">
            <div class="hx-head">
                <p class="eyebrow">Development journey</p>
                <h2>From first idea <span class="muted">to a shared portfolio.</span></h2>
                <p class="section-description">Our development journey brings planning, analysis, content, implementation, and team review together.</p>
            </div>

            <ol class="hx-steps">
                <?php foreach ($workflow as $i => $s) : ?>
                    <li class="hx-step">
                        <span class="hx-step-num"><?php echo $i + 1; ?></span>
                        <h3><?php echo esc_html($s['title']); ?></h3>
                        <span class="hx-step-who"><?php echo esc_html($s['who']); ?></span>
                        <p><?php echo esc_html($s['text']); ?></p>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>


    <!-- TECHNOLOGIES -->
    <section class="hx-section">
        <div class="container">
            <div class="hx-head">
                <p class="eyebrow">Technologies</p>
                <h2>Tools we use <span class="muted">and explore.</span></h2>
                <p class="section-description">A practical overview of the technologies used for the website and explored in our projects.</p>
            </div>

            <div class="hx-tech-grid">
                <?php foreach ($tech as $t) : ?>
                    <div class="hx-tech">
                        <span class="hx-tech-group"><?php echo esc_html($t['group']); ?></span>
                        <strong><?php echo esc_html($t['name']); ?></strong>
                        <span class="hx-tech-use"><?php echo esc_html($t['use']); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- MISSION AND VISION -->
    <section class="hx-section hx-section-alt">
        <div class="container">
            <div class="hx-head">
                <p class="eyebrow">Our purpose</p>
                <h2>Mission &amp; <span class="muted">vision.</span></h2>
                <p class="section-description">The goals that guide how we learn, contribute, and work together.</p>
            </div>

            <div class="hx-expertise-grid hx-mission-grid">
                <?php foreach ($mission_vision as $item) : ?>
                    <article class="hx-card">
                        <span class="hx-glyph" aria-hidden="true"><?php echo esc_html($item['glyph']); ?></span>
                        <h3><?php echo esc_html($item['title']); ?></h3>
                        <span class="hx-lead"><?php echo esc_html($item['lead']); ?></span>
                        <p><?php echo esc_html($item['text']); ?></p>
                        <ul class="hx-tags">
                            <?php foreach ($item['tags'] as $tag) : ?>
                                <li><?php echo esc_html($tag); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CORE VALUES -->
    <section class="hx-section">
        <div class="container">
            <div class="hx-head">
                <p class="eyebrow">Core values</p>
                <h2>What guides <span class="muted">our work.</span></h2>
                <p class="section-description">The habits and principles we aim to bring to every project.</p>
            </div>

            <div class="hx-expertise-grid">
                <?php foreach ($core_values as $value) : ?>
                    <article class="hx-card">
                        <span class="hx-glyph" aria-hidden="true"><?php echo esc_html($value['glyph']); ?></span>
                        <h3><?php echo esc_html($value['title']); ?></h3>
                        <span class="hx-lead"><?php echo esc_html($value['lead']); ?></span>
                        <p><?php echo esc_html($value['text']); ?></p>
                        <ul class="hx-tags">
                            <?php foreach ($value['tags'] as $tag) : ?>
                                <li><?php echo esc_html($tag); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- WHAT'S INSIDE -->
    <section class="hub-intro">
        <div class="container">

            <div class="intro-grid">
                <div class="intro-heading">
                    <p class="eyebrow">Inside</p>
                    <h2>
                        What's inside<br>
                        <span class="muted">each portfolio.</span>
                    </h2>
                </div>

                <div class="intro-content">
                    <p class="intro-lead">A helpful snapshot of each member’s background, learning, and work.</p>
                    <p>
                        Personal introductions share who we are and what we’re working toward. Skills describe
                        our strengths, educational backgrounds show our learning journey, projects demonstrate
                        how we apply what we learn.
                    </p>
                    <a class="text-link" href="<?php echo $members_url; ?>">Start exploring <span>↗</span></a>
                </div>
            </div>

            <div class="hx-expertise-grid">
                <?php foreach ($portfolio_sections as $section) : ?>
                    <article class="hx-card">
                        <span class="hx-glyph" aria-hidden="true"><?php echo esc_html($section['glyph']); ?></span>
                        <h3><?php echo esc_html($section['title']); ?></h3>
                        <span class="hx-lead"><?php echo esc_html($section['lead']); ?></span>
                        <p><?php echo esc_html($section['text']); ?></p>
                        <ul class="hx-tags">
                            <?php foreach ($section['tags'] as $tag) : ?>
                                <li><?php echo esc_html($tag); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>
                <?php endforeach; ?>
            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="hub-explore">
        <div class="container">
            <div class="explore-content">
                <p class="eyebrow"><span class="status-dot"></span>ready when you are</p>

                <h2>Explore DEVHUB. <span>See what we build.</span></h2>

                <p>
                    Visit each member’s portfolio to discover their skills and learning journey, then explore
                    our featured projects to see how our ideas and strengths come together.
                </p>

                <div class="hub-buttons">
                    <a class="button explore-button" href="<?php echo $members_url; ?>">Explore portfolios <span>↗</span></a>
                    <a class="button button-outline" href="<?php echo $projects_url; ?>">View featured projects</a>
                </div>
            </div>

            <div class="explore-decoration" aria-hidden="true">&lt;/&gt;</div>
        </div>
    </section>

</main>

<?php get_footer(); ?>