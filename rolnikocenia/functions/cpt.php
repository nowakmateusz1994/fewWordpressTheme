<?php


// let's create the function for the custom type ADDS
function adds_post()
{
    // creating (registering) the custom type 
    register_post_type(
        'adds', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array(
            'labels' => array(
                'name' => __('Reklamy', 'devmn'), /* This is the Title of the Group */
                'singular_name' => __('Reklama', 'devmn'), /* This is the individual type */
                'all_items' => __('Wszystkie wpisy', 'devmn'), /* the all items menu item */
                'add_new' => __('Dodaj nowy', 'devmn'), /* The add new menu item */
                'add_new_item' => __('Dodaj nowy', 'devmn'), /* Add New Display Title */
                'edit' => __('Edytuj', 'devmn'), /* Edit Dialog */
                'edit_item' => __('Edytuj wpis', 'devmn'), /* Edit Display Title */
                'new_item' => __('Dodaj nowy', 'devmn'), /* New Display Title */
                'view_item' => __('Wyświetl', 'devmn'), /* View Display Title */
                'search_items' => __('Szukaj wpisu', 'devmn'), /* Search Custom Type Title */
                'not_found' =>  __('Nie znaleziono wpisów w bazie danych.', 'devmn'), /* This displays if there are no entries yet */
                'not_found_in_trash' => __('Nie znaleziow w koszu', 'devmn'), /* This displays if there is nothing in the trash */
                'parent_item_colon' => ''
            ), /* end of arrays */
            'description' => __('Przykładowa reklama', 'devmn'), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => false,
            'exclude_from_search' => true,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
            'menu_icon' => 'dashicons-camera-alt', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
            'rewrite'    => array('slug' => 'adds', 'with_front' => false), /* you can specify its url slug */
            'has_archive' => false, /* you can rename the slug here */
            'capability_type' => 'post',
            'hierarchical' => false,
            'show_in_rest' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
        ) /* end of options */
    ); /* end of register post type */

    /* this adds your post categories to your custom post type */
}

// adding the function to the Wordpress init
add_action('init', 'adds_post');

// let's create the function for the custom type EVENTS
function event_post()
{
    // creating (registering) the custom type 
    register_post_type(
        'events-post', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array(
            'labels' => array(
                'name' => __('Wydarzenia', 'devmn'), /* This is the Title of the Group */
                'singular_name' => __('Wydarzenia', 'devmn'), /* This is the individual type */
                'all_items' => __('Wszystkie wpisy', 'devmn'), /* the all items menu item */
                'add_new' => __('Dodaj nowy', 'devmn'), /* The add new menu item */
                'add_new_item' => __('Dodaj nowy', 'devmn'), /* Add New Display Title */
                'edit' => __('Edytuj', 'devmn'), /* Edit Dialog */
                'edit_item' => __('Edytuj wpis', 'devmn'), /* Edit Display Title */
                'new_item' => __('Dodaj nowy', 'devmn'), /* New Display Title */
                'view_item' => __('Wyświetl', 'devmn'), /* View Display Title */
                'search_items' => __('Szukaj wpisu', 'devmn'), /* Search Custom Type Title */
                'not_found' =>  __('Nie znaleziono wpisów w bazie danych.', 'devmn'), /* This displays if there are no entries yet */
                'not_found_in_trash' => __('Nie znaleziow w koszu', 'devmn'), /* This displays if there is nothing in the trash */
                'parent_item_colon' => ''
            ), /* end of arrays */
            'description' => __('Przykładowe wydarzenie', 'devmn'), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
            'menu_icon' => 'dashicons-calendar-alt', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
            'rewrite'    => array('slug' => 'wydarzenia', 'with_front' => true), /* you can specify its url slug */
            'has_archive' => true, /* you can rename the slug here */
            'capability_type' => 'post',
            'hierarchical' => false,
            'show_in_rest' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
        ) /* end of options */
    ); /* end of register post type */

    /* this adds your post categories to your custom post type */

    register_taxonomy_for_object_type('category', 'event_cat');
}

// adding the function to the Wordpress init
add_action('init', 'event_post');

register_taxonomy(
    'event_cat',
    array('events-post'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    array(
        'hierarchical' => true,     /* if this is true, it acts like categories */
        'labels' => array(
            'name' => __('Kategorie wydarzenia', 'devmn'), /* name of the custom taxonomy */
            'singular_name' => __('Domyślna kategoria wydarzenia', 'devmn'), /* single taxonomy name */
            'search_items' =>  __('Szukaj kategori wydarzenia', 'devmn'), /* search title for taxomony */
            'all_items' => __('Wszystkie kategorie wydarzenia', 'devmn'), /* all title for taxonomies */
            'parent_item' => __('Nadrzędna kategoria wydarzenia', 'devmn'), /* parent title for taxonomy */
            'parent_item_colon' => __('Nadrzędna kategoria wydarzenia:', 'devmn'), /* parent taxonomy title */
            'edit_item' => __('Edytuj kategorie wydarzenia', 'devmn'), /* edit custom taxonomy title */
            'update_item' => __('Aktualizuj kategorie wydarzenia', 'devmn'), /* update title for taxonomy */
            'add_new_item' => __('Dodaj nową kategorię wydarzenia', 'devmn'), /* add new title for taxonomy */
            'new_item_name' => __('Nowa kategoria wydarzenia', 'devmn') /* name title for taxonomy */
        ),
        'show_admin_column' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'kategoria-wydarzenia'),
    )
);


// let's create the function for the custom type Opinion
function opinion_post()
{
    // creating (registering) the custom type 
    register_post_type(
        'opinion', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array(
            'labels' => array(
                'name' => __('Opinie', 'devmn'), /* This is the Title of the Group */
                'singular_name' => __('Opinia', 'devmn'), /* This is the individual type */
                'all_items' => __('Wszystkie wpisy', 'devmn'), /* the all items menu item */
                'add_new' => __('Dodaj nowy', 'devmn'), /* The add new menu item */
                'add_new_item' => __('Dodaj nowy', 'devmn'), /* Add New Display Title */
                'edit' => __('Edytuj', 'devmn'), /* Edit Dialog */
                'edit_item' => __('Edytuj wpis', 'devmn'), /* Edit Display Title */
                'new_item' => __('Dodaj nowy', 'devmn'), /* New Display Title */
                'view_item' => __('Wyświetl', 'devmn'), /* View Display Title */
                'search_items' => __('Szukaj wpisu', 'devmn'), /* Search Custom Type Title */
                'not_found' =>  __('Nie znaleziono wpisów w bazie danych.', 'devmn'), /* This displays if there are no entries yet */
                'not_found_in_trash' => __('Nie znaleziow w koszu', 'devmn'), /* This displays if there is nothing in the trash */
                'parent_item_colon' => ''
            ), /* end of arrays */
            'description' => __('Przykładowa reklama', 'devmn'), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => false,
            'exclude_from_search' => true,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
            'menu_icon' => 'dashicons-format-chat', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
            'rewrite'    => array('slug' => 'adds', 'with_front' => false), /* you can specify its url slug */
            'has_archive' => false, /* you can rename the slug here */
            'capability_type' => 'post',
            'hierarchical' => false,
            'show_in_rest' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
        ) /* end of options */
    ); /* end of register post type */

    /* this adds your post categories to your custom post type */
}

// adding the function to the Wordpress init
add_action('init', 'opinion_post');