<?php
/*
  Template Name: Kontakt
 */

get_header();
?>
<div class="content">
  <section class="contact">
    <div class="container">
      <div class="col_left">
      <div class="contact_item_title"><?= get_field('contact_name', 'options'); ?></div> 
        <div class="contact_item"> 
        <div class="contact_item_icon"><img src='<?= get_stylesheet_directory_uri(); ?>/dist/svg/map.svg' /></div>
          <div class="contact_item_data">
            <?= get_field('contact_address', 'options'); ?>
          </div>
        </div>
        <?php $phones = get_field('contact_phones', 'options');
        foreach ($phones as $phone): ?>
          <div class="contact_item">
            <div class="contact_item_icon"><img src='<?= get_stylesheet_directory_uri(); ?>/dist/svg/phone.svg' /></div>
            <div class="contact_item_data"><a href="tel:<?= $phone['number']; ?>"><?= $phone['number']; ?></a></div>
          </div>
        <?php endforeach; ?>
        <?php $mails = get_field('contact_emails', 'options');
        foreach ($mails as $mail): ?>
          <div class="contact_item">
            <div class="contact_item_icon"><img src='<?= get_stylesheet_directory_uri(); ?>/dist/svg/mail.svg' /></div>
            <div class="contact_item_data"><a href="mailt:<?= $mail['email'] ?>"><?= $mail['email'] ?></a></div>
          </div>
        <?php endforeach; ?>

      </div>
      <div class="col_right"><?= do_shortcode(get_field('contact_form','options')); ?></div> 
    </div>
    <div class="contact_map"><?php the_field('contact_map','options'); ?></div>
  </section>
</div>

<?php
get_footer();
?>