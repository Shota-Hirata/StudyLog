$(function(){

	$('.answer').click(function(){
		$(this).attr('src', '../img/circle.jpeg');
		$('.modal').fadeIn();
		$('#success').show();
	});

	var fails = 0;

	$('img').not('.answer').click(function(){
		$(this).attr('src', '../img/x.png').attr('class', 'false');
		fails++;
		if (fails >= 3){
			$('.modal').fadeIn();
			$('#failure').show();
		}
	});

	$('#hint').click(function(){
		$('.answer').fadeOut(3000).fadeIn(3000);
	});

	$('#cheat').click(function(){
		$('.fails').fadeTo(3000, 0.3);
	});



});