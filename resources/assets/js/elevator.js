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

// Pass this if window is not defined yet
}(typeof window !== "undefined" ? window : this, function (window, noGlobal) {
  function Elevator(target) {
    this.target = $(target[0]);

    var body = $('body');
    body.append("<div class='elevator' style='display: none;" +
      "position: fixed; bottom: 3em; right: 1em; " +
      "z-index: 99999; cursor: pointer;'>" +
      "<i class='fa fa-caret-up' style='font-size: 2em;'></i>" +
      "</div>");

    var elevator = this;
    this.maxHeight = body.height();
    this.isShow = false;

    this.elElevator = $($('.elevator'));
    this.elElevator.click(function () {
      elevator.target.animate({ scrollTop: 0 }, '1500', 'swing');
    })

    this.target.scroll(function (event) {
      var currentHeight = elevator.target.scrollTop();
      if(currentHeight > elevator.maxHeight && !elevator.isShow) {
        elevator.show();
      }
      else if(currentHeight <= elevator.maxHeight && elevator.isShow) {
        elevator.hide();
      }
    });
  }

  Elevator.prototype = {
    show: function () {
      this.elElevator.show();
      this.isShow = true;
    },
    hide: function () {
      this.elElevator.hide();
      this.isShow = false;
    }
  }

  return Elevator;
}));