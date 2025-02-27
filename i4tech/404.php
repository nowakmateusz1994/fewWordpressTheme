<?php

get_header();
?>
<div class="content">
    <div class="container" style="padding: 3.875rem 0;">
        <h3 class="section-title"><?= __('Strony nie znaleziono', 'devmn'); ?></h3>
        <div style="padding-top: 70px;"></div>
        <a href='<?= home_url(); ?>' class="button"><span><?= __('Wróc na stronę główną', 'devmn') ?></span></a>
    </div>
</div>

<?php
get_footer();
?>