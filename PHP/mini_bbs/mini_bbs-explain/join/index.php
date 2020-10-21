<?php

	// セッションを適用
	session_start();

	// データベースと接続
	require('../dbconnect.php');


		// 画面が呼び出された直後じゃなかったとき
	if (!empty($_POST)){
		// nameの部分が空白なら
		if ($_POST['name'] === '') {
			// 変数にblankを代入
		$error['name'] = 'blank';
		}
			// emailの部分が空白なら
		if ($_POST['email'] === '') {
			// 変数にblankを代入
			$error['email'] = 'blank';
		}
			// passwordの部分が4文字以下なら
		if (strlen($_POST['password']) < 4) {
			// 変数にlengthを代入
			$error['password'] = 'length';
		}
			// passwordの部分が空白なら
		if ($_POST['password'] === '') {
			// 変数にblankを代入
			$error['password'] = 'blank';
		}
		// アップロードされた画像を変数に代入
		$fileName =$_FILES['image']['name'];
		// 画像がアップロードされていたら
		if (!empty($fileName)){
			// ファイルの拡張子を取得
			$ext = substr($fileName, -3);
			// 拡張子が.jpg、gif、png以外なら
			if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png'){
				// 変数にtypeを代入
				$error['image'] = 'type';
			}
		}

		// アカウントの重複をチェック
			// エラーが何もなかったら
		if (empty($error)){
				// SQLの型を準備　　　　　　　　　送られたemailがデータベースに何件あるかを表示
			$member = $db->prepare('SELECT COUNT(*) AS cnt FROM members WHERE email=?');
				// emailを代入
			$member->execute(array($_POST['email']));
				// データを取り出す
			$record = $member->fetch();
				// 取り出した値が1以上なら(既にそのメールアドレスが登録されていたら)
			if ($record['cnt'] > 0){
				// 変数にduplicateを代入
				$error['email'] = 'duplicate';
			}
		}
			// エラーが何もなかったら
		if (empty($error)){
						// 日付　　　　　　　　画像の名前　同じ画像をアップロードした時に上書きされるのを防ぐため
			$image = date('YmdHis') .$_FILES['image']['name'];
			// ファイルを正式にアップロード　　一時的に保管している場所　　　　　　　正式に保管する場所
			move_uploaded_file($_FILES['image']['tmp_name'], '../member_picture/' . $image);
			// セッションに値を代入
			$_SESSION['join'] = $_POST;
			// セッションに画像を保管
			$_SESSION['join']['image'] = $image;
				// check.phpに遷移
			header('Location: check.php');
			exit();
		}
	}
			// URLにrewriteがあったら　　　　かつ　　　セッションが正しく機能していたら
	if ($_REQUEST['action'] == 'rewrite' && isset($_SESSION['join'])){
		// 先ほど送った値をフォームに代入
		$_POST = $_SESSION['join'];
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
<p>次のフォームに必要事項をご記入ください。</p>
<!-- 　↓遷移先を指定していないのでこの画面でエラーなどをチェック	↓写真をアップロードする際に必要な決まり文句 -->
<form action="" method="post" enctype="multipart/form-data">
	<dl>
		<dt>ニックネーム<span class="required">必須</span></dt>
		<dd>
																	<!-- 入力した値を表示。他の部分でエラーが出ても正しく入力した部分は維持される -->
        	<input type="text" name="name" size="35" maxlength="255" value="<?php print(htmlspecialchars($_POST['name'], ENT_QUOTES));?>" />
        		<!-- 変数にblankが代入されていたら -->
        	<?php if ($error['name'] === 'blank'): ?>
        		<!-- エラーメッセージを表示 -->
        		<p class="error">*ニックネームを入力してください</p>
        	<?php endif; ?>
		</dd>
		<dt>メールアドレス<span class="required">必須</span></dt>
		<dd>
																	<!-- 入力した値を表示。他の部分でエラーが出ても正しく入力した部分は維持される -->
        	<input type="text" name="email" size="35" maxlength="255" value="<?php print(htmlspecialchars($_POST['email'], ENT_QUOTES));?>" />
        		<!-- 変数にblankが代入されていたら -->
        	<?php if ($error['email'] === 'blank'): ?>
        		<!-- エラーメッセージを表示 -->
        		<p class="error">*メールアドレスを入力してください</p>
        	<?php endif; ?>
        		<!-- 変数にduplicateが代入されていたら -->
        	<?php if ($error['email'] === 'duplicate'): ?>
        		<!-- エラーメッセージを表示 -->
        		<p class="error">*指定されたメールアドレスは既に登録されています</p>
        	<?php endif; ?>
        </dd>
		<dt>パスワード<span class="required">必須</span></dt>
		<dd>
																			<!-- 入力した値を表示。他の部分でエラーが出ても正しく入力した部分は維持される -->
        	<input type="password" name="password" size="10" maxlength="20" value="<?php print(htmlspecialchars($_POST['password'], ENT_QUOTES));?>" />
        		<!-- 変数にlengthが代入されていたら -->
        	<?php if ($error['password'] === 'length'): ?>
        		<!-- エラーメッセージを表示 -->
        		<p class="error">*パスワードは4文字以上で入力してください</p>
        	<?php endif; ?>
        		<!-- 変数にblankが代入されていたら -->
        	<?php if ($error['password'] === 'blank'): ?>
        		<!-- エラーメッセージを表示 -->
        		<p class="error">*パスワードを入力してください</p>
        	<?php endif; ?>
        </dd>
		<dt>写真など</dt>
		<dd>
        	<input type="file" name="image" size="35" value="test"  />
        	<!-- 変数にtypeが代入されていたら -->
        	<?php if ($error['image'] === 'type'): ?>
        		<!-- エラーメッセージを表示 -->
        		<p class="error">*写真などは「.gif」または「.jpg」「.png」の画像を指定してください</p>
        	<?php endif; ?>
        	<!-- 画像は正しくアップロードされているが他のところでエラーが一つでもあれば -->
        	<?php if (!empty($error)): ?>
        		<p class="error">*恐れ入りますが、画像を改めて指定してください</p>
        	<?php endif; ?>
        </dd>
	</dl>
	<div><input type="submit" value="入力内容を確認する" /></div>
</form>
</div>
</body>
</html>
