<footer class="footer">
    <div class="container">
        <div class="footer_col">
            <div class="footer_brand">
                <?php if (get_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href='<?= home_url(); ?>'>
                        <h1 class="site-title section-title"><?php bloginfo('name'); ?></h1>
                    </a>
                <?php endif; ?>
            </div>
            <div class="footer_item">
                <strong><?php the_field('name', 'options'); ?></strong>
                </br>
                <?php the_field('address', 'options'); ?>
                </br>
                <?php
                _e('NIP: ', 'devmn');
                the_field('nip', 'options');
                ?>
            </div>
        </div>
        <div class="footer_col">
            <div class="footer_item_title"><?= __('Kontakt', 'devmn'); ?></div>
            <div class="footer_item_content">
                <a href='mailto:<?php the_field('e-mail', 'options'); ?>'><i class="fas fa-envelope"></i><?php the_field('e-mail', 'options'); ?></a>
                </br>
                <a href='tel:<?php the_field('phone', 'options'); ?>'><i class="fas fa-phone-alt"></i><?php the_field('phone', 'options'); ?></a>
                </br>
                <?= __('Poniedziałek - Piątek</br>od 8:00 do 16:00', 'devmn'); ?>
            </div>
        </div>
        <div class="footer_col">
            <div class="footer_item_title"><?= __('Nawigacja', 'devmn'); ?></div>
            <div class="footer_item_content">
                <?php devmn_foot_nav() ?>
            </div>
        </div>
        <div class="footer_col">
            <div class="footer_item_title"><?= __('Social media', 'devmn'); ?></div>
            <div class="footer_item_content social">
                <a href='<?php the_field('facebook', 'options'); ?>'><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </div>
    <div class="footer_bottom container">
        <div class="footer_copy"><?= __('Copyright © 2022 multiGrupa | All rights reserved', 'devmn'); ?></div>
        <div class="footer_policy">
            <?= __(' Korzystając z serwisu akceptujesz ', 'devmn'); ?>
            <a href="<?= get_privacy_policy_url(); ?>"><?= __('politykę prywatności', 'devmn'); ?></a>
            <span id='go_up'><i class="fas fa-chevron-up"></i></span>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>
</div>
</body>

</html>