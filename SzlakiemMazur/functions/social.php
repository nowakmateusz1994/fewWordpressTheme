<?php

function social()
{
    $img = get_the_post_thumbnail_url('large');
    if (!$img) :
        $img = get_stylesheet_directory_uri() . '/dist/img/';
    endif;

    $title = get_the_title();
    $excerpt = get_the_excerpt();
?>

    <meta property="og:image" content="<?= $img; ?>" />

    <?php if ($excerpt) : ?>
        <meta property="og:description" content="<?= $excerpt; ?>" />
        <meta property="twitter:description" content="<?= $excerpt; ?>" />
    <?php endif; ?>

    <meta property="og:title" content="<?= get_bloginfo('name') . ' ' . $title; ?>" />
    <meta property="twitter:title" content="<?= get_bloginfo('name') . ' ' . $title;  ?>" />
    <meta property="twitter:image" content="<?= $img; ?>" />


<?php
}

add_action('wp_head',  'social', 5);
