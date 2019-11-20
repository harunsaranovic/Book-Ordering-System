
var top;
var showed = [false, false, false, false, false, false, false]
$(window).scroll( function() {

    if ($(this).scrollTop() > $("#shower-1").offset().top-450 && !showed[1]){
      $('#shower-1').removeClass('shower-down', 1000);
      showed[1] = true;
    }
    if ($(this).scrollTop() > $("#shower-2").offset().top-450 && !showed[2]){
      $('#shower-2').removeClass('shower-down', 1000);
      showed[2] = true;
    }
    if ($(this).scrollTop() > $("#shower-3").offset().top-450 && !showed[3]){
      $('#shower-3').removeClass('shower-down', 1000);
      showed[3] = true;
    }
    if ($(this).scrollTop() > $("#shower-4").offset().top-450 && !showed[4]){
      $('#shower-4').removeClass('shower-down', 1000);
      showed[4] = true;
    }
    if ($(this).scrollTop() > $("#shower-5").offset().top-450 && !showed[5]){
      $('#shower-5').removeClass('shower-down', 1000);
      showed[5] = true;
    }
    if ($(this).scrollTop() > $("#shower-7").offset().top-470 && !showed[7]){
      $('#shower-7').removeClass('shower-down', 1000);
      showed[7] = true;
    }
    if ($(this).scrollTop() > $("#shower-6").offset().top-550 && !showed[6]){
      $('#shower-6').removeClass('shower-down', 1000);
      showed[6] = true;
    }
});

    var x = 0;
$('#opener').click(function(){
  if(!x){
    $('.slide-header').animate({left: '0'}, 500);
    x = 1;
  }else{
    $('.slide-header').animate({left: '-70%'}, 500);
    x = 0;
  }
});

var img = '';
$('.img-opener').click(function(){
  img = $(this).css('background-image').replace('url(','').replace(')','').replace(/\"/gi, "");
  console.log(img);
  $('#img-shower').children('img').attr("src", img);
  $('#img-shower').addClass('show-shower', 500, function() {
    $('#close-img').fadeIn(100);
    $('html').css({'overflow-y': 'hidden'});
  });
});

$('#close-img').click(function(){
  $('#close-img').fadeOut(100, function() {
    $('#img-shower').removeClass('show-shower', 500);
    $('html').css({'overflow-y': 'scroll'});
  });
});

$('#projects-ul').hover(function() {
  $(this).children('ul').show(100);
}, function() {
  $(this).children('ul').hide(100);
});

$(document).ready(function(){
  setTimeout(function(){
    $('#loading').fadeOut(500);
  }, 3000);
});




//MOBILE menu
var open = false;
$('#tab').click(function(){
  if(!open){
    $('#menu').animate({right: '0%'});
    $('body').addClass('noscrl', 1);
    open = true;
  }else{
    $('#menu').animate({right: '-100%'});
    $('body').removeClass('noscrl', 1);
    open = false;
  }
});

var projectsOpen = false;
$('#projects').click(function(){
  if(!projectsOpen){
    $('.projects-show').slideDown(100);
    $('#projects').addClass('red', 100);
    projectsOpen = true;
  }else{
    $('.projects-show').slideUp(100);
    $('#projects').removeClass('red', 100);
    $('.busi-show').slideUp(100);
    $('#busi').removeClass('red', 100);
    projectsOpen = false;
  }
});
