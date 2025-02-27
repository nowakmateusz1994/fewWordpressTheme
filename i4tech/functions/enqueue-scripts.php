<?php

function devmn_custom_scripts()
{
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', array(), '', true);

    wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '', true);

    wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    wp_enqueue_script('menu', get_template_directory_uri() . '/dist/js/menu.js', array(), '', true);

    if (wp_is_mobile()) {
        wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/dist/js/mobile-menu.js', array(), '', true);
    }

    wp_enqueue_script('z-slider', get_template_directory_uri() . '/dist/js/z-slider.js', array(), '', true);

    wp_enqueue_script('z-slick', get_template_directory_uri() . '/dist/js/z-slick.js', array(), '', true);

    wp_enqueue_script('fancybox', get_template_directory_uri() . '/dist/js/01-fancybox.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('z-fancybox', get_template_directory_uri() . '/dist/js/z-fancybox.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('z-animations', get_template_directory_uri() . '/dist/js/z-animations.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('jquery-waypoints', get_theme_file_uri("/dist/js/jquery.waypoints.min.js"), array('jquery'), '', true);

    wp_enqueue_script('inview', get_theme_file_uri("/dist/js/inview.min.js"), array('jquery-waypoints'), '', true);

    wp_enqueue_style('fs-main-style', get_template_directory_uri() . '/dist/css/main.css', array(), filemtime(get_stylesheet_directory() . '/dist/css/main.css'), 'all');
}

add_action('wp_enqueue_scripts', 'devmn_custom_scripts');
