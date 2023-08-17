jQuery(document).ready(function ($) {
  $(".applications__grid").slick({
    infinite: true,
    autoplay: true,
    dots: true,
    fade: true,
    speed: 500,
    arrows: false,
    responsive: [
      {
        breakpoint: 3000,
        settings: "unslick",
      },
      {
        breakpoint: 767.98,
        settings: {
          slidesToShow: 1,
          slidesToShow: 1,
        },
      },
    ],
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
    responsive: [
      {
        breakpoint: 3000,
        settings: "unslick",
      },
      {
        breakpoint: 767.98,
        settings: {
          slidesToShow: 1,
          slidesToShow: 1,
        },
      },
    ],
  });
});
