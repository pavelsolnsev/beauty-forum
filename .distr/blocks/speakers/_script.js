$('[data-more-button]').on('init.more click', function(event) {
  var $container = $('[data-more-options]', $(this).parent()),
  options = {},
  visible = 0,
  window_width = $(window).width(),
  $items;
  options = $container.data('more-options');
  if ( event.type == 'init' ) {
    visible = window_width > 1060 ? options.init_desktop : options.init_mobile;
  }
  else {
    visible = window_width > 1060 ? options.show_desktop : options.show_mobile;
  }
  $items = $(options.target + '[data-more-hidden]', $container);
  $items.slice(0, visible).removeAttr('data-more-hidden');
  $('html, body').animate({scrollTop: '+=1'}, 0).animate({scrollTop: '-=1'}, 0);
  if ( $items.length - visible <= 0 ) {
    $(this).addClass('d-none');
  }
}).trigger('init.more');