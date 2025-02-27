<?php $important = get_field('imortatn'); ?>
<section class="home_posts">
    <div class="container">
        <div class="home_posts_important">
            <h3 class="home_posts_importatn section-title"><?= $important['title']; ?></h3>
            <div class="home_posts_important_items">
                <?php get_template_part('template/loop/important'); ?>
            </div>
        </div>
        <div class="home_posts_events">
            <h3 class="home_posts_events section-title"><?= $important['subtitle']; ?></h3>
            <div class="home_posts_events_items">
                <?php get_template_part('template/loop/events', '',  array(
                    'events_per_page' => 4
                ));  ?>
                <?php if (wp_is_mobile()): ?>
                    <a href="<?= get_post_type_archive_link('events-post'); ?>" class="button button-events"><?= __('Przeglądaj wszystkie wydarzenia', 'devmn'); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>