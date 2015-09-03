<?php
// Template Name: Tags
if (have_posts()) : while(have_posts()) : the_post(); ?>
<h2 class="section-title"><i class="fa fa-tags"></i><?php the_title(); ?></h2>
<div class="post__wrap">
  <div class="post__body">
    <?php the_content(); ?>
    <div class="tag-cloud">
      <?php wp_tag_cloud(array(
        'number' => 0,
        'orderby' => 'count',
        'order' => 'DESC'
      )); ?>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>
