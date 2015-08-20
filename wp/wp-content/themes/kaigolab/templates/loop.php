<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<div class="articles">
  <div class="articles__thumb">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbs'); ?></a>
  </div>
  <div class="articles__main">
    <h2 class="articles__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_category(''); ?>
    <div class="articles__meta">
      <p class="articles__date"><?php the_time('Y年m月d日'); ?></p>
      <p class="articles__views"><i class="fa fa-eye"></i><?php echo wpp_get_views($post->ID); ?></p>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>
