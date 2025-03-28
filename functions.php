<?php
// Theme setup
function xiv_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');

    // register_nav_menus(array(
    //     'primary' => __('Primary Menu', 'wp-blank'),
    // ));
}
add_action('after_setup_theme', 'xiv_theme_setup');

// Enqueue styles and scripts
function xiv_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all');

    // Enqueue main stylesheet correctly
    wp_enqueue_style( //CSS
        'custom_style', // A unique handle for your stylesheet
        get_template_directory_uri() . '/asset/css/custom.css', // Path to your CSS file
        array(), // Dependencies (if any)
        null, // Version number
        'all' // Media type (e.g., 'all', 'screen', 'print')
    );


    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
}
add_action('wp_enqueue_scripts', 'xiv_enqueue_assets');



require_once get_template_directory() . '/nav_menu_walker.php';
