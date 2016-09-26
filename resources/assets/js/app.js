require('./bootstrap');
var NewsWidget = require('./NewsWidget');
var cloneDeep = require('lodash.clonedeep');

//region pjax 相关逻辑
if ($.support.pjax) {
  $(document).on('click', 'a[data-pjax]', function (event) {
    if ((isInContent('content-products') || isInContent('content-category'))
      && !$.browser.mobile
    ) {
      hideItemsAndPjax(event);
    }
    else {
      $.pjax.click(event, {container: '#pjax-container'})
    }
  })
}

//隐藏列表,并跳转
function hideItemsAndPjax(event) {
  var i = 0;
  $(".product-item").each(function () {
    i += 1;
    $(this).removeClass('fadeIn')
      .addClass('fadeOut')
      .css('opacity', '0')
  })
  var duration = 150 * i + 1000;
  try {
    var aEvent = cloneDeep(event);
    event.preventDefault();
    setTimeout(function () {
      $.pjax.click(aEvent, {container: '#pjax-container'})
    }, duration);
  }catch (e) {
    console.log(e);
  }
}

//点击浏览器回退按钮,进入产品列表时,移除关闭的类
window.onpopstate = function (event) {
  if ((isInContent('content-products') || isInContent('content-category'))
    && !$.browser.mobile
  ) {
    console.log(event)
    $(".product-item").each(function () {
      $(this).removeClass('fadeOut')
        .addClass('fadeIn');
    })
  }
};

function isInContent(className) {
  if ($(".content." + className)[0] !== undefined)
    return true;
  return false;
}

$(document).on("pjax:timeout", function (event) {
  // 阻止超时导致链接跳转事件发生
  event.preventDefault()
});

$(document).on("pjax:start", function (event) {
  progressJs().start();
})

$(document).on("pjax:complete", function (event) {
  progressJs().end();
  refreshAll();
})
//endregion


//手机端的逻辑代码
if ($.browser.mobile) {
  require('./inMobile');
}
else {
  initVideoBG();
}

var newsWidget = new NewsWidget();
$(window).resize(newsWidget.setNewsImageSize);
setTimeout(newsWidget.autoChangeSlider.bind(newsWidget), newsWidget.interval);
newsWidget.setNewsImageSize()
newsWidget.refresh();
refreshAll();


function initVideoBG() {
  var videoUrl = '/video/whirlpool.mp4';
  $('#bg-video-wrap').append('<video autoplay muted loop id="bgvid"><source src="' +
    videoUrl +
    '" type="video/mp4"></video>');
}

function initScrollbar() {
  jQuery('.scrollbar-macosx').each(function(){
    if($(this).hasClass('no-scrollbar-inmobile'))
      return;
    $(this).scrollbar();
  });
}

