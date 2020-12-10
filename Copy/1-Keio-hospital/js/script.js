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
	        if($('.cov').hasClass('cov-on')){
	        	$('.cov').removeClass('cov-on');
	        }else{
	        	$('.cov').addClass('cov-on');
	        };
	    });
	} else {
		$('.nav-1').hover(
			function(){
			$('.tab2').fadeOut(100);
			$('.tab3').fadeOut(100);
			$('.tab1').slideDown(250);
		  },function(){
		  	$('.tab1').hover(
		  		function(){
		  		},function(){
		  			$(this).fadeOut(100);
		  		});
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
	        if($('.cov').hasClass('cov-on')){
	        	$('.cov').removeClass('cov-on');
	        }else{
	        	$('.cov').addClass('cov-on');
	        };
	    });
	} else {
		$('.nav-2').hover(
			function(){
			$('.tab1').fadeOut(100);
			$('.tab3').fadeOut(100);
			$('.tab2').slideDown(250);
		  },function(){
		  	$('.tab2').hover(
		  		function(){
		  		},function(){
		  			$(this).fadeOut(100);
		  		});
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
	        if($('.cov').hasClass('cov-on')){
	        	$('.cov').removeClass('cov-on');
	        }else{
	        	$('.cov').addClass('cov-on');
	        };
	    });
	} else {
		$('.nav-3').hover(
			function(){
			$('.tab1').fadeOut(100);
			$('.tab2').fadeOut(100);
			$('.tab3').slideDown(250);
		  },function(){
		  	$('.tab3').hover(
		  		function(){
		  		},function(){
		  			$(this).fadeOut(100);
		  		});
		});
	};


	if (jQuery(window).width() < 768) {
		$('.info1').click(
			function(){
			$('.info-content-res-1').toggleClass('qq-a');
		});
	} else {
		$('.info1').click(function(){
			$(this).addClass('click');
			$('.info2').removeClass('click');
			$('.info3').removeClass('click');
			$('.info-content1').css('display','block');
			$('.info-content2').css('display','none');
			$('.info-content3').css('display','none');
		});
	};

	if (jQuery(window).width() < 768) {
		$('.info2').click(
			function(){
			$('.info-content-res-2').toggleClass('qq-a');
		});
	} else {
		$('.info2').click(function(){
			$(this).addClass('click');
			$('.info1').removeClass('click');
			$('.info3').removeClass('click');
			$('.info-content2').css('display','block');
			$('.info-content1').css('display','none');
			$('.info-content3').css('display','none');
		});
	};

	if (jQuery(window).width() < 768) {
		$('.info3').click(
			function(){
			$('.info-content-res-3').toggleClass('qq-a');
		});
	} else {
		$('.info3').click(function(){
			$(this).addClass('click');
			$('.info1').removeClass('click');
			$('.info2').removeClass('click');
			$('.info-content3').css('display','block');
			$('.info-content1').css('display','none');
			$('.info-content2').css('display','none');
		});
	};

	if (jQuery(window).width() < 768) {
		$('.slider').slick({
		    autoplay:true,
		    autoplaySpeed:5000,
		    dots:false,
		    slidesToShow:1,
	    	slidesToScroll:1
		});
	} else {
		$('.slider').slick({
		    autoplay:true,
		    autoplaySpeed:5000,
		    dots:false,
		    slidesToShow:4,
	    	slidesToScroll:1
		});
	};

	$('.prev').on('click',function(){
	    $('.slider').slick('slickNext');
	});

	$('.next').on('click',function(){
	    $('.slider').slick('slickPrev');
	});

});