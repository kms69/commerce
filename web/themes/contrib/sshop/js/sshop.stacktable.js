
/**
 * @file
 * Contain configurations for apply stacktable.js.
 */

(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.sshopStacktable = {
    attach: function (context) {
      // Table in header block cart.
      $('.block.cart-block table', context).cardtable({
        myClass: 'cardtable-in'
      });

      // Table in the /cart page.
      $('.views-view-commerce_cart_form-default table', context).stacktable({
        myClass: 'stacktable-in'
      });
    }
  };

})(window.jQuery, window.Drupal);
