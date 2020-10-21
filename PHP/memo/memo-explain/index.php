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
<!-- ここにプログラムを記述します -->
<?php

	// カッコの中のファイルを読み込む
	// データ関連のコードを一つにまとめておくことで修正の手間が省ける
	require('dbconnect.php');

	// 引数に値が指定されているか　かつ　　引数が数字の時
	if(isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])){
				// 送られたページを表示する
		$page = $_REQUEST['page'];
	}else{
		$page = 1;
		// それ以外は1ページ目を表示する
	}

	$start = 5 * ($page - 1);
	// 5件ごとにページをまとめる

				// ?番目から5件のデータを取得する
	$memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?, 5');
					// 1つ目,$startページ目,データ型
	$memos->bindParam(1, $start, PDO::PARAM_INT);
		// 出力
	$memos->execute();
	// executeはデータ型を指定できない
?>
<article>
			<!-- 取り出せるメモがあったら -->
	<?php while ($memo = $memos->fetch()): ?>
					<!--  リンク											メモの0文字目から50文字を表示する -->
		<p><a href="memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'], 0 ,50)); ?></a></p>
				<!-- 投稿時間 -->
		<time><?php print($memo['created_at']); ?></time>
		<!-- mb_substr(元となる文字列,開始位置,文字数); -->
		<hr>
	<?php endwhile; ?>
	<!-- 2ページ目以上の時 -->
	<?php if ($page >= 2): ?>
	<a href="index.php?page=<?php print($page-1); ?>"><?php print($page-1); ?>ページ目へ</a>
	<!-- 前のページを出力 -->
<?php endif; ?>
	|
	<?php
		// データの件数を取得
		$counts = $db->query('SELECT COUNT(*) as cnt FROM memos');

			// $countに$countから取り出したデータを代入
		$count = $counts->fetch();
		// 全件数を5で割って小数は切る上げる
		$max_page = ceil($count['cnt'] / 5);
			// ページ数が最大ページ数より少なかったら
		if ($page < $max_page):
	 ?>
	<a href="index.php?page=<?php print($page+1); ?>"><?php print($page+1); ?>ページ目へ</a>
	<!-- 次のページを出力 -->
	<?php endif; ?>

	<!-- exec・・・SQL発行時のコード。戻り値に影響を与えたレコードの数を返す -->
	<!-- query・・・SQL発行時のコード。戻り値に影響を与えたレコードの中身を返す -->
	<!-- fetch・・・データを一つ取得する -->
</article>
</main>
</body>
</html>