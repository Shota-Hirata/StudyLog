<?php get_header(); ?>

	<main class="main">
		<!-- もし投稿があったら -->
		<?php if(have_posts()): ?>
			<!-- 以下の内容を繰り返す -->
			<?php while(have_posts()): the_post(); ?>
				<!-- 投稿のタイトル -->
				<h1><?php the_title(); ?></h1>
				<?php
					// もしアイキャッチ画像があったら
					if(has_post_thumbnail()){
						// それを出力
						the_post_thumbnail();
						// アイキャッチ画像がなかったら
					}else{
						// 指定したもの(デフォルト画像)を表示する
						echo '<img src="'.esc_url(get_theme_file_uri("img/carp.png")).'">';
					}
				?>
				<div class="wysiwyg-editor">
					<!-- 投稿の内容 -->
					<?php the_content(); ?>
				</div>
			<!-- 繰り返し終わり -->
			<?php endwhile; ?>
		<!-- if文終わり -->
		<?php endif; ?>
					<!-- ↓WPの一般設定にある「サイトアドレス(ホーム)」へのリンクの書き方 -->
		<a href="<?php echo esc_url( home_url( "/" )); ?>">ホームに戻る</a>
	</main>
<?php get_footer(); ?>