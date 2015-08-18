<div class="ly-sidebar">
  <div class="sidebar-box">
    <h2 class="section-title"><i class="fa fa-thumbs-up"></i>ランキング</h2>
    <?php wpp_get_mostpopular(array(
      'order_by' => 'views',
      'limit' => 5,
      'thumbnail_width' => 100,
      'thumbnail_height' => 100,
      'post_html' => "<li><div class='thumb'>{thumb}</div><div class='text'><a href=\'{url}\'>{text_title}</a></div></li>"
    )); ?>
  </div>
  <div class="sidebar-box">
    <h2 class="section-title"><i class="fa fa-tags"></i>人気のキーワード</h2>
    <div class="tag-cloud">
      <?php wp_tag_cloud(); ?>
    </div>
  </div>
  <div class="sidebar-box">
    <h2 class="section-title"><i class="fa fa-check"></i>カイゴラボの最新情報をチェック</h2>
    <ul class="side-sns">
      <li class="fb"><a href="#"><i class="icon fa fa-facebook"></i>Facebookページ</a></li>
      <li class="tw"><a href="#"><i class="icon fa fa-twitter"></i>@kaigolab</a></li>
      <li class="rss"><a href="#"><i class="icon fa fa-rss"></i>RSS</a></li>
      <li class="feedly"><a href="#"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/feedly_icon.png" alt=""></i>Feedly</a></li>
    </ul>
  </div>
  <div class="sidebar-box">
    <h2 class="section-title"><i class="fa fa-bullhorn"></i>PR</h2>
    <div class="side-adsence">
      <img src="http://placehold.it/300x250">
    </div>
  </div>
</div>
