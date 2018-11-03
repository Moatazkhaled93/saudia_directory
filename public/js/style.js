new WOW().init();

$(window).scroll(function() {
// 100 = The point you would like to fade the nav in.

if ($(window).scrollTop() > 10) {

  $('.fixed').addClass('is-sticky');
 
   
} else {

  $('.fixed').removeClass('is-sticky');
   

};
});


window.onload = function() {
document.getElementById("search").style.opacity = "0";

};
$(function(){
$("#addClass").click(function () {
$('#qnimate').addClass('popup-box-on');
});

$("#removeClass").click(function () {
$('#qnimate').removeClass('popup-box-on');
});
})
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;

if (prevScrollpos > currentScrollPos) {
document.getElementById("search").style.opacity = "0";
document.getElementById("temp").style.opacity = "1";

} else {
document.getElementById("search").style.opacity = "1";
document.getElementById("temp").style.opacity = "0";

}
prevScrollpos = currentScrollPos;
} 