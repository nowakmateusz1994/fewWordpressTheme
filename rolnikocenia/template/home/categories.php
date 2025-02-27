<?php
$cat = get_field('cateogries');
?>

<div class="home_categories_wrap">
    <section class="home_categories">
        <form action="show_companies" class="home_categories_form">
            <h3 class="home_categories_title"><?= $cat['title']; ?></h3>
            <div class="home_categories_form_wrap">
                <span class='voivodship'>
                    <select id='voivodship' name='voivodship'>
                        <option class="placeholder" selected disabled value=""> <?= __('Wybierz region', 'devmn'); ?></option>
                        <?php get_template_part('template/loop/voivodship'); ?>
                    </select>
                </span>
                <span class='conunties'>
                    <select id='conunties' name='conunties' disabled>
                        <option class="placeholder" selected disabled value=""><?= __('Wybierz powiat', 'devmn'); ?></option>
                        <?php get_template_part('template/loop/conunties'); ?>
                    </select>
                </span>
                <span class="cat_company">
                    <select name="cat_company" id="cat">
                        <option class="placeholder" selected disabled value=""><?= __('Wybierz rodzaj działalności', 'devmn'); ?></option>
                        <?php get_template_part('template/loop/categories'); ?>
                    </select>
                </span>
                <span class='send'>
                    <input type="submit" value="<?= __("Wyszukaj firmy", "devmn"); ?>" class="button button-green">
                </span>

            </div>
        </form>
        <div class="home_categories_items_top">
            <h3 class="home_categories_items_title"><?= $cat['subtitle']; ?></h3>
            <?php if (!wp_is_mobile()): ?>
                <a href="<?= $cat['link_do_archiwum']['url']; ?>" class="button"><?= $cat['link_do_archiwum']['title']; ?></a>
            <?php endif; ?>
        </div>
    </section>
    <div class="home_categories_items">

        <div class="home_categories_items_wrap">
            <?php get_template_part('template/home/categories-loop'); ?>
        </div>
    </div>
    <?php if (wp_is_mobile()): ?>
        <div class="container">
            <a href="<?= $cat['link_do_archiwum']['url']; ?>" class="button"><?= $cat['link_do_archiwum']['title']; ?></a>
        </div>

    <?php endif; ?>
</div>