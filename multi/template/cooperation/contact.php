<?php $contact = get_field('contact'); ?>
<section class="cooperation_contact">
    <div class="cooperation_contact_img"><?= wp_get_attachment_image($contact['img'], 'full'); ?></div>
    <div class="container">
        <div class="cooperation_contact_content">
            <h3 class="cooperation_contact_title section-title"><?= $contact['title']; ?></h3>
        </div>
        <div class="cooperation_contact_form"><?= do_shortcode($contact['form']); ?></div>
    </div>
</section>