var $ = jQuery.noConflict();
$(function(){
    $('.form').find('input, select, textarea').on('touchstart mousedown click', function(e){
        e.stopPropagation();
    })
})
var swiperParent = new Swiper('.swiper-parent',{
pagination: '.pagination',
paginationClickable: true,
observer:true,//修改swiper自己或子元素时，自动初始化swiper
observeParents:true,//修改swiper的父元素时，自动初始化swiper
onSlideChangeEnd : function() {
  //Do something when you touch the slide
  if (swiperParent.activeIndex != 0){
  $('#header').animate({'top':'0px'},400);
  }
  if (swiperParent.activeIndex == 0){
  $('#header').animate({'top':'-100px'},400);
  }  
}
})
var swiperNested = new Swiper('.swiper-nested', {
scrollContainer:true,
mousewheelControl : true,
observer:true,//修改swiper自己或子元素时，自动初始化swiper
observeParents:true,//修改swiper的父元素时，自动初始化swiper
mode:'vertical',
//Enable Scrollbar
scrollbar: {
  container :'.swiper-scrollbar',
  hide: true,
  draggable: false  
}
})
var swiperNested1 = new Swiper('.swiper-nested1', {
scrollContainer:true,
mousewheelControl : true,
observer:true,//修改swiper自己或子元素时，自动初始化swiper
observeParents:true,//修改swiper的父元素时，自动初始化swiper
mode:'vertical',
//Enable Scrollbar
scrollbar: {
  container :'.swiper-scrollbar1',
  hide: true,
  draggable: false  
}
})
var swiperNested2 = new Swiper('.swiper-nested2', {
scrollContainer:true,
mousewheelControl : true,
observer:true,//修改swiper自己或子元素时，自动初始化swiper
observeParents:true,//修改swiper的父元素时，自动初始化swiper
mode:'vertical',
//Enable Scrollbar
scrollbar: {
  container :'.swiper-scrollbar2',
  hide: true,
  draggable: false  
}
})
var swiperNestedsingle = new Swiper('.swiper-nestedsingle', {
scrollContainer:true,
mousewheelControl : true,
observer:true,//修改swiper自己或子元素时，自动初始化swiper
observeParents:true,//修改swiper的父元素时，自动初始化swiper
mode:'vertical',
//Enable Scrollbar
scrollbar: {
  container :'.swiper-scrollbarsingle',
  hide: true,
  draggable: false  
}
})
$('.scrolltop1').click(function(){
 swiperNested1.swipeTo(0);
});
$('.scrolltop2').click(function(){
 swiperNested2.swipeTo(0);
});
$('.scrolltop3').click(function(){
 swiperNested3.swipeTo(0);
});
$('.scrolltop4').click(function(){
 swiperNested4.swipeTo(0);
});
$('.scrolltop5').click(function(){
 swiperNested5.swipeTo(0);
});
$('.scrolltop6').click(function(){
 swiperNested6.swipeTo(0);
});
$('.scrolltop7').click(function(){
 swiperNested7.swipeTo(0);
});
$('.scrolltop8').click(function(){
 swiperNested8.swipeTo(0);
});
$('.scrolltop9').click(function(){
 swiperNested9.swipeTo(0);
});
$('.scrolltopsingle').click(function(){
 swiperNestedsingle.swipeTo(0);
});
$('.gohome').click(function(){
 swiperParent.swipeTo(0);
});
jQuery(function($) {
$(".swipebox").swipebox();
});
$(function() {
$('#tabsmenu').tabify();
$(".videocontainer").fitVids();
$(".toggle_container").hide();
$(".toggle_container_blog").hide();
$(".trigger").click(function(){
	$(this).toggleClass("active").next().slideToggle("slow");
	return false;
});
$(".trigger_blog").click(function(){
	$(this).toggleClass("activeb").next().slideToggle("slow");
	return false;
});
$(".post_more").click(function(){
	$(this).toggleClass("activep").next().slideToggle("slow");
	return false;
});
});