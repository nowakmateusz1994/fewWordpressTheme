<?php $realization = get_field('home_realization'); ?>
<section class="home_realization">
    <div class="container">
        <h3 class="home_realization_title section-title" data-animate='fadeInUp'><?= $realization['title']; ?></h3>
        <div class="home_realization_items" data-animate='fadeIn'>
            <?php
            $i = 1;
            $args = array(
                'post_type'        => 'realizations',
                'posts_per_page'   => $realization['number'],
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="home_realization_item">
                        <div class="home_realization_item_wrap">
                            <div class="home_realization_item_img">
                                <?php the_post_thumbnail('medium'); ?>
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
            ?>
        </div>
    </div>
</section>