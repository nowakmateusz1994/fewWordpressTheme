<?php
$file = file_get_contents(get_stylesheet_directory_uri() . "/json/voivods.json");
$arrayJson = json_decode($file);
foreach ($arrayJson as $item):
    // conunties
?>
    <optgroup id="<?= $item->id; ?>" style='display:none;'>
        <?php foreach ($item->conunties as $conunty): ?>
            <option value='<?= $conunty->county;; ?>'><?= $conunty->county; ?></option>
        <?php endforeach; ?>
    </optgroup>

<?php endforeach; ?>