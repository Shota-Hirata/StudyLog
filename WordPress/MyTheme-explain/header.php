<!doctype html>
        <!-- 設定画面の言語選択で選んだ言語になる -->
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- ファビコン -->
    <?php $mytheme_favicon = esc_url(get_option('mytheme_favicon_img')); ?>
    <link rel="icon" type="img/png" href="<?php echo $mytheme_favicon; ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
    <!-- WordPressのスクリプトを呼び出す。headの最後に記述 -->
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <!-- index.phpなら -->
        <?php if (is_home()) { ?>
          <h1 class="h1 py-3">My Theme</h1>
          <!-- それ以外なら -->
        <?php } else { ?>
          <div class="h1 py-3">My Theme</div>
        <?php } ?>
      </div>
    </header><!-- /header -->
    <!-- ナビゲーションバー -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- ナビゲーションバーを管理画面のメニューで管理 -->
          <?php
          $defaults = array(
            // ulに付けるクラス
            'menu_class'      => 'navbar-nav',
            // ulを囲むもの
            'container'       => false,
            // リンクの前の要素
            'link_before'     => '<span class="nav-item text-white mr-4">',
            // リンクの後の要素
            'link_after'      => '</span>',
            // functions.phpで書いたメニューの設定場所
            'theme_location'  => 'global-navigation',
          );
          wp_nav_menu( $defaults );
          ?>
        </div>
      </div>
    </nav>