(function (App, Collection) {
  'use strict'

  App.Collections.Groups = Collection.extend({
    model: App.Models.Group,

    getActiveMenu () {
      const menu = this.where({
        active: true
      })

      return menu[0]
    },
    getMenuById (menuId) {
      const menu = this.where({
        id: menuId
      })

      return menu[0]
    },
    setActiveMenu (menuId) {
      const $this = this

      $this.models.forEach(function (model) {
        model
          .removeActive()
      })

      this.getMenuById(menuId)
        .setActive()
    }
  })

}(App, Backbone.Collection))
