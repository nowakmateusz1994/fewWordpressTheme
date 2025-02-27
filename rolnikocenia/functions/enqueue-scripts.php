<?php

function devmn_custom_scripts()
{
    wp_enqueue_script('menu', get_template_directory_uri() . '/dist/js/menu.js', array(), '', true);

    wp_enqueue_script('adds', get_template_directory_uri() . '/dist/js/adds.js', array(), '1.0.0', true);
    $variable_to_js = [
        'ajax_url' => admin_url('admin-ajax.php')
    ];
    wp_localize_script('adds', 'Theme_Variables', $variable_to_js);

    wp_enqueue_script('form-search', get_template_directory_uri() . '/dist/js/form-search.js', array(), '', true);

    // wp_enqueue_script('companies', get_template_directory_uri() . '/dist/js/companies.js', array(), '', true);

    if (is_page_template('template/home.php')) {
        wp_enqueue_script('splide', get_template_directory_uri() . '/dist/js/splide.min.js', array(), '', true);
        wp_enqueue_script('splide-items', get_template_directory_uri() . '/dist/js/splide-items.js', array(), '', true);
    }

    if (wp_is_mobile()) {
        wp_enqueue_script('mobile_menu', get_template_directory_uri() . '/dist/js/mobile_menu.js', array(), '', true);
    }

    wp_enqueue_style('fs-main-style', get_template_directory_uri() . '/dist/css/main.css', array(), filemtime(get_stylesheet_directory() . '/dist/css/main.css'), 'all');
}

add_action('wp_enqueue_scripts', 'devmn_custom_scripts');


add_filter('wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX);

function change_default_jquery()
{
    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');
}



//function to add async attribute
function add_async_attribute($tag, $handle)
{
    $scripts_to_async = array('menu', 'adds', 'form-search', 'splide', 'splide-items', 'mobile_menu');

    //check if this script is in the array	async="async"
    if (in_array($handle, $scripts_to_async)) {
        return str_replace(' src', ' defer  src', $tag);
    } else {
        return $tag;
    }
}

//filter tag
add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
