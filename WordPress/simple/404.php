<?php get_header(); ?>

<main class="main">
	<div class="row">
		<article class="col-md-7">
			<section class="blog">
				<div class="single-section">
					<h1 class="single-title">その記事はございません</h1>
				</div>
				<div class="home">
					<a href="<?php echo esc_url( home_url( "/" )); ?>">ホームに戻る</a>
				</div>
			</section>
		</article>
		<div class="col-md-1">
		</div>
		<aside class="col-md-4">
			<?php dynamic_sidebar("sidebar-widget"); ?>
		</aside>
	</div>
</main>
<?php get_footer(); ?>