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
<!-- ここにプログラムを記述します -->
<?php

	// カッコの中のファイルを読み込む
	require('dbconnect.php');

		// $idに受け取った値を代入
	$id = $_REQUEST['id'];
		// $idが数字　かつ　0以下
	if(!is_numeric($id) || $id<= 0){
		print("1以上の数字で指定してください");
		exit();
	}
	// is_numeric・・・・引数が数字かどうかを判別

	// $memosにdbconnect.phpの中にある$dbの型を代入
	$memos = $db->prepare('SELECT * FROM memos WHERE id=?');
		// executeでidを入れて表示
	$memos->execute(array($id));
	// $memosからデータを取得
	$memo = $memos->fetch();

?>

<article>
			<!-- メモの内容を表示 -->
	<pre><?php print($memo['memo']); ?></pre>
	<a href="update.php?id=<?php print($memo['id']) ?>">編集する</a>|
	<a href="delete.php?id=<?php print($memo['id']); ?>">削除する</a>|
	<a href="index.php">戻る</a>
</article>

</main>
</body>
</html>