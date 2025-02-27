<?php
get_header();
?>
<div class="content">
    <div class="container">
        <h2 class="section-title"><?php the_title(); ?></h2>
        <div class="single_thumb" style="padding-bottom: 32px;"><?php the_post_thumbnail(get_the_ID(), 'large'); ?></div>
        <div class="single_content"><?php the_content(); ?></div>
    </div>
</div>
<?php
get_footer();
