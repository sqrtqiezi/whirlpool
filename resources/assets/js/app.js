require('./bootstrap');


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



//首页新闻窗口的逻辑代码
jQuery(function () {
  function setNewsImageSize() {
    var height = $('.widget').height();
    $('.news-image').each(function () {
      var v = 'url(' + $(this).data('image') + ')';
      $(this).css('background-image', v);
      $(this).height(height);
    })
  }

  setNewsImageSize();
  $(window).resize(setNewsImageSize);

  var currentIndex = 0;
  var interval = 5000;
  $('.news-slider').unslider({
    keys: false, arrows: false, nav: false
  });

  function setSliderPage(index) {
    if (index != currentIndex) {
      $('.widget-nav').each(function () {
        if ($(this).data('slider') != index)
          $(this).removeClass('active');
        else
          $(this).addClass('active');
      });
      $('.news-slider').unslider('animate:' + index);
      currentIndex = index;
    }
  }

  $('.widget-nav').click(function () {
    var index = $(this).data('slider')
    setSliderPage(index);
  })

  function autoChangeSlider() {
    var index = (currentIndex + 1) % 3;
    setSliderPage(index);
    setTimeout(autoChangeSlider, interval)
  }

  setTimeout(autoChangeSlider, interval)
});


//新闻中心业务代码
jQuery(function () {
  var height = $($('.grid-cell.grid-cell-no-1')[0]).height();
  $('.content-news .news-item').each(function () {
    var v = 'url(' + $(this).data('image') + ')';
    var item = $(this);
    item.css('background-image', v);
    if(item.hasClass('news-item-lg'))
      item.height(height*2);
    else
      item.height(height);
  })
})


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
$(function () {
  $(".footer > nav.nav-list > ul > li").hover(function () {
    var liWidth = $(this).width();

    var subNav = $(this).find('ul')[0];
    if (subNav === undefined) return;
    var cnt = $(subNav).find('li').length;
    $(subNav).width(liWidth * cnt + 30);
  })
})