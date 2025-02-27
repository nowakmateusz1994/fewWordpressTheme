<?php
$file = file_get_contents(get_stylesheet_directory_uri() . "/json/cat.json");
$arrayJson = json_decode($file);
$i = 0;
foreach ($arrayJson as $item):
?>
    <li data-catID='<?= $item->id; ?>' class="<?php if (wp_is_mobile()) {
                                                    echo ('overfllow_item');
                                                } ?> <?php if ($i > 7): ?> hide <?php endif; ?>"><?= $item->name; ?></li>
<?php
    $i++;
endforeach;
?>