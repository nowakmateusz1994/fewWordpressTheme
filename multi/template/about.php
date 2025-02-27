<?php
/*
  Template Name: O nas
 */

get_header();
?>
<div class="content">
  <div class="about_content container">
    <?php the_content(); ?>
  </div>
  <?php get_template_part('template/about/employes'); ?>
</div>

<?php
get_footer();
?>