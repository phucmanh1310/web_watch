jQuery(document).ready(function () {
  jQuery(".banner").slick({
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:
      '<div class="slider-arrow-left"><svg xmlns="http://www.w3.org/2000/svg" style="font-size:30px" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"/></svg></div>',
    nextArrow:
      '<div class="slider-arrow-right"><svg xmlns="http://www.w3.org/2000/svg" style="font-size:30px" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg></div>',
    dots: true,
    autoplay: true,
    autoplaySpeed: 3000,
  });
  jQuery(".section-7-thnt-slider").slick({
    infinite: true,
    speed: 3000,
    slidesToShow: 6,
    slidesToScroll: 6,
    arrows: true,
    prevArrow:
      '<div class="slider-arrow-left"><i class="fas fa-chevron-left"></i></div>',
    nextArrow:
      '<div class="slider-arrow-right"><i class="fas fa-chevron-right"></i></div>',
    dots: false,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
          infinite: true,
        },
      },
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
          infinite: true,
        },
      },
      {
        breakpoint: 911,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
          infinite: true,
        },
      },
      {
        breakpoint: 819,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: true,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: true,
        },
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        },
      },
      {
        breakpoint: 374,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        },
      },
      {
        breakpoint: 359,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        },
      },
    ],
  });

  jQuery(".section-10-slider").slick({
    infinite: true,
    speed: 3000,
    slidesToShow: 6,
    slidesToScroll: 6,
    arrows: true,
    prevArrow:
      '<div class="slider-arrow-left"><i class="fas fa-angle-double-left"></i></div>',
    nextArrow:
      '<div class="slider-arrow-right"><i class="fas fa-angle-double-right"></i></div>',
    dots: false,
    autoplay: false,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 9,
          slidesToScroll: 5,
          infinite: true,
        },
      },
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 9,
          slidesToScroll: 5,
          infinite: true,
        },
      },
      {
        breakpoint: 911,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
          infinite: true,
        },
      },
      {
        breakpoint: 819,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: true,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
          infinite: true,
        },
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        },
      },
      {
        breakpoint: 374,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        },
      },
      {
        breakpoint: 359,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        },
      },
    ],
  });
  jQuery(".slider-for-pd-single").slick({
    infinite: true,
    speed: 3000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:
      '<div class="slider-arrow-left"><i class="fas fa-chevron-left"></i></div>',
    nextArrow:
      '<div class="slider-arrow-right"><i class="fas fa-chevron-right"></i></div>',
    dots: false,
    autoplay: false,
    autoplaySpeed: 3000,
    asNavFor: ".slider-nav-pd-single",
  });
  $(".slider-nav-pd-single").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    asNavFor: ".slider-for-pd-single",
    dots: true,
    centerMode: true,
    focusOnSelect: true,
  });

  jQuery(".slider-bstm").slick({
    infinite: true,
    speed: 3000,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:
      '<div class="slider-arrow-left"><i class="fas fa-angle-left" style="font-size:30px"></i></div>',
    nextArrow:
      '<div class="slider-arrow-right"><i class="fas fa-angle-right" style="font-size:30px"></i></div>',
    dots: false,
    autoplay: true,
    autoplaySpeed: 2000,
  });
});
