<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">

        <!-- Developer Brand -->
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">

            <span class="brand-icon">
                &lt;/&gt;
            </span>

            <span class="brand-text">
                <strong>DEV<span>HUB</span></strong>
                <small>GROUP PORTFOLIO</small>
            </span>

        </a>

        <!-- Mobile Menu Toggle -->
        <button
            class="menu-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="primary-navigation"
            aria-label="Toggle navigation">

            <span></span>
            <span></span>
            <span></span>

        </button>

        <!-- Navigation -->
        <nav
            class="primary-navigation"
            id="primary-navigation"
            aria-label="Primary navigation">

            <?php if (has_nav_menu('primary')) : ?>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'menu-list',
                    'fallback_cb'    => false
                ));
                ?>

            <?php else : ?>

                <?php
                $nav_items = array(
                    array(
                        'label'  => 'Home',
                        'url'    => home_url('/'),
                        'active' => is_front_page(),
                    ),
                    array(
                        'label'  => 'About Us',
                        'url'    => home_url('/about-us/'),
                        'active' => is_page('about-us'),
                    ),
                    array(
                        'label'  => 'Our Members',
                        'url'    => home_url('/our-members/'),
                        'active' => is_page('our-members'),
                    ),
                    array(
                        'label'  => 'Projects',
                        'url'    => home_url('/our-projects/'),
                        'active' => is_page('our-projects'),
                    ),
                    array(
                        'label'  => 'Contact',
                        'url'    => home_url('/contact-us/'),
                        'active' => is_page('contact-us'),
                    ),
                );
                ?>

                <ul class="menu-list">

                    <?php foreach ($nav_items as $i => $item) : ?>

                        <li class="<?php echo $item['active'] ? 'current-menu-item' : ''; ?>">

                            <a href="<?php echo esc_url($item['url']); ?>"
                               <?php echo $item['active'] ? 'aria-current="page"' : ''; ?>>

                                <span class="menu-num">
                                    <?php echo esc_html(sprintf('%02d', $i + 1)); ?>
                                </span>

                                <?php echo esc_html($item['label']); ?>

                            </a>

                        </li>

                    <?php endforeach; ?>

                </ul>

            <?php endif; ?>

        </nav>

        <!-- Header CTA -->
        <a href="<?php echo esc_url(home_url('/our-projects/')); ?>"
           class="header-cta">

            <span>Explore Work</span>
            <span class="cta-arrow">↗</span>

        </a>

    </div>
</header>