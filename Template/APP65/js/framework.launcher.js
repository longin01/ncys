$(window).load(function () {
  $('#status').fadeOut();
  $('#preloader').delay(350).fadeOut('slow');
})
$(document).ready(function () {
  (function (a, b, c) {
    if (c in b && b[c]) {
      var d,
      e = a.location,
      f = /^(a|html)$/i;
      a.addEventListener('click', function (a) {
        d = a.target;
        while (!f.test(d.nodeName)) d = d.parentNode;
        'href' in d && (d.href.indexOf('http') || ~d.href.indexOf(e.host)) && (a.preventDefault(), e.href = d.href)
      }, !1)
    }
  }) (document, window.navigator, 'standalone')
  var owl = $('.slider-controls');
  owl.owlCarousel({
    singleItem: true,
    slideSpeed: 250,
    paginationSpeed: 250,
    rewindSpeed: 250,
    pagination: false,
    autoPlay: true,
  });
  $('.next-slider').click(function () {
    owl.trigger('owl.next');
    return false;
  });
  $('.prev-slider').click(function () {
    owl.trigger('owl.prev');
    return false;
  });
  var owlQuoteControls = $('.quote-slider');
  owlQuoteControls.owlCarousel({
    items: 4,
    itemsDesktop: [
      1199,
      4
    ],
    itemsDesktopSmall: [
      980,
      3
    ],
    itemsTablet: [
      768,
      3
    ],
    itemsTabletSmall: [
      330,
      2
    ],
    itemsMobile: [
      320,
      2
    ],
    singleItem: false,
    itemsScaleUp: false,
    slideSpeed: 250,
    paginationSpeed: 250,
    rewindSpeed: 250,
    pagination: false,
    autoPlay: false,
    autoHeight: true,
  });
  var owlQuoteNoControls = $('.quote-slider-no-controls');
  owlQuoteNoControls.owlCarousel({
    singleItem: true,
    slideSpeed: 250,
    paginationSpeed: 250,
    rewindSpeed: 250,
    pagination: false,
    autoPlay: true,
    autoHeight: true,
  });
  $('.next-quote').click(function () {
    owlQuoteControls.trigger('owl.next');
    return false;
  });
  $('.prev-quote').click(function () {
    owlQuoteControls.trigger('owl.prev');
    return false;
  });
  $('.slider-two-thumbs').owlCarousel({
    singleItem: true,
  });
  $('.slider-no-controls').owlCarousel({
    singleItem: true,
    slideSpeed: 250,
    paginationSpeed: 250,
    rewindSpeed: 250,
    pagination: false,
    autoHeight: true,
    autoPlay: true,
    stopOnHover: true,
    dragBeforeAnimFinish: true,
    mouseDrag: true,
    touchDrag: true,
    transitionStyle: false,
  });
  $('.swipebox').swipebox({
    useCSS: true,
    hideBarsDelay: 3000
  });
  $('.swipebox-wide').swipebox({
    useCSS: true,
    hideBarsDelay: 3000
  });
  $('.portfolio-item-full-width a').colorbox({
    transition: 'fade',
    scalePhotos: 'true',
    maxWidth: '100%',
    maxHeight: '100%'
  });
  $('.portfolio-item-thumb a').colorbox({
    transition: 'fade',
    scalePhotos: 'true',
    maxWidth: '100%',
    maxHeight: '100%'
  });
});