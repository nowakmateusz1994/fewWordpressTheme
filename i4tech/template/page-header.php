<?php
$img = get_field('page_header_img');
if (!$img) {
    $img = get_field('page_header_img', 'options');
}

$title = get_field('page_header_title');
if (!$title) {
    $title = get_the_title();
}

if (is_archive()) {
    $title = __('Blog', 'devmn');
}

if (is_post_type_archive('realizations') || is_singular('realizations')) {
    $title = __('Realizacje', 'devmn');
}
?>
<section class="page_header fadeIn animated">
    <?= wp_get_attachment_image($img, 'full'); ?>
    <div class="container">
        <h1 class="page_header_title"><?= $title; ?></h1>
    </div>
</section>