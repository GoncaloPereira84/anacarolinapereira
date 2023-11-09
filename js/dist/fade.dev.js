// /* eslint-disable */
// $().ready(function FadeIn () {
//     var allMods = $(".movement, .cover");
//     var delayedMods = $(".movement-delayed");
//     var lateralMods = $(".lateral, .lateralR");
//     var svg = $("#svg");
//     (function ($) {
//         $.fn.visible = function (partial, adjust) {
//             if (adjust === undefined) {
//                 adjust = 0;
//             }
//             var elem = $(this),
//                 wind = $(window),
//                 viewTop = wind.scrollTop(),
//                 viewBottom = viewTop + wind.height(),
//                 elem_top = elem.offset().top + adjust,
//                 elem_bottom = elem_top + elem.height() - adjust,
//                 compareTop = partial === true ? elem_bottom : elem_top,
//                 compareBottom = partial === true ? elem_top : elem_bottom;
//             return compareBottom <= viewBottom && compareTop >= viewTop;
//         };
//     })(jQuery);
//     var win = $(window);
//     var xmlTeste = true;
//     allMods.each(function (i, el) {
//         var el = $(el);
//         if (el.visible(true, 100)) {
//             el.addClass("placed");
//         }
//     });
//     svg.each(function (i, el) {
//         var el = $(el);
//         if (el.visible(true)) {
//             xmlTeste &&
//                 el.append(
//                     "<img src='assets/img/elemento_animated.svg' alt=''></img>"
//                 );
//             xmlTeste = false;
//         }
//     });
//     lateralMods.each(function (i, el) {
//         var el = $(el);
//         if (el.visible(true, 100)) {
//             el.addClass("placed");
//         }
//     });
//     delayedMods.each(function (i, el) {
//       var el = $(el);
//       if (el.visible(true, 100)) {
//         el.addClass("placed");
//       }
//     });
//     win.scroll(function (event) {
//         allMods.each(function (i, el) {
//           var el = $(el);
//           if (el.visible(true, 100)) {
//             el.addClass("placed");
//           }
//         });
//         lateralMods.each(function (i, el) {
//           var el = $(el);
//           if (el.visible(true, 100)) {
//             el.addClass("placed");
//           }
//         });
//         delayedMods.each(function (i, el) {
//           var el = $(el);
//           if (el.visible(true, 100)) {
//             el.addClass("placed");
//           }
//         });
//         svg.each(function (i, el) {
//           var el = $(el);
//           if (el.visible(true)) {
//             xmlTeste &&
//               el.append(
//                 "<img src='assets/img/elemento_animated.svg' alt=''></img>"
//               );
//             xmlTeste = false;
//           }
//         });
//       });
// });
"use strict";