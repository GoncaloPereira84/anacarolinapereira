"use strict";

window.addEventListener("load", function () {
  // addSelectElementsForm(this);
  // addSelectElementsContact(this);
  offsetTop();
  offsetTopMenu();
  stickyFooter();
  drawLines_loader();
  openSubmenu();
  openSubmenuMobile();
  setTimeout(function () {
    deleteLines_loader();
    $("#loading").addClass("fadeout");
    $("body").addClass("loaded");
    $("html").addClass("loaded");
    $("#slideshow-home").addClass("not-hidden");
    var slideArray = [];
    $(".slide-a").each(function () {
      slideArray.push($(this));
    });
    $("#slideshow-home").css("width", 100 * Object.keys(slideArray).length + "%");
    if (document.getElementById('slideshow-home') != null) playAnim();
    $().ready(function FadeIn() {
      var allMods = $(".movement, .cover");
      var delayedMods = $(".movement-delayed");
      var lateralMods = $(".lateral, .lateralR");
      var svg = $("#svg");

      (function ($) {
        $.fn.visible = function (partial, adjust) {
          if (adjust === undefined) {
            adjust = 0;
          }

          var elem = $(this),
              wind = $(window),
              viewTop = wind.scrollTop(),
              viewBottom = viewTop + wind.height(),
              elem_top = elem.offset().top + adjust,
              elem_bottom = elem_top + elem.height() - adjust,
              compareTop = partial === true ? elem_bottom : elem_top,
              compareBottom = partial === true ? elem_top : elem_bottom;
          return compareBottom <= viewBottom && compareTop >= viewTop;
        };
      })(jQuery);

      var win = $(window);
      var xmlTeste = true;
      allMods.each(function (i, el) {
        var el = $(el);

        if (el.visible(true, 100)) {
          el.addClass("placed");
        }
      });
      svg.each(function (i, el) {
        var el = $(el);

        if (el.visible(true)) {
          xmlTeste && el.append("<img src='assets/img/elemento_animated.svg' alt=''></img>");
          xmlTeste = false;
        }
      });
      lateralMods.each(function (i, el) {
        var el = $(el);

        if (el.visible(true, 100)) {
          el.addClass("placed");
        }
      });
      delayedMods.each(function (i, el) {
        var el = $(el);

        if (el.visible(true, 100)) {
          el.addClass("placed");
        }
      });
      win.scroll(function (event) {
        allMods.each(function (i, el) {
          var el = $(el);

          if (el.visible(true, 100)) {
            el.addClass("placed");
          }
        });
        lateralMods.each(function (i, el) {
          var el = $(el);

          if (el.visible(true, 100)) {
            el.addClass("placed");
          }
        });
        delayedMods.each(function (i, el) {
          var el = $(el);

          if (el.visible(true, 100)) {
            el.addClass("placed");
          }
        });
        svg.each(function (i, el) {
          var el = $(el);

          if (el.visible(true)) {
            xmlTeste && el.append("<img src='assets/img/elemento_animated.svg' alt=''></img>");
            xmlTeste = false;
          }
        });
      });
    });
  }, 3000);
  var menuHeight = $("#menu").height();
  $(".slideshow-wrapper").css("height", "calc(100vh - " + menuHeight + "px)");
  document.addEventListener("click", closeAllSelect);
  addSelectElements(this); // getFormData();

  addSelectElements2(this); // getFormData2();

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
        path: "/"
      });
      cookieBar.style.display = "none";
    });
  } else {
    cookieBar.style.display = "none";
  }

  var btn = $(".to-top");

  window.onscroll = function (ev) {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight / 2) {
      btn.css({
        opacity: 1
      });
    } else {
      btn.css({
        opacity: 0
      });
    }
  };

  setTimeout(function () {
    $("#popup").addClass("active");
  }, 7000);
});
window.addEventListener("resize", function () {
  offsetTop();
  offsetTopMenu();
  stickyFooter();
  var menuHeight = $("#menu").height();
  $(".slideshow-wrapper").css("height", "calc(100vh - " + menuHeight + "px)");
});

function toHash(hash) {
  var top = $("#" + hash)[0].offsetTop;
  $("html, body").animate({
    scrollTop: top - 100
  }, 1000);
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

function closePopup() {
  $("#popup").removeClass("active");
}

function backToTop() {
  $("html, body").animate({
    scrollTop: 0
  }, 1500);
}

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

function offsetTopMenu() {
  var menu = $("#menu");
  $("#main-section").css("margin-top", menu.height());
}

function stickyFooter() {
  var totalHeight = $("body").height();

  if ($(window).height() > totalHeight) {
    var routerSection = $("#app > #main-section");
    var minSectionHeight = $(window).height() - totalHeight;
    routerSection.css("min-height", routerSection.height() + minSectionHeight + "px");
  }
}

function offsetTop() {
  var slideshow = $(".slideshow-wrapper");
  var aboutSection = $(".clinica-wrapper");
  aboutSection.css("margin-top", slideshow.height());
}

function openContactForm() {
  var contact_form = document.querySelector("#contact-form-2");
  var menu = document.querySelector("#menu");
  contact_form.style.transition = ".5s";
  contact_form.style.transform = "translate(-50%, -50%)";
  contact_form.style.pointerEvents = "all";
  $("#contact-form-2 .page").css("pointer-events", "all");
  var html_elem = document.documentElement;
  html_elem.style.overflow = "hidden";
  $(".menu-wrapper-mobile .menu-items").removeClass("open");
  $(".menu-wrapper-mobile .btn-menu").removeClass("open");
  $(".menu-wrapper-mobile .close-menu").removeClass("open");
  $("#contact-form-2 .p0 .text").animate({
    left: 0,
    opacity: 1
  }, 500);
} // ****** ------ ***************** ------ ******
// ****** ------ SLIDWSHOW SCRIPTS ------ ******
// ****** ------ ***************** ------ ******


var slideIndex = 1;
var intervals = [];
var isPlaying = false;
var xDown = null;
var yDown = null;
var isActive = true;

function drawLines() {
  $(".nodules").addClass("start");
  $(".main-path").addClass("start");
  $(".main-path-fill").addClass("start");
}

function deleteLines() {
  $(".nodules").removeClass("start");
  $(".main-path").removeClass("start");
  $(".main-path-fill").removeClass("start");
}

function playAnim() {
  // var vm = this;
  // vm.isPlaying = false;
  drawLines();
  intervals.forEach(clearInterval);
  var slider = document.querySelector("#slideshow-home");
  slider.addEventListener("touchstart", handleTouchStart, false);
  slider.addEventListener("touchmove", handleTouchMove, false);
  var i = setInterval(function () {
    deleteLines();
    prevSlides(-1);
    var value = -0.2 * (slideIndex - 1) * 100;
    slider.style.transform = "translateX(" + value + "%)";
    isPlaying = true;
  }, 8000);
  setTimeout(function () {
    isPlaying = false;
  }, 8000);
  intervals.push(i);
}

function showSlide(n) {
  var i;
  var slides = document.querySelectorAll("#slideshow-home .slide-a");
  var dots = document.querySelectorAll(".indicators .ind");

  if (n > slides.length) {
    slideIndex = 1;
  }

  if (n < 1) {
    slideIndex = slides.length;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].className = "slide-a";
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    isActive = false;
  }

  slides[slideIndex - 1].className = "slide-a active";
  dots[slideIndex - 1].className += " active";
  isActive = true;
  isPlaying = false;
}

function prevSlides(n) {
  isPlaying = false;
  showSlide(slideIndex -= n);
  intervals.forEach(clearInterval);
  setTimeout(function () {
    drawLines();
    if (isPlaying == false) playAnim();
  }, 500);
}

