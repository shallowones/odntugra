(function (App, Collection) {
  'use strict'

  App.Collections.Items = Collection.extend({
    model: App.Models.Item,

    getName (action) {
      const menu = this.where({
        action
      })
      console.log(action)
      return (menu.length)
        ? menu[0].get('name')
        : ''
    },
  })

}(App, Backbone.Collection))
