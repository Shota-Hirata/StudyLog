$(function(){

	var num = Math.floor( Math.random() * 399 )

	for (var i = 0; i <= 399; i++) {

		if(num == i){
			$('<img>').attr({
			src: '../img/wi.png',
			id: i,
			class: 'answer'
		}).appendTo('.quiz');
		}else{
			$('<img>').attr({
			src: '../img/me.png',
			id: i,
			class: 'fails'
		}).appendTo('.quiz');
		}
	}

});