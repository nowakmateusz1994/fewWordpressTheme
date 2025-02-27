<?php $all = get_field('all_offer', 'options'); ?>
<section class="offer_buttons">
    <div class="container">
        <h3 class="offer_buttons_title section-title"><?= $all['title']; ?></h3>
        <div class="offer_buttons_items">
            <?php foreach ($all['items'] as $item): ?>
                <a href='<?= $item['url']['url']; ?>'><?= $item['url']['title']; ?></a>
            <?php endforeach; ?>
        </div>
        <div class="offer_buttons_subtitle"><?= $all['subtitle']; ?></div>
        <div class="offer_buttons_urls">
            <?php foreach ($all['urls'] as $url): ?>
                <a href="<?= $url['url']['url'] ?>" class="button"><?= $url['url']['title']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>