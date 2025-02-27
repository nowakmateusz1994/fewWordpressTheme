<form action="/" method="get">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?= __('Wyszukaj firmę','devmn'); ?>"/>
    <input type="image" alt="Search" src="<?= get_stylesheet_directory_uri(); ?>/dist/svg/search.svg" />
</form>