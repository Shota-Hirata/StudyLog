<!-- カッコの中のファイルを読み込む -->
<?php require('dbconnect.php'); ?>
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

<?php

	// 引数に値が指定されているか　かつ　　引数が数字の時
if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
	// $idに受け取った値を代入
	$id = $_REQUEST['id'];
	// $memosにdbconnect.phpの中にある$dbの型を代入
	$memos = $db->prepare('SELECT * FROM memos WHERE id=?');
	// executeでidを入れて表示
	$memos->execute(array($id));
	// $memosからデータを取得
	$memo = $memos->fetch();
	}
 ?>
<form action="update_do.php" method="post" >
	<!-- idを隠して送る -->
	<input type="hidden" name="id" value="<?php print($id); ?>">
	<textarea name="memo" cols="50" rows="10"><?php print($memo['memo']); ?></textarea><br>
	<!-- 既に入っているデータを表示させる -->
	<button type="submit">登録する</button>
</form>
</main>
</body>
</html>