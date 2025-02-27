<?php
/*
  Template Name: Strona Główna
 */

get_header();
?>
<div class="content">
  <?php
  get_template_part('template/home/header');
  get_template_part('template/home/categories');
  get_template_part('template/home/post');
  get_template_part(
    'template/adds/add',
    '',
    array(
      'field_name' => 'add_under_important',
      'size' => 'full',
      'is_options' => false
    )
  );
  get_template_part('template/home/companies');
  get_template_part('template/home/full');
  get_template_part('template/home/opinion');
  get_template_part('template/home/news');
  ?>
</div>

<?php
get_footer();
?>