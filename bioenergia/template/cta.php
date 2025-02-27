<?php $cta = get_field('cta', 'options'); ?>
<section class="cta">
    <div class="cta_graph"><?= wp_get_attachment_image($cta['graph'], 'medium'); ?></div>
    <div class="cta_content">
        <div class="container">
            <div class="cta_contact_wrap">
                <h3 class="cta_title"><?= $cta['title']; ?></h3>
                <div class="cta_subtitle"><?= $cta['subtitle']; ?></div>
                <div class="cta_contact_items">
                    <div class="cta_contact_item email">
                        <div class="cta_contact_icon"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/svg/mail.svg" alt="<?= __('Ikona e-mail', 'devmn'); ?>" /></div>
                        <?php $emails = get_field('contact_emails', 'options'); ?>
                        <div class="cta_contact_content"><a href="mailto:<?= $emails[0]['email']; ?>"><?= $emails[0]['email']; ?></a></div>
                    </div>
                    <div class="cta_contact_item phone">
                        <?php $phones = get_field('contact_phones', 'options'); ?>
                        <div class="cta_contact_icon"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/svg/phone.svg" alt="<?= __('Ikona telefonu', 'devmn'); ?>" /></div>
                        <div class="cta_contact_content"><a href="tel:<?= $phones[0]['number']; ?>"><?= $phones[0]['number'] ?></a></div>
                    </div>
                </div>
                <a href="<?= $cta['url']['url']; ?>" class="button button-white"><?= $cta['url']['title']; ?></a>
            </div>
        </div>
    </div>
    <div class="cta_img"><?= wp_get_attachment_image($cta['img'], 'full'); ?></div>
</section>