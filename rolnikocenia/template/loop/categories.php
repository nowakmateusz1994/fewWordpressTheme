<?php
$file = file_get_contents(get_stylesheet_directory_uri() . "/json/cat.json");
$arrayJson = json_decode($file);
foreach ($arrayJson as $item):
?>
    <option value='<?= $item->id; ?>'><?= $item->name; ?></option>
<?php endforeach; ?>