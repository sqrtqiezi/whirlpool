require('./bootstrap');
var NewsWidget = require('./NewsWidget');


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
  var aEvent = _.cloneDeep(event);
  event.preventDefault();

  setTimeout(function () {
    $.pjax.click(aEvent, {container: '#pjax-container'})
  }, duration);
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

  // //设置图片类的二级导航
  // $(".nav-sub-list>.nav-sub-list-wrapper>.nav-sub-list-body .nav-sub-image").hover(function () {
  //   var el = $(this).find("img")[0];
  //   var hoverImage = el.src.split('.png')[0] + "-hover.png";
  //   el.src = hoverImage;
  // }, function () {
  //   var el = $(this).find("img")[0];
  //   var image = el.src.replace("-hover", "");
  //   el.src = image;
  // })
}

var newsWidget = new NewsWidget();
$(window).resize(newsWidget.setNewsImageSize);
setTimeout(newsWidget.autoChangeSlider.bind(newsWidget), newsWidget.interval);
newsWidget.setNewsImageSize()
newsWidget.refresh();
refreshAll();


function initVideoBG() {
  var videoUrl = 'http://obz9qz3z4.bkt.clouddn.com/whirlpool5';
  $('#bg-video-wrap').append('<video autoplay muted loop id="bgvid"><source src="' +
    videoUrl +
    '" type="video/mp4"></video>');
}

function refreshAll() {
  //滚动条设置
  jQuery('.scrollbar-macosx').scrollbar();

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


  // $(".js-top-nav").click(function () {
  //   var subNavName = $(this).data('sub-nav');
  //   $('#' + subNavName).show();
  // })
  //
  // $(".nav-sub-list").click(function () {
  //   $(this).hide();
  // })

  //产品详情页样式处理
  function setProductDetailSize() {
    if ($.browser.mobile) return;

    var height = $($(".detail.product-detail")[0]).height()

    $(".detail.product-detail .product-detail-item").each(function () {
      $(this).height(height);
    })
  }

  if ($('.details-content')[0] !== undefined) {
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


  //工程案例页面处理
  if ($(".content.content-projects")[0] !== undefined && !$.browser.mobile) {
    function bindSize() {
      var height = $($(".grid-cell.grid-cell-no-6")[0]).height();
      $(".project-item > img").each(function () {
        $(this).height(height - 2);
      })
      var width = $($(".content.content-projects .grid-cell.grid-cell-no-6 .project-item")[0]).width();
      if (width !== 0)
        $($(".grid-cell.grid-cell-no-6 .project-wrapper")[0]).width(width * 3);
    }


    $(window).resize(bindSize);

    bindSize();
  }

  //关于我们页面处理
  function godetail(id) {
    $('.details-content .detail').each(function () {
      $(this).hide()
    })
    $($('.detail.' + id)[0]).show()

    var activeLi = $('.details-nav li.active')[0];

    if (activeLi !== undefined) {
      $(activeLi).removeClass('active');
    }

    activeLi = $('.details-nav a[data-detail-name="' + id + '"] > li')[0];
    if (activeLi !== undefined)
      $(activeLi).addClass('active');
  }

  $('.js-details').click(function () {
    var id = $(this).data('detail-name');
    godetail(id);
  })

  if ($(".content-about")[0] !== undefined) {
    var url = window.location.hash
    var id = url.split("#")[1];
    if (id === undefined)
      id = 'brand-info';
    godetail(id);
  }
}





