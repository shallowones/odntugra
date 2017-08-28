'use strict';

$(document).ready(function () {

  $('.js-top-slider').swiper({
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
  });

  $('.js-inner-slider').swiper({
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 'auto',
    spaceBetween: 32
  });

  $('.js-bottom-slider').swiper({
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 'auto',
    spaceBetween: 30
  });

  $('.js-part-slider').swiper({
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 5,
    spaceBetween: 0,
    breakpoints: {
      480: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      1400: {
        slidesPerView: 3
      }
    }
  });

  $('.js-calendar-slider').swiper({
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 'auto',
    spaceBetween: 0,
    onInit: function onInit(swiper) {
      var indexActiveSlide = 0;
      swiper.container.find('.calendar-slide.active').each(function () {
        indexActiveSlide = parseInt($(this).data('index')) - 1;
      });
      swiper.slideTo(indexActiveSlide);
    }
  });

  var detailTop = new Swiper('.js-detail-slider', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10
  });
  var detailThumbs = new Swiper('.js-detail-slider2', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true
  });
  if (detailTop.container.length && detailThumbs.container.length) {
    detailTop.params.control = detailThumbs;
    detailThumbs.params.control = detailTop;
  }

  $('.js-hide').on('click', function (e) {
    e.preventDefault();

    var $this = $(this),
        parent = $this.parent();

    if (parent.hasClass('open')) {
      parent.find('.hide-body').slideUp(300, function () {
        parent.removeClass('open');
      });
    } else {
      parent.find('.hide-body').slideDown(300, function () {
        parent.addClass('open');
      });
    }
  });

  var $page = $('.page');

  // меню на мобилке и планшете
  $('.js-mobile').on('click', function (e) {
    e.preventDefault();

    $page.addClass('open');

    $('.page-overlay').on('click', function () {
      $page.removeClass('open');
    });
  });
});