<div class="col-md-4 col-12">
  <!-- ウィジェット取得 -->
  <?php dynamic_sidebar('sidebar_widget01'); ?>
  <!-- 読んでほしい記事 -->
  <div class="container bg-white mb-5 py-5">
    <div class="text-center pb-5">
      <h4 class="d-inline-block py-3 border-bottom border-info">読んでほしい記事</h4>
    </div>
    <!-- タグに「sidepickup」を付けているものを$side_queryに代入 -->
    <?php $side_query = new WP_Query('tag=sidepickup'); ?>
    <!-- $side_queryに代入された記事があれば -->
    <?php if ($side_query->have_posts()) : ?>
      <!-- 記事を繰り返し表示 -->
      <?php while ($side_query->have_posts()) : $side_query->the_post(); ?>
          <div class="pb-5">
            <!-- サムネイル -->
            <div class="py-3">
              <!-- サムネ画像があれば -->
              <?php if (has_post_thumbnail()) : ?>
                                                  <!-- クラス指定 -->
                <?php the_post_thumbnail('',array('class' => 'img-fluid')); ?>
                <!-- サムネ画像がなかったら -->
              <?php else: ?>
                <!-- デフォルト画像を表示 -->
                <img class="img-fluid" src="https://picsum.photos/800/400">
              <?php endif; ?>
            </div>
            <!-- 記事タイトル  -->
            <h5 class="h5">
              <!-- パーマリンクを取得 -->
              <a href="<?php the_permalink(); ?>" title="" class="text-secondary">
                <?php the_title(); ?>
              </a>
            </h5>
          </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php else: ?>
      <p><?php esc_html_e('Sorry no posts matched your criteria.'); ?></p>
  <?php endif; ?>

    <div class="text-center pb-5">
      <h4 class="d-inline-block py-3 border-bottom border-info">管理画面から入力した</h4>
    </div>
      <?php $pickup_id = esc_html(get_option('mytheme_pickup_article')); ?>
      <?php $pickup_ids = explode(",", $pickup_id); ?>
      <!-- idがあったとき -->
      <?php if($pickup_ids !== ''): ?>
        <!-- 配列を代入 -->
        <?php $manage_query = new WP_Query(
          array(
            // 全ての投稿タイプを取得
            'post_type' => 'any',
            // 記事を入れた順に表示
            'orderby' => 'post__in',
            // 配列に入れる記事
            'post__in' => $pickup_ids,
            // 代入した全ての記事を表示
            'posts_per_page' => -1
          )
        );
        ?>
    <?php if ($manage_query->have_posts()) : ?>
      <?php while ($manage_query->have_posts()) : $manage_query->the_post(); ?>
          <div class="pb-5">
            <!-- サムネイル -->
            <div class="py-3">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('',array('class' => 'img-fluid')); ?>
              <?php else: ?>
                <img class="img-fluid" src="https://picsum.photos/800/400">
              <?php endif; ?>
            </div>
            <!-- 記事タイトル  -->
            <h5 class="h5">
              <a href="<?php the_permalink(); ?>" title="" class="text-secondary">
                <?php the_title(); ?>
              </a>
            </h5>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else: ?>
        <p><?php esc_html_e('Sorry no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  <?php endif; ?>


    <div class="text-center pb-5">
      <h4 class="d-inline-block py-3 border-bottom border-info">人気記事の表示</h4>
    </div>
        <!-- idを取得 -->
        <?php set_post_views(get_the_ID()); ?>
        <?php $popular_query = new WP_Query(
          array(
            'meta_key' => $post_views_count,
            'orderby' => $meta_value_num,
            'posts_per_page' => 5
          )
        );
        ?>
    <?php if ($popular_query->have_posts()) : ?>
      <?php while ($popular_query->have_posts()) : $popular_query->the_post(); ?>
          <div class="pb-5">
            <!-- サムネイル -->
            <div class="py-3">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('',array('class' => 'img-fluid')); ?>
              <?php else: ?>
                <img class="img-fluid" src="https://picsum.photos/800/400">
              <?php endif; ?>
            </div>
            <!-- 記事タイトル  -->
            <h5 class="h5">
              <a href="<?php the_permalink(); ?>" title="" class="text-secondary">
                <?php the_title(); ?>
              </a>
            </h5>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else: ?>
        <p><?php esc_html_e('Sorry no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>
</div>