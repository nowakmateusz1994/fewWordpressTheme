<?php
get_header();
?>



<div class="content">
    <div class="inner-content">
        <div class="blog_posts">
            <div class="home_blog_items container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="home_blog_item">
                            <?php the_post_thumbnail('large'); ?>
                            <div class="home_blog_item_content">
                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="home_blog_item_tite"><?php the_title(); ?></h3>
                                </a>
                                <div class="home_blog_item_subtitle"><?php the_excerpt(); ?></div>
                                <a href="<?php the_permalink(); ?>"><?= __('Czytaj więcej', 'devmn') ?> <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>

                <?php
                endif;
                devmn_page_navi();
                ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
