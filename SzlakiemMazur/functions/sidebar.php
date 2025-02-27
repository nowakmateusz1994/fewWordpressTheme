<?php

function devmn_register_sidebars()
{
    register_sidebar(array(
        'id' => 'sidebar1',
        'name' => __('Sidebar 1', 'devmn'),
        'description' => __('The first (primary) sidebar.', 'devmn'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widgettitle">',
        'after_title' => '</span>',
    ));

    register_sidebar(array(
        'id' => 'offcanvas',
        'name' => __('Offcanvas', 'devmn'),
        'description' => __('The offcanvas sidebar.', 'devmn'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widgettitle">',
        'after_title' => '</span>',
    ));

    register_sidebar(array(
        'id' => 'footer1',
        'name' => __('Stopka 1', 'devmn'),
        'description' => __('The offcanvas sidebar.', 'devmn'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widgettitle">',
        'after_title' => '</span>',
    ));

    register_sidebar(array(
        'id' => 'woccommerce-sidebar',
        'name' => __('Przed pętlą produktów', 'devmn'),
        'description' => __('Before main content.', 'devmn'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widgettitle">',
        'after_title' => '</span>',
    ));
    
    register_sidebar(array(
        'id' => 'language',
        'name' => __('Language switcher', 'devmn'),
        'description' => __('Language switcher.', 'devmn'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widgettitle">',
        'after_title' => '</span>',
    ));
}


add_action('widgets_init', 'devmn_register_sidebars');
