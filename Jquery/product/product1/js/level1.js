$(function(){

	var num = Math.floor( Math.random() * 4 )

	for (var i = 0; i <= 3; i++) {

		if(num == i){
			$("#" + i).attr('src', '../img/ha.png').attr('class', 'answer');
		}else{
			$("#" + i).attr('src', '../img/ke.png');
		}
	}

});