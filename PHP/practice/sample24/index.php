<?php
	$value = '変数に保存した値です';
	// ↓クッキーの設定
	setcookie('save_message', 'Cookieに保存した値です', time() + 60 * 60 * 24 * 14);
	// 三番目のパラメーターにいつまで情報を保持しておきたいかを入力する
	// クッキーは有効期限内であればブラウザを閉じても情報は保存される
	クッキーはブラウザで情報が保存される
?>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

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
 <a href="page02.php">Page02へ</a>
</pre>
</main>
</body>
</html>