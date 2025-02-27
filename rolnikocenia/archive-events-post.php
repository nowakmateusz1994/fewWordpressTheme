<?php
/*
Template Name: Archives
*/
get_header();
?>

<div class="content">
    <div class="archive inner-content container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            echo ('<div class="breadcrumbs container">');
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            echo ('</div>');
        }
        ?>
        <div class="archive_posts">
            <div class="archive_posts_items container">

                <?php
                $i = 0;
                if (have_posts()) : while (have_posts()) : the_post();
                        $start = get_field('start');
                        $end = get_field('end');
                ?>
                        <div class="home_posts_events_item">
                            <a href="<?php the_permalink(); ?>" class="absolute"></a>
                                    <?php
                                    $cats = get_the_terms(get_the_id(), 'event_cat');
                                    ?>
                                    <div class="home_posts_events_item_cats">
                                        <?php foreach ($cats as $cat): ?>
                                            <a href="<?= get_term_link($cat); ?>" style="background-color:<?= get_field('color', $cat); ?>"><?= $cat->name; ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="home_posts_events_item_title"><?php the_title(); ?></div>
                                    <?php
                                    if ($start && $end) {
                                        $start = substr($start, 0, 2);
                                        $end =  str_replace('/', '.', $end);
                                    ?>
                                        <div class="home_posts_events_item_date">
                                            <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.33333 13.6666C0.966667 13.6666 0.652778 13.536 0.391667 13.2749C0.130556 13.0138 0 12.6999 0 12.3333V2.99992C0 2.63325 0.130556 2.31936 0.391667 2.05825C0.652778 1.79714 0.966667 1.66659 1.33333 1.66659H2V0.333252H3.33333V1.66659H8.66667V0.333252H10V1.66659H10.6667C11.0333 1.66659 11.3472 1.79714 11.6083 2.05825C11.8694 2.31936 12 2.63325 12 2.99992V12.3333C12 12.6999 11.8694 13.0138 11.6083 13.2749C11.3472 13.536 11.0333 13.6666 10.6667 13.6666H1.33333ZM1.33333 12.3333H10.6667V5.66658H1.33333V12.3333ZM1.33333 4.33325H10.6667V2.99992H1.33333V4.33325ZM6 8.33325C5.81111 8.33325 5.65278 8.26936 5.525 8.14159C5.39722 8.01381 5.33333 7.85547 5.33333 7.66658C5.33333 7.4777 5.39722 7.31936 5.525 7.19159C5.65278 7.06381 5.81111 6.99992 6 6.99992C6.18889 6.99992 6.34722 7.06381 6.475 7.19159C6.60278 7.31936 6.66667 7.4777 6.66667 7.66658C6.66667 7.85547 6.60278 8.01381 6.475 8.14159C6.34722 8.26936 6.18889 8.33325 6 8.33325ZM3.33333 8.33325C3.14444 8.33325 2.98611 8.26936 2.85833 8.14159C2.73056 8.01381 2.66667 7.85547 2.66667 7.66658C2.66667 7.4777 2.73056 7.31936 2.85833 7.19159C2.98611 7.06381 3.14444 6.99992 3.33333 6.99992C3.52222 6.99992 3.68056 7.06381 3.80833 7.19159C3.93611 7.31936 4 7.4777 4 7.66658C4 7.85547 3.93611 8.01381 3.80833 8.14159C3.68056 8.26936 3.52222 8.33325 3.33333 8.33325ZM8.66667 8.33325C8.47778 8.33325 8.31944 8.26936 8.19167 8.14159C8.06389 8.01381 8 7.85547 8 7.66658C8 7.4777 8.06389 7.31936 8.19167 7.19159C8.31944 7.06381 8.47778 6.99992 8.66667 6.99992C8.85556 6.99992 9.01389 7.06381 9.14167 7.19159C9.26945 7.31936 9.33333 7.4777 9.33333 7.66658C9.33333 7.85547 9.26945 8.01381 9.14167 8.14159C9.01389 8.26936 8.85556 8.33325 8.66667 8.33325ZM6 10.9999C5.81111 10.9999 5.65278 10.936 5.525 10.8083C5.39722 10.6805 5.33333 10.5221 5.33333 10.3333C5.33333 10.1444 5.39722 9.98603 5.525 9.85825C5.65278 9.73047 5.81111 9.66658 6 9.66658C6.18889 9.66658 6.34722 9.73047 6.475 9.85825C6.60278 9.98603 6.66667 10.1444 6.66667 10.3333C6.66667 10.5221 6.60278 10.6805 6.475 10.8083C6.34722 10.936 6.18889 10.9999 6 10.9999ZM3.33333 10.9999C3.14444 10.9999 2.98611 10.936 2.85833 10.8083C2.73056 10.6805 2.66667 10.5221 2.66667 10.3333C2.66667 10.1444 2.73056 9.98603 2.85833 9.85825C2.98611 9.73047 3.14444 9.66658 3.33333 9.66658C3.52222 9.66658 3.68056 9.73047 3.80833 9.85825C3.93611 9.98603 4 10.1444 4 10.3333C4 10.5221 3.93611 10.6805 3.80833 10.8083C3.68056 10.936 3.52222 10.9999 3.33333 10.9999ZM8.66667 10.9999C8.47778 10.9999 8.31944 10.936 8.19167 10.8083C8.06389 10.6805 8 10.5221 8 10.3333C8 10.1444 8.06389 9.98603 8.19167 9.85825C8.31944 9.73047 8.47778 9.66658 8.66667 9.66658C8.85556 9.66658 9.01389 9.73047 9.14167 9.85825C9.26945 9.98603 9.33333 10.1444 9.33333 10.3333C9.33333 10.5221 9.26945 10.6805 9.14167 10.8083C9.01389 10.936 8.85556 10.9999 8.66667 10.9999Z" fill="#333" />
                                            </svg>
                                            <?= $start . '-' . $end;  ?>
                                        </div>
                                        <?php $place = get_field('place');
                                        if ($place):
                                        ?>
                                            <div class="home_posts_events_item_date">
                                                <svg version="1.1" id="fi_684809" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257
			c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22
			C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34
			C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180
			C406.1,207.121,398.689,233.688,384.866,256.818z" fill='#333'></path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z
			 M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2
			C316.1,212.683,289.784,240.2,256,240.2z" fill='#333'></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <?= $place; ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php } ?>
                        </div>

                        <?php if ($i == 2):
                            echo ('<div class="archive_posts_add">');
                            get_template_part(
                                'template/adds/add',
                                '',
                                array(
                                    'field_name' => 'adds_archive_beetwen',
                                    'is_options' => 'options',
                                    'size' => 'full'
                                )
                            );
                            echo ('</div>');
                        endif; ?>
                <?php
                        $i++;
                    endwhile;
                endif;
                ?>

            </div>
        </div>
        <div class="archive_sidebar">
            <div class="archive_sidebar_top">
                <?php get_template_part('template/archive/form'); ?>
                <div class="archive_sidebar_add">
                    <?php
                    get_template_part(
                        'template/adds/add',
                        '',
                        array(
                            'field_name' => 'adds_archive_under_form',
                            'is_options' => 'options',
                            'size' => 'medium'
                        )
                    );
                    ?>
                </div>
                <?php
                $arr = (array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 3,
                    'orderby'           => 'date',
                    'order'             => 'DESC',
                ));

                $the_query = new WP_Query($arr);
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();

                        get_template_part('template/archive/events-sidebar');
                    }
                }
                ?>
                <div class="archive_sidebar_add">
                    <?php
                    get_template_part(
                        'template/adds/add',
                        '',
                        array(
                            'field_name' => 'adds_archive_under_events',
                            'is_options' => 'options',
                            'size' => 'medium'
                        )
                    );
                    ?>
                </div>
            </div>
        </div>

        <?php get_template_part('template/archive/under_post'); ?>
        <div class="archive_sidebar_bottom">
            <?php
            get_template_part(
                'template/adds/add',
                '',
                array(
                    'field_name' => 'adds_archive_sidebar_bottom',
                    'is_options' => 'options',
                    'size' => 'medium'
                )
            );
            ?>
        </div>

    </div>
</div>
<?php

get_template_part('template/home/companies');

get_footer();
