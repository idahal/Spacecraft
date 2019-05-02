<?php
declare(strict_types=1);

error_reporting(E_ALL & ~E_NOTICE);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

// Register custom post type.
require get_template_directory().'/post-types/spacecraft.php';

require get_template_directory().'/post-types/home.php';

// Register acf
require get_template_directory().'/custom-fields/cf-spacecraft.php';

//Plate.php
require get_template_directory().'/plate.php';

add_theme_support( 'post-thumbnails' );

// Hide admin bar on the front end
add_filter('show_admin_bar', '__return_false');

// Enqueue styles and scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '', '', true);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
});

/**
 * Enable features from Soil when plugin is activated
 * @link https://roots.io/plugins/soil/
 */
add_theme_support('soil-clean-up');
add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-js-to-footer');
add_theme_support('soil-nice-search');
add_theme_support('soil-relative-urls');

// Remove error message
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
