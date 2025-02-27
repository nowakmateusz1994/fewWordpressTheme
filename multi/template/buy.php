<?php
/*
  Template Name: Kup online
 */

get_header();
?>
<div class="content">
  <section class="buy">
    <div class="container">
      <h3 class="buy_title section-title"><?php the_field('title'); ?></h3>
      <div class="buy_description"><?php the_field('description'); ?></div>
      <div class="buy_items">
        <?php foreach (get_field('items') as $item): ?>
          <div class="buy_item">
            <div class="buy_item_title section-title"><?= $item['title']; ?></div>
            <div class="buy_item_wrap">
              <div class="buy_item_img"><?= wp_get_attachment_image($item['img'], 'large'); ?></div>
              <div class="buy_item_description"><?= $item['description']; ?></div>
            </div>
            <div class="buy_item_companies">
              <?php foreach ($item['companies'] as $comp): ?>
                <div class="buy_item_company">
                  <div class="buy_item_company_img"><?= wp_get_attachment_image($comp['img'], 'small'); ?></div>
                  <div class="buy_item_company_title"><?= $comp['title']; ?></div>
                  <div class="buy_item_company_description"><?= $comp['description']; ?></div>
                  <?php if ($comp['link']): ?>
                    <div class="buy_item_company_url"><a href='<?= $comp['link']['url']; ?>'><?= $comp['link']['title'];  ?></a></div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php $bottom = get_field('bouy_bottom'); ?>
  <section class="buy_bottom">
    <div class="container">
      <h3 class="buy_bottom_title section-title"><?= $bottom['title']; ?></h3>
      <h5 class="buy_bottom_subtitle section-subtitle"><?= $bottom['subtitle']; ?></h5>
      <div class="buy_bottom_items">
        <?php foreach ($bottom['items'] as $item): ?>
          <div class="buy_bottom_item">
            <div class="buy_bottom_item_title"><?= $item['title']; ?></div>
            <div class="buy_bottom_item_subtitle"><?= $item['subtitle']; ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>

<?php
get_footer();
?>