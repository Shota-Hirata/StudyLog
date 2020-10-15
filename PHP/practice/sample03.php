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
// ↓どこのタイムゾーンを採用するか
date_default_timezone_set('Asia/Tokyo');
// G:時(24時間)
// i:分
// s:秒
// l:曜日
print('現在は' .date('G時 i分 s秒'). 'です');
// "."を使うことで文字列の連結ができる
?>
</pre>
</main>
</body>
</html>