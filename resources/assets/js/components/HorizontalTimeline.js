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
  var timelines = $('.cd-horizontal-timeline'),
    eventsMinDistance = 60;

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

      console.log(timelineComponents);


      //the timeline has been initialize - show it
      timeline.addClass('loaded');

      // 根据events content 的高度，设置时间线组件的高度
      var maxOddHeight = 0,
        maxEvenHdight = 0,
        eventsWidthSum = 0;

      timelineComponents['eventsContent'].each(function (i) {
        var $event = $(this),
          eventHeight = getEventHeight($event),
          eventWidth = getEventWidth($event);
        if (i % 2 !== 0) {
          maxOddHeight = maxOddHeight > eventHeight ? maxOddHeight : eventHeight;
        }
        else {
          maxEvenHdight = maxEvenHdight > eventHeight ? maxEvenHdight : eventHeight;
          eventsWidthSum += (eventWidth + 40) ;
        }
      })

      var timelineHeight = maxEvenHdight + maxOddHeight + 100,
        timelineOffset = maxEvenHdight;
      timelineComponents['timelineWrapper'].css('height', timelineHeight);
      timelineComponents['eventsContentWrapper'].css('width', eventsWidthSum);

      // 设置每个事件的显示位置
      timelineComponents['eventsContent'].each(function (i) {
        var $event = $(this);
        if( i % 2 === 0) {
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
    });
  }

  function getEventHeight($event) {
    return Number($event.css('height').replace('px', ''));
  }

  function getEventWidth($event) {
    return Number($event.css('width').replace('px', ''));
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