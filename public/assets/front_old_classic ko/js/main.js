
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlink = select('#package-nav .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlink.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

})();

$(document).ready(function () {
  "use strict";

  var window_width = $(window).width(),
    window_height = window.innerHeight,
    header_height = $(".default-header").height(),
    header_height_static = $(".site-header.static").outerHeight(),
    fitscreen = window_height - header_height;

  $(".fullscreen").css("height", window_height);
  $(".fitscreen").css("height", fitscreen);

  // ------- Datepicker  js --------//

  $(function () {
    $(".date-picker").datepicker();
  });

  //------- Niceselect  js --------//

  if (document.getElementById("default-select")) {
    $("select").niceSelect();
  }
  if (document.getElementById("default-select2")) {
    $("select").niceSelect();
  }
  if (document.getElementById("service-select")) {
    $("select").niceSelect();
  }

  //------- Lightbox  js --------//

  $(".img-gal").magnificPopup({
    type: "image",
    gallery: {
      enabled: true,
    },
  });

  $(".play-btn").magnificPopup({
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });

  //------- Superfish nav menu  js --------//

  $(".nav-menu").superfish({
    animation: {
      opacity: "show",
    },
    speed: 400,
  });

  //------- Mobile Nav  js --------//

  if ($("#nav-menu-container").length) {
    var $mobile_nav = $("#nav-menu-container").clone().prop({
      id: "mobile-nav",
    });
    $mobile_nav.find("> ul").attr({
      class: "",
      id: "",
    });
    $("body .main-menu").append($mobile_nav);
    $("body .main-menu").prepend(
      '<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>'
    );
    $("body .main-menu").append('<div id="mobile-body-overly"></div>');
    $("#mobile-nav")
      .find(".menu-has-children")
      .prepend('<i class="lnr lnr-chevron-down"></i>');

    $(document).on("click", ".menu-has-children i", function (e) {
      $(this).next().toggleClass("menu-item-active");
      $(this).nextAll("ul").eq(0).slideToggle();
      $(this).toggleClass("lnr-chevron-up lnr-chevron-down");
    });

    $(document).on("click", "#mobile-nav-toggle", function (e) {
      $("body").toggleClass("mobile-nav-active");
      $("#mobile-nav-toggle i").toggleClass("lnr-cross lnr-menu");
      $("#mobile-body-overly").toggle();
    });

    $(document).on("click", function (e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($("body").hasClass("mobile-nav-active")) {
          $("body").removeClass("mobile-nav-active");
          $("#mobile-nav-toggle i").toggleClass("lnr-cross lnr-menu");
          $("#mobile-body-overly").fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  //------- Smooth Scroll  js --------//

  $(".nav-menu a, #mobile-nav a, .scrollto").on("click", function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($("#header").length) {
          top_space = $("#header").outerHeight();

          if (!$("#header").hasClass("header-fixed")) {
            top_space = top_space;
          }
        }

        $("html, body").animate(
          {
            scrollTop: target.offset().top - top_space,
          },
          1500,
          "easeInOutExpo"
        );

        if ($(this).parents(".nav-menu").length) {
          $(".nav-menu .menu-active").removeClass("menu-active");
          $(this).closest("li").addClass("menu-active");
        }

        if ($("body").hasClass("mobile-nav-active")) {
          $("body").removeClass("mobile-nav-active");
          $("#mobile-nav-toggle i").toggleClass("lnr-times lnr-bars");
          $("#mobile-body-overly").fadeOut();
        }
        return false;
      }
    }
  });

  $(document).ready(function () {
    $("html, body").hide();

    if (window.location.hash) {
      setTimeout(function () {
        $("html, body").scrollTop(0).show();

        $("html, body").animate(
          {
            scrollTop: $(window.location.hash).offset().top - 108,
          },
          1000
        );
      }, 0);
    } else {
      $("html, body").show();
    }
  });

  jQuery(document).ready(function ($) {
    // Get current path and find target link
    var path = window.location.pathname.split("/").pop();

    // Account for home page with empty path
    if (path == "") {
      path = "index.html";
    }

    var target = $('nav a[href="' + path + '"]');
    // Add active class to target link
    target.addClass("menu-active");
  });

  $(document).ready(function () {
    if ($(".menu-has-children ul>li a").hasClass("menu-active")) {
      $(".menu-active")
        .closest("ul")
        .parentsUntil("a")
        .addClass("parent-active");
    }
  });

  //------- Header Scroll Class  js --------//

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#header").addClass("header-scrolled");
    } else {
      $("#header").removeClass("header-scrolled");
    }
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".package-inner-main #header").removeClass("header-scrolled");
      $(".package-inner-main #header").hide();
    } else {
      $(".package-inner-main #header").show();
    }
  });

  new Swiper(".testimonial-slider", {
    loop: true,
    paginationClickable: true,
    spaceBetween: 20,
    breakpoints: {
      1920: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      1028: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
    },
  });

  new Swiper(".team-detail-certificate", {
    loop: true,
    paginationClickable: true,
    spaceBetween: 20,
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1920: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1028: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
    },
  });

  $(document).ready(function () {
    $(".accordion-list > li > .answer").hide();

    $(".accordion-list > li").click(function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active").find(".answer").slideUp();
      } else {
        $(".accordion-list > li.active .answer").slideUp();
        $(".accordion-list > li.active").removeClass("active");
        $(this).addClass("active").find(".answer").slideDown();
      }
      return false;
    });
  });

  
});


// ********

// ICONS CALLBACK
feather.replace();

/*

ADD NEW ICONS
Take it from
https://feathericons.com/

And then replace the icon name in data-father.
<i data-feather="circle"></i>

*/

// NEW CODE HERE

// Focus
$(".text-field").focus(function () {
if (true) {
// Expand resoluts bar
setTimeout(function () {
  $(".resoult-tab").addClass("resoult-tab-active");
}, 199);

// Ul title
setTimeout(function () {
  $(".ul-title").animate(
    {
      opacity: 1,
    },
    299
  );
}, 299);
// List fade in
setTimeout(function () {
  $(".li").addClass("li-active");
}, 0);

// Icon
$(".search-icon").animate(
  {
    opacity: 0.3,
  },
  69,
  "linear",
  function () {
    // Icon
    $(".text-field").focusout(function () {
      $(".search-icon").animate(
        {
          opacity: 1,
        },
        69,
        "linear",
        function () {
          // Shrink resoluts bar
          setTimeout(function () {
            $(".resoult-tab").removeClass("resoult-tab-active");
          }, 329);

          // Ul title
          $(".ul-title").animate(
            {
              opacity: 0,
            },
            299
          );

          // List fade out
          setTimeout(function () {
            $(".li").removeClass("li-active");
          }, 99);
          $(".li").animate(
            {
              opacity: 0,
            },
            299
          );
        }
      );
    });
  }
);

// Text
$(".search-placeholder").animate(
  {
    opacity: 0,
  },
  69,
  "linear",
  function () {
    // NO FOCUS
    $(".text-field").focusout(function () {
      // if filled
      if (true && $(".text-field").val().length >= 1) {
        $(".search-placeholder").css("opacity", "0");
        console.log("very valid");
      }
      // if empty
      else if (true && $(".text-field").val().length == 0) {
        $(".search-placeholder").animate(
          {
            opacity: 1,
          },
          99
        );
        console.log("non valid");
      }
    });
  }
);
console.log("Focus");
}
});