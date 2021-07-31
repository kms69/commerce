/**
 * @file
 * Contain code for animation scroll with achnors.
 */

(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.sshopAnchorScroll = {
    attach: function (context) {
      var speed = 500;
      var navbarHeight = $('header.navbar-fixed-top', context).height();
      if (typeof navbarHeight !== 'undefined') {
        navbarHeight += 40;
      }
      else {
        navbarHeight = 0;
      }

      var dateToggle = 'a[href*=\\#]:not([href=\\#]):not([data-toggle=tab])';
      $(dateToggle, context).on('click', function () {
        var locationReplace = location.pathname.replace(/^\//, '');

        if (locationReplace === this.pathname.replace(/^\//, '') &&
          location.hostname === this.hostname) {

          var target = $(this.hash);
          var hashSlice = '[name=' + this.hash.slice(1) + ']';
          target = target.length ? target : $(hashSlice);

          if (target.length) {
            $('html,body', context).animate({
              scrollTop: target.offset().top - navbarHeight
            }, speed);
          }
        }
      });

      // Executed on page load with URL containing an anchor tag.
      if ($(location.href.split('#')[1])) {
        var hash = location.href.split('#')[1];
        var target = $('#' + hash);
        var $reviewsTab = $('a[href="#reviews"]', context);
        if (target.length) {

          // Display Reviews tab for comment anchors.
          if (hash.indexOf('comment') !== -1 && $reviewsTab.length !== 0) {
            $reviewsTab.tab('show');
          }

          $('html,body', context).animate({
            scrollTop: target.offset().top - navbarHeight
          }, speed);

          return false;
        }
      }

    }
  };

})(window.jQuery, window.Drupal);
