'use strict';

(function (App, View) {
  'use strict';

  App.Views.ItemButton = View.extend({
    tagName: 'button',
    className: 'nav__item parent',

    render: function render() {
      var $this = this;

      $this.$el.text($this.model.get('name'));

      return $this;
    },


    events: {
      click: 'clickToActive'
    },

    clickToActive: function clickToActive() {
      var $this = this,
          model = $this.model;

      $this.collection.setActiveMenu(model.get('action'));
    }
  });
})(App, Backbone.View);