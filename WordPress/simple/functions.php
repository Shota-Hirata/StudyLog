<?php
	if(!isset($content_width)){
		$content_width = 725;
	}


	function custom_theme_setup(){
		add_theme_support("automatic-feed-links");
		add_theme_support("title-tag");
		add_theme_support("responsive-embeds");
		add_theme_support("post-thumbnails");
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
		// wp_enqueue_style("single",
		// 	get_stylesheet_uri().'single.css',
		// 	array(),
		// 	"1.0",
		// 	"all"
		// );
	}
	add_action("wp_enqueue_scripts", "css_scripts");

	function js_scripts(){
		wp_enqueue_script('script',
			get_template_directory_uri().'script.js',
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
			"before_widget" => '<div>',
			"after_widget" => "</div>",
			"before_title" => '<h3 class="c-widget_title">',
			"after_title" => "</h3>",
		));
	}
	add_action("widgets_init", "custom_widget_register");

	function pagination($pages = '', $range = 3) {
 $showitems = ($range * 2)+1;
 global $paged;
 if(empty($paged)) $paged = 1;
 if($pages == '')
 {
  global $wp_query;
  $pages = $wp_query->max_num_pages;
  if(!$pages)
  {
   $pages = 1;
  }
 }
 if(1 != $pages)
 {
  echo "".$paged."/".$pages."";
  if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "...";
  if($paged > 1 && $showitems < $pages) echo "前";
  for ($i=1;
   $i <= $pages;
   $i++)
  {
   if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
   {
    echo ($paged == $i)? "".$i."":"".$i."";
   }
  }
  if ($paged < $pages && $showitems < $pages) echo "次";
  if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "...";
  echo "\n";
 }
}


	$args = the_posts_pagination( array(
		'base'               => '%_%',
		'format'             => '?page=%#%',
		'total'              => 1,
		'current'            => 0,
		'show_all'           => false,
		'end_size'           => 1,
		'mid_size'           => 1,
		'prev_next'          => true,
		'prev_text'          => __( '« Previous', 'textdomain' ),
		'next_text'          => __( 'Next »', 'textdomain' ),
		'screen_reader_text' => __( 'Posts navigation', 'textdomain'),
		'type'               => 'plain',
		'add_args'           => false,
		'add_fragment'       => '',
		'before_page_number' => '',
		'after_page_number'  => '',
	) );


 ?>