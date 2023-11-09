var tab0 = $(".tab.t0");
var tab1 = $(".tab.t1");
var tab2 = $(".tab.t2");

$(".topic.t0").css("pointer-events", "all");
$(".topic.t1").css("pointer-events", "none");
$(".topic.t2").css("pointer-events", "none");

tab0.click(function () {
  $(".topic.t0").animate({ opacity: "1" }, 0);
  $(".topic.t1").animate({ opacity: "0" }, 0);
  $(".topic.t2").animate({ opacity: "0" }, 0);

  $(".topic.t0").css("pointer-events", "all");
  $(".topic.t1").css("pointer-events", "none");
  $(".topic.t2").css("pointer-events", "none");

  var t0 = document.querySelector(".topic.t0");
  $(".topics").css("height", t0.clientHeight);

  if (window.innerWidth < 600) {
    // document.querySelector(".topics").scrollIntoView(true);
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $(".topics").offset().top - 100,
      },
      0
    );
  }
});

tab1.click(function () {
  $(".topic.t0").animate({ opacity: "0" }, 0);
  $(".topic.t1").animate({ opacity: "1" }, 0);
  $(".topic.t2").animate({ opacity: "0" }, 0);

  $(".topic.t0").css("pointer-events", "none");
  $(".topic.t1").css("pointer-events", "all");
  $(".topic.t2").css("pointer-events", "none");

  var t1 = document.querySelector(".topic.t1");
  $(".topics").css("height", t1.clientHeight);

  if (window.innerWidth < 600) {
    // document.querySelector(".topics").scrollIntoView(true);
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $(".topics").offset().top - 100,
      },
      0
    );
  }
});

tab2.click(function () {
  $(".topic.t0").animate({ opacity: "0" }, 0);
  $(".topic.t1").animate({ opacity: "0" }, 0);
  $(".topic.t2").animate({ opacity: "1" }, 0);

  $(".topic.t0").css("pointer-events", "none");
  $(".topic.t1").css("pointer-events", "none");
  $(".topic.t2").css("pointer-events", "all");

  var t2 = document.querySelector(".topic.t2");
  $(".topics").css("height", t2.clientHeight);

  if (window.innerWidth < 600) {
    // document.querySelector(".topics").scrollIntoView(true);
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $(".topics").offset().top - 100,
      },
      0
    );
  }
});

var map = Array.prototype.map;

var mainTopic = document.querySelector(".topic.t2");
var topics = document.querySelectorAll(".topic");
var heights = [];

Array.prototype.max = function () {
  return Math.max.apply(null, this);
};

Array.prototype.min = function () {
  return Math.min.apply(null, this);
};

map.call(topics, function (pg) {
  heights.push(pg.clientHeight);
});

$(".topics").css("height", heights.max());
window.addEventListener("resize", function () {
  $(".topics").css("height", heights.max());
});
