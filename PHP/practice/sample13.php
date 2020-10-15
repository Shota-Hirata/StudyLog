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
				// ↓書きこむファイルのパスを指定
$success = file_put_contents('../../news_data/news.txt', '2020-02-02 ホームページをリニューアルしました');
	// 第二引数に書き込む内容を入れる

if($success){
	print('ファイルへの書き込みが完了しました');
}else{
	print('書き込みに失敗しました');
}
?>
</pre>
</main>
</body>
</html>