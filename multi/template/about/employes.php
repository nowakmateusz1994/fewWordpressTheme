<section class="about_employes">
    <div class="container">
        <h3 class="about_employes_title section-title"><?php the_field('title'); ?></h3>
        <div class="about_employes_items">
            <?php foreach (get_field('employes') as $item): ?>
                <div class="about_employes_item">
                    <div class="about_employes_item_img"><?= wp_get_attachment_image($item['img'], 'full'); ?></div>
                    <div class="about_employes_item_content">
                        <div class="name"><?= $item['name']; ?></div>
                        <div class="position"><?= $item['position']; ?></div>
                        <div class="phone"><a href='tel:<?= $item['phone'] ?>'><?= $item['phone']; ?></a></div>
                        <div class="mail"><a href='mailto:<?= $item['mail']; ?>'><?= $item['mail']; ?></a></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="about_employes_description">
            <?php the_field('description'); ?>
        </div>
        <div class="about_employes_urls">
            <?php foreach (get_field('urls') as $link): ?>
                <a href="<?= $link['url']['url'] ?>" class="button"><?= $link['url']['title']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>