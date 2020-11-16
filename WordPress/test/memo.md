# その他のメモ

-index.phpと同じディレクトリにscreenshot.pngを入れるとテーマ選択時の画像として認識される

-<!-- <link href="<?php echo esc_url( get_stylesheet_uri() );?>"> -->
 →CSSをWPに反映させる記述方法。でも「function css_scripts」で定義する方が望ましいのであまり使わない

-固定ページを作りたければpage.phpファイルを作ってsingle.phpの内容をコピペすればOK

## <?php bloginfo( "" ); ?> の""に入るものとその意味

-name: 			WPの一般設定にある「サイトのタイトル」
-description:	WPの一般設定にある「キャッチフレーズ」

## 多言語のサイトを作る場合

1. index.phpの冒頭にある<html>を
	<!-- <html <?php language_attributes(); ?>> -->
   に書き換える
2. <head>内にある<meta charset=文字コード>を
	<!-- <meta charset="<?php bloginfo( "charset"); ?>"> -->
   に書き換える

## 個別ページ内のwhile文の中でWPの内容を表示させる時の記述一覧

the_title		投稿のタイトル
the_content		投稿の本文
the_excerpt		投稿の抜粋分
the_permalink	投稿のリンク
the_time		投稿時刻
the_category	投稿のカテゴリー
the_tags		投稿につけられたタグ
the_ID			投稿ID
the_auther		著者名

## wp_nav_menu(	array(の中に入れられるもの

theme_location	テーマの位置をスラッグで指定。
container		メニューを囲むタグを指定。
container_class	コンテナタグに適用されるclass名。
container_id	コンテナタグに適用されるid名。
menu_class		メニューを構成するul要素に適用されるclass名。
menu_id			メニューを構成するul要素に適用されるid名