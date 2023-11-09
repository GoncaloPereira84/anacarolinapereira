window.addEventListener("load", function () {
  offsetTop();
  offsetTopMenu();
  stickyFooter();
  drawLines_loader();

  openSubmenu();
  openSubmenuMobile();

  $("body").addClass("loaded");
  $("html").addClass("loaded");

  setTimeout(() => {
    deleteLines_loader();
    $("#loading").addClass("fadeout");
    $("body").addClass("loaded");
    $("html").addClass("loaded");

    FadeIn();

    if (document.getElementById("slideshow-home") != null) playAnim();
    if (document.querySelector("#destaques .slider") != null) playDestaques();
  }, 1000);

  var menuHeight = $("#menu").height();
  $(".slideshow-wrapper").css("height", "calc(100vh - " + menuHeight + "px)");

  var contact_form = document.querySelector("#contact-form");
  var contact_form2 = document.querySelector("#contact-form-2");

  contact_form.style.transform = "translate(-160%, -50%)";
  contact_form2.style.transform = "translate(-160%, -50%)";

  var cookieBar = document.getElementById("gdpr-box");
  var acceptBtn = document.querySelector(".gdpr-button-accept");

  if (Cookies.get("cookie-consent-anacarolinapereira") == undefined) {
    cookieBar.style.display = "flex";

    acceptBtn.addEventListener("click", function () {
      Cookies.set("cookie-consent-anacarolinapereira", "yes", {
        expires: 365,
        path: "/",
      });
      cookieBar.style.display = "none";
    });
  } else {
    cookieBar.style.display = "none";
  }

  var btn = $(".to-top");

  window.onscroll = function (ev) {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight / 2) {
      btn.css({ opacity: 1 });
    } else {
      btn.css({ opacity: 0 });
    }
  };

  var map = Array.prototype.map;
  var indicators_dest = document.querySelectorAll('.ind-dest');

  map.call(indicators_dest, function(d, index){
    d.addEventListener('click', function(){
      currentSlideDest(index + 1);
    })
  });

  var isActiveDest = true;
  var intervalsDest = [];
  var isPlayingDest = false;
  var slideIndexDest = 1;

  function playDestaques(){
    intervalsDest.forEach(clearInterval);

    var slider = document.querySelector("#destaques .slider");

    slider.addEventListener("touchstart", handleTouchStartDest, false);
    slider.addEventListener("touchmove", handleTouchMoveDest, false);

    var i = setInterval(() => {
      plusSlidesDest(1);
      isPlayingDest = true;
    }, 8000);

    setTimeout(() => {
      isPlayingDest = false;
    }, 8000);

    intervalsDest.push(i);
  }

  function clickIndicatorDest(n, dir) {
    var i;
    var slides = document.querySelectorAll("#destaques .slider .card");
    var dots = document.querySelectorAll(".indicators-dest .ind-dest");
    if (n > slides.length) {
      slideIndexDest = 1;
    }
    if (n < 1) {
      slideIndexDest = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].className = "card";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active-dest", "");
      isActiveDest = false;
    }
    slides[slideIndexDest - 1].className = "card active-dest";
    dots[slideIndexDest - 1].className += " active-dest";
    isActiveDest = true;
    isPlayingDest = false;
  }

  function prevSlidesDest(n) {
    isPlayingDest = false;
    clickIndicatorDest((slideIndexDest -= n), 1);
    intervalsDest.forEach(clearInterval);
    setTimeout(() => {
      if (isPlayingDest == false) playDestaques();
    }, 500);
  }
  function plusSlidesDest(n) {
    isPlayingDest = false;
    clickIndicatorDest((slideIndexDest += n), -1);
    intervalsDest.forEach(clearInterval);
    setTimeout(() => {
      if (isPlayingDest == false) playDestaques();
    }, 500);
  }
  function currentSlideDest(n) {
    clickIndicatorDest((slideIndexDest = n), -1);
    intervalsDest.forEach(clearInterval);

    var slider = document.querySelector("#destaques .slider");
    slider.removeEventListener("touchstart", handleTouchStartDest, false);
    slider.removeEventListener("touchmove", handleTouchMoveDest, false);

    setTimeout(() => {
      isPlayingDest = false;

      setTimeout(() => {
        slider.addEventListener("touchstart", handleTouchStartDest, false);
        slider.addEventListener("touchmove", handleTouchMoveDest, false);

        if (isPlayingDest == false) playDestaques();
      }, 1000);
    }, 500);
  }

  var slider = document.querySelector("#destaques .slider");

  if (window.innerWidth < 769) {
    slider.addEventListener("touchstart", handleTouchStartDest, false);
    slider.addEventListener("touchmove", handleTouchMoveDest, false);

    var xDownDest = null;
    var yDownDest = null;

    function getTouchesDest(evt) {
      return evt.touches || evt.originalEvent.touches;
    }

    function handleTouchStartDest(evt) {
      const firstTouch = getTouchesDest(evt)[0];
      xDownDest = firstTouch.clientX;
      yDownDest = firstTouch.clientY;
    }

    function handleTouchMoveDest(evt) {
      if (!xDownDest || !yDownDest) {
        return;
      }

      var xUp = evt.touches[0].clientX;
      var yUp = evt.touches[0].clientY;

      var xDiff = xDownDest - xUp;
      var yDiff = yDownDest - yUp;

      if (Math.abs(xDiff) > Math.abs(yDiff)) {
        /*most significant*/
        if (xDiff > 0) {
          /* left swipe */
          plusSlidesDest(1);
        } else {
          /* right swipe */
          prevSlidesDest(1);
        }
      }
      /* reset values */
      xDownDest = null;
      yDownDest = null;
    }
  }
});

