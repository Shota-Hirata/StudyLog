<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php
	require('dbconnect.php');
							// ユーザーが入力する値をあらかじめ準備する。ここでユーザーが入れる値は?にしておく(""はいらない)
		$statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
																// NOW()・・・今の時刻
		// executeの中に受け取られる値を入れる
		$statement->execute(array($_POST['memo']));
									// formの中のnameに入れたもの
		echo 'メッセージが登録されました';

		// 安全な値が送られる場合はexecでもいいが、formからの送信はprepareで準備してexecuteで受け取る方がいい

		// $statement->execute(array($_POST['memo']))の代わりに
		// $statement->bindParam(x,受け取る値);・・・?のx番目に第二引数を受けとる
		// $statement->execute();
		// でもOK

?>
</pre>
</main>
</body>
</html>