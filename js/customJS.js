// Toggle menu
$(function() {
    $(".menu-button-wrap").click(function(e){
        $(".main-menu").toggleClass("open");
        	e.stopPropagation();
    });
});
$(function() {
    $("#close-menu").click(function(e){
        $(".main-menu").toggleClass("open");
        	e.stopPropagation();
    });
});
// Hamburger menu animation
$(function() {
    $(".menu-button-wrap").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
$(function() {
    $("#close-menu").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
// Toggle search
$(function() {
    $("#search").click(function(e){
        $("#searchFormWrap").toggleClass("searchOpen");
        	e.stopPropagation();
    });
});
const searchButton = document.querySelector( ".search" );
const searchWrapper = document.querySelector( ".search-form-wrap" );
// Toggle search icon
$(function() {
    $("#search").click(function(e){
        $("#search").toggleClass("iconOpacity");
        	e.stopPropagation();
    });
});
// Hide main navigation on scroll
$(document).ready(function () {

  'use strict';

   var c, currentScrollTop = 0,
       navbar = $('.site-header');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.height();

      currentScrollTop = a;

      if (c < currentScrollTop && a > b + b) {
        navbar.addClass("scrollUp");
      } else if (c > currentScrollTop && !(a <= b)) {
        navbar.removeClass("scrollUp");
      }
      c = currentScrollTop;
  });

});

// detect IE and display an error message prompting users to upgrade to a modern browser
/*
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<p style="text-align: center; position: relative; z-index: 99999; background-color: #f4a81d; color: #000000;">You are using a browser no longer supported by Microsoft. For the best and most secure viewing experience, please use a modern browser like <a href="https://www.google.com/chrome/" target="_blank" rel="noreferrer" style="color: #000000;">Chrome</a> or <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank" rel="noreferrer" style="color: #000000;">Firefox</a>.</p>');
}
*/
