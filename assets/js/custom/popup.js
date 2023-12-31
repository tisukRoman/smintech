/*
 * Call Me Back Popup
 */
jQuery(document).ready(function ($) {
  let isOpen = false;

  $('[href="#call-me-back"]').click(function (e) {
    e.preventDefault();
    $("#call-me-back").fadeIn(500);
    setTimeout(() => (isOpen = true), 500);
  });

  $("#call-me-back .popup__close").click(function () {
    $("#call-me-back").fadeOut(500);
    setTimeout(() => (isOpen = false), 500);
  });

  $("body").click(function () {
    if (isOpen) {
      $("#call-me-back").fadeOut(500);
      setTimeout(() => (isOpen = false), 500);
    }
  });

  $("#call-me-back .popup__content").click(function (e) {
    e.stopPropagation();
  });
});

/*
 * Learn More Popup
 */
jQuery(document).ready(function ($) {
  let isOpen = false;

  $('[href="#learn-more"]').click(function (e) {
    e.preventDefault();
    $("#learn-more").fadeIn(500);
    setTimeout(() => (isOpen = true), 500);
  });

  $("#learn-more .popup__close").click(function () {
    $("#learn-more").fadeOut(500);
    setTimeout(() => (isOpen = false), 500);
  });

  $("body").click(function () {
    if (isOpen) {
      $("#learn-more").fadeOut(500);
      setTimeout(() => (isOpen = false), 500);
    }
  });

  $("#learn-more .popup__content").click(function (e) {
    e.stopPropagation();
  });
});
