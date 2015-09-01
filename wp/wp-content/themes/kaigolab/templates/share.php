<ul class="post__share">
  <?php
    $permalink = get_the_permalink();
    $title = get_the_title();
    $fbShareURL = "https://www.facebook.com/sharer/sharer.php?u=".$permalink."&t=".$title;
    $twShareURL = "https://twitter.com/intent/tweet?text=".$title."&url=".$permalink;
    $lineShareURL = "http://line.me/R/msg/text/?".$title."/".$permalink;
  ?>
  <li class="fb"><a href="<?php echo $fbShareURL; ?>" target="_blank"><i class="icon fa fa-facebook"></i>シェア</a></li>
  <li class="tw"><a href="<?php echo $twShareURL; ?>" target="_blank"><i class="icon fa fa-twitter"></i>ツイート</a></li>
  <li class="line"><a href="<?php echo $lineShareURL; ?>"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/line_logo.png" alt=""></i>LINEする</a></li>
</ul>
