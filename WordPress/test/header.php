<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="header">
		<h1 class="site-name"><?php bloginfo("name"); ?></h1>
		<p class="description"><?php bloginfo("description"); ?></p>
	</header>