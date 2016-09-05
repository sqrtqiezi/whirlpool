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

  function expandMenu() {
    console.log('hi')
    $('#mobile-navigation').show();
    $('#responsive-menu-button').hide();
  }

  function closeMenu() {
    $('#mobile-navigation').hide();
    $('#responsive-menu-button').show();
  }

  $('#responsive-menu-button').click(expandMenu);
  $('#responsive-menu-close').click(closeMenu);


  var pages = [".content.content-projects",
    ".detail.product-detail",
    ".content.content-news-detail"];

  _.each(pages, function (page) {
    if($(page)[0] !== undefined) {
      $($(".scrollbar-macosx")[0]).removeClass('scrollbar-macosx');
    }
  })

}));