window.addEventListener("resize", function () {
  offsetTop();
  offsetTopMenu();
  stickyFooter();

  var menuHeight = $("#menu").height();
  $(".slideshow-wrapper").css("height", "calc(100vh - " + menuHeight + "px)");
});

function drawLines_loader() {
  $("#loading .nodules-loader").addClass("start-loader");
  $("#loading .main-path-loader").addClass("start-loader");
  $("#loading .main-path-loader-fill").addClass("start-loader");
}
function deleteLines_loader() {
  $("#loading .nodules-loader").removeClass("start-loader");
  $("#loading .main-path-loader").removeClass("start-loader");
  $("#loading .main-path-loader-fill").removeClass("start-loader");
}

function toHash(hash) {
  var top = $("#" + hash)[0].offsetTop;
  $("html, body").animate({ scrollTop: top - 100 }, 1000);
}

function openSubmenu() {
  $(".menu-wrapper .menu-item").mouseenter(function () {
    if ($(this).find(".submenu").hasClass("active")) {
      $(this).find(".submenu").removeClass("active");
    } else {
      $(".menu-wrapper .menu-item .submenu").removeClass("active");
      $(this).find(".submenu").addClass("active");
    }
  });

  $(".menu-wrapper .menu-item").mouseleave(function () {
    if ($(this).find(".submenu").hasClass("active")) {
      $(this).find(".submenu").removeClass("active");
    } else {
      $(".menu-wrapper .menu-item .submenu").removeClass("active");
      $(this).find(".submenu").addClass("active");
    }
  });
}
function openMenuMobile() {
  var openBtn = $(".btn-menu");
  var closeBtn = $(".close-menu");
  var menuItems = $(".menu-wrapper-mobile .menu-items");
  var menuItem = $(".menu-wrapper-mobile .menu-item");
  var btn = $(".menu-wrapper-mobile .menu-item .btn");

  openBtn.toggleClass("open", 500);
  closeBtn.toggleClass("open", 500);
  menuItems.toggleClass("open", 500);
  menuItem.toggleClass("open", 500);
  btn.toggleClass("open", 500);
  menuItems.css("height", $(window).height());
  $("body, html").toggleClass("open");
}
function openSubmenuMobile() {
  $(".menu-wrapper-mobile .menu-item").click(function () {
    if ($(this).find(".submenu").hasClass("active")) {
      $(this).find(".submenu").removeClass("active");
    } else {
      $(".menu-wrapper-mobile .menu-item .submenu").removeClass("active");
      $(this).find(".submenu").addClass("active");
    }
  });
}

function backToTop() {
  $("html, body").animate({ scrollTop: 0 }, 1500);
}

function offsetTopMenu() {
  var menu = $("#menu");
  $("#main-section").css("margin-top", menu.height());
}

function stickyFooter() {
  var totalHeight = $("body").height();
  if ($(window).height() > totalHeight) {
    var routerSection = $("#app > #main-section");
    var minSectionHeight = $(window).height() - totalHeight;

    routerSection.css(
      "min-height",
      routerSection.height() + minSectionHeight + "px"
    );
  }
}

function offsetTop() {
  var slideshow = $(".slideshow-wrapper");
  var aboutSection = $(".clinica-wrapper");
  aboutSection.css("margin-top", slideshow.height());
}

//-----------------------------------
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
        except the current select box:*/
  var x,
    y,
    i,
    xl,
    yl,
    arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i);
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

document.addEventListener("click", closeAllSelect);

function checkEmail($email) {
  var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/;
  return filter.test($email);
}

function updateValue(event) {
  const value = event.target.value;
  if (String(value).length < 9) {
    this.amount = value;
    // $(".error.phone").text("O número de telefone tem de ter 9 dígitos");
  }
  this.$forceUpdate();
}