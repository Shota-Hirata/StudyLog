<?php

	// エラーが発生しなかったらtryの中の処理を行う
	try{
		// PDOはPHPでデータを扱うためのオブジェクト
		// host=127.0.0.1は自分のIPアドレスを指す
	$db = new PDO ('mysql:dbname=mydb;host=127.0.0.1;port=8889;charset=utf8', 'root', 'root');
	// エラーが発生した時の処理をcatch内に書く
} catch(PDOException $e) {
	// エラー内容を$eで受け取ってgetMessage()でエラー内容を表示させる
	echo 'DB接続エラー:' . $e->getMessage();
}

 ?>