function plusSlides(n) {
  isPlaying = false;
  showSlide(slideIndex += n);
  intervals.forEach(clearInterval);
  setTimeout(function () {
    drawLines();
    if (isPlaying == false) playAnim();
  }, 500);
}

function currentSlide(n) {
  showSlide(slideIndex = n);
  deleteLines(); // clearInterval(auto);

  intervals.forEach(clearInterval);
  var slider = document.querySelector("#slideshow-home");
  slider.removeEventListener("touchstart", handleTouchStart, false);
  slider.removeEventListener("touchmove", handleTouchMove, false);
  var value = -0.2 * (slideIndex - 1) * 100;
  slider.style.transform = "translateX(" + value + "%)";
  setTimeout(function () {
    drawLines();
    isPlaying = false;
    setTimeout(function () {
      slider.addEventListener("touchstart", handleTouchStart, false);
      slider.addEventListener("touchmove", handleTouchMove, false);
      if (isPlaying == false) playAnim();
    }, 1000);
  }, 500);
}

function getTouches(evt) {
  return evt.touches || evt.originalEvent.touches;
}

function handleTouchStart(evt) {
  var firstTouch = getTouches(evt)[0];
  xDown = firstTouch.clientX;
  yDown = firstTouch.clientY;
}

function handleTouchMove(evt) {
  if (!xDown || !yDown) {
    return;
  }

  var xUp = evt.touches[0].clientX;
  var yUp = evt.touches[0].clientY;
  var xDiff = xDown - xUp;
  var yDiff = yDown - yUp;
  var active = document.querySelector("#slideshow-home .slide-a.active");
  var activeDot = document.querySelector(".indicators .ind.active");
  var id = active.getAttribute("data-slide-id");
  var slider = document.querySelector("#slideshow-home");

  if (Math.abs(xDiff) > Math.abs(yDiff)) {
    /*most significant*/
    if (xDiff > 0) {
      /* left swipe */
      // vm.isPlaying = false;
      deleteLines();
      plusSlides(1);
      var value = -0.2 * (slideIndex - 1) * 100;
      slider.style.transform = "translateX(" + value + "%)"; // clearInterval();
    } else {
      /* right swipe */
      // vm.isPlaying = false;
      deleteLines();
      prevSlides(1);
      var value = -0.2 * (slideIndex - 1) * 100;
      slider.style.transform = "translateX(" + value + "%)"; // clearInterval();
    }
  }

  xDown = null;
  yDown = null;
} // ****** ------ ***************** ------ ******
// ****** ------ SLIDWSHOW SCRIPTS END ------ ******
// ****** ------ ***************** ------ ******
// ****** ------ ***************** ------ ******
// ****** ------ MARCAR CONSULTA FORM SCRIPTS ------ ******
// ****** ------ ***************** ------ ******


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