function refreshAll() {
  if (isInContent('content-home')) {
    newsWidget.refresh();
  }

  if (isInContent('content-products') || isInContent('content-category')) {
    $('.product-item').each(function () {
      $(this).css('display', 'inline-block');
    })
  }

  if (isInContent('content-news-detail')) {
    var height = $($('.news-detail-body')[0]).height();
    $($('.news-detail-body > div')[0]).height(height);
  }

  if ($(".details-content")[0] !== undefined) {
    $(".product-description-item").each(function () {
      var imageUrl = $(this).data('image'),
        title = $(this).data('title'),
        description = $(this).data('description');
      $(this).css('background-image', 'url(' + imageUrl + ')');

      $(this).click(function () {
        $($('.product-description-item.active')[0]).removeClass('active');
        $(this).addClass('active');
        $($(".product-detail-item.product-descriptions .main-title")[0]).html(title);
        $($(".product-detail-item.product-descriptions .sub-title")[0]).html(description);
        $($(".product-detail-item.product-descriptions .product-description-image")[0]).attr('src', imageUrl);
      })
    })
  }


  //region 新闻中心样式整理
  var height;
  if ($.browser.mobile) {
    height = $($('.widget')[0]).height();
  }
  else {
    height = $($('.grid-cell.grid-cell-no-1')[0]).height();
  }
  $('.content-news .news-item').each(function () {
    var v = 'url(' + $(this).data('image') + ')';
    var item = $(this);
    item.css('background-image', v);
    if (item.hasClass('news-item-lg'))
      item.height(height * 2);
    else
      item.height(height);
  })
  //endreigon

  //产品详情页和关于我们页面设置高度
  function setProductDetailSize() {
    if ($.browser.mobile) {
      initScrollbar();
      return;
    }
    var elParent = $($(".detail.product-detail")[0]);
    var height = elParent.height();

    $(".detail.product-detail .product-detail-item").each(function () {
      $(this).height(height);
    })
    initScrollbar();
    setTimeout(function () {
      elParent.show();
    }, 200)
  }

  //产品详情页,为滚动条设置菜单
  if ($('.details-content.content-product')[0] !== undefined && !$.browser.mobile) {
    setProductDetailSize();
    $(window).resize(setProductDetailSize);

    var oldActive = 'product-show';

    function changeActive(className) {
      if (oldActive === className) {
        return
      }
      $('.details-nav .active').removeClass('active');
      $('.details-nav .' + className).addClass('active');
      oldActive = className;
    }

    var height1 = $('.scrollbar-macosx .product-show').height();
    var height2 = $('.scrollbar-macosx .product-tech').height() + height1;
    var height3 = $('.scrollbar-macosx .product-core').height() + height2;
    var height4 = $('.scrollbar-macosx .product-descriptions').height() + height3;
    $('.scrollbar-macosx').scroll(function () {
      var current = $(this).scrollTop();
      if (current < height1) {
        changeActive('product-show');
      }
      else if (current >= height1 && current < height2) {
        changeActive('product-tech');
      }
      else if (current >= height2 && current < height3) {
        changeActive('product-core');
      }
      else {
        changeActive('product-descriptions');
      }
    })
  }

  //关于我们页面,为滚动条设置菜单
  if ($('.details-content.content-about')[0] !== undefined) {
    setProductDetailSize();
    $(window).resize(setProductDetailSize);

    var hash = window.location.hash,
      oldActive;
    if (typeof hash === 'undefined' || hash === '') {
      oldActive = 'brand-info'
    }
    else {
      oldActive = hash.substr(1, hash.length - 1)
    }


    function changeActive(className) {
      $('.details-nav .active').removeClass('active');
      $('.details-nav .' + className).addClass('active');
      oldActive = className;
    }

    var height1 = $('.scrollbar-macosx .brand-info').height();
    var height2 = $('.scrollbar-macosx .brand-course').height() + height1;
    var height3 = $('.scrollbar-macosx .brand-worth').height() + height2;
    var height4 = $('.scrollbar-macosx .brand-honour').height() + height3;
    var height5 = $('.scrollbar-macosx .brand-responsibility').height() + height4;

    setTimeout(function () {
      var scrollbar = $($('.scrollbar-macosx.scroll-content')[0]);
      if (oldActive === 'brand-info') {
        changeActive('brand-info');
      }
      else if (oldActive === 'brand-course') {
        changeActive('brand-course');
        scrollbar.scrollTop(height1);
      }
      else if (oldActive === 'brand-worth') {
        changeActive('brand-worth');
        scrollbar.scrollTop(height2);
      }
      else if (oldActive === 'brand-honour') {
        changeActive('brand-honour');
        scrollbar.scrollTop(height3);
      }
      else {
        changeActive('brand-responsibility');
        scrollbar.scrollTop(height4);
      }

      $('.scrollbar-macosx.scroll-content').scroll(function () {
        var current = $(this).scrollTop();
        if (current < height1) {
          changeActive('brand-info');
        }
        else if (current >= height1 && current < height2) {
          changeActive('brand-course');
        }
        else if (current >= height2 && current < height3) {
          changeActive('brand-worth');
        }
        else if (current >= height3 && current < height4) {
          changeActive('brand-honour');
        }
        else {
          changeActive('brand-responsibility');
        }
      })
    }, 500)

  }


  //工程案例页面处理
  if ($(".content.content-projects")[0] !== undefined && !$.browser.mobile) {
    +function () {

      var elWidths = [];

      function bindSize() {
        var height = $($(".grid-cell.grid-cell-no-6")[0]).height();
        $(".project-item > img").each(function () {
          $(this).height(height -2);
        });

        var wrapperWidth = 0;
        $(".content.content-projects .grid-cell.grid-cell-no-6 .project-item").each(function () {
          elWidths.push(wrapperWidth);
          var width = $(this).width();
          wrapperWidth += width;
        })
        $($(".grid-cell.grid-cell-no-6 .project-wrapper")[0]).width(wrapperWidth);
        $($(".grid-cell.grid-cell-no-6 .project-wrapper")[0]).height(height);
      }

      $(window).resize(bindSize);
      bindSize();
      initScrollbar();

      var target = $($('.scrollbar-macosx.scroll-content')[0]),
        duration = 1000;
      $(".nav-page-next").click(function () {
        var currentLeft = target.scrollLeft();
        for (var i = 0, iMax = elWidths.length; i < iMax; i++) {
          if (currentLeft < elWidths[i]) {
            target.animate({scrollLeft: elWidths[i]}, duration);
            break;
          }
        }
      })

      $(".nav-page-prev").click(function () {
        var currentLeft = target.scrollLeft();
        for (var i = elWidths.length - 1, iMin = -1; i > iMin; i--) {
          if (currentLeft > elWidths[i]) {
            target.animate({scrollLeft: elWidths[i]}, duration);
            break;
          }
        }
      })
    }();
  }

}





