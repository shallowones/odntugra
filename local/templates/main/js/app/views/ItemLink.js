'use strict';

(function (App, View) {
  'use strict';

  App.Views.ItemLink = View.extend({
    tagName: 'a',
    className: 'nav__item',

    render: function render() {
      var $this = this;

      $this.$el.text($this.model.get('name'));

      if (!$this.model.get('selected')) {
        $this.$el.attr('href', $this.model.get('link'));
      } else {
        $this.$el.addClass('checked');
      }

      return $this;
    }
  });
})(App, Backbone.View);