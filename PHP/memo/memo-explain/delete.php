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

	// カッコの中のファイルを読み込む
	require('dbconnect.php');

		// 引数に値が指定されているか　かつ　　引数が数字の時
	if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
			// $idに送られてきた値を代入
		$id = $_REQUEST['id'];
			// prepareで準備
		$statement = $db->prepare('DELETE FROM memos WHERE id=?');
			// executeで代入
		$statement->execute(array($id));
	}
?>
<p>メモを削除しました</p>
</pre>
<p><a href="index.php">戻る</a></p>
</main>
</body>
</html>