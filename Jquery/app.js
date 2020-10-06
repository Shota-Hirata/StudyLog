$(function(){

	//要素を隠す。
	$('#hide').hide();

	//隠していた要素を出現させる
	$('#show').show();

	//要素をフェードアウトさせる。()で速さをミリ秒や文字(slowなど)で指定することが可能
	$('#fadeOut').fadeOut(1500);

	//要素をフェードインさせる
	$('#fadeIn').fadeIn('slow');

	//要素をスライドして隠す
	$('#slideUp').slideUp(2000);

	//要素をスライドして出現させる
	$('#slideDown').slideDown('fast');

	//クリックしたら以下コードが作動
	$('#click').click(function(){
		//クリック時の動き
		$('#kiemasu').fadeOut('2500');
	});

	//
	$('#click2').click(function(){
		//CSSを変更する
		$('#CSS').css('color','red');
	});

	//
	$('#click3').click(function(){
		//文章を変更する
		$('#text').text('changed');
	});

	//
	$('#click4').click(function(){
		//HTMLを変更する
		$('#HTML').html('<a href="#">anchor</a>');
	});

	//セレクタをクリックすると
	$('.this').click(function(){
		//クリックされたものにコードが実行される
		$(this).css('color','pink');
	});

	//変数に代入してコードを短縮化して実行を高速化させる
	var $short = $('.short');

	//カーソルをその要素の上に置いたら
	$short.hover(function(){
		$short.fadeOut(3000);
	});

	//"."で繋げたら一気にコードを実行させることができる
	$('.wow').click(function(){
		$(this).css('font-size','70px').html('<a href=#>woooow</a>').fadeOut(2000);
	});

		//セレクタの子要素(階層全て)の指定した要素を変更する
		$('#find').find('h1').css('color','purple');

		//セレクタの子要素(1階層下のみ)の指定した要素を変更する
		$('#children').children('h1').css('color','red');

		//カーソルをその要素の上に置いたら
	$('#cursor').hover(
		//置いた時の実行内容
		function(){
			$('.cursor').fadeIn(2000);
		},
		//外したときの実行内容
		function(){
			$('.cursor').fadeOut(2000);
	});
		//必ずfunction同士は","で区切ること！
});