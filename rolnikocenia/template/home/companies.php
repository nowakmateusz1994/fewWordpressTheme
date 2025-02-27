<?php
$front_page_id = get_option('page_on_front');
$comspanies = get_field('companies', $front_page_id);

?>
<section class="home_companies">
    <h3 class="home_companies_title section-title"><span class="active highest"><?= $comspanies['title'] ?></span> <span class="lowest"><?= $comspanies['subtitle']; ?></span></h3>
    <ul class="home_companies_category <?php if (wp_is_mobile()) {
                                            echo ('overfllow');
                                        } ?>">
        <li class="active <?php if (wp_is_mobile()) {
                                echo ('overfllow_item');
                            } ?>"><?= __('Wszystkie kategorie', 'devmn'); ?></li>
        <?php get_template_part('template/loop/home_companies_category'); ?>
        <li id='show_more_cat <?php if (wp_is_mobile()) {
                                    echo ('overfllow_item');
                                } ?>'>...</li>
    </ul>
    <div class="home_companies_items">
        <!-- <div class="home_companies_items_wrap"> -->
            <?php get_template_part('template/loop/home_companies'); ?>
        <!-- </div> -->
    </div>
</section>