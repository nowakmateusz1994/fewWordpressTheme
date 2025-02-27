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
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php if ($i < 3) {
                            get_template_part('template/archive/top');
                        } else {
                            get_template_part('template/archive/bottom');
                        }
                        ?>


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
                    wp_reset_postdata();
                    ?>

                <?php
                endif;
                devmn_page_navi()
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
                <?php get_template_part('template/loop/events', '', array(
                    'events_per_page' => 6
                )); ?>

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
