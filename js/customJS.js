// Toggle menu
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".main-menu").toggleClass("open");
        	e.stopPropagation();
    });
});
$(function() {
    $("#closeMenu").click(function(e){
        $(".main-menu").toggleClass("open");
        	e.stopPropagation();
    });
});
// Hamburger menu animation
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
$(function() {
    $("#closeMenu").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
// Toggle search
$(function() {
    $("#searchWrap").click(function(e){
        $("#searchFormWrap").toggleClass("searchOpen");
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


// Lamers connect destination tabs

function getListItemHeight(idx) {
	return $(".destinationTab ul").find("li:eq(" + idx + ")").innerHeight() + "px";
}

$(document).on("click", ".destinationTab .menu div", function() {
	var numberIndex = $(this).index();

	if (!$(this).is("active")) {
		$(".destinationTab .menu div").removeClass("active");
		$(".destinationTab ul li").removeClass("active");

		$(this).addClass("active");
		$(".destinationTab ul").find("li:eq(" + numberIndex + ")").addClass("active");

		$(".destinationTab ul").height(getListItemHeight(numberIndex));
	}
});

// get and set the height after waiting for the destinationTabs to be created.
setTimeout(function(){
	$(".destinationTab ul").height(getListItemHeight(0));
},200);

// detect IE and display an error message prompting users to upgrade to a modern browser
/*
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<p style="text-align: center; position: relative; z-index: 99999; background-color: #f4a81d; color: #000000;">You are using a browser no longer supported by Microsoft. For the best and most secure viewing experience, please use a modern browser like <a href="https://www.google.com/chrome/" target="_blank" rel="noreferrer" style="color: #000000;">Chrome</a> or <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank" rel="noreferrer" style="color: #000000;">Firefox</a>.</p>');
}
*/
jQuery(function($) {

  'use strict';

  var INSIGHT = window.INSIGHT || {};

  /* =============================================================================
   SEARCH HOVER
   ========================================================================== */

  INSIGHT.searchHover = function() {

    var header = $('.site-header');
    var input = $('.site-header .site-navigation:not(expanded) .search-toggle input[type=search]');
    var button = $('.site-header .search-submit');


    $(document).on('click', function() {
      if (input.is(":focus")) {
        button.addClass('search-focused');
        $('.main-menu li').not('.search-toggle').addClass('opaque');
      } else {
        button.removeClass('search-focused');
        $('.search-toggle').removeClass('force-bg');
        $('.main-menu li').not('.search-toggle').removeClass('opaque');
      }
    });

  };

});
