<?php

if (! defined('WP_DEBUG')) {
    die('Direct access forbidden.');
}

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', ['parent-style']);
});

add_theme_support('post-thumbnails');
require get_stylesheet_directory() . '/cpt-portfolio.php';

include_once(ABSPATH . 'wp-admin/includes/plugin.php');