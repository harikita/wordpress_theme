<h2 class="section-title"><i class="fa fa-clock-o"></i>最新記事</h2>
<?php
  get_template_part('templates/loop');
  $page_num = show_page_number();
  if(function_exists('wp_pagenavi') && $page_num >= 2) {
    wp_pagenavi();
  }else{
    echo '<div class="article-more"><a href="/page/2" class="btn primary">もっと見る</a></div>';
  }
?>
