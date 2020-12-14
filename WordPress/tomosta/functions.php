<?php

 function init_func(){
 	add_theme_support('title-tag');
 	add_theme_support('post-thumbnails');

 	register_post_type('item',[
 		'labels' => [
 			'name' => '商品',
 			'singular_name' => '商品一つ',
 			'add_new' => '商品を追加',
 			'add_new_item' => '商品を追加します',
 			'edit_item' => '商品を編集',
 			'new_item' => '新しい商品',
 			'all_items' => '全ての商品',
 			'view_item' => '商品を見る',
 			'serch_item' => '商品を探す',
 			'not_found' => '商品が見つかりませんでした',
 			'not_found_in_trash' => 'ゴミ箱は空です',
 			'parent_item_colon' => '',
 			'menu_name' => '商品'
 		],
 		'public' => true,
 		'has_archive' => true,
 		'hierarchical' => false,
 		// 'supports' => [
 		// 	'title',
 		// 	'editor',
 		// 	'page-attributes'
 		// ],
 		'menu_position' => 5,
 		'menu_icon' => 'dashicons-cart',
 	]);

 	register_taxonomy('item_category', 'item',[
 		'labels' => [
 			'name' => '商品カテゴリー',
 		],
 		'hierarchical' => true,
 		'show_in_rest' => true
 	]);
 }

 add_action('init', 'init_func');

?>