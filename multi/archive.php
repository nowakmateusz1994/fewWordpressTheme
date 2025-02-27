<?php
get_header();
?>



<div class="content">
    <div class="inner-content">
        <div class="archive_posts">
            <div class="archive_posts_items container">
                <?php
                if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="archive_posts_item">
                            <?php the_post_thumbnail('devmn-gallery-thumb'); ?>
                            <div class="archive_posts_item_content">
                                <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'>
                                    <h3 class="archive_posts_item_title section-title"><?php the_title(); ?></h3>
                                </a>
                                <div class="archive_posts_item_description"><?php the_excerpt(); ?></div>
                                <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>' class="button"><?= __("Zobacz więcej", 'devmn'); ?></a>
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
