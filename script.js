var scroll_start = 0;
    var startchange = $('#scroll-color');
    var offset = startchange.offset();
    $(document).scroll(function () {
      scroll_start = $(this).scrollTop();
      if (scroll_start > offset.top) {
        $('nav').css('background', '#e63c2d');
      } else {
        $('nav').css('background', 'transparent');
      }