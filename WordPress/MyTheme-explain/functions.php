<?php

	// サムネイル
	add_theme_support('post-thumbnails');

	// メニュー機能
	register_nav_menus(
		array(
			'global-navigation' => 'グローバル',
			'footer-navigation' => 'フッター',
		)
	);

	// titleタグの設定
	add_theme_support('title-tag');

	// ウィジェットの登録
	function my_widgets_init(){
		register_sidebar(array(
			// ウィジェットの名前
			'name' => 'サイドバー',
			// 取得するコードに書く値
			'id' => 'sidebar_widget01',
			// ウィジェットの前に書く要素
			'before_widget' => '<div class="container bg-white mb-5 py-5">',
			// ウィジェットの後に書く要素
			'after_widget' => '</div>',
		));

		register_sidebar(array(
			'name' => 'フッターAbout',
			'id' => 'footer_widget01',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			// タイトルの前に書く要素
			'before_title' => '<h4 class="d-inline-block py-3 border-bottom border-info">',
			// タイトルの後に書く要素
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => 'フッターTwitter',
			'id' => 'footer_widget02',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="d-inline-block py-3 border-bottom border-info">',
			'after_title' => '</h4>',
		));
	}

	add_action('widgets_init', 'my_widgets_init');

	// スクリプトとスタイルを正しくエンキューする方法
	function theme_name_scripts(){
		wp_enqueue_style('style-name', get_stylesheet_uri());
		wp_enqueue_style(
			'bootstrap-css',
			'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'
		);

		wp_enqueue_script(
			'jquery',
			'https://code.jquery.com/jquery-3.5.1.slim.min.js',
			array(),
			'',
			true
		);

		wp_enqueue_script(
			'jsdelivr',
			'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
			array(),
			'',
			true
		);

		wp_enqueue_script(
			'bootstrap-js',
			'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js',
			array(),
			'',
			true
		);
	}

	add_action('wp_enqueue_scripts', 'theme_name_scripts');


	// ボタン　ショートコード
	function mytheme_shortcode ($atts, $content = ""){
		return '<a href=" '. $atts['link'] .' " class=" btn '. $atts['class'] .' "> ' . $content . '</a> ';
	}

	add_shortcode ('btn' , 'mytheme_shortcode');



	// ページネーション
	function mytheme_pagenation() {
		global $wp_query;
		// 記事数が１ページの記事数より少なければ何もしない
		if ($wp_query->max_num_pages<=1)
			return;
		echo '<nav class="pagenation">';
		echo paginate_links( array(
			'total' => $wp_query->max_num_pages,
			'perv_text' => __('<'),
			'next_text' => __('>'),
			'type' => 'list'
		));
		echo '</nav>';
	}


	// 投稿者ページカスタマイズ
	function mytheme_profile_fields($user_contact){
		// 項目の追加
		$user_contact['twitter'] ='Twitter';
		return $user_contact;
	}
	add_filter('user_contactmethods', 'mytheme_profile_fields');


	// カスタム投稿タイプ
	function codex_custom_init(){
		$args = array(
			// 記事を投稿できるようにするかどうか
			'public' => true,
			// カスタム投稿タイプの名称
			'label' => 'Books',
			// 管理画面での位置を決める
			'menu_position' => 5,
			// 管理画面でのアイコンを決める
			'menu_icon' => 'dashicons-book',
			// アーカイブページを作るかどうか
			'has_archive' => true
		);
		register_post_type('book', $args);


		// カスタムタクソノミー
		$args = array(
			'label' => __('本のカテゴリー'),
			'rewrite' => array('slug' => 'genre'),
			'hierarchical' => true
		);
		register_taxonomy('genre', 'book', $args);

	}
	add_action('init', 'codex_custom_init');


	// 管理画面に独自のフィールド
	function register_custom_menu(){
		add_menu_page(
			// タイトルタグに表示される文
			'mytheme管理',
			// 管理画面に表示される文
			'mytheme管理',
			// 権限
			'manage_options',
			// メニュースラッグ
			'mytheme-manage',
			// ファンクション
			'manage_html',
			// ダッシュアイコン
			'dashicons-admin-generic',
			// 管理画面での位置を決める
			0
		);
	}

	add_action('admin_menu', 'register_custom_menu');

	// 管理画面での設定の中身
	function manage_html(){
		include 'form-manage.php';
	}

	// 設定画面で設定する内容を規定
	function register_custom_settings(){
		register_setting('original-field-manage', 'mytheme_pickup_article');
		register_setting('original-field-manage', 'mytheme_favicon_img');
	}
	add_action('admin_init', 'register_custom_settings');


	// 管理者以外のメニューの非表示
	function remove_menus(){
		if(current_user_can('read')){
			remove_menu_page('index.php');
			remove_menu_page('upload.php');
			// 指定したスラッグのポストタイプの投稿を規制
			remove_menu_page('edit.php?post_type=book');
		}
	}
	add_action('admin_menu', 'remove_menus');


	// 人気記事の表示
	function get_post_views($postID){
		$count_key = 'post_views_count';
		// ポストデータを取得
		$count = get_post_meta($postID, $count_key, true);
		// 取得したものの中身がなかったら
		if($count == ''){
			// 既存のものを削除
			delete_post_meta($postID, $count_key);
			// 新しく値を再代入
			add_post_meta($postID, $count_key, '0');
		}
		return $count.'Views';
	}


	function set_post_views($postID){
		$count = 0;
		$count_key = 'post_views_count';
		$count = get_post_meta($postID, $count_key, true);
		if($count == ''){
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
		}else{
			// ログインしているユーザーはカウントに含めない
			if(!is_user_logged_in()){
				$count++;
				update_post_meta($postID, $count_key, $count);
			}
		}
	}
	add_action('init', 'set_post_views');


	// 管理画面にPV数を表示
	function add_views_columns($columns){
		$columns['post_views_count'] = '閲覧数';
		return $columns;
	}
	add_filter('manage_posts_columns', 'add_views_columns');

	function add_views_column($column_name, $post_id){
		if($column_name == 'post_views_count'){
			$title = get_post_meta($post_id, 'post_views_count', true);
		}
		if(isset($title)){
			echo esc_attr($title);
		}
	}
	add_action('manage_posts_custom_column', 'add_views_column', 10, 2);

	function column_orderby_custom($vars){
		if('post_views_count' == $vars['orderby']){
			$vars = array_merge($vars, array(
				'meta_key' => 'post_views_count',
				'orderby' => 'meta_value_num'
			));
		}
		return $vars;
	}
	add_filter('request', 'column_orderby_custom');

	function posts_register_sortable($sortable_column){
		$sortable_column['post_views_count'] = 'post_views_count';
		return $sortable_column;
	}
	add_filter('manage_edit-post_sortable_columns', 'posts_register_sortable');

?>