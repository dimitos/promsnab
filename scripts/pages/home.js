import {arcticmodal_settings} from "../common/modal";

$('.news-slider .slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: false,
  speed: 600,
  dots: true,
  appendDots: $('.news-slider .slider-dots'),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      },
    },
    {
      breakpoint: 1140,
      settings: {
        slidesToShow: 2
      },
    }
  ],
});

$('.product-slider .slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: false,
  speed: 600,
  dots: true,
  appendDots: $('.product-slider .slider-dots'),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 1140,
      settings: {
        slidesToShow: 2,
      },
    }
  ],
});

  /**
   * Delete anchor hash
   */
  const hash = document.querySelectorAll('.hash');
  if (document.querySelectorAll('.hash')) {
    hash.forEach((el) => el.addEventListener('click', () => setTimeout(() => history.replaceState(null, null, ' '), 1), { passive: true }));
  }

  $('.ad__link').click(function() {
    const srcNews = $(this).closest('.news-data').find('.news-image').css('background-image').replace('url(','').replace(')','').replace(/\"/gi, "");;
    const titleNews = $(this).closest('.news-data').find('.news-title').text();
    const textNews = $(this).closest('.news-data').find('.news-text').text();
    $('.popup-news__title').text(titleNews);
    $('.popup-news__text').text(textNews);
    $('.popup-news__img img').attr('src', srcNews);
    $('.modal-news').arcticmodal(arcticmodal_settings);
  });
