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
<table>
	<?php
      // 連続した数に剰余算を使うと割る数の一つ少ない値までで連続した値が出てくる

      $week = array('月', '火', '水', '木', '金', '土', '日');

      // 曜日を出力
      for($i=1; $i<31; $i++){
            print($week[$i%7] . "\n");
      }

      // ストライプ柄のテーブルを作成
      for ($i=1; $i <=10 ; $i++) {
      	# code...
      	if ($i%2) {
      		# code...
      		print('<tr style="background-color: #ccc">');
      	}else{
      		print('<tr>');
      	}
      	print('<td>' . $i . '行目</td>');
      	print('</tr>');
      }
	?>
</table>


</main>
</body>
</html>