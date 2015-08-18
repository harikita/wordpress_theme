<div class="ly-category">
  <h2 class="section-title"><i class="fa fa-folder-open"></i>カテゴリ</h2>
  <ul class="sidebar-category">
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
      //var_dump($cats);
      /*
      wp_list_categories(array(
        'title_li' => '',
        'hide_empty' => false
      ));*/
    ?>
  </ul>
</div>
