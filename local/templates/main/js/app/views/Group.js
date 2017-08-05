(function (App, View) {
  'use strict'

  const
    BackButton = App.Views.BackButton,
    ItemButton = App.Views.ItemButton,
    ItemLink = App.Views.ItemLink

  App.Views.Group = View.extend({
    className: 'nav-group',

    initialize (options) {
      const $this = this

      $this.menu = options.menu || null

      $this.listenTo($this.model, 'change:active', (modelGroup) => {
        if (modelGroup.get('active')) {
          $this.changeGroup(modelGroup)
        }
      })
    },
    render () {
      const $this = this

      const backButton = new BackButton({
        model: $this.model,
        collection: $this.collection
      })

      $this.$el
        .append(backButton.render().el)

      $this.model.get('items').each((modelItem) => {
        let item

        if (modelItem.get('action')) {
          item = new ItemButton({
            model: modelItem,
            collection: $this.collection
          })
        } else {
          item = new ItemLink({
            model: modelItem
          })
        }

        $this.$el
          .append(item.render().el)
      })

      if ($this.model.get('active')) {
        $this
          .addActiveClass()

        if ($this.menu) {
          $this.menu
            .setHeight($this.getHeight($this.model))
        }
      }

      return $this
    },
    changeGroup(modelGroup) {
      const
        $this = this

      if ($this.menu) {
        $this.menu
          .removeChildActiveClass()
          .setHeight($this.getHeight(modelGroup))
      }

      $this
        .addActiveClass()
    },
    addActiveClass () {
      this.$el
        .addClass('active')
    },
    getHeight (modelGroup) {

      const
        $this = this,
        helper = $('#helper')

      const group = new App.Views.Group({
        model: modelGroup,
        collection: $this.collection
      })

      helper
        .html(group.render().$el.css({position: 'static'}))

      const height = helper.height()

      helper.html('')

      return height
    }
  })

}(App, Backbone.View))
