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

