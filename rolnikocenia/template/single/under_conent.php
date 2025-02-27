<section class="home_posts">
    <div class="container">
        <div class="home_posts_important">
            <h3 class="home_posts_important_title section-title">
                <?php
                $title = get_field('single_relation_title');
                if (!$title) {
                    $title = __('POWIĄZANE ARTYKUŁY', 'devmn');
                }
                echo ($title);
                ?>

            </h3>
            <div class="home_posts_important_items">
                <?php get_template_part('template/loop/post'); ?>
            </div>
        </div>
        <div class="home_posts_events">
            <h3 class="home_posts_events_title section-title">
                <?php
                $eventTitle = get_field('single_relation_title');
                if (!$eventTitle) {
                    $eventTitle = __('Zbliżające się wydarzenia', 'devmn');
                }
                echo ($eventTitle);
                ?>
            </h3>
            <div class="home_posts_events_items">
                <?php get_template_part('template/loop/events', '', array(
                    'events_per_page' => 6
                )); ?>
            </div>
        </div>
    </div>
</section>