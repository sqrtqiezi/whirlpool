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

+function () {
  var currentIndex = 0;

  $('.news-slider').unslider({
    keys: false, arrows: false, nav: false
  });

  $('.widget-nav').click(function () {
    var index = $(this).data('slider');
    if (index != currentIndex) {
      $('.widget-nav.active').each(function () {
        $(this).removeClass('active');
      });
      $(this).addClass('active');
      $('.news-slider').unslider('animate:' + index);
      currentIndex = index;
    }
  })
}();


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
$(function(){
  $(".footer > nav.nav-list > ul > li").hover(function () {
    var liWidth =  $(this).width();

    var subNav = $(this).find('ul')[0];
    if (subNav === undefined) return;
    var cnt = $(subNav).find('li').length;
    $(subNav).width(liWidth * cnt + 30);
  })
})