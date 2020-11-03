<?php get_header(); ?>

	<main class="main">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php
					if(has_post_thumbnail()){
						the_post_thumbnail();
					}else{
						echo '<img src="'.esc_url(get_theme_file_uri("img/carp.png")).'">';
					}
				?>
				<div class="wysiwyg-editor">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<a href="<?php echo esc_url( home_url( "/" )); ?>">ホームに戻る</a>
	</main>
<?php get_footer(); ?>