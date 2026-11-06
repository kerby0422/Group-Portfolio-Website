<?php get_header(); ?>

<?php
// Edit members here only — the cards below are generated from this list.
$members = [
    ['name' => 'Kerby Talara',    'role' => 'Aspiring Web Developer',    'img' => 'ker.jpg'],
    ['name' => 'Claire Cabilao',  'role' => 'Aspiring Technical Writer', 'img' => 'clair.jpg'],
    ['name' => 'Ann Jelie Dalde', 'role' => 'Aspiring System Analyst',   'img' => 'ann.jpg'],
    ['name' => 'Dhelay Mae Laid', 'role' => 'Aspiring Developer',        'img' => 'dhelay.jpg'], // palitan ang role
];
$members_url = esc_url(home_url('/our-members/'));
$about_url   = esc_url(home_url('/about-us/'));

// Edit expertise, workflow, and tech here — the new sections are generated from these lists.
$expertise = [
    ['glyph' => '</>', 'title' => 'Web Development',    'text' => 'Turns designs into fast, responsive pages with clean HTML, CSS, and PHP.',                'tags' => ['HTML', 'CSS', 'PHP']],
    ['glyph' => 'Aa',  'title' => 'Technical Writing',  'text' => 'Writes the guides, specs, and user docs that make a project easy to understand and use.', 'tags' => ['Docs', 'Guides', 'Specs']],
    ['glyph' => '⇄',   'title' => 'Systems Analysis',   'text' => 'Studies what users need and turns it into clear requirements, flows, and data models.',   'tags' => ['Requirements', 'Flows', 'ERD']],
    ['glyph' => '✓',   'title' => 'Project Management', 'text' => 'Keeps the plan, schedule, and tasks on track so the team delivers on time.',               'tags' => ['Planning', 'Tasks', 'Review']],
];

$workflow = [
    ['title' => 'Plan',     'who' => 'Project Management', 'text' => 'We set the goal, split the tasks, and agree on deadlines.'],
    ['title' => 'Analyze',  'who' => 'Systems Analysis',   'text' => 'We list what users need and map how the system should work.'],
    ['title' => 'Document', 'who' => 'Technical Writing',  'text' => 'We write the requirements and guides so everyone builds from the same page.'],
    ['title' => 'Build',    'who' => 'Web Development',    'text' => 'We code the pages and features, then test and fix them together.'],
];

$tech = [
    ['name' => 'HTML',       'use' => 'Page structure',     'group' => 'Front end'],
    ['name' => 'CSS',        'use' => 'Layout and style',   'group' => 'Front end'],
    ['name' => 'JavaScript', 'use' => 'Interactivity',      'group' => 'Front end'],
    ['name' => 'PHP',        'use' => 'Server logic',       'group' => 'Back end'],
    ['name' => 'MySQL',      'use' => 'Data storage',       'group' => 'Back end'],
    ['name' => 'WordPress',  'use' => 'Content and themes', 'group' => 'CMS'],
];
?>

<main class="hub-home">

    <!-- HERO -->
    <section class="hub-hero">
        <div class="hero-container">

            <div class="hero-content">
                <p class="eyebrow"><span class="status-dot"></span>group portfolio · 2026 · open to opportunities</p>

                <h1>
                    We create.<br>
                    We learn.<br>
                    <span class="hero-accent">We build together<span class="caret"></span></span>
                </h1>

                <p class="hub-description">
                    OurSpace is the group portfolio of <?php echo count($members); ?> aspiring IT professionals.
                    One website where you can explore our backgrounds, skills, and projects,
                    and see how our different roles come together to build something real.
                </p>

                <div class="hub-buttons">
                    <a class="button" href="<?php echo $members_url; ?>">View portfolios <span>↗</span></a>
                    <a class="button button-outline" href="<?php echo $about_url; ?>">About the project</a>
                </div>
            </div>

            <!-- Code editor window -->
            <div class="hero-decoration" aria-hidden="true">
                <div class="code-window">
                    <div class="code-bar">
                        <span class="dot dot-r"></span><span class="dot dot-y"></span><span class="dot dot-g"></span>
                        <span class="code-file">ourspace.js</span>
                    </div>
