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
						<!-- ↓HTMLのタグを無効にさせる -->
	お名前：<?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?>
				<!-- ↑フォームのinputのname属性を入れる -->
		<!-- $_REQUESTならmethodがgetでもpostでも受け取れる。しかしあまり使わない方がいい -->
</pre>
</main>
</body>
</html>