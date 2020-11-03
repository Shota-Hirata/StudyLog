<?php
	//コンテンツ幅をセット
	if(!isset($content_width)){
		$content_width = 725;
	}

	function custom_theme_setup(){
		add_theme_support("automatic-feed-links");
		add_theme_support("title-tag");
		add_theme_support("responsive-embeds");
		add_theme_support("post-thumbnails");
		set_post_thumbnail_size(1200, 800);
		register_nav_menus(
			array("global-nav" => "グローバルナビゲーション")
		);
	}
	add_action("after_setup_theme","custom_theme_setup");

	function css_scripts(){
		wp_enqueue_style("base-style",
			get_stylesheet_uri(),
			array(),
			"1.0",
			"all"
		);
	}
	add_action("wp_enqueue_scripts", "css_scripts");

	function js_scripts(){
		wp_enqueue_script('script',
			get_template_directory_uri().'/js/script.js',
			array(),
			"1.0",
			true
		);
	}
	add_action('wp_enqueue_scripts', 'js_scripts');

	function custom_widget_register(){
		register_sidebar( array(
			"name" => "サイドバーウィジェットエリア",
			"id" => "sidebar-widget",
			"description" => "ブログページのサイドバーに表示",
			"after_widget" => "</div>",
			"before_title" => '<h2 class="c-widget_title">',
			"after_title" => "</h2>",
		));
	}
	add_action("widgets_init", "custom_widget_register");
 ?>