$(function(){

	var num = Math.floor( Math.random() * 99 )

	for (var i = 0; i <= 99; i++) {

		if(num == i){
			$('<img>').attr({
			src: '../img/ro.png',
			id: i,
			class: 'answer'
		}).appendTo('.quiz');
		}else{
			$('<img>').attr({
			src: '../img/ru.png',
			id: i,
			class: 'fails'
		}).appendTo('.quiz');
		}
	}

});