<!DOCTYPE html>
<html>
<head>
	<!-- ↓WordPressがきちんと作動するために必須のコード。 -->
	<?php wp_head(); ?>
</head>
	<!-- ↓現在表示しているページの条件や状態に合わせたclass名を出力することができるようになる -->
<body <?php body_class(); ?>>
	<header id="header">
		<h1 class="site-name"><?php bloginfo("name"); ?></h1>
		<p class="description"><?php bloginfo("description"); ?></p>
	</header>