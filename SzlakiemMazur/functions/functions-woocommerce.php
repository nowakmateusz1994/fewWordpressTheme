<?php

function devmn_qty_add_product_field() {
    echo '<div class="options_group">';
    woocommerce_wp_text_input(
            array(
                'id' => '_wc_min_qty_product',
                'label' => __('Minimalna ilość', 'devmn'),
                'placeholder' => '',
                'desc_tip' => 'true',
                'description' => __('Pole opcjonalne pozostaw pustę lub wprowadź liczbę większą od 1.', 'devmn')
            )
    );
    echo '</div>';
    echo '<div class="options_group">';
    woocommerce_wp_text_input(
            array(
                'id' => '_wc_max_qty_product',
                'label' => __('Maksymalna ilość', 'devmn'),
                'placeholder' => '',
                'desc_tip' => 'true',
                'description' => __('Pole opcjonalne pozostaw pustę lub wprowadź liczbę większą od 1.', 'devmn')
            )
    );
    echo '</div>';
}

add_action('woocommerce_product_options_general_product_data', 'devmn_qty_add_product_field');

/*
 * This function will save the value set to Minimum Quantity and Maximum Quantity options
 * into _wc_min_qty_product and _wc_max_qty_product meta keys respectively
 */

function devmn_qty_save_product_field($post_id) {
    $val_min = trim(get_post_meta($post_id, '_wc_min_qty_product', true));
    $new_min = sanitize_text_field($_POST['_wc_min_qty_product']);
    $val_max = trim(get_post_meta($post_id, '_wc_max_qty_product', true));
    $new_max = sanitize_text_field($_POST['_wc_max_qty_product']);

    if ($val_min != $new_min) {
        update_post_meta($post_id, '_wc_min_qty_product', $new_min);
    }
    if ($val_max != $new_max) {
        update_post_meta($post_id, '_wc_max_qty_product', $new_max);
    }
}

add_action('woocommerce_process_product_meta', 'devmn_qty_save_product_field');

/*
 * Setting minimum and maximum for quantity input args. 
 */

function devmn_qty_input_args($args, $product) {

    $product_id = $product->get_parent_id() ? $product->get_parent_id() : $product->get_id();

    $product_min = devmn_get_product_min_limit($product_id);
    $product_max = devmn_get_product_max_limit($product_id);
    if (!empty($product_min)) {
        // min is empty
        if (false !== $product_min) {
            $args['min_value'] = $product_min;
        }
    }
    if (!empty($product_max)) {
        // max is empty
        if (false !== $product_max) {
            $args['max_value'] = $product_max;
        }
    }
    if ($product->managing_stock() && !$product->backorders_allowed()) {
        $stock = $product->get_stock_quantity();
        $args['max_value'] = min($stock, $args['max_value']);
    }
    return $args;
}

add_filter('woocommerce_quantity_input_args', 'devmn_qty_input_args', 10, 2);

function devmn_get_product_max_limit($product_id) {
    $qty = get_post_meta($product_id, '_wc_max_qty_product', true);
    if (empty($qty)) {
        $limit = false;
    } else {
        $limit = (int) $qty;
    }

    return $limit;
}

function devmn_get_product_min_limit($product_id) {
    $qty = get_post_meta($product_id, '_wc_min_qty_product', true);
    if (empty($qty)) {
        $limit = false;
    } else {
        $limit = (int) $qty;
    }

    return $limit;
}

/*
 * Validating the quantity on add to cart action with the quantity of the same product available in the cart. 
 */

