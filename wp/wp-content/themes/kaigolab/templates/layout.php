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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
  <div class="ly-main container">
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
