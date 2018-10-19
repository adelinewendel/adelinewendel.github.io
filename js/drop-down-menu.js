$(document).ready(function(){
// Drop Down Menu Mutilevel For Desktop
$(".navigation_bar ul li").hover(function(){
  $(this).children("ul").stop().slideToggle(400);
  });
  
// Three Line Menu For Tablet And Mobile
$(".three_line_button").click(function(){
  $('.tablet_mobile').stop().slideToggle('fast');
  
});

   
});

