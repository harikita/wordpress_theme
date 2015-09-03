<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<div class="post__wrap">
  <h1 class="post__title"><?php the_title(); ?></h1>
  <div class="post__body">
    <?php the_content(); ?>
  </div>
</div>
<?php endwhile; endif; ?>

<?php related_posts(); ?>
