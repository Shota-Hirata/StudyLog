$(function(){

	var num = Math.floor( Math.random() * 4999 )

	for (var i = 0; i <= 4999; i++) {

		if(num == i){
			$('<a>',{
			id: i,
			class: 'answer',
			text: 'あ'
		}).appendTo('.quiz');
		}else{
			$('<a>',{
			id: i,
			class: 'fails',
			text: 'お'
		}).appendTo('.quiz');
		}
	}

	$('.answer').click(function(){
		$(this).text('〇').css('color', 'red');
		$('.modal').fadeIn();
		$('#success').show();
	});

	var fails = 0;

	$('.fails').click(function(){
		$(this).text('✕').attr('class', 'false').css('color', 'red');
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
		$('.answer').css('color', 'red');
	});

});