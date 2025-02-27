<?php
/*
  Template Name: Oferta
 */

get_header();
?>
<div class="content">
  <div class="content">
    <?php get_template_part('template/offer/items'); ?>
    <div class="offer_content">
      <?php the_content(); ?>
    </div>
    <?php get_template_part('template/offer/buttons'); ?>
  </div>
</div>
<?php
get_footer();
?>