<pre class="code-body"><code><span class="ln">1</span><span class="c-key">const</span> <span class="c-var">ourSpace</span> = {
<span class="ln">2</span>  <span class="c-prop">type</span>: <span class="c-str">"group portfolio"</span>,
<span class="ln">3</span>  <span class="c-prop">members</span>: <span class="c-num"><?php echo count($members); ?></span>,
<span class="ln">4</span>  <span class="c-prop">roles</span>: [<span class="c-str">"web dev"</span>, <span class="c-str">"tech writing"</span>, <span class="c-str">"system analysis"</span>],
<span class="ln">5</span>  <span class="c-prop">stack</span>: [<span class="c-str">"HTML"</span>, <span class="c-str">"CSS"</span>, <span class="c-str">"PHP"</span>, <span class="c-str">"WordPress"</span>],
<span class="ln">6</span>  <span class="c-prop">status</span>: <span class="c-str">"building"</span>,
<span class="ln">7</span>};
<span class="ln">8</span>
<span class="ln">9</span><span class="c-key">export default</span> ourSpace;</code></pre>
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
                        Shared creativity.
                    </h2>
                </div>

                <div class="intro-content">
                    <p class="intro-lead">Individual portfolios, one shared story.</p>
                    <p>
                        Every member has their own page showing their background, education,
                        skills, achievements, and projects. Together, they show how a developer,
                        a technical writer, and a system analyst can work side by side and grow
                        as a team.
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
                    <p class="section-description">The people behind OurSpace. Open a card to see their full portfolio.</p>
                </div>
                <a class="text-link" href="<?php echo $members_url; ?>">View all members <span>↗</span></a>
            </div>

            <div class="hub-member-grid">
                <?php foreach ($members as $i => $m) : ?>
                    <article class="hub-member-card">
                        <div class="member-image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $m['img']); ?>"
                                 alt="<?php echo esc_attr($m['name']); ?>" loading="lazy">
                            <span class="member-index">member_<?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                        </div>

                        <div class="member-info">
                            <div>
                                <h3><?php echo esc_html($m['name']); ?></h3>
                                <p><?php echo esc_html($m['role']); ?></p>
                            </div>
                            <a href="<?php echo $members_url; ?>" class="member-arrow"
                               aria-label="View <?php echo esc_attr($m['name']); ?>'s portfolio">↗</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="members-bottom">
                <p>Different roles. Different strengths. One group portfolio.</p>
                <a class="button button-dark" href="<?php echo $members_url; ?>">Meet all members <span>↗</span></a>
            </div>

        </div>
    </section>


    <!-- OUR EXPERTISE -->
    <section class="hx-section">
        <div class="container">
            <div class="hx-head">
                <p class="eyebrow">Expertise</p>
                <h2>Four specializations. <span class="muted">One team.</span></h2>
                <p class="section-description">Each of us covers a different part of a project, so nothing gets left out.</p>
            </div>

            <div class="hx-expertise-grid">
                <?php foreach ($expertise as $e) : ?>
                    <article class="hx-card">
                        <span class="hx-glyph" aria-hidden="true"><?php echo esc_html($e['glyph']); ?></span>
                        <h3><?php echo esc_html($e['title']); ?></h3>
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


    <!-- HOW WE WORK TOGETHER -->
    <section class="hx-section hx-section-alt">
        <div class="container">
            <div class="hx-head">
                <p class="eyebrow">Workflow</p>
                <h2>How we work <span class="muted">together.</span></h2>
                <p class="section-description">Every member adds something at each stage, from the first plan to the final build.</p>
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


    <!-- TECHNOLOGIES WE EXPLORE -->
    <section class="hx-section">
        <div class="container">
            <div class="hx-head">
                <p class="eyebrow">Stack</p>
                <h2>Technologies we <span class="muted">explore.</span></h2>
                <p class="section-description">The tools we use to build, and what we use each one for.</p>
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
                    <p class="intro-lead">Everything you need to know about each of us.</p>
                    <p>
                        Each member's page has the same sections, so you can easily compare
                        and get to know every one of us: who we are, what we can do,
                        and what we've already made.
                    </p>
                    <a class="text-link" href="<?php echo $members_url; ?>">Start exploring <span>↗</span></a>
                </div>
            </div>

            <div class="intro-stats">
                
            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="hub-explore">
        <div class="container">
            <div class="explore-content">
                <p class="eyebrow"><span class="status-dot"></span>ready when you are</p>

                <h2>Every person has a story to <span>show.</span></h2>

                <p>
                    Go through each member's portfolio to see their skills, experience,
                    and the projects that show what we've learned and what we can build together.
                </p>

                <a class="button explore-button" href="<?php echo $members_url; ?>">Explore portfolios <span>↗</span></a>
            </div>

            <div class="explore-decoration" aria-hidden="true">&lt;/&gt;</div>
        </div>
    </section>

</main>

<?php get_footer(); ?>