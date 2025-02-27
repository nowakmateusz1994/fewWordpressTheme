<?php
get_header();
?>
<div class="content single">
    <div class="single_top">
        <div class="container">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                echo ('<div class="breadcrumbs container">');
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                echo ('</div>');
            }
            ?>
            <h3 class="single_title section-title"><?= the_title(); ?></h3>
        </div>
    </div>
    <div class="container">
        <div class="single_content">
            <div class="single_content_top">
                <a href="#" class="button button-green"><?= __('Wiadomości z ARIMR', 'devmn'); ?></a>
                <div class="single_date"><?= __('Opublikowane: '); ?><?= get_the_date('d F Y'); ?></div>
            </div>
            <?php
            if (is_singular('events-post')):
                $place = get_field('place');
                $start = substr(get_field('start'), 0, 2);
                $end =  str_replace('/', '.', get_field('end'));
            ?>
                <div class="single_content_events">
                    <div class="single_content_events_date">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="512" height="512" id="fi_2693507">
                            <g id="Calendar">
                                <path d="M57,8H52V6a4,4,0,0,0-8,0V8H36V6a4,4,0,0,0-8,0V8H20V6a4,4,0,0,0-8,0V8H7a5,5,0,0,0-5,5V53a5,5,0,0,0,5,5H35a1,1,0,0,0,0-2H7a3.009,3.009,0,0,1-3-3V22H60V39a1,1,0,0,0,2,0V13A5,5,0,0,0,57,8ZM46,6a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0ZM30,6a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0ZM14,6a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0ZM60,20H4V13a3.009,3.009,0,0,1,3-3h5v2a4,4,0,0,0,8,0V10h8v2a4,4,0,0,0,8,0V10h8v2a4,4,0,0,0,8,0V10h5a3.009,3.009,0,0,1,3,3Z"></path>
                                <path d="M30,29a2,2,0,0,0-2-2H24a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V29h4v3Z"></path>
                                <path d="M18,29a2,2,0,0,0-2-2H12a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V29h4v3Z"></path>
                                <path d="M52,34a2,2,0,0,0,2-2V29a2,2,0,0,0-2-2H48a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2Zm-4-5h4v3H48Z"></path>
                                <path d="M30,38a2,2,0,0,0-2-2H24a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V38h4v3Z"></path>
                                <path d="M18,38a2,2,0,0,0-2-2H12a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V38h4v3Z"></path>
                                <path d="M28,45H24a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2V47A2,2,0,0,0,28,45Zm-4,5V47h4v3Z"></path>
                                <path d="M36,34h4a2,2,0,0,0,2-2V29a2,2,0,0,0-2-2H36a2,2,0,0,0-2,2v3A2,2,0,0,0,36,34Zm0-5h4v3H36Z"></path>
                                <path d="M34,41a2,2,0,0,0,2,2,1,1,0,0,0,0-2V38h4a1,1,0,0,0,0-2H36a2,2,0,0,0-2,2Z"></path>
                                <path d="M16,45H12a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2V47A2,2,0,0,0,16,45Zm-4,5V47h4v3Z"></path>
                                <path d="M49,36A13,13,0,1,0,62,49,13.015,13.015,0,0,0,49,36Zm0,24A11,11,0,1,1,60,49,11.013,11.013,0,0,1,49,60Z"></path>
                                <path d="M54.778,44.808,47,52.586,43.465,49.05a1,1,0,0,0-1.414,1.414l4.242,4.243a1,1,0,0,0,1.414,0l8.485-8.485a1,1,0,0,0-1.414-1.414Z"></path>
                            </g>
                        </svg> <?= $start . '-' . $end; ?>
                    </div>
                    <?php if ($place): ?>
                        <div class="single_content_events_place">
                            <svg version="1.1" id="fi_684809" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257
			c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22
			C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34
			C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180
			C406.1,207.121,398.689,233.688,384.866,256.818z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z
			 M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2
			C316.1,212.683,289.784,240.2,256,240.2z"></path>
                                    </g>
                            </svg> <?= $place; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="single_thumbnail">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <div class="single_description">
                <?php the_content(); ?>
            </div>
            <div class="comment_form">
                <?php comment_form(); ?>
            </div>

            <ul class="commentlist">
                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </ul>
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
                            'field_name' => 'adds_single_under_form',
                            'is_options' => 'options',
                            'size' => 'medium'
                        )
                    );
                    ?>
                </div>

                <?php get_template_part('template/single/too'); ?>

                <div class="archive_sidebar_add">
                    <?php
                    get_template_part(
                        'template/adds/add',
                        '',
                        array(
                            'field_name' => 'adds_single_under_events',
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
