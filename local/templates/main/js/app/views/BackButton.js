(function (App, View) {
  'use strict'

  App.Views.BackButton = View.extend({
    tagName: 'button',
    className: 'nav-back',

    render () {
      const
        $this = this,
        parentId = $this.model.get('parentId')

      if (parentId.length) {
        const
          parentMenu = $this.collection.getMenuById(parentId),
          name = parentMenu.get('items').getName($this.model.get('id'));

        $this
          .activate(name)
      } else {
        $this
          .deactivate()
      }

      return $this
    },

    events: {
      click: 'clickToBack'
    },

    activate (title) {
      this.$el
        .text(title)
        .removeAttr('disabled')
    },
    deactivate () {
      this.$el
        .text('')
        .attr('disabled', 'disabled')
    },
    clickToBack () {
      const
        $this = this,
        parentId = $this.model.get('parentId')

      $this.collection
        .setActiveMenu(parentId)
    }
  })

}(App, Backbone.View))
