$(function(){

	var num = Math.floor( Math.random() * 4 )

	for (var i = 0; i <= 3; i++) {

		if(num == i){
			$('<img>').attr({
			src: '../img/ke.png',
			id: i,
			class: 'answer'
		}).appendTo('.quiz');
		}else{
			$('<img>').attr({
			src: '../img/ha.png',
			id: i,
			class: 'fails'
		}).appendTo('.quiz');
		}
	}

});