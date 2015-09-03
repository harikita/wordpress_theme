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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67018869-1', 'auto');
  ga('send', 'pageview');

</script>
