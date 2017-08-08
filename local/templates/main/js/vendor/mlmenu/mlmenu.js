(function ($, App, JSON) {
  'use strict'

  $(document).ready(function () {

    const
      mlMenu = $('#ml-menu'),
      pathName = window.location.pathname,
      curDir = pathName.substring(0, pathName.lastIndexOf('/') + 1)

    $.ajax({
      url: '/local/ajax/mlMenu/getData.php',
      data: {
        curDir
      },
      success: (answer) => {
        if (answer) {

          const groups = new App.Collections.Groups(JSON.parse(answer), {
            parse: true
          });

          const menu = new App.Views.Menu({
            collection: groups
          })

          mlMenu
            .append(menu.render().el)
        }
      }
    })

    /*let answer = [
      {
        id: 'main',
        parentId: '',
        active: true,
        items: [
          {
            name: 'Пункт 1 с длинным длиннным длиннным длиннным длиннным названием',
            action: 'menu-1'
          },
          {
            name: 'Пункт 2',
            action: 'menu-2'
          },
          {
            name: 'Пункт 3',
            link: '#'
          }
        ]
      },
      {
        id: 'menu-1',
        parentId: 'main',
        active: false,
        items: [
          {
            name: 'Пункт 1-1',
            action: 'menu-1-1'
          },
          {
            name: 'Пункт 1-2',
            link: '#'
          },
          {
            name: 'Пункт 1-3',
            link: '#'
          },
          {
            name: 'Пункт 1-4',
            link: '#'
          },
          {
            name: 'Пункт 1-5',
            link: '#'
          },
          {
            name: 'Пункт 1-6',
            link: '#'
          },
          {
            name: 'Пункт 1-7',
            link: '#'
          },
          {
            name: 'Пункт 1-8',
            link: '#'
          },
          {
            name: 'Пункт 1-9',
            link: '#'
          }
        ]
      },
      {
        id: 'menu-1-1',
        parentId: 'menu-1',
        active: false,
        items: [
          {
            name: 'Пункт 1-1-1',
            link: '#'
          },
          {
            name: 'Пункт 1-1-2',
            link: '#'
          },
          {
            name: 'Пункт 1-1-3',
            action: 'menu-1-1-3'
          }
        ]
      },
      {
        id: 'menu-1-1-3',
        parentId: 'menu-1-1',
        active: false,
        items: [
          {
            name: 'Пункт 1-1-3-1',
            link: '#'
          },
          {
            name: 'Пункт 1-1-3-2',
            link: '#'
          },
          {
            name: 'Пункт 1-1-3-3',
            link: '#'
          }
        ]
      },
      {
        id: 'menu-2',
        parentId: 'main',
        active: false,
        items: [
          {
            name: 'Пункт 2-1',
            link: '#'
          },
          {
            name: 'Пункт 2-2',
            link: '#'
          },
          {
            name: 'Пункт 2-3',
            link: '#'
          }
        ]
      }
    ]*/

  })


}(jQuery, App, JSON))
