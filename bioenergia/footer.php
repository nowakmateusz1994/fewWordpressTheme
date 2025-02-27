<?php get_template_part('template/cta'); ?>
<footer class="footer">
    <div class="footer_contact">
        <div class="container">
            <div class="first_col">
                <h3><?= __('Kontakt', 'devmn'); ?></h3>
                <div class="foot_contact">
                    <!-- get_stylesheet_directory_uri(); -->
                    <div class="foot_contact_item">
                        <div class="foot_contact_item_icon"><img src='<?= get_stylesheet_directory_uri(); ?>/dist/svg/map.svg' /></div>
                        <div class="foot_contact_item_data">
                            <?= get_field('contact_name', 'options'); ?></br><?= get_field('contact_address', 'options'); ?>
                        </div>
                    </div>
                    <?php $phones = get_field('contact_phones', 'options');
                    foreach ($phones as $phone): ?>
                        <div class="foot_contact_item">
                            <div class="foot_contact_item_icon"><img src='<?= get_stylesheet_directory_uri(); ?>/dist/svg/phone.svg' /></div>
                            <div class="foot_contact_item_data"><a href="tel:<?= $phone['number']; ?>"><?= $phone['number']; ?></a></div>
                        </div>
                    <?php endforeach; ?>
                    <?php $mails = get_field('contact_emails', 'options');
                    foreach ($mails as $mail): ?>
                        <div class="foot_contact_item">
                            <div class="foot_contact_item_icon"><img src='<?= get_stylesheet_directory_uri(); ?>/dist/svg/mail.svg' /></div>
                            <div class="foot_contact_item_data"><a href="mailt:<?= $mail['email'] ?>"><?= $mail['email'] ?></a></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="second_col">
                <div class="foot_menu_col">
                    <h3><?= __('Nawigacja', 'devmn'); ?></h3>
                    <?php devmn_foot_nav(); ?>
                </div>
                <div class="foot_menu_col">
                    <h3><?= __('OSD', 'devmn'); ?></h3>
                    <?php devmn_foot_about_nav(); ?>
                </div>


                <div class="foot_menu_col">
                    <h3><?= __('Oferta', 'devmn'); ?></h3>
                    <?php devmn_foot_offer_nav(); ?>
                </div>
                <div class="foot_social_col">
                    <?= __('Znajdziesz nas na', 'devmn'); ?> <a href='<?php the_field('contact_facebook','options'); ?>'><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="footer_copy">
                <span><?= __('Copyright (c) 2024 Broenergia', 'devmn'); ?></span>
                <div class="footer_copy_nav"><?php devmn_foot_realization_nav(); ?></div>
            </div>
            <div class="footer_done">
                DO GÓRY <span id="go_up"><i class="fas fa-chevron-up"></i></span>
            </div>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>
</div>
</body>

</html>