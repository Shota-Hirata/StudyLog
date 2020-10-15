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
// XML・・・HTMLの上位互換
				// ↓XMLのファイルをダウンロード
$xmlTree = simplexml_load_file('https://h2o-space.com/feed/');
foreach ($xmlTree -> channel -> item as $item):
		// ダウンロードしたファイルのchannelの中のitem
?>
・<a href="<?php print($item -> link); ?>"><?php
 print($item->title);
?></a>
<?php
endforeach;
?>
</pre>
</main>
</body>
</html>