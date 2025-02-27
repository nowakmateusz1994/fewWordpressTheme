<?php

//Theme support
require get_template_directory() . '/functions/theme_support.php';

//Enqueue Scripts
require get_template_directory() . '/functions/enqueue-scripts.php';

//Register Menu
require get_template_directory() . '/functions/menu.php';

//Add options page
require get_template_directory() . '/functions/options-page.php';

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



// Update field of count display
function add_count()
{
    $postID = $_POST['addID'];
    $count = intval(get_field('count', $postID));
    if ($count) {
        update_field('count', $count + 1, $postID);
    } else {
        update_field('count', 1, $postID);
    }
    echo ($count);
}

add_action('wp_ajax_nopriv_adds', 'add_count');
add_action('wp_ajax_adds', 'add_count');
