<!-- 関連記事 -->
  <?php
  // カテゴリーを持っていたら
  if(has_category()){
    // カテゴリーを全て取得
  	$category = get_the_category();
    // カテゴリーを配列で取得
  	$categoryids = array();
  	foreach($category as $cat){
  		$categoryids = $cat->term_id;
  	}
  }

  $args = array(
    // 何個関連記事を取得するか
  	'posts_per_page' => 8,
    // 現在の記事を関連記事に入れない
  	'post__not_in' => array($post->ID),
    // 配列で取得したカテゴリーを代入
  	'category__in' => $categoryids,
    // 順番はランダムで表示させる
  	'orderby' => 'rand'
  );
   $related_query = new WP_Query($args);


   ?>
   <h5>関連記事</h5>
   <div class="d-flex flex-wrap">
  <?php if ($related_query->have_posts()) : ?>
    <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
        <div class="col-md-3 pb-5">
          <!-- サムネイル -->
          <div class="py-3">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('',array('class' => 'img-fluid')); ?>
            <?php else: ?>
              <img class="img-fluid" src="https://picsum.photos/800/400">
            <?php endif; ?>
          </div>
          <!-- 記事タイトル  -->
          <p class="h5">
            <a href="<?php the_permalink(); ?>" title="" class="text-secondary">
              <?php the_title(); ?>
            </a>
          </p>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php else: ?>
    <p><?php esc_html_e('Sorry no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>