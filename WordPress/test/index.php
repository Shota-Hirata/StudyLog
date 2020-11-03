<?php get_header(); ?>
	<main class="main">
<!-- 		<img src="<?php echo esc_url( get_theme_file_uri( "img/carp.png" ) ); ?>" alt="ロゴだよ">
 -->		<?php dynamic_sidebar("sidebar-widget"); ?>
		<?php
			wp_nav_menu(
				array(
					"theme_location" => "global-nav",
					"container" => "div",
					"container_class" => "c-global-nav"
				)
			)
		?>
		<section class="blog">
			<h2 class="headline-blog">投稿一覧</h2>
			<div class="wrap">
				<?php
					$aPosts = get_posts([
						'posts_per_page' => 5,
						'orderby' => 'date',
						'order' => 'DESC',
						'post_type' => 'post',
						'post_status' => 'publish',
					]);
					foreach ($aPosts as $post){
						$aCategory = get_the_category();
						$sCategoryHref = $aCategory[0]->slug;
						$sCategoryName = $aCategory[0]->cat_name;
						$sPostHref = get_permalink($post->ID);
						$sPostTitle = $post->post_title;
						$sPostDate = mysql2date('Y.m.d', $post->post_date);
						echo '<p class="contents">';
						echo '<a href="'.esc_url($sCategoryHref).'" class="cat">'.esc_html($sCategoryName).'</a>';
						echo '<span class="date">'.esc_html($sPostDate).'</span>';
						echo '<a class="title" href="'.esc_url($sPostHref).'">'.esc_html($sPostTitle).'</a>';
						echo '</p>';
					}
				?>
			</div><!-- wrap -->
		</section>
	</main>
<?php get_footer(); ?>