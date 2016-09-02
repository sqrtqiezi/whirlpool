/**
 * I pledge that this program represents my own
 * program code.
 */

(function( global, factory ) {
  if ( typeof module === "object" && typeof module.exports === "object" ) {
    module.exports = global.document ?
      factory( global, true ) :
      function( w ) {
        if ( !w.document ) {
          throw new Error( "jQuery requires a window with a document" );
        }
        return factory( w );
      };
  } else {
    factory( global );
  }

// Pass this if window is not defined yet
}(typeof window !== "undefined" ? window : this, function( window, noGlobal ) {


  function NewsWidget() {
    this.currentIndex = 0;
    this.interval = 5000;
  }

  NewsWidget.prototype = {
    setNewsImageSize: function () {
      var height = $('.widget').height();
      $('.news-image').each(function () {
        var v = 'url(' + $(this).data('image') + ')';
        $(this).css('background-image', v);
        $(this).height(height);
      })
    },

    setSliderPage: function (index) {
      if (index != this.currentIndex) {
        $('.widget-nav').each(function () {
          if ($(this).data('slider') != index)
            $(this).removeClass('active');
          else
            $(this).addClass('active');
        });
        $('.news-slider').unslider('animate:' + index);
        this.currentIndex = index;
      }
    },

    autoChangeSlider: function () {
      var index = (this.currentIndex + 1) % 3;
      this.setSliderPage(index);
      setTimeout(this.autoChangeSlider.bind(this), this.interval)
    },

    setNewsItemWidth: function () {
      var wordWidth = $('#news-item-test').width();
      var widgetWidth = $($(".widget-body")[0]).width();
      var maxLength = Math.floor(widgetWidth/wordWidth);

      $(".news-item a").each(function () {
        var words = $(this).html();
        if(words.length > maxLength)
          $(this).html(words.substr(0, maxLength - 4) + "......")
      })
    },

    refresh: function () {
      var widget = this;

      $('.news-slider').unslider({
        keys: false, arrows: false, nav: false
      });

      $('.widget-nav').click(function () {
        var index = $(this).data('slider')
        widget.setSliderPage(index);
      })

      this.setNewsImageSize();

      this.setNewsItemWidth();
    }
  }

  return NewsWidget;
}));