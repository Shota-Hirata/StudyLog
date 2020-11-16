<?php get_header(); ?>
	<main class="main">
		<div class="container">
			<!-- <?php
			wp_nav_menu(
				array(
					"theme_location" => "global-nav",
					"container" => "nav",
					"container_class" => "c-global-nav"
				)
			)
		?> -->
		<div class="row">
			<article class="col-md-7 col7">
				<section class="single-section">
					<?php if(have_posts()): ?>
						<?php while(have_posts()): the_post(); ?>
							<h1 class="single-title"><?php the_title(); ?></h1>
							<div class="single-top-img">
							<?php
								if(has_post_thumbnail()){
									the_post_thumbnail();
								}else{
									echo '<img src="'.esc_url(get_theme_file_uri("img/carp.png")).'">';
								}
							?>
							</div>
							<div class="wysiwyg-editor">
								<?php the_content(); ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</section>
				<div class="home">
					<a href="<?php echo esc_url( home_url( "/" )); ?>">ホームに戻る</a>
				</div>
				<div class="prev-page">
					<?php previous_post_link(); ?>
				</div>
				<div class="next-page">
					<?php next_post_link(); ?>
				</div>
				 <h2 class="related-article-title">関連記事</h2>
					<?php

					//現在の投稿IDからカテゴリーを取得する
					$categories = get_the_category($post->ID);

					//カテゴリーIDを代入する配列を定義する
					$category_id = array();

					foreach($categories as $category):
					    //現在の投稿が持っているカテゴリーIDを配列に格納
					    array_push($category_id, $category->cat_ID);
					endforeach ;

					$args = array(
					    'post__not_in' => array($post->ID),  //現在の投稿を関連記事から除外する
					    'posts_per_page'=> 2,                //関連記事に表示する投稿するを指定
					    'category__in' => $category_id,      //カテゴリーIDの配列を指定
					    'orderby' => 'rand',                 //ソートをランダムに指定
					);
					$query = new WP_Query($args);

					//ここから関連記事を出力するループ処理
					//前項で作成したHTMLに組み込んでいきましょう！

					if( $query->have_posts() ):
					    while ($query->have_posts()) :
					    	$query->the_post();
					        ?>
					        <a class="related-post" href="<?php echo get_permalink(); ?>">
					        	<div class="related-article">
					        		<div class="related-article-img">
					            <?php
					            //アイキャッチ画像
					            if ( has_post_thumbnail() ):
					                //記事に設定されているアイキャッチ画像を表示
					                the_post_thumbnail('thumbnail');

					            else:
					                //アイキャッチ画像がない場合に表示する画像
					                echo '<img src="'.esc_url(get_theme_file_uri("img/carp.png")).'"';
					            endif;
					             ?>
					           		 </div>
					            <h3 class="related-title"><?php echo  get_the_title(); ?></h3>
					            <?php
					            //他に関連記事で使用できそうな項目
					            //パーマリンク
					            // echo get_permalink();

					            //タイトル
					            // echo get_the_title();

					            //所属するカテゴリー名
					            // foreach($categories as $category):
					            //     echo '<p>#'.esc_html($category->name).'</p>';
					            // endforeach;

					            //投稿日
					            // echo get_the_date();

					            //抜粋
					            // the_excerpt();
					            ?>
					        </div>
					        </a>
					    <?php
					    endwhile;
					else:
					    echo '記事はありませんでした';
					endif;
					wp_reset_postdata();

					?>
			</article>
			<div class="col-md-1">
			</div>
			<aside class="col-md-4 col7">
				<?php dynamic_sidebar("sidebar-widget"); ?>
			</aside>
		</div>
	</div>
	</main>
<?php get_footer(); ?>