(function (App, View) {
  'use strict'

  App.Views.ItemLink = View.extend({
    tagName: 'a',
    className: 'nav__item',

    render () {
      const $this = this

      $this.$el
        .text($this.model.get('name'))
        .attr('href', $this.model.get('link'))

      return $this
    }
  })

}(App, Backbone.View))
