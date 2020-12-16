<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>My Theme</title>
  </head>
  <body>
    <header>
      <div class="container">
        <?php if (is_home()) { ?>
          <h1 class="h1 py-3">My Theme</h1>
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
          <?php
          $defaults = array(
            'menu_class'      => 'navbar-nav',
            'container'       => false,
            'link_before'     => '<span class="nav-item text-white mr-4">',
            'link_after'      => '</span>',
            'theme_location'  => 'global-navigation',
          );
          wp_nav_menu( $defaults );
          ?>
        </div>
      </div>
    </nav>