<?php
/*
  Template Name: Realizacje
 */

get_header();
?>
<div class="content">
  <div class="inner-content">
    <div class="archive_posts">
      <div class="archive_posts_items container">
        <?php

        $args = array(
          'post_type'        => 'realizations',
          'posts_per_page'   => 12,
        );

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="archive_posts_item" data-animate="fadeInUp">
              <?php the_post_thumbnail('devmn-gallery-thumb'); ?>
              <div class="archive_posts_item_content">
                <h3 class="archive_posts_item_title"><?php the_title(); ?></h3>
                <div class="archive_posts_item_description"><?php the_excerpt(); ?></div>
                <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>' class="absolute"></a>
              </div>
            </div>
          <?php
          endwhile;
          wp_reset_postdata();
          ?>

        <?php
        endif;
        devmn_page_navi()
        ?>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>