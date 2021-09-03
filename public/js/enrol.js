/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/enrol.js ***!
  \*******************************/
var enrol = document.getElementById('enrol');
var enrol_text = document.getElementById('enrol_text');
var cart = document.getElementById('cart');
enrol.addEventListener('click', function () {
  enrol_text.innerText = 'Processing...';
  enrol.classList.add('opacity-70');
  cart.classList.add('hidden');
  setTimeout(enrolled, 3000);
});

function enrolled() {
  enrol_text.innerText = 'Enrolled';
  enrol.classList.add('opacity-100');
  cart.classList.add('hidden'); // enrol.classList.add('cursor-not-allowed')
}

function test() {
  if (enrol_text.innerHTML === 'Enrolled') {
    clearTimeout();
    enrol_text.innerText = "Enrol in course";
    cart.classList.remove('hidden');
  }
}
/******/ })()
;