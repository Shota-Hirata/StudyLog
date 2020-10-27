$(function(){

	var num = Math.floor( Math.random() * 899 )

	for (var i = 0; i <= 899; i++) {

		if(num == i){
			$('<img>').attr({
			src: '../img/e.png',
			id: i,
			class: 'answer'
		}).appendTo('.quiz');
		}else{
			$('<img>').attr({
			src: '../img/ea.png',
			id: i,
			class: 'fails'
		}).appendTo('.quiz');
		}
	}

});