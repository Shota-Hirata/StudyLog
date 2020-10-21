<?php

  // セッション適用
  session_start();

  // データベースと接続
  require('dbconnect.php');

      // セッションidがセットされていれば
  if (isset($_SESSION['id'])){
      // 変数に送られてきたidを代入
  	$id = $_REQUEST['id'];
        // SQLの型を準備　　　　　　投稿のidを取得
  	$messages = $db->prepare('SELECT * FROM posts WHERE id=?');
          // 送られてきたidを入れる
  	$messages->execute(array($id));
          // 代入された値を取得
  	$message = $messages->fetch();
              // 投稿者のidがセッションのidと同じなら
  	if ($message['member_id'] == $_SESSION['id']){
      // SQLの型を準備　　　　データを削除
  		$del = $db->prepare('DELETE FROM posts WHERE id=?');
      // 値を代入
  		$del->execute(array($id));
  	}
  }
      // index.phpに遷移
  header('Location: index.php');
  exit();
 ?>