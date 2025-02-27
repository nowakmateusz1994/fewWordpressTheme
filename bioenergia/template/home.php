<?php
/*
  Template Name: Strona Główna
 */

get_header();
?>
<div class="content">
    <?php
    get_template_part('template/home/slider');
    get_template_part('template/home/offer');
    get_template_part('template/home/text');
    get_template_part('template/home/highlight');
    get_template_part('template/home/short');
    ?>
</div>

<?php
get_footer();
?>