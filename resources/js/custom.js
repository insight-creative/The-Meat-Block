"use strict";

// vars
var menuButton = document.querySelector(".menu-button-wrap button");
var mainMenu = document.querySelector(".menu-items");
var closeMenuButton = document.querySelector("#close-menu");
var hamburger = document.querySelector(".hamburger");
var searchButton = document.querySelector(".search-btn");
var searchWrapper = document.querySelector(".search-form-wrap");
var nav = document.querySelector(".site-header"); // event listeners

menuButton.addEventListener("click", toggleMobileMenu);
closeMenuButton.addEventListener("click", closeMobileMenu);
searchButton.addEventListener("click", toggleSearch); // functions 

var scrollState = 0;

var scrollTop = function scrollTop() {
  return window.scrollY;
};

var scrollDetect = function scrollDetect(collapse, expand) {
  var currentScroll = scrollTop();

  if (currentScroll > scrollState) {
    collapse();
  } else {
    expand();
  }

  scrollState = scrollTop();
};

function collapseNav() {
  nav.classList.remove('expand');
  nav.classList.add('collapse');
}

function expandNav() {
  nav.classList.remove('collapse');
  nav.classList.add('expand');
}

window.addEventListener("scroll", function () {
  scrollDetect(collapseNav, expandNav);
});

function toggleMobileMenu() {
  if (mainMenu.classList.contains("open")) {
    this.setAttribute("aria-expanded", "false");
    this.setAttribute("aria-label", "open mobile menu");
    mainMenu.classList.remove("open");
    hamburger.classList.remove("is-active");
    console.log("menu closed");
  } else {
    mainMenu.classList.add("open");
    hamburger.classList.add("is-active");
    this.setAttribute("aria-expanded", "true");
    this.setAttribute("aria-label", "close mobile menu");
    console.log("menu open");
  }
}

function closeMobileMenu() {
  if (mainMenu.classList.contains("open")) {
    mainMenu.classList.remove("open");
    hamburger.classList.remove("is-active");
    menuButton.setAttribute("aria-expanded", "false");
    menuButton.setAttribute("aria-label", "open mobile menu");
    console.log("close button clicked and menu closed");
  }
} // Toggle Search


function toggleSearch() {
  searchButton.classList.toggle('icon-toggle');
  searchWrapper.classList.toggle("searchOpen");
}