function devmn_qty_add_to_cart_validation($passed, $product_id, $quantity) {
    $product_min = devmn_get_product_min_limit($product_id);
    $product_max = devmn_get_product_max_limit($product_id);
    if (!empty($product_min)) {
        // min is empty
        if (false !== $product_min) {
            $new_min = $product_min;
        } else {
            // neither max is set, so get out
            return $passed;
        }
    }
    if (!empty($product_max)) {
        // min is empty
        if (false !== $product_max) {
            $new_max = $product_max;
        } else {
            // neither max is set, so get out
            return $passed;
        }
    }
    $already_in_cart = devmn_qty_get_cart_qty($product_id);
    $product = wc_get_product($product_id);
    $product_title = $product->get_title();

    if (!is_null($new_max) && !empty($already_in_cart)) {

        if (($already_in_cart + $quantity) > $new_max) {
            // oops. too much.
            $passed = false;
            wc_add_notice(
                    apply_filters(
                            'isa_wc_max_qty_error_message_already_had',
                            sprintf(
                                    __('Możesz dodać makzymalnie: %1$s %2$s do %3$s. Posiadasz już %4$s.', 'devmn'),
                                    $new_max,
                                    $product_title,
                                    '<a href="' . esc_url(wc_get_cart_url()) . '">' . __('twój koszyk', 'devmn') . '</a>',
                                    $already_in_cart
                            ),
                            $new_max,
                            $already_in_cart
                    ),
                    'error'
            );
        }
    }
    return $passed;
}

add_filter('woocommerce_add_to_cart_validation', 'devmn_qty_add_to_cart_validation', 1, 5);

/*
 * Get the total quantity of the product available in the cart.
 */

function devmn_qty_get_cart_qty($product_id, $cart_item_key = '') {
    global $woocommerce;
    $running_qty = 0; // iniializing quantity to 0
    // search the cart for the product in and calculate quantity.
    foreach ($woocommerce->cart->get_cart() as $other_cart_item_keys => $values) {
        if ($product_id == $values['product_id']) {
            if ($cart_item_key == $other_cart_item_keys) {
                continue;
            }
            $running_qty += (int) $values['quantity'];
        }
    }
    return $running_qty;
}

/*
 * Validate product quantity when cart is UPDATED
 */

function devmn_qty_update_cart_validation($passed, $cart_item_key, $values, $quantity) {
    $product = wc_get_product($values['product_id']);

    $product_min = devmn_get_product_min_limit($product);
    $product_max = devmn_get_product_max_limit($product);
    if (!empty($product_min)) {
        // min is empty
        if (false !== $product_min) {
            $new_min = $product_min;
        } else {
            // neither max is set, so get out
            return $passed;
        }
    }
    if (!empty($product_max)) {
        // min is empty
        if (false !== $product_max) {
            $new_max = $product_max;
        } else {
            // neither max is set, so get out
            return $passed;
        }
    }

    $already_in_cart = devmn_qty_get_cart_qty($product, $cart_item_key);
    if (isset($new_max) && ($already_in_cart + $quantity) > $new_max) {
        devmn_add_notice(
                apply_filters(
                        'devmn_qty_error_message',
                        sprintf(
                                __('Możesz dodać maksymalnie dodać %1$s %2$s\'s do %3$s.', 'devmn'),
                                $new_max,
                                $product->get_name(),
                                '<a href="' . esc_url(devmn_get_cart_url()) . '">' . __('twój koszyk', 'devmn') . '</a>'
                        ),
                        $new_max
                ),
                'error'
        );
        $passed = false;
    }
    if (isset($new_min) && ($already_in_cart + $quantity) < $new_min) {
        devmn_add_notice(
                apply_filters(
                        'devmn_qty_error_message',
                        sprintf(
                                __('Musisz minimalnie dodać %1$s %2$s\'s do %3$s.', 'devmn'),
                                $new_min,
                                $product->get_name(),
                                '<a href="' . esc_url(devmn_get_cart_url()) . '">' . __('twojego koszyka', 'devmn') . '</a>'
                        ),
                        $new_min
                ),
                'error'
        );
        $passed = false;
    }
    return $passed;
}

add_filter('woocommerce_update_cart_validation', 'devmn_qty_update_cart_validation', 1, 4);

add_action('woocommerce_before_calculate_totals', 'IG_recalculate_price', 5, 1);

