<div class="ly-sidebar">
  <div class="sidebar-box">
    <h2 class="section-title"><i class="fa fa-thumbs-up"></i>ランキング</h2>
    <?php wpp_get_mostpopular(array(
      'order_by' => 'views',
      'limit' => 5,
      'post_type' => 'post',
      'thumbnail_width' => 100,
      'thumbnail_height' => 100,
      'post_html' => "<li><a href=\'{url}\'><div class='thumb'>{thumb_img}</div><div class='text'>{text_title}</div></a></li>"
    )); ?>
  </div>
  <div class="sidebar-box">
    <h2 class="section-title"><i class="fa fa-folder-open"></i>カテゴリ</h2>
    <ul class="sidebar-category">
      <?php
        $cats = get_terms('category', array(
          'orderby' => 'order',
          'hide_empty' => false
        ));
        $catList = "";
        foreach( $cats as $c ) {
          $catName = $c->name;
          $catLink = get_category_link($c->term_id);
          $catList .= "<li>";
          $catList .= "<a href='" . $catLink . "'>" . $catName . "<i class='fa fa-chevron-right'></i></a>";
          $catList .= "</li>";
        }
        echo $catList;
      ?>
    </ul>
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
      <li class="fb"><a href="https://www.facebook.com/kaigolabjp" target="_blank"><i class="icon fa fa-facebook"></i>Facebookページ</a></li>
      <li class="tw"><a href="https://twitter.com/kaigolabjp" target="_blank"><i class="icon fa fa-twitter"></i>@kaigolab</a></li>
      <li class="rss"><a href="<?php echo home_url('/'); ?>feed" target="_blank"><i class="icon fa fa-rss"></i>RSS</a></li>
      <li class="feedly"><a href="http://www.feedly.com/home#subscription/feed/<?php echo home_url('/'); ?>feed" target="_blank"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/feedly_icon.png" alt=""></i>Feedly</a></li>
    </ul>
  </div>
  <div class="sidebar-box">
    <h2 class="section-title"><i class="fa fa-bullhorn"></i>PR</h2>
    <div class="side-adsence">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- KAIGO LAB -->
      <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-1318610812648232"
          data-ad-slot="5921468504"
          data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
  </div>
</div>
