<?php
$args = (array(
    'post_type'         => 'opinion',
    'posts_per_page'    => $args['count']
));


$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
?>
        <li class="splide__slide">
            <div class="home_opinion_item">
                <div class="home_opinion_item_content"><?php the_content(); ?></div>
                <div class="home_opinion_bottom">
                    <div class="name"><?php the_field('name') ?></div>
                    <div class="name_bottom"><?php the_field('job'); ?>/<?php the_field('specialization'); ?>/<?php the_field('voivodeship'); ?></div>
                </div>
            </div>
        </li>
<?php
    }
    wp_reset_postdata();
}
