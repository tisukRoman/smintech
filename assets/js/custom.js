/*
 * CONTACT FORM 7 EVENTS
 */

/*
 * Download File when submit "Learn More" contact form
 */
/*
const downloadFile = () => {
  var link = document.createElement("a");
  link.setAttribute("download", "smintech-file");
  document.body.appendChild(link);
  link.href = smintech.template_uri + "/assets/img/hero.png";
  link.click();
};

const learnMoreForm = document.querySelector("#learn-more .wpcf7");

learnMoreForm.addEventListener("wpcf7mailsent", (e) => {
  downloadFile();
  $("#learn-more").fadeOut(500);
});
*/
"use strict";
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
"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
/*
 * Highlithing anchor links
 */

var setActiveLinks = function setActiveLinks() {
  var hashLink = window.location.hash;
  var links = _toConsumableArray(document.querySelectorAll(".menu__list-item a"));
  links.forEach(function (link) {
    var linkValue = "#" + link.href.split("#")[1];
    if (!hashLink && linkValue === "#") {
      link.classList.add("active");
    }
    if (linkValue === hashLink) {
      link.classList.add("active");
    }
  });
};
var resetActiveLinks = function resetActiveLinks() {
  var links = _toConsumableArray(document.querySelectorAll(".menu__list-item a"));
  links.forEach(function (link) {
    return link.classList.remove("active");
  });
};
var menus = _toConsumableArray(document.querySelectorAll(".menu"));
menus.forEach(function (menu) {
  menu.addEventListener("click", function (e) {
    if (e.target.nodeName !== "A") return;
    setTimeout(function () {
      resetActiveLinks();
      setActiveLinks();
    }, 100);
  });
});