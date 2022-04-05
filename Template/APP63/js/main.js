$(function () {
  'use-strict';
  $('.side-nav-left').sideNav({
    edge: 'left',
    closeOnClick: !1
  }),
  $('.side-nav-right').sideNav({
    edge: 'right',
    closeOnClick: !1
  }),
  $('.slider').slider({
    full_width: !0
  })
});