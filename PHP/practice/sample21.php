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
	$zip = '２４５－１２５４';

	$zip = mb_convert_kana($zip, 'a', 'UTF-8');
	if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip))
		// ↑正規表現でマッチするか
		// \A・・・文章の最初である
		// d{3}・・・数字が3つ
		// [-]・・・"-"が入る
		// d{4}・・・数字が4つ
		// \z・・・文章の最後である
	{
		print('郵便番号：〒' . $zip);
	}else{
		print('※　郵便番号を123-4567の形式でご記入ください');
	}
?>
</pre>
</main>
</body>
</html>