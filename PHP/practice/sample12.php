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
		// %0xd・・・x桁で表示させて足りない部分は0で補う
	 // % xd・・・x桁で表示させて足りない部分は半角で補う
	// dは数字であることを示している
	// 文字を表示したいときはdではなくsにする
	// パラメーターの数は%の数に合わせる
$date = sprintf('%04d年 %02d月 %02d日', 2020, 2, 1);
	print($date);
?>
</pre>
</main>
</body>
</html>