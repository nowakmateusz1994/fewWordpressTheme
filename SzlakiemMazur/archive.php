<?php
get_header();
?>



<div class="content">
    <div class="inner-content">
        <div class="home_posts">
            <div class="home_posts_items container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                            <div class="home_posts_item">
                                <?php the_post_thumbnail('devmn-gallery-thumb'); ?>
                                <div class="home_posts_item_content">
                                    <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'>
                                        <h3 class="home_posts_item_title section-title"><?php the_title(); ?></h3>
                                    </a>
                                    <div class="home_posts_item_description"><?php the_excerpt(); ?></div>
                                    <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>' class="button"><?= __("Zobacz więcej", 'devmn'); ?></a>
                                </div>

                            </div>
                        
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>

                <?php
                endif;
                custom_pagination($custom_query->max_num_pages, "", $paged);
                ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
