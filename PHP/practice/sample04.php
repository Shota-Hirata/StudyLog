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
date_default_timezone_set('Asia/Tokyo');
				// ↓DateTimeオブジェクト。中にいろんな関数が詰まっていてそれを一つにまとめたもの
$today = new DateTime();
// オブジェクト・・・printファンクションのように単体の動きをするものではなくオブジェクトの中に様々なメゾットと呼ばれるファンクションのようなものが入っている。そこでまとまった処理をしている

print($today->format('G時 i分 s秒'));
?>
</pre>
</main>
</body>
</html>