<?php

/*
  Template Name: Wyniki wyszukiwania
 */
get_header();
?>

<?php

$catArr = '';
$tagArr = '';
$cat = $_GET['my-cat'];
if ($cat) :
    $catArr = array(
        'taxonomy' => 'product_cat', // Taxonomy, in my case I need default post categories
        'field' => 'slug',
        'terms' => $cat, // Your category slug (I have a category 'interior')
    );
endif;

$tag = $_GET['my-tag'];
if ($tag) :
    $tagArr = array(
        'taxonomy' => 'product_tag', // Taxonomy, in my case I need default post categories
        'field' => 'slug',
        'terms' => $tag, // Your category slug (I have a category 'interior')
    );
endif;
$peopleArr = '';
$people = $_GET['my-people'];
if ($people) {
    switch (intval($people)) {
        case 1:
            $peopleArr = '';
            break;

        case 2:
            $peopleArr = array(
                'key' => 'days',
                'value' => 4,
                'type' => 'NUMERIC',
                'compare' => '<'
            );
            break;

        case 3:
            $peopleArr = array(
                'relation' => 'AND',
                array(
                    'key' => 'days',
                    'value' => 4,
                    'type' => 'NUMERIC',
                    'compare' => '>'
                ),
                array(
                    'key' => 'days',
                    'value' => 10,
                    'type' => 'NUMERIC',
                    'compare' => '<'
                )
            );
            break;
        case 4:
            $peopleArr = array(
                'key' => 'days',
                'value' => 10,
                'type' => 'NUMERIC',
                'compare' => '>'
            );
            break;
    }
}
$args = array(
    'post_type' => 'product',
    'tax_query' => array(
        $catArr,
        $tagArr
    ),
    'meta_query' => array(
        $peopleArr,
    )
);

// The Query.
$the_query = new WP_Query($args);

devmnSerarchForm();

// The Loop.
if ($the_query->have_posts()) {
    echo '<div class="archive_product_container">';
    while ($the_query->have_posts()) {
        $the_query->the_post();
        wc_get_template_part('content', 'product');
    }
    echo '</div>';
} else {
    echo '<h3 class="search_title">' . __('Niestety nie posiadamy odpowiednich ofert.', 'devmn') . '</h3>';
}
// Restore original Post Data.
wp_reset_postdata();

get_footer();
?>