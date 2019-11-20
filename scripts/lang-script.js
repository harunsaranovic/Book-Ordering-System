$('#lang').hover(function() {
  $(this).children('ul').children('a').children('li').show(100);
  console.log('asd');
}, function() {
  $(this).children('ul').children('a').children('li').hide(100);
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
