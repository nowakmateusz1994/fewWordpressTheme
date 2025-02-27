<section class="home_icons">
    <div class="container">
        <?php foreach (get_sub_field('items') as $icon): ?>
            <div class="home_icon">

                <div class="home_icon_img"><?= wp_get_attachment_image($icon['icon'], 'full'); ?></div>
                <?php if ($icon['url']): ?>
                    <a href="<?= $icon['url']['url'] ?>">
                        <div class="home_icon_title"><?= $icon['url']['title']; ?></div>
                    </a>
                <?php endif; ?>
                <?php if ($icon['file']): ?>
                    <a href="<?= $icon['file']['url'] ?>" target='_blank' dwonload>
                        <div class="home_icon_title"><?= $icon['file_name']; ?></div>
                    </a>
                <?php endif; ?>
                <span></span>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>