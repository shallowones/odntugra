'use strict';

(function (App, Collection) {
  'use strict';

  App.Collections.Groups = Collection.extend({
    model: App.Models.Group,

    getActiveMenu: function getActiveMenu() {
      var menu = this.where({
        active: true
      });

      return menu[0];
    },
    getMenuById: function getMenuById(menuId) {
      var menu = this.where({
        id: menuId
      });

      return menu[0];
    },
    setActiveMenu: function setActiveMenu(menuId) {
      var $this = this;

      $this.models.forEach(function (model) {
        model.removeActive();
      });

      this.getMenuById(menuId).setActive();
    }
  });
})(App, Backbone.Collection);