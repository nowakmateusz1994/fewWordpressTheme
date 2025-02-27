<?php
/*
  Template Name: Współpraca
 */

get_header();
?>
<div class="content">
  <div class="cooperation_content">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </div>
  <?php get_template_part('template/cooperation/cafels'); ?>
  <?php get_template_part('template/cooperation/contact'); ?>
</div>

<?php
get_footer();
?>