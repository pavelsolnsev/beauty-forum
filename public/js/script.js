




























































$( document ).ready(function() {
  $(window).scroll(function(){
    if ($(window).width() >= 768){
      if ($(window).scrollTop() > 30) {
        $('.header').addClass('fixed');
      }
      else {
          $('.header').removeClass('fixed');
      }

    }

  });

  $('.burger-menu').click(function () {
    $('.menu__mobile').toggleClass('menu-active menu-noactive');
    $('.burger-menu').toggleClass('open');
  });
  $('.navigation__item').click(function () {
      $('.menu__mobile').toggleClass('menu-active menu-noactive');
  });

});

$(document).on('click init.scroll', '.scroll', function(event) {
  event.preventDefault();
  $.fancybox.close();
  var
    hrefId = $(this).attr('href') || $(this).data('href'),
    // headerTop = $(".header").innerHeight();
  posTop = $(hrefId).offset().top;
  ;
  $('html, body').animate({scrollTop: posTop}, 1000);
});
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
  $('.partners__block').each(function(index, el) {
      partners = new Swiper('.partners__block', {
        direction: 'horizontal',
        loop: true,
        autoplay: false,
        slidesPerView: 'auto',
        slidesPerGroup: 1,
        spaceBetween: 20,
        allowTouchMove: true,
        watchOverflow: true,
        mousewheel: {
          forceToAxis: true,
        },
        navigation: {
          nextEl: $('.partner__btn-prev'),
          prevEl: $('.partner__btn-next')
        },
        pagination: {
          el: $('.partner__pagination'),
          type: 'bullets'
        },
        breakpoints: {
          0: {
            slidesPerView: 'auto',
            slidesPerView: 1.5
          },
          555: {
            slidesPerView: 2.5
          },
          801: {
            slidesPerView: 3.5
          },
          1061: {
            slidesPerView: 4
          }
        }
      });
    });


