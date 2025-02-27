<?php
get_header();
?>



<div class="content">
    <div class="inner-content">
        <div class="archive_posts">
            <div class="container">
                <div class="archive_posts_supertitle section-supertitle"><?= __('P_TECH', 'devmn'); ?></div>
                <h3 class="archive_posts_title section-title"><?= __('Nasze realizacje', 'devmn'); ?></h3>
            </div>
            <div class="archive_posts_items container">
                <?php
                if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="archive_posts_item">
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
        <?php
        if (is_post_type_archive('realization')):
            get_template_part('template/archive/services');
        endif;
        ?>
    </div>
</div>
<?php
get_footer();
