<?php
/*
  Template Name: Do pobrania
 */

get_header();
?>
<div class="content">
  <?php $download = get_field('download'); ?>
  <section class="download">
    <div class="container">
      <?php foreach ($download as $item): ?>
        <div class="download_item" id='<?= $item['id']; ?>'>
          <div class="download_item_supertitle section-supertitle"><?= $item['supertitle']; ?></div>
          <h3 class="download_item_title section-title"><?= $item['title']; ?></h3>
          <div class="download_item_files">
            <?php foreach ($item['items'] as $file): ?>
              <div class="download_item_file">
                <div class="download_item_file_title"><?= $file['name'] ?></div>
                <div class="download_item_file_button"><a class="button" href="<?= $file['file']; ?>" download><?= __('Pobierz', 'devmn'); ?></a></div>
                <a class="absolute" href="<?= $file['file']; ?>" download></a>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</div>

<?php
get_footer();
?>