<?php
/*
  Template Name: Oferta
 */

get_header();
?>
<div class="content">
  <section class="offer">
    <?php
    $offer = get_field('offer');
    $i = 0;
    foreach ($offer as $item):
    ?>
      <div class="offer_item" id='offer_item_<?= $i; ?>'>
        <div class="container">
          <div class="offer_item_supertitle section-supertitle"><?= $item['supertitle']; ?></div>
          <h3 class="offer_item_title section-title"><?= $item['title']; ?></h3>
          <div class="offer_item_description"><?= $item['description']; ?></div>
          <?php if ($item['gallery']): ?>
            <div class="offer_item_gallery">
              <?php foreach ($item['gallery'] as $img): ?>
                <div class="offer_item_gallery_img">
                  <a href="<?= wp_get_attachment_image_url($img, 'full'); ?>" rel="lightbox-<?= $i; ?>">
                    <?= wp_get_attachment_image($img, 'foundation-medium'); ?>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($item['file']): ?>
            <div class="offer_item_gallery_url"><a class="button" href="<?= $item['file'] ?>" download=""><?= __('Pobierz katalog', 'devmn'); ?></a></div>
          <?php endif; ?>
        </div>
      </div>
    <?php
      $i++;
    endforeach;
    ?>
  </section>
</div>

<?php
get_footer();
?>