<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/d8a7c7d7ad.js" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?>>
	<header id="header">
		<a href="<?php echo esc_url( home_url( "/" )); ?>" class="head-a">
		<h1 class="site-name"><?php bloginfo("name"); ?></h1>
		</a>
		<div>
			<p class="description"><?php bloginfo("description"); ?></p>
		</div>
	</header><!-- /header -->
<div class="container-fluid">
	<div class="cover">
