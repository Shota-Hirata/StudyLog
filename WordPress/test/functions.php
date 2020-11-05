<?php
	//$content_widthに値が入っていなかったら
	if(!isset($content_width)){
		// $content_width(画像など)の幅を725pxにする
		$content_width = 725;
	}

	function custom_theme_setup(){
		// RSS出力のためのコード
		add_theme_support("automatic-feed-links");
		// <title>タグに自動入力するためのコード
		add_theme_support("title-tag");
		// YouTubeブロックなどの埋め込みコンテンツをレスポンシブ対応させるためのコード
		add_theme_support("responsive-embeds");
		// アイキャッチ画像を有効化するコード
		add_theme_support("post-thumbnails");
		// アイキャッチ画像のサイズを指定(横幅,縦幅)
		set_post_thumbnail_size(1200, 800);
		// カスタムメニュー機能を有効化
		register_nav_menus(
			array("global-nav" => "グローバルナビゲーション")
		);
	}
	add_action("after_setup_theme","custom_theme_setup");


	// CSSを読み込むための関数
	function css_scripts(){
		wp_enqueue_style("base-style",
			get_stylesheet_uri(),
			array(),
			"1.0",
			"all"
		);
		// top.cssを追加したかったらこの下に
							// ↓ここに追加したいCSSの名前
		// wp_enqueue_style("top",
  //       	get_template_directory_uri() . '/css/top.css',
  //       	array(),					"." + フォルダのパス
  //       	"1.0",
  //       	"all"
  //   	);
  //   	これを書いたら追加できる
	}
	add_action("wp_enqueue_scripts", "css_scripts");

	// WordPressのコーディングの規約では、テーマで利用するCSSファイルは、wp_enqueue_style関数を使い、function.php内で定義することが推奨されている。後々プラグインなどを入れたときに、規則通りに書いていないとエラーを起こしてしまう可能性がある。


	// JSを読み込むための関数。CSSと同じ要領で書けばOK
	function js_scripts(){
		wp_enqueue_script('script',
			get_template_directory_uri().'/js/script.js',
			array(),
			//↓jsのバージョン。好きな数字でOK
			"1.0",
			//↓<？php wp_footer();？>で読み込むための記述
			true
		);
		// hello.jsを追加したかったらこの下に
						// ↓ここに追加したいjsの名前
		// wp_enqueue_script('hello',
  //      	    get_template_directory_uri() . '/js/hello.js',
  //       	array(),						"." + フォルダのパス
  //       	"1.0",
  //      	true
  //  	 );
	}
	add_action('wp_enqueue_scripts', 'js_scripts');

	// "1.0",trueを書かなかったらheaderの<？php wp_head();？>でこれが読み込まれる。
	// でもjavascriptはなるべく最後に読み込みたいので"1.0",trueを書くことで
	// <？php wp_footer();？>でこれらが読み込まれる

	// ウィジェットを有効化させる
	function custom_widget_register(){
		register_sidebar( array(
			"name" => "サイドバーウィジェットエリア", // 追加したウィジェット一覧の名前
			"id" => "sidebar-widget", // 追加したウィジェット一覧のid
			"description" => "ブログページのサイドバーに表示", // 追加したウィジェット一覧の説明
			"after_widget" => "</div>", // ウィジェットの閉じタグ
			"before_title" => '<h2 class="c-widget_title">', //ウィジェットタイトルの開始タグ
			"after_title" => "</h2>", // ウィジェットタイトルの閉じタグ
		));
	}
	add_action("widgets_init", "custom_widget_register");
 ?>