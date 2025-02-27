<?php
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

    die();
}

add_action('wp_ajax_nopriv_adds', 'add_count');
add_action('wp_ajax_adds', 'add_count');
