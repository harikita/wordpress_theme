<footer class="ly-footer">
  <div class="container">
    <?php
      wp_nav_menu( array(
        'theme_location'=>'footer_menu',
        'container'     =>'',
        'menu_class'    =>'',
        'items_wrap'    =>'<ul class="footer-nav">%3$s</ul>'));
    ?>
  </div>
</footer>
