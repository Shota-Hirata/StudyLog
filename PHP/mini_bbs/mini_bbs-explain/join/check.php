<?php
	// セッション適用
	session_start();

	// データベースに接続
	require('../dbconnect.php');

	// 送られてきたセッションに値が代入されていなかったら
	if(!isset($_SESSION['join'])){
		// index.phpに遷移
		header('Location: index.php');
		exit();
	}

		// 送られてきた値が空じゃなかったら
	if (!empty($_POST)){
				// SQLの型を準備
		$statement = $db->prepare('INSERT INTO members SET name=?, email=?, password=?, picture=?, created=NOW()');
				// 実際に送られてきた値を代入
		echo $statement->execute(array(
				// 名前
			$_SESSION['join']['name'],
				// メールアドレス
			$_SESSION['join']['email'],
				// 暗号化したパスワード
			sha1($_SESSION['join']['password']),
				// 画像
			$_SESSION['join']['image']
		));
			// フォームの中を空にする
		unset($_SESSION['join']);
			// thanks.phpに遷移
	header('Location: thanks.php');
	exit();
	}
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>会員登録</title>

	<link rel="stylesheet" href="../style.css" />
</head>
<body>
<div id="wrap">
<div id="head">
<h1>会員登録</h1>
</div>

<div id="content">
<p>記入した内容を確認して、「登録する」ボタンをクリックしてください</p>
<form action="" method="post">
	<!-- データを送信していることを隠して送っている -->
	<input type="hidden" name="action" value="submit" />
	<dl>
		<dt>ニックネーム</dt>
		<dd>
			<!-- $_SESSION['join']に対して$_POSTを入れているのでnameを表示させたかったら$_SESSION['join']['name']といった二次元配列にする必要がある -->
			<!-- セッションで送られてきた値を表示 -->
			<?php print(htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES)); ?>
        </dd>
		<dt>メールアドレス</dt>
		<dd>
			<!-- セッションで送られてきた値を表示 -->
			<?php print(htmlspecialchars($_SESSION['join']['email'], ENT_QUOTES)); ?>
        </dd>
		<dt>パスワード</dt>
		<dd>
		<!-- 安全性確保のため -->
		【表示されません】
		</dd>
		<dt>写真など</dt>
		<dd>
				<!-- 画像がアップロードされていたら -->
			<?php if ($_SESSION['join']['image'] !== ''): ?>
						<!-- 保存された画像を表示 -->
				<img src="../member_picture/<?php print(htmlspecialchars($_SESSION['join']['image'], ENT_QUOTES)); ?>" width=100px heigth=100px>
			<?php endif; ?>
		</dd>
	</dl>
	<div><a href="index.php?action=rewrite">&laquo;&nbsp;書き直す</a> | <input type="submit" value="登録する" /></div>
</form>
</div>

</div>
</body>
</html>
