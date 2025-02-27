<?php
/*
  Template Name: Strona Główna
 */

get_header();
?>
<div class="content">
  <?php
  get_template_part('template/home/header');
  get_template_part('template/home/text');
  get_template_part('template/home/icons');
  get_template_part('template/home/text_right');
  get_template_part('template/home/technology');
  get_template_part('template/home/realization');
  ?>
</div>

<?php
get_footer();
?>