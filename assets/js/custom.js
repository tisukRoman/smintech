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
  link.href = smintech.template_uri + "/assets/img/hero.png";
  link.click();
};
var learnMoreForm = document.querySelector("#learn-more .wpcf7");
learnMoreForm.addEventListener("wpcf7mailsent", function (e) {
  downloadFile();
  $("#learn-more").fadeOut(500);
});
"use strict";

var menu_button = document.querySelector(".mobile-menu-icon");
var mobile_menu = document.querySelector(".mobile-menu");
menu_button.addEventListener("click", function () {
  mobile_menu.classList.toggle("open");
});
document.addEventListener("click", function (e) {
  var el = e.target;
  if (el.matches(".mobile-menu-icon img")) {
    return;
  }
  mobile_menu.classList.remove("open");
});
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

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
jQuery(document).ready(function ($) {
  $(".applications__grid").slick({
    infinite: true,
    autoplay: true,
    dots: true,
    fade: true,
    speed: 500,
    arrows: false,
    responsive: [{
      breakpoint: 3000,
      settings: "unslick"
    }, {
      breakpoint: 767.98,
      settings: _defineProperty({
        slidesToShow: 1
      }, "slidesToShow", 1)
    }]
  });
});
jQuery(document).ready(function ($) {
  $(".projects__grid").slick({
    infinite: true,
    autoplay: true,
    dots: true,
    fade: true,
    speed: 500,
    arrows: false,
    responsive: [{
      breakpoint: 3000,
      settings: "unslick"
    }, {
      breakpoint: 767.98,
      settings: _defineProperty({
        slidesToShow: 1
      }, "slidesToShow", 1)
    }]
  });
});
"use strict";

// When the user scrolls the page, execute myFunction
window.onscroll = function () {
  toggleSticky();
};

// Get the header
var header = document.querySelector(".header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function toggleSticky() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}