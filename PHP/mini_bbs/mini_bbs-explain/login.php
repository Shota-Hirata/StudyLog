<?php

  // セッション適用
  session_start();

  // データベースと接続
  require('dbconnect.php');

      // クッキーが空じゃなかったら
  if ($_COOKIE['email'] !== ''){
      // クッキーの値を代入
    $email = $_COOKIE['email'];
  }

        // 画面が呼び出された直後じゃなかったとき
  if (!empty($_POST)){
      // 変数に送られてきたメールアドレスを代入。ログインボタンが押されたらこちらの値をクッキーに上書きする
    $email = $_POST['email'];
          // 送られてきたメールアドレスが空または送られてきたパスワードが空じゃなかったら
    if ($_POST['email'] !== '' && $_POST['password'] !== ''){
        // SQLの型を準備         SQLの型を準備から値を取り出す
      $login = $db->prepare('SELECT * FROM members WHERE email=? AND password=?');
        // 送られてきた値を代入
      $login->execute(array(
        // メールアドレス
        $_POST['email'],
        // 暗号化されたパスワード
        sha1($_POST['password'])
      ));
      // 送られた値を変数に代入(ログイン成功)
      $member = $login->fetch();

          // ログインできていれば
      if ($member) {
          // ログインした時のidをセッションのidに代入
        $_SESSION['id'] = $member['id'];
          // セッションに代入した時の時間を入れる
        $_SESSION['time'] = time();

            // 「ログイン情報を保存する」にチェックを入れていたら
        if ($_POST['save'] === 'on'){
          // クッキーに値を保存　　　　　　　　　　　　有効期限は2週間
          setcookie('email', $_POST['email'], time()+60*60*24*14);
        }

            // index.phpに遷移
        header('Location: index.php');
        exit();
        // ログインに失敗したとき
      } else {
          // 変数にfailedを代入
        $error['login'] = 'failed';
      }
      // ログインの検証すらできていない時(=入力欄が空の時)
    } else {
      // 変数にblankを代入
      $error['login'] = 'blank';
    }
  }
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ログインする</title>
</head>

<body>
<div id="wrap">
  <div id="head">
    <h1>ログインする</h1>
  </div>
  <div id="content">
    <div id="lead">
      <p>メールアドレスとパスワードを記入してログインしてください。</p>
      <p>入会手続きがまだの方はこちらからどうぞ。</p>
      <p>&raquo;<a href="join/">入会手続きをする</a></p>
    </div>
        <!-- ↓遷移先を指定していないのでこの画面でエラーなどをチェック -->
    <form action="" method="post">
      <dl>
        <dt>メールアドレス</dt>
        <dd>
                                                                        <!-- エラーが起こったときに再度入力した値を表示できる -->
          <input type="text" name="email" size="35" maxlength="255" value="<?php print(htmlspecialchars($email, ENT_QUOTES)); ?>" />
              <!-- 変数にblankが代入されていたら -->
          <?php if ($error['login'] === 'blank'): ?>
                <!-- エラーメッセージを表示 -->
            <p class="error">*メールアドレスとパスワードを入力してください</p>
          <?php endif; ?>
              <!-- 変数にfailedが代入されていたら -->
          <?php if ($error['login'] === 'failed'): ?>
                  <!-- エラーメッセージを表示 -->
            <p class="error">*ログインに失敗しました。正しくご記入ください</p>
          <?php endif; ?>
        </dd>
        <dt>パスワード</dt>
        <dd>
                                                                        <!-- エラーが起こったときに再度入力した値を表示できる -->
          <input type="password" name="password" size="35" maxlength="255" value="<?php print(htmlspecialchars($_POST['password'], ENT_QUOTES)); ?>" />
        </dd>
        <dt>ログイン情報の記録</dt>
        <dd>
          <input id="save" type="checkbox" name="save" value="on">
          <label for="save">次回からは自動的にログインする</label>
        </dd>
      </dl>
      <div>
        <input type="submit" value="ログインする" />
      </div>
    </form>
  </div>
  <div id="foot">
    <p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O Space. MYCOM" /></p>
  </div>
</div>
</body>
</html>
