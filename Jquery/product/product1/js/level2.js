$(function(){

	var num = Math.floor( Math.random() * 24 )

	for (var i = 0; i <= 24; i++) {

		if(num == i){
			$('<img>').attr({
			src: '../img/me.png',
			id: i,
			class: 'answer'
		}).appendTo('.quiz');
		}else{
			$('<img>').attr({
			src: '../img/nu.png',
			id: i
		}).appendTo('.quiz');
		}
	}

});