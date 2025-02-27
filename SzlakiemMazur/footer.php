<?php
$organizers = get_field('organizers', 'options');
if ($organizers) :
?>
    <section class="organizers">
        <div class="container">
            <h3 class="section-title"><?= __('Organizatorem <span>wycieczek są:</span>', 'devmn'); ?></h3>
            <?php foreach ($organizers as $organ) : ?>
                <div class="organizers_item">
                    <?php if ($organ['url']) : ?>
                        <a href="<?= $organ['url']; ?>" target="_blank" rel="nofollow"></a>
                    <?php endif; ?>
                    <img src="<?= $organ['logo']['url']; ?>" loading="lazy" alt="<?= $organ['name']; ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>
<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-inner_col footer_addres">
                <?php foreach ($organizers as $organ) : ?>
                    <div class="footer_addres_item">
                        <img src="<?= get_stylesheet_directory_uri() . '/dist/svg/map.svg;' ?>" loading="lazy" width="32px" height='45px' />
                        <div class="footer_addres_item_wrap">
                            <strong><?= $organ['name']; ?></strong>
                            </br>
                            <?= $organ['address']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="footer-inner_col footer_tags">
                <?php $atractionTag = get_terms('product_tag');
                foreach ($atractionTag as $tag) :
                    $title = get_field('title', 'product_tag_' . $tag->term_id);
                ?>
                    <div class="footer_tags_item">
                        <a href="<?= get_term_link($tag->term_id, 'product_tag'); ?>"><?= $title; ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="footer-inner_col last">
                <?php if (is_active_sidebar('footer1')) : ?>
                    <div>
                        <?php dynamic_sidebar('footer1'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer_menu">
            <?php devmn_foot_nav(); ?>
        </div>
    </div>
    <div class="footer_company">
        <div class="container">
            <div class="footer_company_col"><?php devmn_policy_nav(); ?></div>
            <div class="footer_company_col">PROJEKT I WYKONANIE <img src="<?= get_stylesheet_directory_uri() . '/dist/svg/nylon.svg;' ?>" loading="lazy" width="19px" height="19px" /></div>
        </div>
    </div>
</footer>

<?php
wp_footer();
?>

</body>

</html>