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
  var mobileNav = $("#mobile-navigation .nav");
  var menuClose = $("#mobile-navigation .js-btn-menu-close");
  var menuBack = $("#mobile-navigation .js-btn-menu-back");

  /**
   * 展开菜单
   */
  function expandMenu() {
    $('#mobile-navigation').show();
    $('#responsive-menu-button').hide();

    mobileNav.show();

    var $mainEl = $($('.main')[0]);
    $mainEl.css('position', 'fixed');
    $mainEl.css('overflow-y', 'hidden');

    var $logoEl = $($('.grid-cell.mobile-top > .logo')[0]);
    $logoEl.hide();
  }

  /**
   * 关闭菜单
   */
  function closeMenu() {
    $('#mobile-navigation').hide();
    $('#responsive-menu-button').show();

    mobileNav.hide()

    var $mainEl = $($('.main')[0]);
    $mainEl.css('overflow-y', 'visible');
    $mainEl.css('position', 'relative');

    var $logoEl = $($('.grid-cell.mobile-top > .logo')[0]);
    $logoEl.show();
  }

  /**
   * 返回主菜单
   */
  function backMenu() {
    $('#mobile-navigation .nav-sub-list').each(function(){
      var el = $(this);
      el.addClass('bounceOutRight').show();
      menuBack.addClass('bounceOutUp').show();

      mobileNav.addClass('bounceInLeft').show();
      menuClose.show();

      setTimeout(function () {
        el.removeClass('bounceOutRight').hide();
        menuBack.removeClass('bounceOutUp').hide();
      }, 1000)
    });
  }

  /**
   * 进入子菜单
   */
  mobileNav.find(".has-expand").click(function () {
    var subName = $(this).data('sub-name');
    var subEl = $('#mobile-navigation .nav-sub-list.' + subName);
    subEl.show();
    menuBack.show();

    mobileNav.addClass('bounceOutLeft').show();
    menuClose.addClass('bounceOutUp').show();

    setTimeout(function () {
      mobileNav
        .hide()
        .removeClass('bounceOutLeft');

      menuClose
        .hide()
        .removeClass('bounceOutUp');
    }, 1000);
  });


  $('#responsive-menu-button').click(expandMenu);
  $('.js-btn-menu-close').click(closeMenu);
  $('.js-btn-menu-back').click(backMenu);

  var slider = $('.brand-honour-slider').unslider();

  /**
   * 返回页面头部
   */
  var Elevator = require('./elevator');
  new Elevator($('.main.wrapper'));


  /**
   * 页面需要设置滚动条的部分
   *
   * @type {string[]}
   */
  var pages = [".content.content-projects",
    ".detail.product-detail",
    ".content.content-news-detail"];

  for (let page in pages) {
    if ($(page)[0] !== undefined) {
      $($(".scrollbar-macosx")[0]).removeClass('scrollbar-macosx');
    }
  }
}));