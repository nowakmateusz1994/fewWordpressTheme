<?php


// let's create the function for the custom type
function agent_post()
{
    // creating (registering) the custom type 
    register_post_type(
        'agents', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array(
            'labels' => array(
                'name' => __('Nasi agenci', 'devmn'), /* This is the Title of the Group */
                'singular_name' => __('Agent', 'devmn'), /* This is the individual type */
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
            'description' => __('Przykładowy agent', 'devmn'), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
            'menu_icon' => 'dashicons-edit-large', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
            'rewrite'    => array('slug' => 'agent', 'with_front' => false), /* you can specify its url slug */
            'has_archive' => 'nasi-agenci', /* you can rename the slug here */
            'capability_type' => 'post',
            'hierarchical' => false,
            'show_in_rest' => true,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
        ) /* end of options */
    ); /* end of register post type */

    /* this adds your post categories to your custom post type */
    register_taxonomy_for_object_type('category', 'agent_cat');
}

// adding the function to the Wordpress init
add_action('init', 'agent_post');


// now let's add custom categories (these act like categories)
register_taxonomy(
    'agent_cat',
    array('agents'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    array(
        'hierarchical' => true,     /* if this is true, it acts like categories */
        'labels' => array(
            'name' => __('Kategorie agentów', 'devmn'), /* name of the custom taxonomy */
            'singular_name' => __('Domyślna kategoria', 'devmn'), /* single taxonomy name */
            'search_items' =>  __('Szukaj kategori ', 'devmn'), /* search title for taxomony */
            'all_items' => __('Wszystkie kategorie ', 'devmn'), /* all title for taxonomies */
            'parent_item' => __('Nadrzędna kategoria ', 'devmn'), /* parent title for taxonomy */
            'parent_item_colon' => __('Nadrzędna kategoria:', 'devmn'), /* parent taxonomy title */
            'edit_item' => __('Edytuj kategorie ', 'devmn'), /* edit custom taxonomy title */
            'update_item' => __('Aktualizuj kategorie ', 'devmn'), /* update title for taxonomy */
            'add_new_item' => __('Dodaj nową kategorię ', 'devmn'), /* add new title for taxonomy */
            'new_item_name' => __('Nowa kategoria ', 'devmn') /* name title for taxonomy */
        ),
        'show_admin_column' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'agents-category'),
    )
);


function devmn_testimonials_query($query)
{
    if (
        ! is_admin()
        && $query->is_post_type_archive('agents')
        && $query->is_main_query()
    ) {
        $query->set('posts_per_page', -1);
    }
}
add_action('pre_get_posts', 'devmn_testimonials_query');


