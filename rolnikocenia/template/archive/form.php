<?php $form = get_field('sidebar_form', 'options'); ?>
<div class="archive_posts_form">
    <h3 class="archive_posts_form_title section-title"><?= $form['title']; ?></h3>
    <div class="archive_posts_form_subtitle section-subtitle"><?= $form['subtitle']; ?></div>
    <div class="archive_posts_form_above"><?= $form['above']; ?></div>
    <div class="archive_posts_form_content">
        <form action="show_companies" class="home_categories_form">
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

            <button class="button button-green"><?= __("Wyszukaj firmy", "devmn"); ?>
                <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5 12L9.1 10.55L12.65 7H0.5V5H12.65L9.1 1.45L10.5 0L16.5 6L10.5 12Z" fill="white" />
                </svg>

            </button>
        </form>
    </div>
    <div class="archive_posts_form_under"><?= $form['under']; ?></div>
</div>