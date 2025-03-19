<?php
// Theme setup
function xiv_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'wp-blank'), // 'primary' is the slug for wp_nav_menu()
    ));
}
add_action('after_setup_theme', 'xiv_theme_setup');

// Enqueue styles and scripts
function xiv_enqueue_assets() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all');

    // Enqueue main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue custom navbar CSS (Fix path issue)
    wp_enqueue_style('navbar-style', get_template_directory_uri() . '/assets/css/navbar.css', array(), '1.0.0', 'all');

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Enqueue a custom JavaScript file (Fix path issue)
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'xiv_enqueue_assets');

