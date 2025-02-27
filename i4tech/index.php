<?php
get_header();
?>



<div class="content">
    <div class="inner-content">
        <div class="archive_posts">
            <div class="archive_posts_items container">
                <?php
                $i = 0;
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php if ($i == 0) : ?>
                            <div class="archive_posts_items_top">
                                <div class="archive_posts_items_top_post">
                                    <div class="archive_posts_items_top_item">
                                        <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'>
                                            <?php the_post_thumbnail('large'); ?>
                                        </a>
                                        <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'>
                                            <h3 class="archive_posts_items_top_item_title section-title"><?php the_title(); ?></h3>
                                        </a>
                                        <div class="archive_posts_items_top_item_date"><?= the_date('j F, Y'); ?></div>
                                        <div class="archive_posts_items_top_item_excerpt"><?php the_excerpt(); ?></div>
                                        <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>' class="button"><span><?= __("więcej", 'devmn'); ?></span></a>
                                    </div>
                                </div>
                                <div class="archive_posts_items_top_sidebar">
                                    <?php dynamic_sidebar('sidebar1'); ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="archive_posts_item">
                                <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'>
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                                <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'>
                                    <h3 class="archive_posts_item_title section-title"><?php the_title(); ?></h3>
                                </a>
                                <div class="archive_posts_item_date"><?= the_date('j F, Y'); ?></div>
                            </div>
                        <?php endif; ?>


                    <?php
                        $i++;
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
