(function($) {

  $('.js-mobile-menu, .js-side-menu-close').on('click', function(){
    if($('body').hasClass('is-side-open')){
      $('body').removeClass('is-side-open');
    }else{
      $('body').addClass('is-side-open');
    }
  });

  setSidebarHeight = function() {
    var _windowHeight   = $(window).height();
    var _headHeight     = 110;
    var _resultHeight   = _windowHeight - _headHeight;
    $('.js-scroll-wrap').height(_resultHeight);
  }

  setSidebarHeight();

  $('.js-scroll-wrap').nanoScroller({
      'contentClass': 'js-scroll-content',
      'paneClass': 'js-scroll-pane',
      'sliderClass': 'js-scroll-slider',
      'preventPageScrolling': true
  });

  $(window).on({
    'resize': function () {
        setSidebarHeight();
    }
  });

})(jQuery);
