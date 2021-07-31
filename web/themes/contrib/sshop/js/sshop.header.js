
/**
 * @file
 * Configured theme header for all screen widths.
 */

(function ($, Drupal) {
  'use strict';

  $(document).ready(function () {
    // Main navigation.
    var menu_break_point = 768;
    var $header_elements = ['header .site-branding', 'header .navbar-collapse'];
    var $header = $('header.navbar');
    var $main_nav = $('.main-navigation', $header);
    var $main_nav_ul = $('.navbar-nav', $main_nav);
    var $menu_toggle_icon = $('.menu-toggle', $header);
    var $main_nav_more = $(
      '<li class="nav-more menu-item-has-children"><a href="#">' +
      '<i class="fa fa-ellipsis-h"></i></a>' +
      '<ul style="max-height: 99999px; visibility: visible"' +
      ' class="sub-filters dropdown-menu"></ul>' +
      '</li>'
    );

    $main_nav.find('.navbar-nav.menu').append($main_nav_more);

    var setupHeader = function () {
      var ww = $(window).width();
      var hw = $header.width();
      var _w = 0;

      $('> ul > li', $main_nav_more).each(function () {
        $main_nav_ul.append($(this));
      });

      if (ww < menu_break_point) {
        $main_nav_more.hide();
        return false;
      }

      var more_width = $main_nav_more.outerWidth();
      $.each($header_elements, function (index, id) {
        var $el = $(id);
        _w += $el.outerWidth();
      });

      var nav_width = hw - _w - 60;

      var w = more_width;
      $('> li', $main_nav_ul).not('.nav-more').each(function () {
        var width = $(this).outerWidth();
        if (nav_width < w + width) {
          var $li = $(this);
          $main_nav_more.find('.sub-filters').append($li);
        }
        w += width;
      });

      $main_nav_ul.append($main_nav_more);
      $main_nav.removeClass('no-js');
      if ($('> ul > li', $main_nav_more).length > 0) {
        $main_nav_more.show();
      }
      else {
        $main_nav_more.hide();
      }
    };

    // Setup header.
    setupHeader();

    $(window).on('resize', function () {
      setupHeader();
    });

    // Menu-mobile.
    $menu_toggle_icon.on('click', function (e) {
      e.preventDefault();
      $main_nav_ul.toggleClass('menu-open');
    });


  });

})(window.jQuery, window.Drupal);
