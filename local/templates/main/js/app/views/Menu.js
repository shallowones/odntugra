(function (App, View) {
  'use strict'

  const
    Group = App.Views.Group

  App.Views.Menu = View.extend({
    className: 'nav',

    render () {
      const $this = this

      $this.collection.each((modelGroup) => {
        const group = new Group({
          model: modelGroup,
          collection: $this.collection,
          menu: $this
        })

        $this.$el
          .append(group.render().$el)
      })

      return $this
    },

    setHeight (height) {
      this.$el
        .animate({height}, 300)

      return this
    },
    removeChildActiveClass () {
      this.$el
        .find('.nav-group').each(function () {
          $(this)
            .removeClass('active')
      })

      return this
    }
  })

}(App, Backbone.View))
