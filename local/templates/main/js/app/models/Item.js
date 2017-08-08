(function (App, Model) {
  'use strict'

  App.Models.Item = Model.extend({
    defaults: {
      name: '',
      action: '',
      link: '',
      selected: false
    },

    parse (attrs) {
      return {
        name: attrs.name || '',
        action: attrs.action || '',
        link: attrs.link || '',
        selected: attrs.selected || false
      }
    }
  })

}(App, Backbone.Model))
