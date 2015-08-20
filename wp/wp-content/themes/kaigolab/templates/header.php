<?php
$logo = get_field('logo_img', 'option');
?>
<header class="ly-header">
  <div class="container">
    <div class="mobile-menu"><i class="fa fa-bars"></i></div>
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
