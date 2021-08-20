/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
var drop_categ = document.getElementById('menu_categ');
var drop_author = document.getElementById('menu_author');
var drop_profile = document.getElementById('menu_profile');
var author = document.getElementById('author');
var categ = document.getElementById('categ');
var list = document.getElementById('list');
var profile = document.getElementById('profile');
author.addEventListener('mouseover', function () {
  if (drop_author.classList.contains('hidden')) {
    drop_author.classList.remove('hidden');
  } else {
    drop_author.classList.add('hidden');
  }
});
categ.addEventListener('mouseover', function () {
  // if(drop_categ.classList.contains('hidden')){
  //     drop_categ.classList.remove('hidden');
  // }else{
  //     drop_categ.classList.add('hidden');
  // }
  drop_categ.classList.toggle('hidden');
});
profile.addEventListener('click', function () {
  if (drop_profile.classList.contains('hidden')) {
    drop_profile.classList.remove('hidden');
  } else {
    drop_profile.classList.add('hidden');
  }
});
/******/ })()
;