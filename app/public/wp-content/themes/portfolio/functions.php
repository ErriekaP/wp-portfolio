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

// Load JS

function enqueue_custom_toast_script() {
    wp_enqueue_script(
        'custom-toast',
        get_template_directory_uri() . '/assets/js/toast.js',
        [], // no dependencies
        null,
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_toast_script');

add_action('init', function () {
    if (!session_id()) {
        session_start();
    }
});

add_action('init', 'handle_custom_contact_form');

function handle_custom_contact_form() {
    // Limit: 1 email per 5 minutes
    $cooldown_seconds = 300;

    if (isset($_POST['send_form'])) {
        // Check cooldown
        if (isset($_SESSION['last_submit']) && (time() - $_SESSION['last_submit']) < $cooldown_seconds) {
            $_SESSION['form_status'] = 'too_soon';
            wp_redirect($_SERVER['REQUEST_URI']);
            exit;
        }

        // Process the form
        $first_name = sanitize_text_field($_POST['fname']);
        $last_name  = sanitize_text_field($_POST['lname']);
        $name       = trim($first_name . ' ' . $last_name);
        $email      = sanitize_email($_POST['email']);
        $company_name    = sanitize_text_field($_POST['cname']);
        $company_address = sanitize_text_field($_POST['caddress']);
        $message    = sanitize_textarea_field($_POST['why']);

        $to      = 'errieka.palanca@gmail.com';
        $subject = 'New Message from Website Portfolio';
        $headers = [
            'Content-Type: text/html; charset=UTF-8',
            'From: Portfolio Site <errieka.palanca@gmail.com>',
            'Reply-To: ' . $email
        ];

        $body = "
            <strong>Name:</strong> {$name}<br>
            <strong>Email:</strong> {$email}<br>
            <strong>Company Name:</strong> {$company_name}<br>
            <strong>Company Address:</strong> {$company_address}<br>
            <strong>Message:</strong><br>{$message}
        ";

        $mail_sent = wp_mail($to, $subject, $body, $headers);

        // Set status and cooldown timestamp
        $_SESSION['form_status'] = $mail_sent ? 'success' : 'fail';
        $_SESSION['last_submit'] = time();

        if (!$mail_sent) {
            error_log('Email failed to send.');
        }

        wp_redirect($_SERVER['REQUEST_URI']);
        exit;
    }
}


