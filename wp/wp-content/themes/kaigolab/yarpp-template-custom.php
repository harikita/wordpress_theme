<?php
/*
YARPP Template: Custom
Description: KAIGO LAB - YARPP Template
Author: rayfields
*/ ?>
<?php if (have_posts()):?>
<h2 class="section-title"><i class="fa fa-heart"></i>関連する記事</h2>
<ul class="related-post">
	<?php while (have_posts()) : the_post(); ?>
	<li>
		<a href="<?php the_permalink() ?>">
			<div class="thumb"><?php the_post_thumbnail('thumbs'); ?></div>
			<div class="text">
				<h3><?php the_title(); ?></h3>
			</div>
		</a>
	</li>
	<?php endwhile; ?>
</ul>
<?php else: endif; ?>