function addSelectElements(vm) {
  var x, i, j, l, ll, selElmnt, a, aa, b, c, d;
  /*look for any elements with the class "custom-select":*/

  x = document.getElementsByClassName("custom-select");
  l = x.length;

  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/

    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected"); // a.setAttribute("data-v-6aabded5", "");
    // a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;

    x[i].appendChild(a);
    aa = document.createElement("DIV"); // aa.setAttribute("data-v-6aabded5", "");

    aa.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    a.appendChild(aa);
    /*for each element, create a new DIV that will contain the option list:*/

    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide"); // b.setAttribute("data-v-6aabded5", "");

    for (j = 1; j < ll; j++) {
      /*for each option in the original select element,
      create a new DIV that will act as an option item:*/
      c = document.createElement("DIV"); // c.setAttribute("data-v-6aabded5", "");

      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function (e) {
        /*when an item is clicked, update the original select box,
          and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;

        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            d = document.createElement("DIV"); // d.setAttribute("data-v-6aabded5", "");

            d.innerHTML = s.options[i].innerHTML;
            s.selectedIndex = i;
            h.innerHTML = "";
            h.appendChild(d);
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;

            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }

            this.setAttribute("class", "same-as-selected"); // this.setAttribute("data-v-6aabded5", "");

            break;
          }
        }

        h.click();
      });
      b.appendChild(c);
    }

    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      vm.closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }
}

function getFormData() {
  var vm = this;
  $(document).ready(function () {
    $("#contact-form .page").css("pointer-events", "none");
    var form_data = new FormData();
    var page_0 = document.querySelector("#contact-form .page.p0");
    var page_1 = document.querySelector("#contact-form .page.p1");
    var page_2 = document.querySelector("#contact-form .page.p2");
    var name = document.querySelector("#contact-form #contact-name");
    $('#contact-form div[tabindex="0"]').keyup(function (e) {
      e.preventDefault();

      if (e.key === "Enter") {
        if (name.value == "") {
          $("#contact-form .balloon-name-error").css("display", "flex");
        } else {
          $("#contact-form .balloon-name-error").css("display", "none");
          form_data.append("name_form", name.value);
          $("#contact-form .p0").removeClass("active-pg");
          $("#contact-form .p1").addClass("active-pg");
          $("#contact-form .p0").css("pointer-events", "none");
          $("#contact-form .p1").css("pointer-events", "all");
          $("#contact-form .p2").css("pointer-events", "none");
          $("#contact-form .p3").css("pointer-events", "none");
          $("#contact-form .p1 .text").animate({
            left: 0,
            opacity: 1
          }, 500);
        }
      }
    });
    var radios = document.querySelectorAll('#contact-form input[name="contact-option"]');
    var value;
    var map = Array.prototype.map;
    var phone_input;
    var email_input;
    var balloon_email;
    map.call(radios, function (r) {
      r.addEventListener("click", function () {
        if (r.type === "radio") {
          if (r.checked) {
            value = r.value;
            form_data.append("contact_form", value);
            phone_input = document.querySelector("#contact-form #contact-phone-active");
            email_input = document.querySelector("#contact-form #contact-email-active");
            balloon_email = document.querySelector("#contact-form .balloon-email");

            if (value == "contact-phone") {
              phone_input.style.display = "inline-block";
              email_input.style.display = "none";
              balloon_email.style.display = "none";
              form_data.append("contact_phone", phone_input.value);
              form_data.append("contact_email", email_input.value);
            } else if (value == "contact-email") {
              phone_input.style.display = "none";
              email_input.style.display = "inline-block";
              balloon_email.style.display = "flex";
              form_data.append("contact_phone", phone_input.value);
              form_data.append("contact_email", email_input.value);
            } else {
              phone_input.style.display = "inline-block";
              email_input.style.display = "inline-block";
              balloon_email.style.display = "flex";
              form_data.append("contact_phone", phone_input.value);
              form_data.append("contact_email", email_input.value);
            }
          }
        }
      });
    });
    $('#contact-form div[tabindex="1"]').keyup(function (e) {
      e.preventDefault();
      phone_input = document.querySelector("#contact-form #contact-phone-active");
      email_input = document.querySelector("#contact-form #contact-email-active");

      if (e.keyCode == 13) {
        var controlEmail = false;

        if (String(phone_input.value).length < 9) {
          $("#contact-form .balloon-phone-error").css("display", "flex");
        } else {
          $("#contact-form .balloon-phone-error").css("display", "none");

          if (phone_input.value == "" && email_input.style.display == "none") {
            $("#contact-form .balloon-phone-error-empty").css("display", "flex");
            $("#contact-form .balloon-email-error").css("display", "none");
          }

          if (email_input.value == "" && phone_input.style.display == "none") {
            $("#contact-form .balloon-phone-error-empty").css("display", "none");
            $("#contact-form .balloon-email-error").css("display", "flex");
          }

          if (phone_input.value == "" && email_input.value == "" && phone_input.style.display == "inline-block" && email_input.style.display == "inline-block") {
            $("#contact-form .balloon-phone-error-empty").css("display", "flex");
            $("#contact-form .balloon-email-error").css("display", "flex");
          }

          if (phone_input.value == "" && email_input.value != "" && phone_input.style.display == "inline-block" && email_input.style.display == "inline-block") {
            $("#contact-form .balloon-phone-error-empty").css("display", "flex");
            $("#contact-form .balloon-email-error").css("display", "none");
          }

          if (phone_input.value != "" && email_input.value == "" && phone_input.style.display == "inline-block" && email_input.style.display == "inline-block") {
            $("#contact-form .balloon-phone-error-empty").css("display", "none");
            $("#contact-form .balloon-email-error").css("display", "flex");
          }

          if (email_input.value != "") {
            var verifyEmail = vm.checkEmail(email_input.value);

            if (verifyEmail) {
              controlEmail = true;
            } else {
              $("#contact-form .balloon-email-error").css("display", "flex");
            }
          }

          if (phone_input.value != "" && email_input.value != "" && controlEmail == true || phone_input.value != "" && email_input.style.display == "none" || email_input.value != "" && phone_input.style.display == "none" && controlEmail == true) {
            $("#contact-form .balloon-phone-error-empty").css("display", "none");
            $("#contact-form .balloon-phone-error").css("display", "none");
            $("#contact-form .balloon-email-error").css("display", "none");
            $("#contact-form .p1").removeClass("active-pg");
            $("#contact-form .p2").addClass("active-pg");
            $("#contact-form .p0").css("pointer-events", "none");
            $("#contact-form .p1").css("pointer-events", "none");
            $("#contact-form .p2").css("pointer-events", "all");
            $("#contact-form .p3").css("pointer-events", "none");
            $("#contact-form .p2 .text").animate({
              left: 0,
              opacity: 1
            }, 500);
          }
        }
      }
    });
    var submit_btn = document.querySelector("#contact-form .submit-btn");
    var assunto = document.querySelector("#contact-form .select-selected");
    var accept_tc = document.querySelector("#contact-form #accept-tc");
    submit_btn.addEventListener("click", function () {
      if (accept_tc.checked != true) {
        $("#contact-form .balloon-tc-error").css("display", "flex");
      } else {
        $("#contact-form .balloon-tc-error").css("display", "none");
      }

      if (assunto.innerText == "SELECCIONE O ASSUNTO") {
        $("#contact-form .balloon-subject-error").css("display", "flex");
      }

      var observer = new MutationObserver(function (mutations) {
        var subject = $("#contact-form .select-selected").text();
        var referrer = document.referrer;
        $("#contact-form .balloon-subject-error").css("display", "none");
      });
      var config = {
        attributes: true,
        childList: true,
        characterData: true
      };
      observer.observe(assunto, config);

      if (assunto.innerText != "SELECCIONE O ASSUNTO" && accept_tc.checked == true) {
        var data = {
          name: name.value,
          phone: phone_input.value,
          email: email_input.value,
          subject: assunto.innerText
        };
        $.ajax({
          url: "https://www.anacarolinapereira.pt/ajax/marcar-consulta.php",
          type: "POST",
          data: data,
          dataType: "json",
          success: function success(response) {
            $("#contact-form .balloon-tc-error").css("display", "none");
            $("#contact-form .balloon-subject-error").css("display", "none");
            $("#contact-form .p2").removeClass("active-pg");
            $("#contact-form .p3").addClass("active-pg");
            $("#contact-form .p0").css("pointer-events", "none");
            $("#contact-form .p1").css("pointer-events", "none");
            $("#contact-form .p2").css("pointer-events", "none");
            $("#contact-form .p3").css("pointer-events", "all");
            $("#contact-form .p3 .text").animate({
              left: 0,
              opacity: 1
            }, 500);
          }
        }); // $("#contact-form .balloon-tc-error").css("display", "none");
        // $("#contact-form .balloon-subject-error").css("display", "none");
        // $("#contact-form .p2").removeClass("active-pg");
        // $("#contact-form .p3").addClass("active-pg");
        // $("#contact-form .p0").css("pointer-events", "none");
        // $("#contact-form .p1").css("pointer-events", "none");
        // $("#contact-form .p2").css("pointer-events", "none");
        // $("#contact-form .p3").css("pointer-events", "all");
        // $("#contact-form .p3 .text").animate({ left: 0, opacity: 1 }, 500);
      }
    });
    $('#contact-form div[tabindex="2"]').keyup(function (e) {
      e.preventDefault();

      if (e.keyCode == 13) {
        if (accept_tc.checked != true) {
          $("#contact-form .balloon-tc-error").css("display", "flex");
        } else {
          $("#contact-form .balloon-tc-error").css("display", "none");
        }

        if (assunto.innerText == "SELECCIONE O ASSUNTO") {
          $("#contact-form .balloon-subject-error").css("display", "flex");
        }

        var observer = new MutationObserver(function (mutations) {
          var subject = $("#contact-form .select-selected").text();
          var referrer = document.referrer;
          $("#contact-form .balloon-subject-error").css("display", "none");
        });
        var config = {
          attributes: true,
          childList: true,
          characterData: true
        };
        observer.observe(assunto, config);

        if (assunto.innerText != "SELECCIONE O ASSUNTO" && accept_tc.checked == true) {
          var data = {
            name: name.value,
            phone: phone_input.value,
            email: email_input.value,
            subject: assunto.innerText
          };
          $.ajax({
            url: "https://www.anacarolinapereira.pt/ajax/marcar-consulta.php",
            type: "POST",
            data: data,
            dataType: "json",
            success: function success(response) {
              $("#contact-form .balloon-tc-error").css("display", "none");
              $("#contact-form .balloon-subject-error").css("display", "none");
              $("#contact-form .p2").removeClass("active-pg");
              $("#contact-form .p3").addClass("active-pg");
              $("#contact-form .p0").css("pointer-events", "none");
              $("#contact-form .p1").css("pointer-events", "none");
              $("#contact-form .p2").css("pointer-events", "none");
              $("#contact-form .p3").css("pointer-events", "all");
              $("#contact-form .p3 .text").animate({
                left: 0,
                opacity: 1
              }, 500);
            }
          });
        }
      }
    });
    var btn_inicio = document.querySelector("#contact-form .btn-inicio");
    btn_inicio.addEventListener("click", function () {
      $("#contact-form .p3").removeClass("active-pg");
      $("#contact-form .p0").addClass("active-pg");
      $("#contact-form .p0").css("pointer-events", "all");
      $("#contact-form .p1").css("pointer-events", "none");
      $("#contact-form .p2").css("pointer-events", "none");
      $("#contact-form .p3").css("pointer-events", "none");
      $("#contact-form").find("input[type=text]").val("");
      $("#contact-form").find("textarea").val("");
      $("#contact-form").find("input[type=number]").val("");
      $("#contact-form").find("input[type=email]").val("");
      $("#contact-form").find("#contact-phone").prop("checked", true);
      $("#contact-form").find("#accept-tc").prop("checked", false);
      $("#contact-form").find("select").val("");
      document.querySelector("#contact-form .select-selected").innerHTML = "<div>SELECCIONE O ASSUNTO</div>";
      var email_input = document.querySelector("#contact-form #contact-email-active");
      email_input.style.display = "none";
      $("#contact-form .page .text").animate({
        left: "-100px",
        opacity: 0
      }, 0);
      $("#contact-form .p0 .text").animate({
        left: 0,
        opacity: 1
      }, 500);
      vm.closeForm();
      setTimeout(function () {
        if (vm.$router.history.current.path != "/") vm.$router.push("/");
      }, 600);
    });
    $('#contact-form div[tabindex="3"]').keyup(function (e) {
      e.preventDefault();

      if (e.keyCode == 13) {
        $("#contact-form .p3").removeClass("active-pg");
        $("#contact-form .p0").addClass("active-pg");
        $("#contact-form .p0").css("pointer-events", "all");
        $("#contact-form .p1").css("pointer-events", "none");
        $("#contact-form .p2").css("pointer-events", "none");
        $("#contact-form .p3").css("pointer-events", "none");
        $("#contact-form").find("input[type=text]").val("");
        $("#contact-form").find("textarea").val("");
        $("#contact-form").find("input[type=number]").val("");
        $("#contact-form").find("input[type=email]").val("");
        $("#contact-form").find("#contact-phone").prop("checked", true);
        $("#contact-form").find("#accept-tc").prop("checked", false);
        $("#contact-form").find("select").val("");
        document.querySelector("#contact-form .select-selected").innerHTML = "<div>SELECCIONE O ASSUNTO</div>";
        var email_input = document.querySelector("#contact-form #contact-email-active");
        email_input.style.display = "none";
        $("#contact-form .page .text").animate({
          left: "-100px",
          opacity: 0
        }, 0);
        $("#contact-form .p0 .text").animate({
          left: 0,
          opacity: 1
        }, 500);
        vm.closeForm();
        setTimeout(function () {
          if (vm.$router.history.current.path != "/") vm.$router.push("/");
        }, 600);
      }
    });
  });
}

function closeForm() {
  var close_btn = document.querySelector("#contact-form .close-btn");
  var contact_form = document.querySelector("#contact-form");
  $("#contact-form .p1").removeClass("active-pg");
  $("#contact-form .p2").removeClass("active-pg");
  $("#contact-form .p3").removeClass("active-pg");
  $("#contact-form .p0").addClass("active-pg");
  $("#contact-form .page .text").animate({
    top: "70px",
    opacity: 0
  }, 0);
  $("#contact-form").find("input[type=text]").val("");
  $("#contact-form").find("textarea").val("");
  $("#contact-form").find("input[type=number]").val("");
  $("#contact-form").find("input[type=email]").val("");
  $("#contact-form").find("#contact-phone").prop("checked", true);
  $("#contact-form").find("#accept-tc").prop("checked", false);
  $("#contact-form").find("select").val("");
  document.querySelector("#contact-form .select-selected").innerHTML = "<div>SELECCIONE O ASSUNTO</div>";
  var email_input = document.querySelector("#contact-form #contact-email-active");
  email_input.style.display = "none"; // contact_form.style.opacity = "0";

  contact_form.style.transform = "translate(60%, -50%)";
  contact_form.style.pointerEvents = "none";
  $("#contact-form .page").css("pointer-events", "none");
  var html_elem = document.documentElement;
  html_elem.style.overflowY = "inherit";
  $("body").css("overflow-y", "inherit");
  setTimeout(function () {
    contact_form.style.transition = "0s";
    contact_form.style.transform = "translate(-160%, -50%)";
  }, 1000);
} // ****** ------ ***************** ------ ******
// ****** ------ MARCAR CONSULTA FORM SCRIPTS END ------ ******
// ****** ------ ***************** ------ ******
// ****** ------ ***************** ------ ******
// ****** ------ CONTACT FORM SCRIPTS ------ ******
// ****** ------ ***************** ------ ******


function addSelectElements2(vm) {
  var x, i, j, l, ll, selElmnt, a, aa, b, c, d;
  /*look for any elements with the class "custom-select":*/

  x = document.getElementsByClassName("custom-select-2");
  l = x.length;

  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/

    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected"); // a.setAttribute("data-v-6aabded5", "");
    // a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;

    x[i].appendChild(a);
    aa = document.createElement("DIV"); // aa.setAttribute("data-v-6aabded5", "");

    aa.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    a.appendChild(aa);
    /*for each element, create a new DIV that will contain the option list:*/

    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide"); // b.setAttribute("data-v-6aabded5", "");

    for (j = 1; j < ll; j++) {
      /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
      c = document.createElement("DIV"); // c.setAttribute("data-v-6aabded5", "");

      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function (e) {
        /*when an item is clicked, update the original select box,
            and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;

        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            d = document.createElement("DIV"); // d.setAttribute("data-v-6aabded5", "");

            d.innerHTML = s.options[i].innerHTML;
            s.selectedIndex = i;
            h.innerHTML = "";
            h.appendChild(d);
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;

            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }

            this.setAttribute("class", "same-as-selected"); // this.setAttribute("data-v-6aabded5", "");

            break;
          }
        }

        h.click();
      });
      b.appendChild(c);
    }

    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
      /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
      e.stopPropagation();
      vm.closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }
}

function getFormData2() {
  var vm = this;
  $(document).ready(function () {
    $("#contact-form-2 .page").css("pointer-events", "none");
    var form_data = new FormData();
    var page_0 = document.querySelector("#contact-form-2 .page.p0");
    var page_1 = document.querySelector("#contact-form-2 .page.p1");
    var page_2 = document.querySelector("#contact-form-2 .page.p2");
    var name = document.querySelector("#contact-form-2 #contact-name-2");
    $('#contact-form-2 div[tabindex="0"]').keyup(function (e) {
      e.preventDefault();

      if (e.key === "Enter") {
        if (name.value == "") {
          $("#contact-form-2 .balloon-name-error").css("display", "flex");
        } else {
          $("#contact-form-2 .balloon-name-error").css("display", "none");
          form_data.append("name", name.value);
          $("#contact-form-2 .p0").removeClass("active-pg");
          $("#contact-form-2 .p1").addClass("active-pg");
          $("#contact-form-2 .p0").css("pointer-events", "none");
          $("#contact-form-2 .p1").css("pointer-events", "all");
          $("#contact-form-2 .p2").css("pointer-events", "none");
          $("#contact-form-2 .p3").css("pointer-events", "none");
          $("#contact-form-2 .p1 .text").animate({
            left: 0,
            opacity: 1
          }, 500);
        }
      }
    });
    var radios = document.querySelectorAll('#contact-form-2 input[name="contact-option-2"]');
    var value;
    var map = Array.prototype.map;
    var phone_input;
    var email_input;
    var balloon_email;
    map.call(radios, function (r) {
      r.addEventListener("click", function () {
        if (r.type === "radio") {
          if (r.checked) {
            value = r.value;
            form_data.append("contact_form", value);
            phone_input = document.querySelector("#contact-form-2 #contact-phone-active-2");
            email_input = document.querySelector("#contact-form-2 #contact-email-active-2");
            balloon_email = document.querySelector("#contact-form-2 .balloon-email");

            if (value == "contact-phone") {
              phone_input.style.display = "inline-block";
              email_input.style.display = "none";
              balloon_email.style.display = "none";
              form_data.append("contact_phone", phone_input.value);
              form_data.append("contact_email", email_input.value);
            } else if (value == "contact-email") {
              phone_input.style.display = "none";
              email_input.style.display = "inline-block";
              balloon_email.style.display = "flex";
              form_data.append("contact_phone", phone_input.value);
              form_data.append("contact_email", email_input.value);
            } else {
              phone_input.style.display = "inline-block";
              email_input.style.display = "inline-block";
              balloon_email.style.display = "flex";
              form_data.append("contact_phone", phone_input.value);
              form_data.append("contact_email", email_input.value);
            }
          }
        }
      });
    });
    $('#contact-form-2 div[tabindex="1"]').keyup(function (e) {
      e.preventDefault();
      phone_input = document.querySelector("#contact-form-2 #contact-phone-active-2");
      email_input = document.querySelector("#contact-form-2 #contact-email-active-2");

      if (e.keyCode == 13) {
        var controlEmail = false;

        if (String(phone_input.value).length < 9) {
          $("#contact-form-2 .balloon-phone-error").css("display", "flex");
        } else {
          $("#contact-form-2 .balloon-phone-error").css("display", "none");

          if (phone_input.value == "" && email_input.style.display == "none") {
            $("#contact-form-2 .balloon-phone-error-empty").css("display", "flex");
            $("#contact-form-2 .balloon-email-error").css("display", "none");
          }

          if (email_input.value == "" && phone_input.style.display == "none") {
            $("#contact-form-2 .balloon-phone-error-empty").css("display", "none");
            $("#contact-form-2 .balloon-email-error").css("display", "flex");
          }

          if (phone_input.value == "" && email_input.value == "" && phone_input.style.display == "inline-block" && email_input.style.display == "inline-block") {
            $("#contact-form-2 .balloon-phone-error-empty").css("display", "flex");
            $("#contact-form-2 .balloon-email-error").css("display", "flex");
          }

          if (phone_input.value == "" && email_input.value != "" && phone_input.style.display == "inline-block" && email_input.style.display == "inline-block") {
            $("#contact-form-2 .balloon-phone-error-empty").css("display", "flex");
            $("#contact-form-2 .balloon-email-error").css("display", "none");
          }

          if (phone_input.value != "" && email_input.value == "" && phone_input.style.display == "inline-block" && email_input.style.display == "inline-block") {
            $("#contact-form-2 .balloon-phone-error-empty").css("display", "none");
            $("#contact-form-2 .balloon-email-error").css("display", "flex");
          }

          if (email_input.value != "") {
            var verifyEmail = vm.checkEmail(email_input.value);

            if (verifyEmail) {
              controlEmail = true;
            } else {
              $("#contact-form-2 .balloon-email-error").css("display", "flex");
            }
          }

          if (phone_input.value != "" && email_input.value != "" && controlEmail == true || phone_input.value != "" && email_input.style.display == "none" || email_input.value != "" && phone_input.style.display == "none" && controlEmail == true) {
            form_data.append("phone", phone_input.value);
            form_data.append("email", email_input.value);
            $("#contact-form-2 .balloon-phone-error-empty").css("display", "none");
            $("#contact-form-2 .balloon-phone-error").css("display", "none");
            $("#contact-form-2 .balloon-email-error").css("display", "none");
            $("#contact-form-2 .p1").removeClass("active-pg");
            $("#contact-form-2 .p2").addClass("active-pg");
            $("#contact-form-2 .p0").css("pointer-events", "none");
            $("#contact-form-2 .p1").css("pointer-events", "none");
            $("#contact-form-2 .p2").css("pointer-events", "all");
            $("#contact-form-2 .p3").css("pointer-events", "none");
            $("#contact-form-2 .p2 .text").animate({
              left: 0,
              opacity: 1
            }, 500);
          }
        }
      }
    });
    var submit_btn = document.querySelector("#contact-form-2 .submit-btn");
    var assunto = document.querySelector("#contact-form-2 .select-selected");
    var msg = document.querySelector("#contact-form-2 textarea");
    var accept_tc = document.querySelector("#contact-form-2 #accept-tc-2");
    submit_btn.addEventListener("click", function () {
      if (accept_tc.checked != true) {
        $("#contact-form-2 .balloon-tc-error").css("display", "flex");
      } else {
        $("#contact-form-2 .balloon-tc-error").css("display", "none");
      }

      if (msg.value == "") {
        $("#contact-form-2 .balloon-msg-error").css("display", "flex");
      } else {
        $("#contact-form-2 .balloon-msg-error").css("display", "none");
      }

      if (assunto.innerText == "SELECCIONE O ASSUNTO") {
        $("#contact-form-2 .balloon-subject-error").css("display", "flex");
      }

      var observer = new MutationObserver(function (mutations) {
        var subject = $("#contact-form-2 .select-selected").text();
        var referrer = document.referrer;
        $("#contact-form-2 .balloon-subject-error").css("display", "none");
      });
      var config = {
        attributes: true,
        childList: true,
        characterData: true
      };
      observer.observe(assunto, config);

      if (assunto.innerText != "SELECCIONE O ASSUNTO" && msg.value != "" && accept_tc.checked == true) {
        form_data.append("assunto_msg", assunto.innerText);
        form_data.append("msg", msg.value);
        var data = {
          name: name.value,
          phone: phone_input.value,
          email: email_input.value,
          subject: assunto.innerText,
          msg: msg.value
        };
        $.ajax({
          url: "https://www.anacarolinapereira.pt/ajax/contact.php",
          type: "POST",
          data: data,
          dataType: "json",
          success: function success(response) {
            $("#contact-form-2 .balloon-tc-error").css("display", "none");
            $("#contact-form-2 .balloon-subject-error").css("display", "none");
            $("#contact-form-2 .balloon-msg-error").css("display", "none");
            $("#contact-form-2 .p2").removeClass("active-pg");
            $("#contact-form-2 .p3").addClass("active-pg");
            $("#contact-form-2 .p0").css("pointer-events", "none");
            $("#contact-form-2 .p1").css("pointer-events", "none");
            $("#contact-form-2 .p2").css("pointer-events", "none");
            $("#contact-form-2 .p3").css("pointer-events", "all");
            $("#contact-form-2 .p3 .text").animate({
              left: 0,
              opacity: 1
            }, 500);
          }
        });
      }
    });
    $('#contact-form-2 div[tabindex="2"]').keyup(function (e) {
      e.preventDefault();

      if (e.keyCode == 13) {
        if (accept_tc.checked != true) {
          $("#contact-form-2 .balloon-tc-error").css("display", "flex");
        } else {
          $("#contact-form-2 .balloon-tc-error").css("display", "none");
        }

        if (msg.value == "") {
          $("#contact-form-2 .balloon-msg-error").css("display", "flex");
        } else {
          $("#contact-form-2 .balloon-msg-error").css("display", "none");
        }

        if (assunto.innerText == "SELECCIONE O ASSUNTO") {
          $("#contact-form-2 .balloon-subject-error").css("display", "flex");
        }

        var observer = new MutationObserver(function (mutations) {
          var subject = $("#contact-form-2 .select-selected").text();
          var referrer = document.referrer;
          $("#contact-form-2 .balloon-subject-error").css("display", "none");
        });
        var config = {
          attributes: true,
          childList: true,
          characterData: true
        };
        observer.observe(assunto, config);

        if (assunto.innerText != "SELECCIONE O ASSUNTO" && msg.value != "" && accept_tc.checked == true) {
          form_data.append("assunto_msg", assunto.innerText);
          form_data.append("msg", msg.value);
          var data = {
            name: name.value,
            phone: phone_input.value,
            email: email_input.value,
            subject: assunto.innerText,
            msg: msg.value
          };
          $.ajax({
            url: "https://www.anacarolinapereira.pt/ajax/contact.php",
            type: "POST",
            data: data,
            dataType: "json",
            success: function success(response) {
              $("#contact-form-2 .balloon-tc-error").css("display", "none");
              $("#contact-form-2 .balloon-subject-error").css("display", "none");
              $("#contact-form-2 .balloon-msg-error").css("display", "none");
              $("#contact-form-2 .p2").removeClass("active-pg");
              $("#contact-form-2 .p3").addClass("active-pg");
              $("#contact-form-2 .p0").css("pointer-events", "none");
              $("#contact-form-2 .p1").css("pointer-events", "none");
              $("#contact-form-2 .p2").css("pointer-events", "none");
              $("#contact-form-2 .p3").css("pointer-events", "all");
              $("#contact-form-2 .p3 .text").animate({
                left: 0,
                opacity: 1
              }, 500);
            }
          });
        }
      }
    });
    var btn_inicio = document.querySelector("#contact-form-2 .btn-inicio");
    btn_inicio.addEventListener("click", function () {
      $("#contact-form-2 .p3").removeClass("active-pg");
      $("#contact-form-2 .p0").addClass("active-pg");
      $("#contact-form-2 .p0").css("pointer-events", "all");
      $("#contact-form-2 .p1").css("pointer-events", "none");
      $("#contact-form-2 .p2").css("pointer-events", "none");
      $("#contact-form-2 .p3").css("pointer-events", "none");
      $("#contact-form-2").find("input[type=text]").val("");
      $("#contact-form-2").find("textarea").val("");
      $("#contact-form-2").find("input[type=number]").val("");
      $("#contact-form-2").find("input[type=email]").val("");
      $("#contact-form-2").find("#contact-phone-2").prop("checked", true);
      $("#contact-form-2").find("#accept-tc-2").prop("checked", false);
      $("#contact-form-2").find("select").val("");
      document.querySelector("#contact-form-2 .select-selected").innerHTML = "<div>SELECCIONE O ASSUNTO</div>";
      var email_input = document.querySelector("#contact-form-2 #contact-email-active-2");
      email_input.style.display = "none";
      $("#contact-form-2 .page .text").animate({
        left: "-100px",
        opacity: 0
      }, 0);
      $("#contact-form-2 .p0 .text").animate({
        left: 0,
        opacity: 1
      }, 500);
      vm.closeForm();
      setTimeout(function () {
        if (vm.$router.history.current.path != "/") vm.$router.push("/");
      }, 600);
    });
    $('#contact-form-2 div[tabindex="3"]').keyup(function (e) {
      e.preventDefault();

      if (e.keyCode == 13) {
        $("#contact-form-2 .p3").removeClass("active-pg");
        $("#contact-form-2 .p0").addClass("active-pg");
        $("#contact-form-2 .p0").css("pointer-events", "all");
        $("#contact-form-2 .p1").css("pointer-events", "none");
        $("#contact-form-2 .p2").css("pointer-events", "none");
        $("#contact-form-2 .p3").css("pointer-events", "none");
        $("#contact-form-2").find("input[type=text]").val("");
        $("#contact-form-2").find("textarea").val("");
        $("#contact-form-2").find("input[type=number]").val("");
        $("#contact-form-2").find("input[type=email]").val("");
        $("#contact-form-2").find("#contact-phone-2").prop("checked", true);
        $("#contact-form-2").find("#accept-tc-2").prop("checked", false);
        $("#contact-form-2").find("select").val("");
        document.querySelector("#contact-form-2 .select-selected").innerHTML = "<div>SELECCIONE O ASSUNTO</div>";
        var email_input = document.querySelector("#contact-form-2 #contact-email-active-2");
        email_input.style.display = "none";
        $("#contact-form-2 .page .text").animate({
          left: "-100px",
          opacity: 0
        }, 0);
        $("#contact-form-2 .p0 .text").animate({
          left: 0,
          opacity: 1
        }, 500);
        vm.closeForm();
        setTimeout(function () {
          if (vm.$router.history.current.path != "/") vm.$router.push("/");
        }, 600);
      }
    });
  });
}

function closeForm2() {
  var close_btn = document.querySelector("#contact-form-2 .close-btn");
  var contact_form = document.querySelector("#contact-form-2");
  $("#contact-form-2 .p1").removeClass("active-pg");
  $("#contact-form-2 .p2").removeClass("active-pg");
  $("#contact-form-2 .p3").removeClass("active-pg");
  $("#contact-form-2 .p0").addClass("active-pg");
  $("#contact-form-2 .page .text").animate({
    top: "70px",
    opacity: 0
  }, 0);
  $("#contact-form-2").find("input[type=text]").val("");
  $("#contact-form-2").find("textarea").val("");
  $("#contact-form-2").find("input[type=number]").val("");
  $("#contact-form-2").find("input[type=email]").val("");
  $("#contact-form-2").find("#contact-phone-2").prop("checked", true);
  $("#contact-form-2").find("#accept-tc-2").prop("checked", false);
  $("#contact-form-2").find("select").val("");
  document.querySelector("#contact-form-2 .select-selected").innerHTML = "<div>SELECCIONE O ASSUNTO</div>";
  var email_input = document.querySelector("#contact-form #contact-email-active");
  email_input.style.display = "none";
  contact_form.style.transform = "translate(60%, -50%)";
  contact_form.style.pointerEvents = "none";
  $("#contact-form-2 .page").css("pointer-events", "none");
  var html_elem = document.documentElement;
  html_elem.style.overflowY = "inherit";
  $("body").css("overflow-y", "inherit");
  setTimeout(function () {
    contact_form.style.transition = "0s";
    contact_form.style.transform = "translate(-160%, -50%)";
  }, 1000);
}

function checkEmail($email) {
  var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/;
  return filter.test($email);
} // ****** ------ ***************** ------ ******
// ****** ------ CONTACT FORM SCRIPTS END ------ ******
// ****** ------ ***************** ------ ******
// ****** ------ ***************** ------ ******
// ****** ------ SERVICO SCRIPTS ------ ******
// ****** ------ ***************** ------ ******


var tab0 = $(".tab.t0");
var tab1 = $(".tab.t1");
var tab2 = $(".tab.t2");
$(".topic.t0").css("pointer-events", "all");
$(".topic.t1").css("pointer-events", "none");
$(".topic.t2").css("pointer-events", "none");
tab0.click(function () {
  $(".topic.t0").animate({
    opacity: "1"
  }, 0);
  $(".topic.t1").animate({
    opacity: "0"
  }, 0);
  $(".topic.t2").animate({
    opacity: "0"
  }, 0);
  $(".topic.t0").css("pointer-events", "all");
  $(".topic.t1").css("pointer-events", "none");
  $(".topic.t2").css("pointer-events", "none");
  var t0 = document.querySelector(".topic.t0");
  $(".topics").css("height", t0.clientHeight);

  if (window.innerWidth < 600) {
    // document.querySelector(".topics").scrollIntoView(true);
    $([document.documentElement, document.body]).animate({
      scrollTop: $(".topics").offset().top - 100
    }, 0);
  }
});
tab1.click(function () {
  $(".topic.t0").animate({
    opacity: "0"
  }, 0);
  $(".topic.t1").animate({
    opacity: "1"
  }, 0);
  $(".topic.t2").animate({
    opacity: "0"
  }, 0);
  $(".topic.t0").css("pointer-events", "none");
  $(".topic.t1").css("pointer-events", "all");
  $(".topic.t2").css("pointer-events", "none");
  var t1 = document.querySelector(".topic.t1");
  $(".topics").css("height", t1.clientHeight);

  if (window.innerWidth < 600) {
    // document.querySelector(".topics").scrollIntoView(true);
    $([document.documentElement, document.body]).animate({
      scrollTop: $(".topics").offset().top - 100
    }, 0);
  }
});
tab2.click(function () {
  $(".topic.t0").animate({
    opacity: "0"
  }, 0);
  $(".topic.t1").animate({
    opacity: "0"
  }, 0);
  $(".topic.t2").animate({
    opacity: "1"
  }, 0);
  $(".topic.t0").css("pointer-events", "none");
  $(".topic.t1").css("pointer-events", "none");
  $(".topic.t2").css("pointer-events", "all");
  var t2 = document.querySelector(".topic.t2");
  $(".topics").css("height", t2.clientHeight);

  if (window.innerWidth < 600) {
    // document.querySelector(".topics").scrollIntoView(true);
    $([document.documentElement, document.body]).animate({
      scrollTop: $(".topics").offset().top - 100
    }, 0);
  }
}); // ****** ------ ***************** ------ ******
// ****** ------ SERVICO SCRIPTS END ------ ******
// ****** ------ ***************** ------ ******

addSelectElementsForm(void 0);
addSelectElementsContact(void 0); //Inscricoes form

function updateValue(event) {
  var value = event.target.value;

  if (String(value).length < 9) {
    this.amount = value; // $(".error.phone").text("O número de telefone tem de ter 9 dígitos");
  }

  this.$forceUpdate();
}

function addSelectElementsForm(vm) {
  var x, i, j, l, ll, selElmnt, a, aa, b, c, d;
  /*look for any elements with the class "custom-select":*/

  x = document.getElementsByClassName("select-referral");
  l = x.length;

  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/

    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    x[i].appendChild(a);
    aa = document.createElement("DIV");
    aa.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    a.appendChild(aa);
    /*for each element, create a new DIV that will contain the option list:*/

    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");

    for (j = 1; j < ll; j++) {
      /*for each option in the original select element,
      create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function (e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;

        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            d = document.createElement("DIV");
            d.innerHTML = s.options[i].innerHTML;
            s.selectedIndex = i;
            h.innerHTML = "";
            h.appendChild(d);
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;

            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }

            this.setAttribute("class", "same-as-selected");
            break;
          }
        }

        h.click();
      });
      b.appendChild(c);
    }

    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      vm.closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }
}

function getFormDataInscricao() {
  var att = new FormData();
  var vm = this;
  var formacao_title = document.querySelector(".formacao-title");
  var name = document.getElementById("name");
  var dob = document.getElementById("dob");
  var age = document.getElementById("age");
  var address = document.getElementById("address");
  var pc = document.getElementById("pc");
  var city = document.getElementById("city");
  var phone = document.getElementById("phone");
  var email = document.getElementById("email");
  var nif = document.getElementById("nif");
  var name_recibo = document.getElementById("name-recibo");
  var address_recibo = document.getElementById("address-recibo");
  var pc_recibo = document.getElementById("pc-recibo");
  var nif_recibo = document.getElementById("nif-recibo");
  var education = document.getElementById("education");
  var experience = document.getElementById("experience");
  var profissao = document.getElementById("profissao");
  var local_trabalho = document.getElementById("local-trabalho");
  var local_ensino = document.getElementById("local-ensino");
  var curso = document.getElementById("curso");
  var ano_curso = document.getElementById("ano-curso");
  var q1 = document.getElementById("q1");
  var q2 = document.getElementById("q2");
  var q3 = document.getElementById("q3");
  var referral = document.querySelector(".select-referral .select-selected");
  var observer = new MutationObserver(function (mutations) {
    var subject = $(".select-referral .select-selected").text();
    var referrer = document.referrer;
  });
  var config = {
    attributes: true,
    childList: true,
    characterData: true
  };
  observer.observe(referral, config);
  var file = document.getElementById("comp");
  var accept_tc = document.querySelector("#accept-tc-3");
  var optout = document.querySelector("#optout");
  var data = {
    formacao: formacao_title.innerText,
    name: name.value,
    dob: dob.value,
    age: age.value,
    address: address.value,
    pc: pc.value,
    city: city.value,
    phone: phone.value,
    email: email.value,
    nif: nif.value,
    name_recibo: name_recibo.value,
    address_recibo: address_recibo.value,
    pc_recibo: pc_recibo.value,
    nif_recibo: nif_recibo.value,
    education: education.value,
    experience: experience.value,
    profissao: profissao.value,
    local_trabalho: local_trabalho.value,
    local_ensino: local_ensino.value,
    curso: curso.value,
    ano_curso: ano_curso.value,
    q1: q1.value,
    q2: q2.value,
    q3: q3.value,
    referral: referral.innerText,
    file: file.value
  };

  if (data.name == "") {
    $(".error-name").text("Por favor preencher o nome completo.");
  } else {
    $(".error-name").text("");
  }

  if (data.dob == "") {
    $(".error-dob").text("Por favor preencher a data de nascimento.");
  } else {
    $(".error-dob").text("");
  }

  if (data.age == "") {
    $(".error-age").text("Por favor preencher a idade.");
  } else {
    $(".error-age").text("");
  }

  if (data.address == "") {
    $(".error-address").text("Por favor preencher a morada.");
  } else {
    $(".error-address").text("");
  }

  if (data.pc == "") {
    $(".error-pc").text("Por favor preencher o Código-Postal.");
  } else {
    $(".error-pc").text("");
  }

  if (data.city == "") {
    $(".error-city").text("Por favor preencher a cidade.");
  } else {
    $(".error-city").text("");
  }

  var nrLength = 0;

  if (data.phone == "") {
    $(".error-phone").text("Por favor preencha o telefone.");
  } else {
    if (String(data.phone).length < 9) $(".error-phone").text("O número de telefone tem de ter 9 dígitos.");else {
      nrLength = 9;
      $(".error-phone").text("");
    }
  }

  if (data.age == "") {
    $(".error-age").text("Por favor preencher a idade.");
  } else {
    $(".error-age").text("");
  }

  var controlEmail = false;

  if (data.email != "") {
    var verifyEmail = vm.checkEmail(data.email);

    if (verifyEmail) {
      controlEmail = true;
      $(".error-email").text("");
    } else {
      $(".error-email").text("O e-mail fornecido não é válido.");
    }
  } else {
    $(".error-email").text("Por favor preencher o e-mail.");
  }

  var nrLength1 = 0;

  if (data.nif == "") {
    $(".error-nif").text("Por favor preencher o nº de contribuinte.");
  } else {
    if (String(data.nif).length < 9) $(".error-nif").text("O número de contribuinte tem de ter 9 dígitos.");else {
      nrLength1 = 9;
      $(".error-nif").text("");
    }
  }

  if (data.name_recibo == "") {
    $(".error-name-recibo").text("Por favor preencher o nome completo.");
  } else {
    $(".error-name-recibo").text("");
  }

  if (data.address_recibo == "") {
    $(".error-address-recibo").text("Por favor preencher a morada.");
  } else {
    $(".error-address-recibo").text("");
  }

  if (data.pc_recibo == "") {
    $(".error-pc-recibo").text("Por favor preencher o Código-Postal.");
  } else {
    $(".error-pc-recibo").text("");
  }

  var nrLength2 = 0;

  if (data.nif_recibo == "") {
    $(".error-nif-recibo").text("Por favor preencher o nº de contribuinte.");
  } else {
    if (String(data.nif_recibo).length < 9) $(".error-nif-recibo").text("O número de contribuinte tem de ter 9 dígitos.");else {
      nrLength2 = 9;
      $(".error-nif-recibo").text("");
    }
  }

  if (data.education == "") {
    $(".error-education").text("Por favor preencher a Formação Académica.");
  } else {
    $(".error-education").text("");
  }

  if (data.experience == "") {
    $(".error-experience").text("Por favor preencher a Experiência Profissional.");
  } else {
    $(".error-experience").text("");
  }

  if (data.profissao == "") {
    $(".error-profisao").text("Por favor preencher a Profissão.");
  } else {
    $(".error-profisao").text("");
  }

  if (data.local_trabalho == "") {
    $(".error-local-trabalho").text("Por favor preencher o local/instituição de trabalho.");
  } else {
    $(".error-local-trabalho").text("");
  }

  if (data.q1 == "") {
    $(".error-q1").text("Por favor responder a esta pergunta.");
  } else {
    $(".error-q1").text("");
  }

  if (data.q2 == "") {
    $(".error-q2").text("Por favor responder a esta pergunta.");
  } else {
    $(".error-q2").text("");
  }

  if (data.q3 == "") {
    $(".error-q3").text("Por favor responder a esta pergunta.");
  } else {
    $(".error-q3").text("");
  }

  if (data.referral == "SELECCIONE...") {
    $(".error-referral").text("Por favor seleccione da lista.");
  } else {
    $(".error-referral").text("");
  }

  var files = document.querySelector("#comp").files;

  if (files.length < 1) {
    $(".error-comp").text("Por favor anexar comprovativo de pagamento.");
  } else {
    $(".error-comp").text("");
  }

  if (accept_tc.checked == false) {
    $(".error-pp").text("Tem de aceitar as condições da Política de Privacidade.");
  } else {
    $(".error-pp").text("");
  }

  if (data.name != "" && data.dob != "" && data.age != "" && data.address != "" && data.pc != "" && data.city != "" && data.phone != "" && nrLength == 9 && controlEmail == true && data.nif != "" && nrLength1 == 9 && data.name_recibo != "" && data.address_recibo != "" && data.pc_recibo != "" && data.nif_recibo != "" && nrLength2 == 9 && data.education != "" && data.experience != "" && data.profissao != "" && data.local_trabalho != "" && data.q1 != "" && data.q2 != "" && data.q3 != "" && data.referral != "SELECCIONE..." && data.file != "" && accept_tc.checked == true) {
    document.querySelectorAll(".error").innerText = "";

    if (optout.checked == false) {
      data["optout"] = "O utilizador deseja receber informações sobre as iniciativas desenvolvidas por ACP - Clínica de Psicologia.";
    } else {
      data["optout"] = "O utilizador não deseja receber informações sobre as iniciativas desenvolvidas por ACP - Clínica de Psicologia.";
    }

    att.append("formacao", data.formacao);
    att.append("name", data.name);
    att.append("dob", data.dob);
    att.append("age", data.age);
    att.append("address", data.address);
    att.append("pc", data.pc);
    att.append("city", data.city);
    att.append("phone", data.phone);
    att.append("email", data.email);
    att.append("nif", data.nif);
    att.append("name_recibo", data.name_recibo);
    att.append("address_recibo", data.address_recibo);
    att.append("pc_recibo", data.pc_recibo);
    att.append("nif_recibo", data.nif_recibo);
    att.append("education", data.education);
    att.append("experience", data.experience);
    att.append("profissao", data.profissao);
    att.append("local_trabalho", data.local_trabalho);
    att.append("local_ensino", data.local_ensino);
    att.append("curso", data.curso);
    att.append("ano_curso", data.ano_curso);
    att.append("q1", data.q1);
    att.append("q2", data.q2);
    att.append("q3", data.q3);
    att.append("referral", data.referral);
    att.append("optout", data.optout);
    var _files = document.querySelector("input[type=file]").files;

    if (_files.length > 0) {
      for (var i = 0; i < _files.length; i++) {
        var _file = _files[i];
        att.append("uploaded_file", _file);
      }
    }

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var resp = this.responseText.split("||");

        if (resp[0] == "true") {
          $(".server-msg").css("color", "#0babc5");
          $(".server-msg").text(resp[1]);
        } else {
          $(".server-msg").css("color", "#ff0000");
          $(".server-msg").text(resp[1]);
        }
      }
    };

    xhttp.open("POST", "https://www.anacarolinapereira.pt/ajax/inscricao-formacao.php", true);
    xhttp.send(att);
  } else {
    $(".server-msg").text("Há campos com erros. Por favor, verificar.");
  }
} //Contact form


function addSelectElementsContact(vm) {
  var x, i, j, l, ll, selElmnt, a, aa, b, c, d;
  /*look for any elements with the class "custom-select":*/

  x = document.getElementsByClassName("select-ref");
  l = x.length;

  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/

    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    x[i].appendChild(a);
    aa = document.createElement("DIV");
    aa.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    a.appendChild(aa);
    /*for each element, create a new DIV that will contain the option list:*/

    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");

    for (j = 1; j < ll; j++) {
      /*for each option in the original select element,
      create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function (e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;

        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            d = document.createElement("DIV");
            d.innerHTML = s.options[i].innerHTML;
            s.selectedIndex = i;
            h.innerHTML = "";
            h.appendChild(d);
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;

            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }

            this.setAttribute("class", "same-as-selected");
            break;
          }
        }

        h.click();
      });
      b.appendChild(c);
    }

    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      vm.closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }
}

function submitFormContact() {
  var vm = this;
  var name = $("#name");
  var email = $("#email");
  var phone = $("#phone");
  var message = $("#message"); //select

  var reason = document.querySelector(".select-ref .select-selected");
  var observer = new MutationObserver(function (mutations) {
    var subject = $(".select-ref .select-selected").text();
    var referrer = document.referrer;
  });
  var config = {
    attributes: true,
    childList: true,
    characterData: true
  };
  observer.observe(reason, config); //select end

  var data = {
    name: name.val(),
    email: email.val(),
    phone: phone.val(),
    reason: reason.innerText,
    message: message.val()
  };
  var accept_tc = document.querySelector("#accept-tc-4");

  if (accept_tc.checked == false) {
    $(".error.pp").text("Tem de aceitar as condições da Política de Privacidade.");
  } else {
    $(".error.pp").text("");
  }

  if (data.message == "") {
    $(".error.msg").text("Por favor escreva a mensagem.");
  } else {
    $(".error.msg").text("");
  }

  if (data.reason == "Como obteve conhecimento?") {
    $(".error.reason").text("Por favor seleccione da lista.");
  } else {
    $(".error.reason").text("");
  }

  var nrLength = 0;

  if (data.phone == "") {
    $(".error.phone").text("Por favor preencha o telefone.");
  } else {
    if (String(data.phone).length < 9) $(".error.phone").text("O número de telefone tem de ter 9 dígitos.");else {
      nrLength = 9;
      $(".error.phone").text("");
    }
  }

  var controlEmail = false;

  if (data.email == "") {
    $(".error.email").text("Por favor preencha o e-mail.");
  } else {
    var verifyEmail = vm.checkEmail(data.email);

    if (verifyEmail) {
      controlEmail = true;
      $(".error.email").text("");
    } else {
      $(".error.email").text("O e-mail inserido não é válido.");
    }
  }

  if (data.name == "") {
    $(".error.name").text("Por favor preencha o nome.");
  } else {
    $(".error.name").text("");
  }

  if (data.name != "" && data.phone != "" && nrLength == 9 && data.reason != "Como obteve conhecimento?" && controlEmail == true && data.message != "" && accept_tc.checked == true) {
    $.ajax({
      url: "https://www.anacarolinapereira.pt/ajax/contact.php",
      type: "POST",
      data: data,
      dataType: "json",
      success: function success(response) {
        $(".error.general").text(response.result);
        setInterval(function () {
          $(".error.general").text("");
        }, 5000);
      }
    });
  }
} //FAQS


function openQuestion(id) {
  var pergunta = $('*[data-topic-id="' + id + '"]');
  $(".quest").css("font-weight", "400");
  $(".arrow").removeClass("rotate");

  if (pergunta.parent().find(".answer").hasClass("active")) {
    $(".active").slideUp("slow");
    $(".active").removeClass("active");
  } else {
    $(".active").slideUp("slow");
    $(".active").removeClass("active");
    pergunta.parent().find(".answer").slideDown("slow");
    pergunta.css("font-weight", "bold");
    pergunta.parent().find(".answer").addClass("active");
    pergunta.children().find(".arrow").addClass("rotate");
  }
}

function goToTopic(id) {
  var topico = $('*[data-topico-id="' + id + '"]');

  if (topico.hasClass("opened")) {// topico.removeClass("opened");
  } else {
    $("*[data-topico-id]").removeClass("opened");
    topico.addClass("opened");
  }
}