var isActiveEquipa = true;
var indexEquipa = 1;
var slidesEquipa = 0;
var isLoadedEquipa = false;

function clickIndicatorEquipa(n, dir) {
  var i;
  var slides = document.querySelectorAll(".team .person");
  var dots = document.querySelectorAll(".indicators .idc");
  var text = document.querySelectorAll(".right .txt .p");
  if (n > slides.length) {
    indexEquipa = 1;
  }
  if (n < 1) {
    indexEquipa = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].className = "person";
    text[i].className = "p";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active-equipa", "");
    isActiveEquipa = false;
  }
  slides[indexEquipa - 1].className = "person active-equipa";
  dots[indexEquipa - 1].className += " active-equipa";
  text[indexEquipa - 1].className += " active-equipa";
  isActiveEquipa = true;
}

function prevSlidesEquipa(n) {
  clickIndicatorEquipa((indexEquipa -= n), 1);
}
function plusSlidesEquipa(n) {
  clickIndicatorEquipa((indexEquipa += n), -1);
}
function currentSlideEquipa(n) {
  clickIndicatorEquipa((indexEquipa = n), -1);
}

var slider = document.querySelector(".team");
var slides = document.querySelectorAll(".team .person");

if (window.innerWidth < 600) {
  slider.addEventListener("touchstart", handleTouchStartEquipa, false);
  slider.addEventListener("touchmove", handleTouchMoveEquipa, false);

  var xDownEquipa = null;
  var yDownEquipa = null;

  function getTouchesEquipa(evt) {
    return evt.touches || evt.originalEvent.touches;
  }

  function handleTouchStartEquipa(evt) {
    const firstTouch = getTouchesEquipa(evt)[0];
    xDownEquipa = firstTouch.clientX;
    yDownEquipa = firstTouch.clientY;
  }

  function handleTouchMoveEquipa(evt) {
    if (!xDownEquipa || !yDownEquipa) {
      return;
    }

    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;

    var xDiff = xDownEquipa - xUp;
    var yDiff = yDownEquipa - yUp;

    var active = document.querySelector(".team .person.active-equipa");
    var id = active.getAttribute("data-person-id");

    if (Math.abs(xDiff) > Math.abs(yDiff)) {
      /*most significant*/
      if (xDiff > 0) {
        /* left swipe */
        plusSlidesEquipa(1);
      } else {
        /* right swipe */
        prevSlidesEquipa(1);
      }
    }
    /* reset values */
    xDownEquipa = null;
    yDownEquipa = null;
  }
}

var map = Array.prototype.map;
var txt = document.querySelector(".right > .txt");
var pgs = document.querySelectorAll(".right .txt > .p");
var heights = [];

Array.prototype.max = function () {
  return Math.max.apply(null, this);
};
Array.prototype.min = function () {
  return Math.min.apply(null, this);
};

map.call(pgs, function (pg) {
  heights.push(pg.clientHeight);
});

if (window.innerWidth < 992) {
  txt.style.minHeight = heights.max() + 50 + "px";
  txt.style.height = heights.max() + 50 + "px";
} else if(window.innerWidth < 600 && window.innerWidth > 416){
  txt.style.minHeight = heights.max() + 100 + "px";
  txt.style.height = heights.max() + 100 + "px";
} else if(window.innerWidth < 415){
  txt.style.minHeight = heights.max() + 200 + "px";
  txt.style.height = heights.max() + 200 + "px";
} else {
  txt.style.minHeight = "13.75rem";
  txt.style.height = "unset";
}
