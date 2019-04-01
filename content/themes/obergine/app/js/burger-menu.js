var app = {
  $container: $('body > .container'),
  $header: $('.header'),
  $overlay: $('.overlay'),

  init: function() {
    console.log('init');enterBanner: function() {
    app.$header.removeClass('header--fixed');
        },
    },

  leaveBanner: function() {
    app.$header.addClass('header--fixed');
  },

  addOverlayEventListerners: function() {
    $('.displayOverlay').on(
      'click',
      app.displayOverlay
    );

    $('.hideOverlay').on(
      'click',
      app.hideOverlay
    );
  },

  displayOverlay: function() {
    app.$overlay.removeClass('overlay--hidden');
    app.$container.addClass('blur');
  },

  hideOverlay: function() {
    app.$overlay.addClass('overlay--hidden');
    app.$container.removeClass('blur');
  }
}

$(app.init);