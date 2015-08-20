<h2 class="section-title">
  <?php
    if(is_category()):
    $cat = get_the_category();
	  $cat = $cat[0];
    $catName = $cat->name;
  ?>
  <i class="fa fa-folder-open"></i><?php echo $catName; ?>の記事一覧
  <?php
    elseif(is_tag):
  ?>
  <i class="fa fa-tags"></i><?php single_tag_title(); ?>の記事一覧
  <?php endif; ?>
</h2>
<?php get_template_part('templates/loop'); ?>
