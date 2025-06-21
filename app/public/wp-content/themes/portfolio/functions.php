<?php
// Enable theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// Load CSS
function my_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_style('base', get_template_directory_uri() . '/assets/css/base.css');
    wp_enqueue_style('section-hero', get_template_directory_uri() . '/assets/css/section-hero.css');
    wp_enqueue_style('section-thegist', get_template_directory_uri() . '/assets/css/section-thegist.css');
    wp_enqueue_style('services', get_template_directory_uri() . '/assets/css/section-services.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('section-projects', get_template_directory_uri() . '/assets/css/section-projects.css');
    wp_enqueue_style('section-testimonials', get_template_directory_uri() . '/assets/css/section-testimonials.css');
    wp_enqueue_style('section-invite', get_template_directory_uri() . '/assets/css/section-invite.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');


     // Load Google Fonts: Kanit
    wp_enqueue_style(
        'google-font-kanit',
        'https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


function register_portfolio_menu() {
    register_nav_menu('portfolio-nav', __('Portfolio Navigation Menu'));
}
add_action('after_setup_theme', 'register_portfolio_menu');



