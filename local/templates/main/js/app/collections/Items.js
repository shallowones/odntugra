'use strict';

(function (App, Collection) {
  'use strict';

  App.Collections.Items = Collection.extend({
    model: App.Models.Item,

    getName: function getName(action) {
      var menu = this.where({
        action: action
      });

      return menu.length ? menu[0].get('name') : '';
    }
  });
})(App, Backbone.Collection);