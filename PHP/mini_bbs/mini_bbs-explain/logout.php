<?php

	// セッション適用
  session_start();

  // 空の配列で上書き
$_SESSION = array();

		// クッキーの情報を削除するための決まり文句
if (ini_set('session.use_cookies')){
			// クッキーの情報を取得
	$params = session_get_cookie_params();
					// クッキーの有効期限を削除する
	setcookie(session_name() . '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}

	// セッションを削除
session_destroy();
	// クッキーに保存されているメールアドレスの値を削除
setcookie('email', '', time()-3600);

		// login.phpに遷移
header('Location: login.php');
exit();
 ?>