var slideNow = 1;
var slideCount = $('#slidewrapper').children().length;
var slideInterval = 3000;
var navBtnId = 0;
var translateWidth = 0;

$(document).ready(function () {
  var switchInterval = setInterval(nextSlide, slideInterval);

  $('#viewport').hover(function () {
    clearInterval(switchInterval);
  }, function () {
    switchInterval = setInterval(nextSlide, slideInterval);
  });

  $('#next-btn').click(function () {
    nextSlide();
  });

  $('#prev-btn').click(function () {
    prevSlide();
  });

  $('.slide-nav-btn').click(function () {
    navBtnId = $(this).index();

    if (navBtnId + 1 != slideNow) {
      translateWidth = -$('#viewport').width() * (navBtnId);
      $('#slidewrapper').css({
        'transform': 'translate(' + translateWidth + 'px, 0)',
        '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
        '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
      });
      slideNow = navBtnId + 1;
    }
  });
});


function nextSlide() {
  if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
    $('#slidewrapper').css('transform', 'translate(0, 0)');
    slideNow = 1;
  } else {
    translateWidth = -$('#viewport').width() * (slideNow);
    $('#slidewrapper').css({
      'transform': 'translate(' + translateWidth + 'px, 0)',
      '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
      '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
    });
    slideNow++;
  }
}

function prevSlide() {
  if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
    translateWidth = -$('#viewport').width() * (slideCount - 1);
    $('#slidewrapper').css({
      'transform': 'translate(' + translateWidth + 'px, 0)',
      '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
      '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
    });
    slideNow = slideCount;
  } else {
    translateWidth = -$('#viewport').width() * (slideNow - 2);
    $('#slidewrapper').css({
      'transform': 'translate(' + translateWidth + 'px, 0)',
      '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
      '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
    });
    slideNow--;
  }
}


(function ($) {
  $(function () {

    $('span.jQtooltip').each(function () {
      var el = $(this);
      var title = el.attr('title');
      if (title && title != '') {
        el.attr('title', '').append('<div>' + title + '</div>');
        var width = el.find('div').width();
        var height = el.find('div').height();
        el.hover(
          function () {
            el.find('div')
              .clearQueue()
              .delay(200)
              .animate({ width: width + 20, height: height + 20 }, 200).show(200)
              .animate({ width: width, height: height }, 200);
          },
          function () {
            el.find('div')
              .animate({ width: width + 20, height: height + 20 }, 150)
              .animate({ width: 'hide', height: 'hide' }, 150);
          }
        ).mouseleave(function () {
          if (el.children().is(':hidden')) el.find('div').clearQueue();
        });
      }
    })

  })
})(jQuery)


$("#polzunok").slider({
  animate: "slow",
  range: "min",
  value: 50,
  slide: function (event, ui) {
    $("#result-polzunok").text(ui.value);
  },
});
$("#result-polzunok").text($("#polzunok").slider("value"));

function hexFromRGB(r, g, b) {
  var hex = [
    r.toString(16),
    g.toString(16),
    b.toString(16)
  ];
  $.each(hex, function (nr, val) {
    if (val.length === 1) {
      hex[nr] = "0" + val;
    }
  });
  return hex.join("").toUpperCase();
}
function refreshSwatch() {
  var red = $("#red").slider("value"),
    green = $("#green").slider("value"),
    blue = $("#blue").slider("value"),
    hex = hexFromRGB(red, green, blue);
  $("#swatch").css("background-color", "#" + hex);
}
$(function () {
  $("#red, #green, #blue").slider({
    orientation: "horizontal",
    range: "min",
    max: 255,
    value: 127,
    slide: refreshSwatch,
    change: refreshSwatch
  });
  $("#red").slider("value", 255);
  $("#green").slider("value", 140);
  $("#blue").slider("value", 60);
});