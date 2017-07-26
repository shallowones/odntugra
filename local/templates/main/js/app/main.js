(function ($) {

  $('.js-top-slider').swiper({
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
  })

  $('.js-inner-slider').swiper({
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 'auto',
    spaceBetween: 32
  })

  $('.js-bottom-slider').swiper({
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 'auto',
    spaceBetween: 30
  })

  $('.js-part-slider').swiper({
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 5,
    spaceBetween: 0
  })

  $('.js-hide').on('click', function (e) {
    e.preventDefault()

    const
      $this = $(this),
      parent = $this.parent()

    if (parent.hasClass('open')) {
      parent
        .find('.hide-body').slideUp(300, function () {
        parent.removeClass('open')
      })
    } else {
      parent
        .find('.hide-body').slideDown(300, function () {
        parent.addClass('open')
      })
    }
  })

}(jQuery, Swiper))
