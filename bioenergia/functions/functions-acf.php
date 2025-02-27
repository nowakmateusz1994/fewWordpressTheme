<?php
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point($path)
{

    // update path
    $path = get_stylesheet_directory() . '/acf-json';

    // return
    return $path;
}

function my_excerpt_length($length)
{
    return 10;
}

add_filter('excerpt_length', 'my_excerpt_length');

function new_excerpt_more($more)
{
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
