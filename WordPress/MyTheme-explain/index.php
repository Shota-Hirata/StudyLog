<!-- header.phpを取得 -->
<?php get_header(); ?>
    <main class="bg-light">
      <div class="container">
        <!-- ピックアップ記事 -->
        <div class="row py-3">
          <!-- タグに「toppickup」を付けているものを$top_queryに代入 -->
            <?php $top_query = new WP_Query('tag=toppickup'); ?>
            <!-- $top_queryに代入された記事があれば -->
            <?php if ($top_query->have_posts()) : ?>
              <!-- 記事を繰り返し表示 -->
              <?php while ($top_query->have_posts()) : $top_query->the_post(); ?>
                <div class="col-md-4 col-12">
                  <div class="bg-white py-3">
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
                    <h2 class="h4 px-3 pb-3"><?php the_title(); ?></h2>
                    <!-- ボタン -->
                    <div class="text-center">
                      <!-- パーマリンクを取得 -->
                      <a href="<?php the_permalink(); ?>">
                        <div class="d-inline-block border p-3 text-secondary">
                          READ MORE
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php else: ?>
              <p><?php esc_html_e('Sorry no posts matched your criteria.'); ?></p>
          <?php endif; ?>
        </div>
        <div class="row py-3">
          <!-- メインコンテンツ -->
          <div class="col-md-8 col-12">
            <?php
            // 記事がある場合記事を出力し続ける
              if (have_posts()): while (have_posts()): ?>
                <?php the_post(); ?>
              <div class="bg-white py-3 mb-5 text-center">
                <!-- 日付 -->
                <p><?php the_time('Y/n/j'); ?></p>
                <!-- 記事タイトル  -->
                <h2 class="px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h2>
                <!-- カテゴリー -->
                <p><?php the_category(' '); ?></p>
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
                <!-- ディスクリプション -->
                <p class="text-secondary"><?php the_excerpt(); ?></p>
                <!-- ボタン -->
                <div class="text-center">
                  <a href="<?php the_permalink(); ?>">
                    <div class="d-inline-block border p-3 text-secondary">
                      READ MORE
                    </div>
                  </a>
                </div>
              </div>
              <!-- while文終了 -->
          <?php endwhile; ?>
          <!-- 記事がなかったら -->
           <?php else ?>
            <p>記事がありません</p>
            <!-- if文終了 -->
          <?php endif; ?>
          <!-- ページネーション -->
            <!-- <div class="float-left pb-3">
              <?php previous_posts_link('<div class="d-inline-block border p-3 text-secondary">前のページ</div>'); ?>
            </div>
            <div class="float-right pb-3">
              <?php next_posts_link('<div class="d-inline-block border p-3 text-secondary">次のページ</div>'); ?>
            </div> -->
            <?php if(function_exists("mytheme_pagenation")): ?>
              <?php mytheme_pagenation(); ?>
            <?php endif; ?>
          </div>
          <!-- サイドバー -->
          <?php get_sidebar(); ?>
        </div>
      </div>
      <!-- footer.phpを取得 -->
      <?php get_footer(); ?>