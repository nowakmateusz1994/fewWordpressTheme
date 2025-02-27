<?php $text_right = get_field('home_text_right'); ?>
<section class="text-right">
  <div class="container">
    <div class="text-right_content" data-animate='fadeInLeft'>
      <h3 class="text-right_title section-title"><?= $text_right['title']; ?></h3>
      <h4 class="text-right_subtitle section-subtitle"><?= $text_right['subtitle']; ?></h4>
      <div class="text-right_description"><?= $text_right['description']; ?></div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="930" height="852.383" viewBox="0 0 930 852.383" data-animate='fadeInRight'>
    <defs>
      <clipPath id="clip-path">
        <path id="Rectangle_14" data-name="Rectangle 14" d="M917,3236.684l323-769H1353.67v0H1898v767h-36v2H1316v0Z" fill="#555" />
      </clipPath>
    </defs>
    <g id="video" transform="translate(-916.999 -2430.683)">
      <g id="image">
        <path id="Rectangle_2_copy_31" data-name="Rectangle 2 copy 31" d="M1410.744,2430.683H1853l-358.019,852.383h-442.26Z" fill="#fdc300" />
        <g id="Rectangle_14-2" data-name="Rectangle 14">
          <path id="Rectangle_14-3" data-name="Rectangle 14" d="M917,3236.684l323-769H1353.67v0H1898v767h-36v2H1316v0Z" fill="#555" />
          <g id="Clip" clip-path="url(#clip-path)">
            <image id="Warstwa_772" data-name="Warstwa 772" width="1065" height="1618" transform="translate(837 1983)" xlink:href="<?= wp_get_attachment_image_url($text_right['img'], 'full') ?>" />
          </g>
        </g>
      </g>
    </g>
  </svg>
</section>