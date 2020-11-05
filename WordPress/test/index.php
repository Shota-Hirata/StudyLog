<!-- ↓header.phpを読み込むための記述 -->
<?php get_header(); ?>
	<main class="main">
		<!-- ↓画像の絶対パスを指定する記述方法。画像は全てこの書き方 -->
		<img src="<?php echo esc_url( get_theme_file_uri( "img/carp.png" ) ); ?>">
		<!-- ウィジェットを表示 -->
		<?php dynamic_sidebar("sidebar-widget"); ?>
		<?php
			// カスタムメニューを表示
			wp_nav_menu(
				array(
					"theme_location" => "global-nav",
					"container" => "div",
					"container_class" => "c-global-nav"
				)
				// divで囲みたくなければ=>falseとすればOK
			)
		?>
		<section class="blog">
			<h2 class="headline-blog">投稿一覧</h2>
			<div class="wrap">
				<?php
					// 取得するデータの種類、順番、件数などをまず指定
					//↓こいつに代入   ↓投稿データとか固定ページのデータを取得できるもの
					$aPosts = get_posts([
						'posts_per_page' => 5, // 件数の指定
						'orderby' => 'date', // 並び順の対象（date=投稿日時）
						'order' => 'DESC', // 並び順を新しい順に
						'post_type' => 'post', // 投稿データが対象（pageにすると固定ページ）
						'post_status' => 'publish', // 公開されているデータが対象
						// 他にも指定したかったら「get_posts パラメータ」で検索
					]);
					// 取得したデータを繰り返し表示
					foreach ($aPosts as $post){
						//↓こいつに代入　		↓カテゴリー情報を取得するテンプレートタグ
						$aCategory = get_the_category();
						//↓こいつに代入　		↓カテゴリ―のスラッグ
						$sCategoryHref = $aCategory[0]->slug;
						//↓こいつに代入　		↓カテゴリ―の名前
						$sCategoryName = $aCategory[0]->cat_name;
						//↓こいつに代入　		↓パーマリンク
						$sPostHref = get_permalink($post->ID);
						//↓こいつに代入　		↓投稿タイトル
						$sPostTitle = $post->post_title;
						//↓こいつに代入　		↓投稿日
						$sPostDate = mysql2date('Y.m.d', $post->post_date);
						// <p class="contents">を出力
						echo '<p class="contents">';
						// カテゴリーのURLを出力、リンクを表示
						echo '<a href="'.esc_url($sCategoryHref).'" class="cat">'.esc_html($sCategoryName).'</a>';
						// 日付を表示
						echo '<span class="date">'.esc_html($sPostDate).'</span>';
						// 投稿のパーマリンクを出力、タイトルを表示
						echo '<a class="title" href="'.esc_url($sPostHref).'">'.esc_html($sPostTitle).'</a>';
						// 閉じタグを出力
						echo '</p>';
						// esc_はデータを無害化するものなので必ず書くべし
					}
				?>
			</div><!-- wrap -->
		</section>
	</main>
<!-- ↓footer.phpを読み込むための記述 -->
<?php get_footer(); ?>