<?php

//Theme support
require get_template_directory() . '/functions/theme_support.php';

//Enqueue Scripts
require get_template_directory() . '/functions/enqueue-scripts.php';

//Register Menu
require get_template_directory() . '/functions/menu.php';

//Add options page
require get_template_directory() . '/functions/options-page.php';

//Customizer function
require get_template_directory() . '/functions/customizer.php';

//Allow SVG
require get_template_directory() . '/functions/allow-svg.php';

//ACF JSON save
require get_template_directory() . '/functions/functions-acf.php';

//Sidebar
require get_template_directory() . '/functions/sidebar.php';

// pagenav
require get_template_directory() . '/functions/page_nav.php';

// CPT
require get_template_directory() . '/functions/cpt.php';

// social
require get_template_directory() . '/functions/social.php';

// woocommerce
// require get_template_directory() . '/functions/functions-woocommerce.php';

function is_blog()
{
    global  $post;
    $posttype = get_post_type($post);
    return (((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ($posttype == 'post')) ? true : false;
}

// PAGINATION
function custom_pagination($numpages = '', $pagerange = '', $paged = '')
{
    if (empty($pagerange)) {
        $pagerange = 2;
    }

    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if (!$numpages) {
            $numpages = 1;
        }
    }
    /** 
     * We construct the pagination arguments to enter into our paginate_links
     * function. 
     */
    $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => False,
        'end_size'        => 1,
        'mid_size'        => $pagerange,
        'prev_next'       => True,
        'prev_text'       => __('&laquo;'),
        'next_text'       => __('&raquo;'),
        'type'            => 'plain',
        'add_args'        => false,
        'add_fragment'    => ''
    );
    $paginate_links = paginate_links($pagination_args);
    if ($paginate_links) {
        echo "<div class='custom-pagination'>";
        echo $paginate_links;
        echo "</div>";
    }
}

add_filter('get_the_archive_title_prefix', function ($prefix) {
    /*$prefix is available for processing, too*/
    return __('', 'devmn');
});


function devmn_change_posts_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
       return;
    }

    if ( is_post_type_archive( 'project' ) ) {
       $query->set( 'posts_per_page', 9);
    }
}
add_filter( 'pre_get_posts', 'devmn_change_posts_per_page' ); 


function devmn_custom_excerpt_length( $length ) {
	return 31;
}
add_filter( 'excerpt_length', 'devmn_custom_excerpt_length', 999 );