'use strict';

(function (App, View) {
  'use strict';

  var BackButton = App.Views.BackButton,
      ItemButton = App.Views.ItemButton,
      ItemLink = App.Views.ItemLink;

  App.Views.Group = View.extend({
    className: 'nav-group',

    initialize: function initialize(options) {
      var $this = this;

      $this.menu = options.menu || null;

      $this.listenTo($this.model, 'change:active', function (modelGroup) {
        if (modelGroup.get('active')) {
          $this.changeGroup(modelGroup);
        }
      });
    },
    render: function render() {
      var $this = this;

      var backButton = new BackButton({
        model: $this.model,
        collection: $this.collection
      });

      $this.$el.append(backButton.render().el);

      $this.model.get('items').each(function (modelItem) {
        var item = void 0;

        if (modelItem.get('action')) {
          item = new ItemButton({
            model: modelItem,
            collection: $this.collection
          });
        } else {
          item = new ItemLink({
            model: modelItem
          });
        }

        $this.$el.append(item.render().el);
      });

      if ($this.model.get('active')) {
        $this.addActiveClass();

        if ($this.menu) {
          $this.menu.setHeight($this.getHeight($this.model));
        }
      }

      return $this;
    },
    changeGroup: function changeGroup(modelGroup) {
      var $this = this;

      if ($this.menu) {
        $this.menu.removeChildActiveClass().setHeight($this.getHeight(modelGroup));
      }

      $this.addActiveClass();
    },
    addActiveClass: function addActiveClass() {
      this.$el.addClass('active');
    },
    getHeight: function getHeight(modelGroup) {

      var $this = this,
          helper = $('#helper');

      var group = new App.Views.Group({
        model: modelGroup,
        collection: $this.collection
      });

      helper.html(group.render().$el.css({ position: 'static' }));

      var height = helper.height();

      helper.html('');

      return height;
    }
  });
})(App, Backbone.View);