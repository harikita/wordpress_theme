<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<div class="post__wrap">
  <div class="post__meta">
    <div class="post__date"><i class="fa fa-calendar"></i><?php the_time('Y年m月d日'); ?></div>
    <div class="post__views"><i class="fa fa-eye"></i><?php echo wpp_get_views($post->ID); ?></div>
    <div class="post__author"><i class="fa fa-pencil"></i><?php the_author(); ?></div>
  </div>
  <h1 class="post__title"><?php the_title(); ?></h1>
  <!-- div class="post__description">
    <?php the_excerpt(); ?>
  </div -->
  <?php get_template_part('templates/share'); ?>
  <!-- div class="post__thumb">
    <?php the_post_thumbnail('full'); ?>
  </div -->
  <div class="post__body">
    <?php the_content(); ?>
  </div>
  <?php get_template_part('templates/share'); ?>
</div>

<h2 class="section-title"><i class="fa fa-thumbs-up"></i>この記事が気に入ったら「いいね！」しよう</h2>
<div class="post_pagelike" style="margin-bottom: 30px;">
  <div class="thumb">
    <?php the_post_thumbnail('thumbs'); ?>
  </div>
  <div class="text">
    <p>KAIGOLABの最新情報をお届けします。</p>
    <div class="fb-like" data-href="https://www.facebook.com/kaigolabjp" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
  </div>
</div>

<h2 class="section-title" ><i class="fa fa-tags"></i>この記事についてのタグリスト</h2>
<div class="tag-cloud">
  <?php the_tags('','',''); ?>
</div>

<?php endwhile; endif; ?>

<?php related_posts(); ?>
