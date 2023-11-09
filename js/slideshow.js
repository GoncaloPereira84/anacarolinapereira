var slideIndex = 1;
var intervals = [];
var isPlaying = false;
var xDown = null;
var yDown = null;
var isActive = true;
var isMobile = false;

window.addEventListener('load', function(){
  var map = Array.prototype.map;

  var height = $(window).height();
  var width = $(window).width();
  $.ajax({
    url: "ajax/getSlideshow.php",
    type: "post",
    data: { width: width, height: height, recordSize: "true" },
  }).done(function(response){
    var resp = response.split('||');
    var slides = JSON.parse(resp[1]);
    var sizes = JSON.parse(resp[2]);

    if(sizes.width > 768) {
      map.call(slides, function(s){
        var img = s.static_img;

        if(img != null){
          var relPath = img.split('/var/www/vhosts/anacarolinapereira.pt/backoffice');

          var slidesSlider = document.querySelectorAll('#slideshow-home .slide-a');

          map.call(slidesSlider, function(ss){
            if(ss.getAttribute('data-slide-id') == 5){
              ss.childNodes[1].style.backgroundImage = 'url(https://www.anacarolinapereira.pt' + relPath[1] + ')';
            }
          });
        }
      })
    } else {
      map.call(slides, function(s){
        var img = s.img_mobile;

        if(img != null){
          var relPath = img.split('/var/www/vhosts/anacarolinapereira.pt/backoffice');

          var slidesSlider = document.querySelectorAll('#slideshow-home .slide-a');

          map.call(slidesSlider, function(ss){
            if(ss.getAttribute('data-slide-id') == 5){
              ss.childNodes[1].style.backgroundImage = 'url(https://www.anacarolinapereira.pt' + relPath[1] + ')';
            }
          });
        }
      })
    }
  });
})

window.addEventListener('resize', function(){
  var map = Array.prototype.map;

  var height = $(window).height();
  var width = $(window).width();
  $.ajax({
    url: "ajax/getSlideshow.php",
    type: "post",
    data: { width: width, height: height, recordSize: "true" },
  }).done(function(response){
    var resp = response.split('||');
    var slides = JSON.parse(resp[1]);
    var sizes = JSON.parse(resp[2]);

    if(sizes.width > 768) {
      map.call(slides, function(s){
        var img = s.static_img;

        if(img != null && s.id == 5){
          var relPath = img.split('/var/www/vhosts/anacarolinapereira.pt/backoffice');

          var slidesSlider = document.querySelectorAll('#slideshow-home .slide-a');

          map.call(slidesSlider, function(ss){
            if(ss.getAttribute('data-slide-id') == 5){
              ss.childNodes[1].style.backgroundImage = 'url(https://www.anacarolinapereira.pt' + relPath[1] + ')';
            }
          });
        }
      })
    } else {
      map.call(slides, function(s){
        var img = s.img_mobile;

        if(img != null && s.id == 5){
          var relPath = img.split('/var/www/vhosts/anacarolinapereira.pt/backoffice');

          var slidesSlider = document.querySelectorAll('#slideshow-home .slide-a');

          map.call(slidesSlider, function(ss){
            if(ss.getAttribute('data-slide-id') == 5){
              ss.childNodes[1].style.backgroundImage = 'url(https://www.anacarolinapereira.pt' + relPath[1] + ')';
            }
          });
        }
      })
    }
  });
})

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
  var slides = document.querySelectorAll("#slideshow-home .slide-a");

  slider.addEventListener("touchstart", handleTouchStart, false);
  slider.addEventListener("touchmove", handleTouchMove, false);

  var i = setInterval(() => {
    deleteLines();
    prevSlides(-1);
    var value = -(1/slides.length) * (slideIndex - 1) * 100;
    slider.style.transform = "translateX(" + value + "%)";

    isPlaying = true;
  }, 8000);

  setTimeout(() => {
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
  showSlide((slideIndex -= n));
  intervals.forEach(clearInterval);
  setTimeout(() => {
    drawLines();
    if (isPlaying == false) playAnim();
  }, 500);
}

function plusSlides(n) {
  isPlaying = false;
  showSlide((slideIndex += n));
  intervals.forEach(clearInterval);
  setTimeout(() => {
    drawLines();
    if (isPlaying == false) playAnim();
  }, 500);
}

function currentSlide(n) {
  showSlide((slideIndex = n));
  deleteLines();
  // clearInterval(auto);
  intervals.forEach(clearInterval);

  var slider = document.querySelector("#slideshow-home");
  slider.removeEventListener("touchstart", handleTouchStart, false);
  slider.removeEventListener("touchmove", handleTouchMove, false);
  
  var slides = document.querySelectorAll("#slideshow-home .slide-a");

  var value = -(1/slides.length) * (slideIndex - 1) * 100;
  slider.style.transform = "translateX(" + value + "%)";

  setTimeout(() => {
    drawLines();
    isPlaying = false;

    setTimeout(() => {
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
  const firstTouch = getTouches(evt)[0];
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
  
  var slides = document.querySelectorAll("#slideshow-home .slide-a");

  if (Math.abs(xDiff) > Math.abs(yDiff)) {
    /*most significant*/
    if (xDiff > 0) {
      /* left swipe */
      // vm.isPlaying = false;
      deleteLines();
      plusSlides(1);
      var value = -(1/slides.length) * (slideIndex - 1) * 100;
      slider.style.transform = "translateX(" + value + "%)";
      // clearInterval();
    } else {
      /* right swipe */
      // vm.isPlaying = false;
      deleteLines();
      prevSlides(1);
      var value = -(1/slides.length) * (slideIndex - 1) * 100;
      slider.style.transform = "translateX(" + value + "%)";
      // clearInterval();
    }
  }

  xDown = null;
  yDown = null;
}

$("#slideshow-home").addClass("not-hidden");

var slideArray = [];
$(".slide-a").each(function () {
  slideArray.push($(this));
});
$("#slideshow-home").css("width", 100 * Object.keys(slideArray).length + "%");

window.addEventListener("resize", function () {
  if (window.innerWidth < 1025) {
    isMobile = true;
    document.cookie = 'isMobile = true';
  } else {
    isMobile = false;
    document.cookie = 'isMobile = false';
  }
});

window.addEventListener("load", function () {
  if (window.innerWidth < 1025) {
    isMobile = true;
    document.cookie = 'isMobile = true';
  } else {
    isMobile = false;
    document.cookie = 'isMobile = false';
  }
});
