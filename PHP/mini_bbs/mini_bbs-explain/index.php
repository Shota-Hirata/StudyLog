<?php

  // セッション適用
  session_start();

  // データベースと接続
  require('dbconnect.php');
      // セッションの値が代入されている　　　かつ　　　　1時間何もしていなかったら
  if (isset($_SESSION['id']) && $_SESSION['time'] +3600 > time()){
      // セッションの時間を上書き
    $_SESSION['time'] = time();
      // SQLの型を準備　　　　　　　　ユーザーのidを取得
    $members = $db->prepare('SELECT * FROM members WHERE id=?');
        // idを入れる
    $members->execute(array($_SESSION['id']));
      // 変数に取り出した値を代入
    $member = $members->fetch();
  } else {
    // ログイン画面に遷移
    header('Location: login.php');
    exit();
  }

      // 投稿ボタンが押されたら
  if (!empty($_POST)){
        // メッセージのフォームが空じゃなかったら
    if ($_POST['message'] !== ''){
          // 返信先が指定されていなかったら
      if (!isset($_REQUEST['res'])){
            // 返信先のカラムidは0を代入
        $_POST['reply_post_id'] = 0;
      }
        // SQLの型を準備　　　　　新規投稿
      $message = $db->prepare('INSERT INTO posts SET member_id=?, message=?, reply_message_id=?, created=NOW()');
        // 送られた値を代入
      $message->execute(array(
          // ユーザーid
        $member['id'],
          // メッセージ
        $_POST['message'],
          // 返信先の投稿id
        $_POST['reply_post_id']
      ));

        // index.phpに遷移
      header('Location: index.php');
      exit();
    }
  }

        // 送られてきた値を代入
  $page = $_REQUEST['page'];
      // 変数が空なら
  if ($page ==''){
      // ページを1にする
    $page = 1;
  }
      // 1以下のページがないことを指定
  $page =max($page, 1);

      // 投稿の件数を取得して変数に代入
  $counts = $db->query('SELECT COUNT(*) AS cnt FROM posts');
      // 代入された値を取り出す
  $cnt = $counts->fetch();
    // 投稿件数を5で割って小数点以下は切り上げる
  $maxPage = ceil($cnt['cnt'] / 5);
  // 最大ページ数より大きいページはないことを指定
  $page = min($page, $maxPage);

      // ページ数の計算
  $start = ($page - 1) * 5;

        // 投稿一覧を取得　　　　　?から5件を取得
  $posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id ORDER BY p.created DESC LIMIT ?,5');
                // ページ数を代入　数字を入れる必要があるのでPDO::PARAM_INTを指定したbindParamを使う
  $posts->bindParam(1, $start, PDO::PARAM_INT);
    // 値を代入
  $posts->execute();

        // Reのリンクが押された時
  if (isset($_REQUEST['res'])){
      // SQLの型を準備　　　　　   返信先の投稿者のユーザーidを取得
    $response = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=?');
        // 送られた値を代入
    $response->execute(array($_REQUEST['res']));
      // 代入されたものを取得して新たな変数に代入
    $table = $response->fetch();
  // 変数に　　　@     返信先の投稿者のユーザー　　　　返信先の投稿　を代入
    $message = '@' . $table['name'] . ' ' . $table['message'];
  }
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
  	<div style="text-align: right"><a href="logout.php">ログアウト</a></div>
    <form action="" method="post">
      <dl>
                             <!-- ログインしている人の名前 -->
        <dt><?php print(htmlspecialchars($member['name'], ENT_QUOTES)); ?>さん、メッセージをどうぞ</dt>
        <dd>
                        <!-- 返信する場合返信先の宛先を代入 -->
          <textarea name="message" cols="50" rows="5"><?php print(htmlspecialchars($message, ENT_QUOTES)); ?></textarea>
                    <!-- どのメッセージへの返信かを隠して送信 -->
          <input type="hidden" name="reply_post_id" value="<?php print(htmlspecialchars($_REQUEST['res'], ENT_QUOTES)); ?>" />
        </dd>
      </dl>
      <div>
        <p>
          <input type="submit" value="投稿する" />
        </p>
      </div>
    </form>

    <!-- 繰り返し投稿を表示 -->
<?php foreach ($posts as $post ): ?>
    <div class="msg">
      <!-- 投稿者の画像 -->
    <img src="member_picture/<?php print(htmlspecialchars($post['picture'], ENT_QUOTES)); ?>" width="48" height="48" alt="<?php print(htmlspecialchars($post['name'], ENT_QUOTES)); ?>" />
        <!-- 投稿メッセージ -->
    <p><?php print(htmlspecialchars($post['message'], ENT_QUOTES)); ?>
            <!-- 投稿者の名前 -->
      <span class="name">（<?php print(htmlspecialchars($post['name'], ENT_QUOTES)); ?>）
                                  <!--投稿idのリンク　　　　                                      返信 -->
      </span>[<a href="index.php?res=<?php print(htmlspecialchars($post['id'], ENT_QUOTES)); ?>">Re</a>]</p>
            <!-- 投稿idのリンクが付けられた投稿時間 -->
    <p class="day"><a href="view.php?id=<?php print(htmlspecialchars($post['id'])); ?>"><?php print(htmlspecialchars($post['created'], ENT_QUOTES)); ?></a>

          <!-- 返信先のメッセージidが0以上なら -->
      <?php if ($post['reply_message_id'] > 0): ?>
            <!-- 返信先のメッセージidをリンクに含ませる -->
<a href="view.php?id=<?php print(htmlspecialchars($post['reply_message_id'])); ?>">
返信元のメッセージ</a>
<?php endif; ?>

                  <!-- セッションのidが投稿者のidと同じなら -->
<?php if ($_SESSION['id'] == $post['member_id']): ?>
      <!-- 削除のリンクを表示 -->
[<a href="delete.php?id=<?php print(htmlspecialchars($post['id'])); ?>"
style="color: #F33;">削除</a>]
<?php endif; ?>
    </p>
    </div>
<?php endforeach; ?>

<ul class="paging">
  <!-- 現在のページが2以上の時 -->
  <?php if($page > 1): ?>
    <!-- 前のページのリンクを貼る -->
<li><a href="index.php?page=<?php print($page-1); ?>">前のページへ</a></li>
<?php else: ?>
<li>前のページへ</li>
<?php endif; ?>

  <!-- 現在のページが最大ページ数より小さい時 -->
<?php if($page < $maxPage): ?>
  <!-- 次のページのリンクを貼る -->
<li><a href="index.php?page=<?php print($page+1); ?>">次のページへ</a></li>
<?php else: ?>
  <li>次のページへ</li>
<?php endif; ?>
</ul>
  </div>
</div>
</body>
</html>
