<?php

  // セッション適用
  session_start();

  // データベースと接続
  require('dbconnect.php');

        // 送られてきたURLパラメーターが空なら
  if (empty($_REQUEST['id'])){
      // index.phpに遷移
    header('Location: index.php');
    exit();
  }

    // SQLの型を準備　　　　送られてきた投稿を取得
  $posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=?');
    // URLパラメーターからの値を代入
  $posts->execute(array($_REQUEST['id']));
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ひとこと掲示板</title>

	<link rel="stylesheet" href="style.css" />
</head>

<body>
<div id="wrap">
  <div id="head">
    <h1>ひとこと掲示板</h1>
  </div>
  <div id="content">
  <p>&laquo;<a href="index.php">一覧にもどる</a></p>

          <!-- 変数に値が代入出来たら(データベースから値が取得出来たら) -->
<?php if ($post = $posts->fetch()): ?>
    <div class="msg">
                      <!-- 投稿者の画像 -->
    <img src="member_picture/<?php print(htmlspecialchars($post['picture'])); ?>" width=100px height=100px/>
          <!-- 投稿メッセージ -->
    <p><?php print(htmlspecialchars($post['message'])); ?><span class="name">
                <!-- 投稿者の名前 -->
      （<?php print(htmlspecialchars($post['name'])); ?>）</span></p>
                  <!-- 投稿作成日時 -->
    <p class="day"><?php print(htmlspecialchars($post['created'])); ?></p>
    </div>
<?php else: ?>
	<p>その投稿は削除されたか、URLが間違えています</p>
<?php endif; ?>
  </div>
</div>
</body>
</html>
