<?php
get_header();
?>
<div class="content">
    <h3 class="single_title section-title"><?php the_title(); ?></h3>
    <div class="single_date"><?= get_the_date(('j F Y')); ?></div>
    <div class="single_description"><?php the_content(); ?></div>


    <?php get_template_part('template/flexible'); ?>
</div>
<?php
get_footer();
