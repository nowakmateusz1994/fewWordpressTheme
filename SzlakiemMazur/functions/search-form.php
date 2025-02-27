<?php

function devmnSerarchForm() {
    ?>
    <div class="devmn_search_form">
        <form method="get" role="search" action="<?php echo home_url('/search'); ?>">
            <select class="devmn_search_form_cat" name='my-cat' id='my-cat'>
                <option value=''><?= __('Wybierz sezon', 'devmn'); ?></option>
                <?php
                $catArgs = array(
                    'hide_empty' => false
                );
                $productCat = get_terms('product_cat', $catArgs);
                foreach ($productCat as $cat) :
                    ?>
                    <option value='<?= $cat->slug; ?>'><?= $cat->name; ?></option>
                <?php endforeach; ?>
            </select>

            <select class="devmn_search_form_peoples" name='my-people'>
                <option value='1'><?= __('Długość pobytu', 'devmn'); ?></option>
                <option value='2'>
                    do 4 dni</option>
                <option value='3'>od 5 do 9 dni</option>
                <option value='4'>od 10 dni</option>
            </select>


            <select class="devmn_search_form_tag" id='my-tag' name='my-tag'>
                <option value=''><?= __('Wybierz atrakcje', 'devmn'); ?></option>
                <?php
                $tagArgs = array(
                    'hide_empty' => false,
                    'meta_key' => 'czy_wyswietlac_w_filtrach',
                    'meta_value' => true
                );

                $atractionTag = get_terms('product_tag', $tagArgs);
                foreach ($atractionTag as $tag) :
                    ?>
                    <option value='<?= $tag->slug; ?>'><?= get_field('title', 'product_tag_' . $tag->term_id); ?></option>
                <?php endforeach; ?>
            </select>
            <input class="button" type="submit" value="<?= __('Filtruj', 'devmn'); ?>">
        </form>
    </div>
    <?php
}
