(function (App, Model) {
  'use strict'

  App.Models.Item = Model.extend({
    defaults: {
      name: '',
      action: '',
      link: ''
    },

    parse (attrs) {
      return {
        name: attrs.name || '',
        action: attrs.action || '',
        link: attrs.link || ''
      }
    }
  })

}(App, Backbone.Model))
