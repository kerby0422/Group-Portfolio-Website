
<?php

if (!defined('ABSPATH')) {
    exit;
}


/* ========================================
   01. THEME SETUP
======================================== */

function my_custom_portfolio_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-portfolio')
    ));
}

add_action('after_setup_theme', 'my_custom_portfolio_setup');


/* ========================================
   02. ENQUEUE STYLESHEETS AND MAIN JS
======================================== */

function my_custom_portfolio_enqueue_assets()
{
    $theme_dir = get_stylesheet_directory();
    $theme_uri = get_stylesheet_directory_uri();


    // ROOT STYLE.CSS

    $style_file = $theme_dir . '/style.css';

    if (file_exists($style_file)) {

        wp_enqueue_style(
            'my-custom-portfolio-style',
            get_stylesheet_uri(),
            array(),
            filemtime($style_file)
        );

    }


    // CUSTOM CSS

    $custom_css = $theme_dir . '/assets/css/custom.css';

    if (file_exists($custom_css)) {

        wp_enqueue_style(
            'my-custom-portfolio-custom',
            $theme_uri . '/assets/css/custom.css',
            array('my-custom-portfolio-style'),
            filemtime($custom_css)
        );

    }


    // MAIN CSS

    $main_css = $theme_dir . '/assets/css/style.css';

    if (file_exists($main_css)) {

        wp_enqueue_style(
            'my-custom-portfolio-main-style',
            $theme_uri . '/assets/css/style.css',
            array('my-custom-portfolio-style'),
            filemtime($main_css)
        );

    }


    // MAIN JAVASCRIPT

    $main_js = $theme_dir . '/assets/js/main.js';

    if (file_exists($main_js)) {

        wp_enqueue_script(
            'my-custom-portfolio-main',
            $theme_uri . '/assets/js/main.js',
            array(),
            filemtime($main_js),
            true
        );

    }

}

add_action('wp_enqueue_scripts', 'my_custom_portfolio_enqueue_assets');


/* ========================================
   03. HOMEPAGE AND ABOUT PAGE ANIMATIONS
======================================== */

function ourspace_home_animations()
{
    if (
        is_front_page() ||
        is_page_template('about-us.php') ||
        is_page_template('our-members.php')
    ) {

        $animation_js = get_stylesheet_directory() . '/assets/js/home-animation.js';

        if (file_exists($animation_js)) {

            wp_enqueue_script(
                'ourspace-home-animation',
                get_stylesheet_directory_uri() . '/assets/js/home-animation.js',
                array(),
                filemtime($animation_js),
                true
            );

        }

    }
}

add_action('wp_enqueue_scripts', 'ourspace_home_animations');