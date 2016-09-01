require('./bootstrap');
var NewsWidget = require('./NewsWidget');

$(document).pjax('a', '#pjax-container');
$(document).on("pjax:timeout", function (event) {
  // 阻止超时导致链接跳转事件发生
  event.preventDefault()
});

$(document).on("pjax:start", function (event) {
  progressJs().start();
  progressJs().set(50);
})

$(document).on("pjax:complete", function (event) {
  progressJs().end();
  refreshAll();
})


var newsWidget = new NewsWidget();
$(window).resize(newsWidget.setNewsImageSize);
setTimeout(newsWidget.autoChangeSlider.bind(newsWidget), newsWidget.interval);
newsWidget.setNewsImageSize()
newsWidget.refresh();
refreshAll();

function refreshAll() {
  $('#responsive-menu-button').sidr({
    name: 'sidr-main',
    source: '#navigation',
    onOpen: function () {
      $($("#responsive-menu-button > i.fa")[0]).removeClass('fa-bars').addClass('fa-times');
    },
    onClose: function () {
      $($("#responsive-menu-button > i.fa")[0]).removeClass('fa-times').addClass('fa-bars');
    }
  });

  newsWidget.refresh();


  //region 新闻中心业务代码
  var height = $($('.grid-cell.grid-cell-no-1')[0]).height();
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


  jQuery.godetail = function (id) {
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
    $.godetail(id);
  })

  //子菜单处理
  // $(".footer > nav.nav-list > ul > li").hover(function () {
  //   var liWidth = $(this).width();
  //
  //   var subNav = $(this).find('ul')[0];
  //   if (subNav === undefined) return;
  //   var cnt = $(subNav).find('li').length;
  //   $(subNav).width(liWidth * cnt + 30);
  // })

  $(".js-top-nav").click(function () {
    var subNavName = $(this).data('sub-nav');

    $('#' + subNavName).show();
  })

  $(".nav-sub-list").click(function () {
    $(this).hide();
  })

  //产品详情页样式处理
  function setProductDetailSize() {
    var height = $($(".detail.product-detail")[0]).height()

    $(".detail.product-detail .product-detail-item").each(function () {
      $(this).height(height);
    })
  }

  setProductDetailSize();
  $(window).resize(setProductDetailSize);

  //工程案例页面处理
  if ($(".content.content-projects")[0] !== undefined) {
    function bindSize() {
      var height = $($(".grid-cell.grid-cell-no-6")[0]).height();
      console.log('height:' + height);
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


  //滚动条设置
  jQuery('.scrollbar-macosx').scrollbar();
}



