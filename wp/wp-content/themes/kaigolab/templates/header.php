<?php
$logo = get_field('logo_img', 'option');
?>
<header class="ly-header">
  <div class="container">
    <div class="mobile-menu js-mobile-menu"><i class="fa fa-bars"></i></div>
    <div class="site-name">
      <a href="<?php echo home_url('/'); ?>">
        <?php if($logo): ?>
        <img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>">
        <?php else: ?>
        <?php bloginfo('name'); ?>
        <?php endif; ?>
      </a>
    </div>
    <div class="head-search">
      <div class="head-search__btn"><i class="fa fa-search"></i></div>
      <div class="head-search__field">
        <form method="get" action="/">
          <input type="text" name="s" placeholder="検索キーワードを入力">
        </form>
      </div>
    </div>
  </div>
</header>
<div class="header-caps">
  <div class="container">
    <?php if (is_home()): ?>
    <p><?php bloginfo('description'); ?></p>
    <?php
      else:
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb('<div class="breadcrumbs">','</div>');
        }
      endif;
    ?>
  </div>
</div>
<div class="side-menu-smoke"></div>
<div class="side-menu">
  <div class="side-menu-close js-side-menu-close"><i class="fa fa-times"></i>閉じる</div>
  <div class="side-menu-search">
    <form method="get" action="/">
      <input type="text" name="s" placeholder="検索キーワードを入力">
    </form>
  </div>
  <div class="scroll-wrap js-scroll-wrap">
    <div class="scroll-content js-scroll-content">
      <ul class="side-menu-category">
        <?php
          $cats = get_terms('category', array(
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
    <div class="scroll-pane js-scroll-pane">
      <div class="scroll-slider js-scroll-slider"></div>
    </div>
  </div>
</div>