function IG_recalculate_price($cart_object) {

    if (is_admin() && !defined('DOING_AJAX'))
        return;
    $quantity = 0;

    foreach ($cart_object->get_cart() as $key => $value) {
        $newprice = 0;
        $preices = get_field('prices', $value['product_id']);
        $quantity += $value['quantity'];

        if ($preices) {
            foreach ($preices as $item) {
                if ($quantity >= intval($item['people'])) {
                    $newprice = intval($item['price']);
                }
            }

            if ($newprice > 0) {
                $value['data']->set_price($newprice);
            }
        }
    }
}

//Archive product
add_filter('woocommerce_show_page_title', '__return_false');
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

remove_action('woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

add_action('woocommerce_before_shop_loop', 'devmn_archive_before_shop_loop', 99);

function devmn_archive_before_shop_loop() {
    echo ('<div class="archive_product_container">');
}

add_action('woocommerce_after_shop_loop', 'devmn_archive_after_shop_loop', 99);

function devmn_archive_after_shop_loop() {
    echo ('</div>');
}

add_action('woocommerce_after_single_product_summary', 'devmn_archive_after_shop_loop', 1);
add_action('woocommerce_before_single_product_summary', 'devmn_archive_before_shop_loop', 1);

add_action('woocommerce_single_product_summary', 'add_category_name', 1);

function add_category_name() {
    $terms = get_the_terms(get_the_ID(), 'product_cat');
    ?>
    <div class="product_item_cat"><?= $terms[0]->name; ?></div>
    <?php
}

add_action('woocommerce_after_add_to_cart_quantity', 'add_table_with_prices', 10);

function add_table_with_prices() {
    $prices = get_field('prices');
    if ($prices):
        ?>
        <div class="single_product_prices">
            <div class="single_product_price_item">
                <div class="single_product_price_item_people_title"><?= __('Liczba uczestników', 'devmn'); ?></div>
                <div class="single_product_price_item_price_title"><?= __('Cena', 'devmn'); ?></div>
            </div>
            <?php foreach ($prices as $price) : ?>
                <div class="single_product_price_item discount">
                    <div class="single_product_price_item_people discount"><?= $price['people']; ?></div>
                    <div class="single_product_price_item_price discount"><?= '<span>' . $price['price'] . '</span>' . __(' zł/osoba', 'devmn'); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    endif;
}

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

add_action('woocommerce_after_single_product_summary', 'add_attraction');

function add_attraction() {
    $front_page_id = get_option('page_on_front');
    ?>
    <div class="attraction">
        <?php
        $atraction = get_field('atraction', $front_page_id);
        if ($atraction) :
            ?>
            <div class="home_atraction">
                <div class="container">
                    <?php if ($atraction['title']) : ?>
                        <h3 class="section-title"><?= $atraction['title']; ?></h3>
                    <?php endif; ?>
                    <?php if ($atraction['subtitle']) : ?>
                        <div class="section-subtitle"><?= $atraction['subtitle']; ?></div>
                    <?php endif; ?>
                    <div class="home_atraction_items">
                        <div class="home_atraction_item cubic">
                            <img class="home_atraction_item_background" src="<?= $atraction['img']['url']; ?>" loading="lazy" />
                        </div>

                        <?php
                        $tagArgs = array(
                            'hide_empty' => true
                        );

                        $atractionTag = get_the_terms(get_the_ID(), 'product_tag');
                        foreach ($atractionTag as $tag) :
                            ?>
                            <div class="home_atraction_item cubic">
                                <div class="home_atraction_item_wrap ">
                                    <?php
                                    $logo = get_field('icon', 'product_tag_' . $tag->term_id);
                                    if ($logo) :
                                        ?>
                                        <img class="home_atraction_item_icon" src="<?= $logo['url']; ?>" loading="lazy" alt="" width="64px;" height="64px" />
                                        <?php
                                    endif;

                                    $title = get_field('title', 'product_tag_' . $tag->term_id);
                                    if ($title) :
                                        ?>
                                        <h4 class="home_atraction_item_title"><?= $title; ?></h4>
                                        <?php
                                    endif;

                                    $short = get_field('short', 'product_tag_' . $tag->term_id);
                                    if ($short) :
                                        ?>
                                        <div class="home_atraction_item_short"><?= $short; ?></div>
                                    <?php endif; ?>
                                    <a href="<?= get_term_link($tag->term_id, 'product_tag'); ?>"><?= __('Czytaj więcej', 'devmn') ?> <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php
                    $atractionBackground = $atraction['background'];
                    if (!$atractionBackground) :
                        $atractionBackground = get_field('header_img', 'options');
                    endif;
                    ?>
                    <div class="home_atraction_background">
                        <img src="<?= $atractionBackground['url']; ?>" loading="lazy" alt="" />
                    </div>
                </div>


            </div>
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Add a custom input field to the product page.
 */
function devmn_select_data() {
    ?>
    <div class="devmn_select_data">
        <?php
        $terms = get_the_terms(get_the_ID(), 'product_cat');
        $datas = get_field('start_items', 'product_cat_' . $terms[0]->term_id);
//    $dayArray = ['pon', 'wt', 'sr', 'czw', 'pt', 'sob', 'nd'];
        $startDays = get_field('day_start');
        ?>
        <select name='select-date' id='select-date'>
            <option value=""><?= __('Wybierz datę rozpoczęcia turnusu', 'devmn'); ?></option>
            <?php
            foreach ($datas as $date):
                $startParts = explode('/', $date['start']);
                $start = $startParts[0] . '-' . $startParts[1] . '-' . $startParts[2];
                $startDate = new DateTime($start);

                $endParts = explode('/', $date['end']);
                $end = $endParts[0] . '-' . $endParts[1] . '-' . $endParts[2];
                $endDate = new DateTime($end);
                ?>
                <?php
                while ($startDate <= $endDate) {
                    $timestamp = strtotime($startDate->format('d.m.Y'));
                    $today = strtotime(date("m.d.y"));
                    if ($timestamp > $today):
                        $weekDay = date('D', $timestamp);
                        foreach ($startDays as $codeDay):
                            if (in_array($weekDay, $codeDay)):
                                ?>
                                <option value="<?= $startDate->format('d.m.Y') . ' ' . $codeDay['label']; ?>"><?= $startDate->format('d.m.Y') . ' ' . $codeDay['label']; ?></option>
                                <?php
                            endif;
                        endforeach;
                    endif;
                    $startDate->modify('+1 day');
                }
            endforeach;
            ?>
        </select>
    </div>

    <?php
}

add_action('woocommerce_before_add_to_cart_button', 'devmn_select_data', 10);

/**
 * Validate custom input field value
 */
function devmn_add_to_cart_validation($passed, $product_id, $quantity, $variation_id = null) {
    if (empty($_POST['select-date'])) {
        $passed = false;
        wc_add_notice(__('Musisz wybrać datę rozpoczęcia turnusu.', 'devmn'), 'error');
    }
    return $passed;
}

add_filter('woocommerce_add_to_cart_validation', 'devmn_add_to_cart_validation', 10, 4);

function devmn_add_cart_item_data($cart_item_data, $product_id, $variation_id) {
    if (isset($_POST['select-date'])) {
        $cart_item_data['pr_field'] = sanitize_text_field($_POST['select-date']);
    }
    return $cart_item_data;
}

add_filter('woocommerce_add_cart_item_data', 'devmn_add_cart_item_data', 10, 3);

/**
 * Display custom item data in the cart
 */
function devmn_get_item_data($item_data, $cart_item_data) {
    if (isset($cart_item_data['pr_field'])) {
        $item_data[] = array(
            'key' => __('Początek turnusu', 'devmn'),
            'value' => wc_clean($cart_item_data['pr_field']),
        );
    }
    return $item_data;
}

add_filter('woocommerce_get_item_data', 'devmn_get_item_data', 10, 2);

/**
 * Add custom meta to order
 */
function devmn_checkout_create_order_line_item($item, $cart_item_key, $values, $order) {
    if (isset($values['pr_field'])) {
        $item->add_meta_data(
                __('Początek turnusu', 'devmn'),
                $values['pr_field'],
                true
        );
    }
}

add_action('woocommerce_checkout_create_order_line_item', 'devmn_checkout_create_order_line_item', 10, 4);
