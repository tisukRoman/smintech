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

/*
 * Learn More Popup
 */
jQuery(document).ready(function ($) {
  var isOpen = false;
  $('[href="#learn-more"]').click(function (e) {
    e.preventDefault();
    $("#learn-more").fadeIn(500);
    setTimeout(function () {
      return isOpen = true;
    }, 500);
  });
  $("#learn-more .popup__close").click(function () {
    $("#learn-more").fadeOut(500);
    setTimeout(function () {
      return isOpen = false;
    }, 500);
  });
  $("body").click(function () {
    if (isOpen) {
      $("#learn-more").fadeOut(500);
      setTimeout(function () {
        return isOpen = false;
      }, 500);
    }
  });
  $("#learn-more .popup__content").click(function (e) {
    e.stopPropagation();
  });
});
"use strict";

/*
 * CONTACT FORM 7 EVENTS
 */

/*
 * Download File when submit "Learn More" contact form
 */
var downloadFile = function downloadFile() {
  var link = document.createElement("a");
  link.setAttribute("download", "smintech-file");
  document.body.appendChild(link);
  link.href = "http://localhost:3000/wp-content/themes/smintech/assets/img/hero.png";
  link.click();
};
var learnMoreForm = document.querySelector("#learn-more .wpcf7");
learnMoreForm.addEventListener("wpcf7mailsent", function (e) {
  downloadFile();
  $("#learn-more").fadeOut(500);
});