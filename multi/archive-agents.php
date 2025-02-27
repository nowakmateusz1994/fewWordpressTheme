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
                            <?php
                            $img = get_post_thumbnail_id();

                            if (!$img):
                                $img = get_theme_mod('custom_logo');
                            endif;
                            ?>
                            <div class="archive_posts_item_img"><?= wp_get_attachment_image($img, 'full'); ?></div>
                            <div class="archive_posts_item_content">
                                <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'>
                                    <h3 class="archive_posts_item_title section-title"><?php the_title(); ?></h3>
                                </a>
                                <div class="archive_posts_item_contact"><i class="fas fa-envelope"></i> <a href="mailto:<?= get_field('mails')[0]['item']; ?>"><?= get_field('mails')[0]['item']; ?></a></div>
                                <div class="archive_posts_item_contact"><i class="fas fa-phone-alt"></i> <a href="tel:<?= get_field('phones')[0]['item']; ?>"><?= get_field('phones')[0]['item']; ?></a></div>
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
