'use strict';

(function (App, Model) {
  'use strict';

  var Items = App.Collections.Items;

  App.Models.Group = Model.extend({
    defaults: {
      id: '',
      active: false,
      parentId: '',
      items: null
    },

    parse: function parse(attrs) {
      var items = new Items(attrs.items, {
        parse: true
      });

      return {
        id: attrs.id || '',
        active: attrs.active || false,
        parentId: attrs.parentId || '',
        items: items
      };
    },
    setActive: function setActive() {
      this.set('active', true);
    },
    removeActive: function removeActive() {
      this.set('active', false);
    }
  });
})(App, Backbone.Model);