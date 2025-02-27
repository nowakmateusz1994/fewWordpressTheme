<?php
/*
  Template Name: Kontakt
 */

get_header();
?>
<div class="contact fadeIn animated">
  <div class="container">
    <?php the_content(); ?>
  </div>
</div>
<div class="map"  data-animate='fadeInUp'><?php the_field('contact_map', 'options'); ?></div>


<?php
get_footer();
?>