<section class="home_realization">
    <div class="container">
        <h3 class="home_realization_title section-title" data-animate='fadeInUp'><?= get_sub_field('title'); ?></h3>
        <div class="home_realization_description" data-animate='fadeInUp'><?= get_sub_field('description'); ?></div>
        <div class="home_realization_items" data-animate='fadeInUp'>

            <?php
            $i = 1;
            $items = get_sub_field('relations');
            if ($items) {
                foreach ($items as $item) {
            ?>
                    <div class="home_realization_item">
                        <div class="home_realization_item_wrap">
                            <div class="home_realization_item_img">
                                <?php the_post_thumbnail($item->ID, 'large'); ?>
                                <div class="home_realization_number">
                                    <?php
                                    if ($i < 10) {
                                        echo ('0' . $i);
                                    } else {
                                        echo ($i);
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="home_realization_item_content">
                                <h5 class="home_realization_item_title"><?= get_the_title($item->ID); ?></h5>
                                <div class="home_realization_item_description"><?= get_the_excerpt($item->ID); ?></div>
                                <div class="home_realization_item_url"><a href="<?php get_the_permalink($item->ID); ?>"><?= __('Więcje', 'devmn'); ?></a></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
            } else {
                $args = array(
                    'post_type'        => 'realizations',
                    'posts_per_page'   => get_sub_field('number'),
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                    ?>
                        <div class="home_realization_item">
                            <div class="home_realization_item_wrap">
                                <div class="home_realization_item_img">
                                    <?php the_post_thumbnail('large'); ?>
                                    <div class="home_realization_number">
                                        <?php
                                        if ($i < 10) {
                                            echo ('0' . $i);
                                        } else {
                                            echo ($i);
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="home_realization_item_content">
                                    <h5 class="home_realization_item_title"><?= get_the_title(); ?></h5>
                                    <div class="home_realization_item_description"><?= get_the_excerpt(); ?></div>
                                    <div class="home_realization_item_url"><a href="<?php get_the_permalink(); ?>"><?= __('Więcje', 'devmn'); ?></a></div>
                                </div>
                            </div>
                        </div>
            <?php
                        $i++;
                    } // end while
                } // end if
                wp_reset_query();
            }
            ?>
        </div>
    </div>
</section>