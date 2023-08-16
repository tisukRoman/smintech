"use strict";

/*
 * Call Me Back Popup
 */
jQuery(document).ready(function ($) {
  var isOpen = false;
  $('[href="#call-me-back"]').click(function (e) {
    e.preventDefault();
    $("#call-me-back").fadeIn(500);
    setTimeout(function () {
      return isOpen = true;
    }, 500);
  });
  $("#call-me-back .popup__close").click(function () {
    $("#call-me-back").fadeOut(500);
    setTimeout(function () {
      return isOpen = false;
    }, 500);
  });
  $("body").click(function () {
    if (isOpen) {
      $("#call-me-back").fadeOut(500);
      setTimeout(function () {
        return isOpen = false;
      }, 500);
    }
  });
  $("#call-me-back .popup__content").click(function (e) {
    e.stopPropagation();
  });
});