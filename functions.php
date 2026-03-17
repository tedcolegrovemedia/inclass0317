<?php

if (! defined('ABSPATH')) {
    exit;
}

function pizza_haven_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => __('Primary Menu', 'pizza-haven'),
    ]);
}
add_action('after_setup_theme', 'pizza_haven_theme_setup');

function pizza_haven_enqueue_assets(): void
{
    wp_enqueue_style(
        'pizza-haven-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'pizza-haven-home',
        get_template_directory_uri() . '/assets/js/home.js',
        [],
        filemtime(get_template_directory() . '/assets/js/home.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'pizza_haven_enqueue_assets');
