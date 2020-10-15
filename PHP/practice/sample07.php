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
for ($i=0; $i <=365; $i++) :
			// ↓文字列で指定したものをタイムスタンプに変換するファンクション
	$date =strtotime('+' . $i . 'day');
			// ↓現在の日時を出力
	print (date('n/j(D)',$date));
							↑第二引数でタイムスタンプを指定
	print("\n");
endfor;


?>
</pre>
</main>
</body>
</html>