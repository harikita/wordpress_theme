<?php
    use Brieze\Layout;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
  <div class="ly-main container">
    <?php get_template_part('templates/category'); ?>
    <div class="ly-contents">
      <div class="inner">
        <?php include Layout\template_path(); ?>
      </div>
    </div>
    <?php get_template_part('templates/sidebar'); ?>
  </div>
  <?php
    do_action('get_footer');
    get_template_part('templates/footer');
  ?>
  <?php wp_footer(); ?>
</body>
</html>
