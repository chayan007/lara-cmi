$(document).ready(function(){
  $(".button-collapse").sideNav();
  $('.carousel').carousel({
    dist: -50,
    shift: 50,
  });

if($(window).scrollTop>0)
{
  $('nav').removeClass("atop");
}

$(window).scroll(function (){
  if($(this).scrollTop()>0)
  {
    $('nav').removeClass("atop");
  }
  else {
    $('nav').addClass("atop");
  }
});
//new code

}); //document.ready ends here
