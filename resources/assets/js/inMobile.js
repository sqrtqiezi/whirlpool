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


  $("#mobile-navigation .nav .has-expand").click(function () {
    var subName = $(this).data('sub-name');
    var faEl = $(this).find('.fa.fa-plus')[0];
    var subEl = $('#mobile-navigation .nav-sub-list.' + subName)[0];
    if(faEl === undefined) {
      faEl = $(this).find('.fa.fa-minus')[0];
      $(faEl).removeClass('fa-minus').addClass('fa-plus');
      $(subEl).hide();
    }
    else {
      $(faEl).removeClass('fa-plus').addClass('fa-minus');
      $(subEl).show();
    }
  })

}));