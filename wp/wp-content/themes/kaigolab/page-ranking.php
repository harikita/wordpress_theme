<?php
// Template Name: Ranking
if (have_posts()) : while(have_posts()) : the_post(); ?>
<h2 class="section-title"><i class="fa fa-thumbs-up"></i><?php the_title(); ?></h2>
<div class="post__wrap">
  <div class="post__body">
    <?php the_content(); ?>
    <?php wpp_get_mostpopular(array(
      'order_by' => 'views',
      'limit' => 10,
      'post_type' => 'post',
      'thumbnail_width' => 100,
      'thumbnail_height' => 100,
      'post_html' => "<li><a href=\'{url}\'><div class='thumb'>{thumb_img}</div><div class='text'>{text_title}</div></a></li>"
    )); ?>
  </div>
</div>
<?php endwhile; endif; ?>
