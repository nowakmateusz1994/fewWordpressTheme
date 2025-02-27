<?php $top = get_field('contact_top'); ?>
<section class="contact_cafels">
    <div class="container">
        <h3 class="contact_cafels_title section-title"><?= $top['title']; ?></h3>
        <div class="contact_cafels_subtitle"><?= $top['subtitle']; ?></div>
        <div class="contact_cafels_items">
            <div class="contact_cafels_item">

                <div class="contact_cafels_item_content">
                    <div class="contact_cafels_item_icon"><i class="fas fa-map-marker-alt"></i></div>
                    <?php the_field('name', 'options'); ?>
                    </br>
                    <?php the_field('address', 'options'); ?>
                    </br>
                    <?php
                    _e('NIP: ', 'devmn');
                    the_field('nip', 'options');
                    ?>
                    </br>
                    <?php
                    _e('REGON: ', 'devmn');
                    the_field('regon', 'options');
                    ?>
                </div>
            </div>
            <div class="contact_cafels_item">

                <div class="contact_cafels_item_content">
                    <div class="contact_cafels_item_icon"><i class="fas fa-envelope"></i></div>
                    <a href='mailto:<?php the_field('e-mail', 'options'); ?>'><?php the_field('e-mail', 'options'); ?>'</a>
                </div>
            </div>
            <div class="contact_cafels_item">

                <div class="contact_cafels_item_content">
                    <div class="contact_cafels_item_icon"><i class="fas fa-phone-alt"></i></div>
                    <a href='tel:<?php the_field('phone', 'options'); ?>'><?php the_field('phone', 'options'); ?></a>
                </div>
            </div>
            <div class="contact_cafels_item">
                <div class="contact_cafels_item_content">
                    <a href='<?php the_field('facebook', 'options'); ?>'><i class="fab fa-facebook"></i></a>
                    </br>
                    <?= __('Odwiedź nas w social mediach', 'devmn'); ?>
                </div>
            </div>
        </div>
        <div class="contact_cafels_bottom"><?= $top['bottom']; ?></div>
    </div>
</section>