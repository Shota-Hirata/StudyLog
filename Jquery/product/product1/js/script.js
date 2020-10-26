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

	$('#cheat').click(function(){
		$('img').not('.answer').fadeOut(3000);
	});



});