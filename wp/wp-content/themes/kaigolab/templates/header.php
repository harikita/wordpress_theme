<?php
$logo = get_field('logo_img', 'option');
?>
<header class="ly-header">
  <div class="container">
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
    </div>
  </div>
</header>
<div class="header-caps">
  <div class="container">
    <p><?php bloginfo('description'); ?></p>
  </div>
</div>
