<?php
$file = file_get_contents(get_stylesheet_directory_uri() . "/json/test.json");
$arrayJson = json_decode($file);
usort($arrayJson, function ($a, $b) {
    return $a->score < $b->score;
});
$arrayJson = array_slice($arrayJson, 0, 5, true);
foreach ($arrayJson as $item):
?>
    <div class="home_companies_item overfllow_item" data-compID='<?= $item->id; ?>'>
        <div class="home_companies_item_content">
            <div class="home_companies_item_title"><?= $item->c_name; ?></div>
            <div class="home_companies_item_address"><?= $item->v_name; ?> </div>
            <div class="home_companies_item_stars">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $item->score) {
                ?>
                        <span style="background: #009900;">
                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.84833 0.337556C7.89606 0.190657 8.10388 0.190657 8.15162 0.337556L9.78926 5.3777C9.8106 5.44339 9.87182 5.48787 9.9409 5.48787H15.2404C15.3949 5.48787 15.4591 5.68552 15.3341 5.77631L11.0467 8.89129C10.9909 8.93189 10.9675 9.00386 10.9888 9.06956L12.6265 14.1097C12.6742 14.2566 12.5061 14.3788 12.3811 14.288L8.09369 11.173C8.03781 11.1324 7.96214 11.1324 7.90625 11.173L3.61885 14.288C3.49389 14.3788 3.32576 14.2566 3.37349 14.1097L5.01113 9.06956C5.03248 9.00386 5.00909 8.93189 4.95321 8.89129L0.665809 5.77631C0.540849 5.68552 0.60507 5.48787 0.759529 5.48787H6.05905C6.12812 5.48787 6.18934 5.44339 6.21069 5.3777L7.84833 0.337556Z" fill="white" />
                            </svg>
                        </span>
                    <?php
                    } else {
                        $j = ($item->score - ($i - 1)) * 100;
                    ?>
                        <span style='background: linear-gradient(90deg, rgba(0,153,0,1) 0%, rgba(0,153,0,1) <?= $j; ?>%, rgba(0,153,0,0) <?= $j; ?>%);'>
                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.84833 0.337556C7.89606 0.190657 8.10388 0.190657 8.15162 0.337556L9.78926 5.3777C9.8106 5.44339 9.87182 5.48787 9.9409 5.48787H15.2404C15.3949 5.48787 15.4591 5.68552 15.3341 5.77631L11.0467 8.89129C10.9909 8.93189 10.9675 9.00386 10.9888 9.06956L12.6265 14.1097C12.6742 14.2566 12.5061 14.3788 12.3811 14.288L8.09369 11.173C8.03781 11.1324 7.96214 11.1324 7.90625 11.173L3.61885 14.288C3.49389 14.3788 3.32576 14.2566 3.37349 14.1097L5.01113 9.06956C5.03248 9.00386 5.00909 8.93189 4.95321 8.89129L0.665809 5.77631C0.540849 5.68552 0.60507 5.48787 0.759529 5.48787H6.05905C6.12812 5.48787 6.18934 5.44339 6.21069 5.3777L7.84833 0.337556Z" fill="white" />
                            </svg>
                        </span>
                <?php
                    }
                }
                ?>
            </div>
            <div class="home_companies_item_categories">
                <span>Skup zboża</span>
                <span>Sprzedaż nawozów</span>
            </div>
        </div>
        <span class="home_companies_item_score"><?= $item->score; ?></span>
    </div>
<?php endforeach; ?>