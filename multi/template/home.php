<?php
/*
  Template Name: Strona Główna
 */

get_header();
?>
<div class="content">
  <?php get_template_part('template/home/header'); ?>
  <?php get_template_part('template/home/offer'); ?>
  <?php get_template_part('template/home/why'); ?>
  <?php get_template_part('template/home/map'); ?>
  <?php get_template_part('template/home/text'); ?>
  <?php get_template_part('template/home/logos'); ?>
</div>

<?php
get_footer();
?>