'use strict';

(function ($, App, JSON) {
  'use strict';

  $(document).ready(function () {

    var mlMenu = $('#ml-menu'),
        pathName = window.location.pathname,
        curDir = pathName.substring(0, pathName.lastIndexOf('/') + 1);

    $.ajax({
      url: '/local/ajax/mlMenu/getData.php',
      data: {
        curDir: curDir
      },
      success: function success(answer) {
        if (answer) {
          var groups = new App.Collections.Groups(JSON.parse(answer), {
            parse: true
          });

          var menu = new App.Views.Menu({
            collection: groups
          });

          mlMenu.append(menu.render().el);
        }
      }
    });
  });
})(jQuery, App, JSON);