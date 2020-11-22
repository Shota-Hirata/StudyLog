$(function(){

	$('.nav-1').hover(
		function(){
		$('.tab1').slideDown(250);
		$('.tab1').css('.global-nav>ul>li>a>p:after', 'rotate(225deg)');
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

	$('.info1').click(function(){
		$(this).addClass('click');
		$('.info2').removeClass('click');
		$('.info3').removeClass('click');
		$('.info-content1').css('display','block');
		$('.info-content2').css('display','none');
		$('.info-content3').css('display','none');
	});

	$('.info2').click(function(){
		$(this).addClass('click');
		$('.info1').removeClass('click');
		$('.info3').removeClass('click');
		$('.info-content2').css('display','block');
		$('.info-content1').css('display','none');
		$('.info-content3').css('display','none');
	});

	$('.info3').click(function(){
		$(this).addClass('click');
		$('.info1').removeClass('click');
		$('.info2').removeClass('click');
		$('.info-content3').css('display','block');
		$('.info-content1').css('display','none');
		$('.info-content2').css('display','none');
	});

});