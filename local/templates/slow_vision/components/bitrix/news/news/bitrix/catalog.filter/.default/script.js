(function ($) {
  $(function () {

    $('.js-filter-input').on('click', function (e) {
      e.preventDefault();
      BX.calendar({
        node: this,
        field: this,
        bTime: false
      })
    })

  })
})(jQuery)