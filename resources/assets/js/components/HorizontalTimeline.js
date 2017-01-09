/**
 * I pledge that this program represents my own
 * program code.
 */

(function (global, factory) {
  if (typeof module === "object" && typeof module.exports === "object") {
    module.exports = global.document ?
      factory(global, true) :
      function (w) {
        if (!w.document) {
          throw new Error("jQuery requires a window with a document");
        }
        return factory(w);
      };
  } else {
    factory(global);
  }
}(typeof window !== "undefined" ? window : this, function (window, noGlobal) {
  var timelines = $('.cd-horizontal-timeline');

  (timelines.length > 0) && initTimeline(timelines);

  function initTimeline(timelines) {
    timelines.each(function () {
      var timeline = $(this),
        timelineComponents = {};
      //cache timeline components
      timelineComponents['timelineWrapper'] = timeline;
      timelineComponents['timeline'] = timeline.find('.timeline').eq(0);
      timelineComponents['eventsContentWrapper'] = timeline.children('.events-content');
      timelineComponents['eventsContent'] = timelineComponents['eventsContentWrapper'].find('li');
      timelineComponents['timelineNavigation'] = timeline.find('.cd-timeline-navigation');

      if (checkMQ() === 'desktop') {
        setTimelineDestop(timelineComponents);
      }
      else {
        setTimelineMobile(timelineComponents);
        timelineComponents['slideIndex'] = 0;
        timelineComponents['slideMax'] = timelineComponents['eventsContent'].length - 1;

        // 手机端，绑定导航按钮
        timelineComponents['timelineNavigation'].on('click', '.next', function (event) {
          event.preventDefault();
          updateSlide(timelineComponents, 'next');
        });

        timelineComponents['timelineNavigation'].on('click', '.prev', function (event) {
          event.preventDefault();
          updateSlide(timelineComponents, 'prev');
        })
      }

      //the timeline has been initialize - show it
      timeline.addClass('loaded');
    });
  }

  function getEventHeight($event) {
    return Number($event.css('height').replace('px', ''));
  }

  function getEventWidth($event) {
    return Number($event.css('width').replace('px', ''));
  }


  /*
   时间线，桌面显示版本
   */
  function setTimelineDestop(timelineComponents) {
    // 根据events content 的高度，设置时间线组件的高度
    var maxOddHeight = 0,
      maxEvenHeight = 0,
      eventsWidthSum = 0;

    timelineComponents['eventsContent'].each(function (i) {
      var $event = $(this),
        eventHeight = getEventHeight($event),
        eventWidth = getEventWidth($event);
      if (i % 2 !== 0) {
        maxOddHeight = maxOddHeight > eventHeight ? maxOddHeight : eventHeight;
      }
      else {
        maxEvenHeight = maxEvenHeight > eventHeight ? maxEvenHeight : eventHeight;
        eventsWidthSum += (eventWidth + 40);
      }
    })

    var timelineHeight = maxEvenHeight + maxOddHeight + 100,
      timelineOffset = maxEvenHeight;
    timelineComponents['timelineWrapper'].css('height', timelineHeight);
    timelineComponents['eventsContentWrapper'].css('width', eventsWidthSum);

    // 设置每个事件的显示位置
    timelineComponents['eventsContent'].each(function (i) {
      var $event = $(this);
      if (i % 2 === 0) {
        var height = getEventHeight($event);
        $event.css('margin-top', timelineOffset - height);
      }
      else {
        $event.css('margin-top', timelineOffset + 50);
      }
    });

    // 设置时间线的显示位置
    timelineComponents['timeline'].css('width', eventsWidthSum)
      .css('margin-top', timelineOffset + 40);
  }

  /*
   时间线，手机端显示版本（slider）
   */
  function setTimelineMobile(timelineComponents) {
    var maxEventHeight = 0,
      eventsWidthSum = 0;

    var eventsWrapperWidth = getEventWidth(timelineComponents['eventsContentWrapper']);

    timelineComponents['eventsContent'].each(function () {
      var $event = $(this),
        eventHeight = getEventHeight($event),
        eventWidth = getEventWidth($event),
        marginWidth = (eventsWrapperWidth - eventWidth) / 2;

      maxEventHeight = maxEventHeight > eventHeight ? maxEventHeight : eventHeight;
      eventsWidthSum += eventsWrapperWidth;
      $event.css('margin-left', marginWidth);
      $event.css('margin-right', marginWidth);
    })
    timelineComponents['timelineWrapper'].css('height', maxEventHeight + 50);
    timelineComponents['eventsContentWrapper'].find('ol').css('width', eventsWidthSum);
    timelineComponents['eventContentWidth'] = eventsWrapperWidth;
    // 设置时间线的显示位置
    timelineComponents['timeline'].css('width', '100%')
      .css('margin-top', 10)
      .css('left', 0);
  }

  /*
   更新显示时间线
   */
  function updateSlide(timelineComponents, string) {
    var element = timelineComponents['eventsContentWrapper'].find('ol').get(0),
      slideIndex = timelineComponents['slideIndex'],
      slideMax = timelineComponents['slideMax'],
      newIndex = 0;

    if ((slideIndex == 0 && string == 'prev') ||
      (slideIndex == slideMax && string == 'next')) {
      return;
    }

    if (string == 'prev') {
      newIndex = slideIndex - 1;
    }
    else {
      newIndex = slideIndex + 1;
    }
    setTransformValue(element, 'translateX', -timelineComponents['eventContentWidth'] * newIndex);
    timelineComponents['slideIndex'] = newIndex;
  }

  function setTransformValue(element, property, value) {
    element.style["-webkit-transform"] = property + "(" + value + "px)";
    element.style["-moz-transform"] = property + "(" + value + "px)";
    element.style["-ms-transform"] = property + "(" + value + "px)";
    element.style["-o-transform"] = property + "(" + value + "px)";
    element.style["transform"] = property + "(" + value + "px)";
  }

  /*
   How to tell if a DOM element is visible in the current viewport?
   http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
   */
  function elementInViewport(el) {
    var top = el.offsetTop;
    var left = el.offsetLeft;
    var width = el.offsetWidth;
    var height = el.offsetHeight;

    while (el.offsetParent) {
      el = el.offsetParent;
      top += el.offsetTop;
      left += el.offsetLeft;
    }

    return (
      top < (window.pageYOffset + window.innerHeight) &&
      left < (window.pageXOffset + window.innerWidth) &&
      (top + height) > window.pageYOffset &&
      (left + width) > window.pageXOffset
    );
  }

  function checkMQ() {
    //check if mobile or desktop device
    return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
  }
}));