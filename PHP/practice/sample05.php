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
// 変数は最初は"$"で始める必要がある
// 〇：$aaa(英単語) $abc_123(英語とアンダーバー) $合計(日本語)
// ✕：　$"#(記号) $my name(空白) $123abc(先頭が数字)
// 大文字、小文字は違う変数として区別される
// 基本的に変数は小文字で書く
	$sum = 124+3134+163;
	// ""で変数を囲ったら変数の中身が表示される
?>
合計金額は
<?php
print($sum);
?>
です
<br>
税込価格は
<?php
print($sum*1.1);
?>
です。

</pre>
</main>
</body>
</html>