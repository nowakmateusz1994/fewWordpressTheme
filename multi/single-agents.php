<?php
get_header();
?>
<div class="content single_agent">
    <div class="container">
        <h3 class="single_agent_title section-title"><?php the_title(); ?></h3>
        <div class="single_agent_top">
            <div class="single_agent_top_left">
                <?php
                $img = get_post_thumbnail_id();

                if (!$img):
                    $img = get_theme_mod('custom_logo');
                endif;
                ?>
                <div class="single_agent_top_img"><?= wp_get_attachment_image($img, 'full'); ?></div>
                <div class="single_agent_top_contact"><i class="fas fa-map-marker-alt"></i> <span><?php the_field('address') ?></span></div>
                <?php foreach (get_field('mails') as $item): ?>
                    <div class="single_agent_top_contact"><i class="fas fa-envelope"></i> <a href="mailto:<?= $item['item']; ?>"><?= $item['item']; ?></a></div>
                <?php endforeach; ?>
                <?php foreach (get_field('phones') as $item): ?>
                    <div class="single_agent_top_contact"><i class="fas fa-phone-alt"></i> <a href="mailto:<?= $item['item']; ?>"><?= $item['item']; ?></a></div>
                <?php endforeach; ?>
                <?php if (get_field('hour')): ?>
                    <div class="single_agent_top_contact"><i class="far fa-clock"></i><span><?php the_field('hour'); ?></span></div>
                <?php endif; ?>
            </div>
            <div class="single_agent_top_right">
                <h4 class="single_agent_top_title"><?= __('Ubezpieczenia w ofercie:', 'devmn'); ?></h4>
                <ul>
                    <?php foreach (get_field('types') as $item): ?>
                        <li><?= $item['type']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php if (get_the_content()): ?>
            <div class="single_agent_description"><?php the_content(); ?></div>
        <?php
        endif;
        if (get_field('map')):
        ?>
            <div class="single_agent_map"><?php the_field('map'); ?></div>
        <?php endif; ?>
    </div>
</div>
<?php
get_footer();
