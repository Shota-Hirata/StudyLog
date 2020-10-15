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
			// 読み込むファイルのパスを指定
$news = file_get_contents('../../news_data/news.txt');
	// readfile()なら読み込んで表示までしてくれる
$news ="2018-06-09 またもやニュースを追加しました\n" . $news;
file_put_contents('../../news_data/news.txt', $news);
print($news);

// $a.="bbb"・・・文字列の追加方法
// $a . "bbb"と同じ
?>
</pre>
</main>
</body>
</html>