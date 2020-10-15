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
	// $week_name = array('日','月','火','水','木','金','土');の書き方もアリ
	$week_name = ['日','月','火','水','木','金','土'];
	// ↓今日の日付を数字で返す
	date('w');
	print($week_name[date('w')]);
?>
</pre>
</main>
</body>
</html>