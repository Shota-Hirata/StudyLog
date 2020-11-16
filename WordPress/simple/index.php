<?php get_header(); ?>
<!-- <?php
wp_nav_menu(
	array(
		"theme_location" => "global-nav",
		"container" => "nav",
		"container_class" => "c-global-nav"
	)
)
?> -->
<main class="main">
	<div class="row">
		<article class="col-xs-12 col-md-7">
			<section class="blog">
				<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
				$aPosts = get_posts([
					'posts_per_page' => 1,
					'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'publish',
					'paged' => $paged
				]);
				foreach ($aPosts as $post){
					$aCategory = get_the_category();
					$sCategoryHref = $aCategory[0]->slug;
					$sCategoryName = $aCategory[0]->cat_name;
					$sPostHref = get_permalink($post->ID);
					$sPostTitle = $post->post_title;
					$sPostDate = mysql2date('Y.m.d', $post->post_date);
					$sPostModified = mysql2date('Y.m.d', $post->post_modified);
					$description = get_post_custom()['_aioseop_description'][0];
					$content = mb_substr(get_the_excerpt(), 0, 200, 'UTF-8');
					echo '<a href="'.esc_url($sPostHref).'">';
					echo '<div class="print">';
					echo '<h2 class="post-title">'.esc_html($sPostTitle).'</h2>';
					echo '<p class="cat">'.'<i class="fas fa-hashtag"></i>'.esc_html($sCategoryName).'</p>';
					if(has_post_thumbnail()){
						'<img src="'.the_post_thumbnail().'" class="top-img">';
					}else{
						echo '<img src="'.esc_url(get_theme_file_uri("img/carp.png")).'" class="top-img">';
					}
					if($sPostDate==$sPostModified){
						echo '<span class="date">'.esc_html($sPostDate).'</span>';
					}else{
						echo '<span class="date date2">'.str_replace('\n', '',mb_substr(strip_tags($sPostDate), 0, 200,'UTF-8')).'(更新日:'.esc_html($sPostModified).')'.'</span>';
					};
					if($description==''){
						echo '<p class="print-description">'.esc_html($content).'</p>';
					}else{
						echo '<p class="print-description">'.esc_html($description).'</p>';
					};
					echo '</div>';
					echo '</a>';
				}
				?>
			</section>
			<div class="pagenation">
				<?php echo paginate_links( $args ); ?>
			</div>
		</article>
		<div class="col-xs-0 col-md-1">
		</div>
		<aside class="col-xs-12 col-md-4">
			<?php dynamic_sidebar("sidebar-widget"); ?>
		</aside>
	</div>
</main>
<?php get_footer(); ?>