$(function(){

	$('.nav-1').hover(
		function(){
		$('.tab1').slideDown(250);
	  },function(){
	  	$('.tab1').fadeOut(100);
	});

	$('.nav-2').hover(
		function(){
		$('.tab2').slideDown(250);
	  },function(){
	  	$('.tab2').fadeOut(100);
	});

	$('.nav-3').hover(
		function(){
		$('.tab3').slideDown(250);
	  },function(){
	  	$('.tab3').fadeOut(100);
	});
});