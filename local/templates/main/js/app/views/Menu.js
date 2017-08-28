'use strict';

(function (App, View) {
  'use strict';

  var Group = App.Views.Group;

  App.Views.Menu = View.extend({
    className: 'nav',

    render: function render() {
      var $this = this;

      $this.collection.each(function (modelGroup) {
        var group = new Group({
          model: modelGroup,
          collection: $this.collection,
          menu: $this
        });

        $this.$el.append(group.render().$el);
      });

      return $this;
    },
    setHeight: function setHeight(height) {
      this.$el.animate({ height: height }, 300);

      return this;
    },
    removeChildActiveClass: function removeChildActiveClass() {
      this.$el.find('.nav-group').each(function () {
        $(this).removeClass('active');
      });

      return this;
    }
  });
})(App, Backbone.View);