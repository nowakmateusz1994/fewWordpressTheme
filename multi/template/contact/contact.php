<?php $contact = get_field('contact_form'); ?>
<section class="form_contact">
    <div class="form_contact_img"><?= wp_get_attachment_image($contact['img'], 'full'); ?></div>
    <div class="container">
        <div class="form_contact_content">
            <h3 class="form_contact_title section-title"><?= $contact['title']; ?></h3>
        </div>
        <div class="form_contact_form"><?= do_shortcode($contact['form']); ?></div>
    </div>
</section>