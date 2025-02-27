<?php
/*
  Template Name: O nas
 */
get_header();
?>
<div class="about">
  <div class="about_header">
    <div class="container">
      <?php if (get_field('about_header_title')) : ?>
        <h3 class="section-title"><?= get_field('about_header_title'); ?></h3>
      <?php endif; ?>
      <?php if (get_field('about_header_subtitle')) : ?>
        <div class="section-subtitle"><?= get_field('about_header_subtitle'); ?></div>
      <?php endif; ?>
      <?php if (get_field('about_header_description')) : ?>
        <div class="about_header_description"><?= get_field('about_header_description'); ?></div>
      <?php endif; ?>
    </div>
  </div>

  <?php
  $companies = get_field('about_companies');
  if ($companies) :
  ?>
    <div class="about_companies">
      <div class="container">
        <?php
        $i = 0;
        foreach ($companies as $company) :
        ?>
          <div class="about_companies_item">
            <?php if ($i % 2 == 1) : ?>
              <div class="about_companies_item_medium">
                <?php if ($company['video'] || $company['oembed']) : ?>
                  <?php if ($company['video']) : ?>
                    <video controls autoplay muted loop <?php if ($company['img']) : ?> poster='<?= $company['img']['url']; ?>' <?php endif; ?>>
                      <source src='<?= $company['vide']['url']; ?>'>
                    </video>
                  <?php elseif ($company['oembed']) : ?>
                    <?= $company['oembed']; ?>
                  <?php endif; ?>
                <?php endif; ?>

                <?php if ($company['img']) : ?>
                  <img src="<?= $company['img']['url'] ?>" loading="lazy" alt='' />
                <?php endif; ?>
              </div>
            <?php endif; ?>


            <div class="about_companies_item_content">
              <div class="about_companies_item_content_wrap">
                <?php if ($company['title']) : ?>
                  <div class="about_companies_item_title"><?= $company['title']; ?></div>
                <?php endif; ?>
                <?php if ($company['subtitle']) : ?>
                  <div class="about_companies_item_subtitle"><?= $company['subtitle']; ?></div>
                <?php endif; ?>
                <?php if ($company['description']) : ?>
                  <div class="about_companies_item_description"><?= $company['description']; ?></div>
                <?php endif; ?>
              </div>
              <?php if ($company['logo']) : ?>
                <img src="<?= $company['logo']['url']; ?>" loading="lazy" alt="" />
              <?php endif; ?>
            </div>


            <?php if ($i % 2 == 0) : ?>
              <div class="about_companies_item_medium">
                <?php if ($company['video'] || $company['oembed']) : ?>
                  <?php if ($company['video']) : ?>
                    <video controls autoplay muted loop <?php if ($company['img']) : ?> poster='<?= $company['img']['url']; ?>' <?php endif; ?>>
                      <source src='<?= $company['video']['url']; ?>'>
                    </video>
                  <?php elseif ($company['oembed']) : ?>
                    <?= $company['oembed']; ?>
                  <?php endif; ?>
                <?php endif; ?>
                <?php if ($company['img'] && (!($company['video'] || $company['oembed']))) : ?>
                  <img src="<?= $company['img']['url'] ?>" loading="lazy" alt='' />
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php
          $i++;
        endforeach;
        ?>
      </div>
    </div>
  <?php endif; ?>
</div>
<?php
get_footer();
?>