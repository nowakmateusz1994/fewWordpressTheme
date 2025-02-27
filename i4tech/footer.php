<footer>
    <div class="footer_top">
        <div class="container">
            <div class="foot_col">
                <a href='<?= home_url(); ?>'>
                    <?= wp_get_attachment_image(get_field('contact_foot_logo', 'options'), 'full'); ?>
                </a>
            </div>
            <div class="foot_col">
                <div class="foot_col_icon"><img loading="lazy" src="<?= get_stylesheet_directory_uri(); ?>/dist/svg/location.svg" /></div>
                <div class="foot_col_content"><?php the_field('contact_address', 'options') ?></div>
            </div>
            <div class="foot_col">
                <div class="foot_col_icon"><img loading="lazy" src="<?= get_stylesheet_directory_uri(); ?>/dist/svg/open-mail.svg" /></div>
                <div class="foot_col_content"><a href="mailto:<?php the_field('contact_e-mail', 'options') ?>"><?php the_field('contact_e-mail', 'options') ?></a></div>
            </div>
            <div class="foot_col">
                <div class="foot_col_icon"><img loading="lazy" src="<?= get_stylesheet_directory_uri(); ?>/dist/svg/phone.svg" /></div>
                <div class="foot_col_content"><a href="tel:<?php the_field('contact_phone', 'options') ?>"><?php the_field('contact_phone', 'options') ?></a></div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="footer_copy">
                <?= __('(c) 2024 Progster', 'devmn'); ?> <a href="<?= get_privacy_policy_url(); ?>"><?= __('Polityka Prywatności', 'devmn'); ?></a>
            </div>
            <div class="footer_done">
                <?= __('Projekt i wykonanie: ', 'devmn'); ?> <a href="https://www.nyloncoffee.pl" target="_blank" rel="noopener">Agencja Reklamowa Nylon Coffee&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="17" height="19" viewBox="0 0 17 19">
                        <g id="NylonCoffee_-_ico" data-name="NylonCoffee - ico" transform="translate(-75.678 -19.474)">
                            <g id="Group_2" data-name="Group 2">
                                <g id="Group_1" data-name="Group 1">
                                    <path id="Path_7" data-name="Path 7" d="M84.205,26.786A8.326,8.326,0,0,1,85.719,28.3c1.158,1.519,1.367,2.627,1.507,2.365a7.8,7.8,0,0,0,.283-2.36,4.6,4.6,0,0,0-.539-2.093c-.624-1.21-1.81-1.816-2.421-3.289a4,4,0,0,1-.31-2.07c.067-.616.6-1.656.185-1.309,0,0-2.148,1.433-2.185,3.55A4.161,4.161,0,0,0,84.205,26.786Z" fill="#fff"></path>
                                    <path id="Path_8" data-name="Path 8" d="M85.95,23.619a4.6,4.6,0,0,1,.789.866c.591.863.677,1.475.761,1.335a4.281,4.281,0,0,0,.219-1.284,2.519,2.519,0,0,0-.239-1.159c-.309-.679-.942-1.041-1.238-1.863a2.211,2.211,0,0,1-.111-1.14c.053-.335.375-.89.136-.712a2.765,2.765,0,0,0-1.291,1.886A2.279,2.279,0,0,0,85.95,23.619Z" fill="#fff"></path>
                                    <path id="Path_9" data-name="Path 9" d="M92.644,27.151a.413.413,0,0,0-.166-.325.428.428,0,0,0-.308-.131H88.517c-.236,0,1.228.006,1.228,1.2v5.442a1.609,1.609,0,0,1-2.637,1.288c-.321-.376-2.449-3.578-2.449-3.578-.129-.192-.383-.161-.383.071v3.406c0,.988-2.784.3-2.784-1.473V27.931c0-1.2,1.462-1.2,1.227-1.2H79.067a.422.422,0,0,0-.411.336.379.379,0,0,0-.026.131v.814l-1.782,0h0a1.176,1.176,0,0,0-.958.393c-.332.425-.216.984-.029,1.671A7.234,7.234,0,0,0,77.2,32.822a2.968,2.968,0,0,0,1.6.87l.135.04c.046.154.1.307.161.456a4.015,4.015,0,0,0,1.216,1.686,6.928,6.928,0,0,0,2.556,1.364c-1.41.12-2.337.327-2.337.56,0,.372,2.359.674,5.269.674s5.269-.3,5.269-.674c0-.243-1.006-.455-2.51-.574a6.953,6.953,0,0,0,2.406-1.35,3.928,3.928,0,0,0,.861-.977,6.6,6.6,0,0,0,.85-3.724ZM78.216,31.886A5.727,5.727,0,0,1,77.2,29.724c-.039-.145-.067-.257-.088-.348l1.472,0v1.51c0,.363.03.842.081,1.33A1.142,1.142,0,0,1,78.216,31.886Z" fill="#fff"></path>
                                </g>
                            </g>
                        </g>
                    </svg></a></div>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>
</div>
</body>

</html>