(function (App, Model) {
  'use strict'

  const Items = App.Collections.Items

  App.Models.Group = Model.extend({
    defaults: {
      id: '',
      active: false,
      parentId: '',
      items: null
    },

    parse (attrs) {
      const items = new Items(attrs.items, {
        parse: true
      })

      return {
        id: attrs.id || '',
        active: attrs.active || false,
        parentId: attrs.parentId || '',
        items
      }
    },

    setActive () {
      this
        .set('active', true)
    },
    removeActive () {
      this
        .set('active', false)
    }
  })

}(App, Backbone.Model))
