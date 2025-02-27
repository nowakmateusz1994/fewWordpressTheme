<?php $news = get_field('news'); ?>
<section class="home_news">
    <div class="container">
        <h3 class="home_news_title section-title"><?= $news['title']; ?></h3>
        <div class="home_news_items">
            <div class="home_news_items_first">
                <?php
                get_template_part(
                    'template/loop/news',
                    '',
                    array(
                        'post_per_page' => 1,
                        'offset' => 0
                    )
                );
                ?>
            </div>
            <div class="home_news_items_left">
                <?php
                get_template_part(
                    'template/loop/news',
                    '',
                    array(
                        'post_per_page' => 3,
                        'offset' => 1
                    )
                );
                ?>
            </div>
            <div class="home_news_items_bottom">
                <?php
                if (wp_is_mobile()) {
                    $num = 2;
                } else {
                    $num = 3;
                }
                get_template_part(
                    'template/loop/news',
                    '',
                    array(
                        'post_per_page' => $num,
                        'offset' => 4
                    )
                );
                ?>
            </div>
            <div class="home_news_items_last">
                <?php
                if (wp_is_mobile()) {
                    $offset = 6;
                } else {
                    $offset = 7;
                }
                get_template_part(
                    'template/loop/news',
                    '',
                    array(
                        'post_per_page' => 1,
                        'offset' => $offset
                    )
                );
                ?>
            </div>
            <div class="home_news_add">
                <?php
                get_template_part(
                    'template/adds/add',
                    '',
                    array(
                        'field_name' => 'news_add',
                        'size' => 'medium',
                        'is_options' => false
                    )
                );
                ?>
            </div>
        </div>
        <div class="home_news_url">
            <a href="<?= get_post_type_archive_link('post');; ?>" class="button"><?= __('Przeglądaj wszystkie artykuły', 'devmn'); ?>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_191_2478" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask0_191_2478)">
                        <path d="M14 18L12.6 16.55L16.15 13H4V11H16.15L12.6 7.45L14 6L20 12L14 18Z" fill="white" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
</section>