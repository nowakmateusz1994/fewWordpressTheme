<div class="product_item">
    <div class="product_item_wrap">
        <div class="product_item_thumb"><?php the_post_thumbnail('large'); ?></div>
        <div class="product_item_content">
            <?php
            $terms = get_the_terms(get_the_ID(), 'product_cat');
            ?>
            <div class="product_item_cat"><?= $terms[0]->name; ?></div>
            <a href="<?php the_permalink(); ?>" title='<?php the_title(); ?>'>
                <h3 class="product_item_title"><?php the_title(); ?></h3>
            </a>
            <div class="product_item_description"><?php the_content(); ?></div>
        </div>
    </div>
    <div class="product_item_footer">
        <div class="product_item_icons">
            <?php
            $days = get_field('days');
            $meals = get_field('meals');
            $min = trim(get_post_meta(get_the_id(), '_wc_min_qty_product', true));

            if ($days) :
            ?>
                <div class="product_item_icons_item">
                    <img src='<?= get_stylesheet_directory_uri() . '/dist/svg/hous.svg' ?>' loading="lazy" width="32px" height="32px" />
                    <span><?= $days . __('dni', 'devmn'); ?></span>
                </div>
            <?php endif;
            if ($min) :
            ?>
                <div class="product_item_icons_item">
                    <img src='<?= get_stylesheet_directory_uri() . '/dist/svg/peop.svg' ?>' loading="lazy" width="32px" height="32px" />
                    <span><?= __('MIN.', 'devmn'). '</br>' . $min . ' ' . __('os.', 'devmn') ?></span>
                </div>
            <?php endif;
            if ($meals) :
            ?>
                <div class="product_item_icons_item">
                    <img src='<?= get_stylesheet_directory_uri() . '/dist/svg/kitchen.svg' ?>' loading="lazy" width="32px" height="32px" />
                    <span><?= $meals; ?></span>
                </div>
            <?php endif; ?>
        </div>
        <div class="product_item_icons product_item_permalink">
            <a href="<?php the_permalink(); ?>" class="button" title='<?php the_title(); ?>'><?= __('Szczegóły', 'devmn'); ?></a>
        </div>
    </div>
</div>