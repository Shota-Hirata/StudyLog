$(function(){

	$(".nav-p").on("click", function() {
	    $(this).toggleClass('nav-pp');
	});

	if (jQuery(window).width() < 768) {
		$(".nav-1").on("click", function() {
			$(this).toggleClass('nav-pp');
			$('.nav-2 .nav-p').removeClass('nav-pp');
			$('.nav-3 .nav-p').removeClass('nav-pp');
			$('.tab2').slideUp(10);
	        $('.tab3').slideUp(10);
	        $('.tab1').slideToggle();
	    });
	} else {
		$('.nav-1').hover(
			function(){
			$('.tab1').slideDown(250);
		  },function(){
		  	$('.tab1').fadeOut(100);
		});
	};

	if (jQuery(window).width() < 768) {
		$(".nav-2").on("click", function() {
			$(this).toggleClass('nav-pp');
			$('.nav-1 .nav-p').removeClass('nav-pp');
			$('.nav-3 .nav-p').removeClass('nav-pp');
			$('.tab1').slideUp(10);
	        $('.tab3').slideUp(10);
	        $('.tab2').slideToggle();
	    });
	} else {
		$('.nav-2').hover(
			function(){
			$('.tab2').slideDown(250);
		  },function(){
		  	$('.tab2').fadeOut(100);
		});
	};

	if (jQuery(window).width() < 768) {
		$(".nav-3").on("click", function() {
			$(this).toggleClass('nav-pp');
			$('.nav-1 .nav-p').removeClass('nav-pp');
			$('.nav-2 .nav-p').removeClass('nav-pp');
			$('.tab1').slideUp(10);
	        $('.tab2').slideUp(10);
	        $('.tab3').slideToggle();
	    });
	} else {
		$('.nav-3').hover(
			function(){
			$('.tab3').slideDown(250);
		  },function(){
		  	$('.tab3').fadeOut(100);
		});
	};


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