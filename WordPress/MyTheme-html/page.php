<?php get_header(); ?>
    <main class="bg-light">
      <div class="container">
        <div class="row py-3">
          <!-- メインコンテンツ -->
          <div class="col-md-10 col-12 mx-auto">
            <?php
              if (have_posts()): while (have_posts()):
                the_post();
            ?>
              <div class="bg-white py-3 mb-5 text-center">
                <!-- 日付 -->
                <p><?php the_time('Y/n/j'); ?></p>
                <!-- 記事タイトル  -->
                <h1 class="h2 px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h1>
                <!-- カテゴリー -->
                <p><?php the_category(' '); ?></p>
                <!-- サムネイル -->
                <div class="py-3">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('',array('class' => 'img-fluid')); ?>
                  <?php else: ?>
                    <img class="img-fluid" src="https://picsum.photos/800/400">
                  <?php endif; ?>
                </div>
                <!-- 本文 -->
                <div class="text-left">
                  <?php the_content(); ?>
                </div>
                <!-- ボタン -->
              </div>
          <?php endwhile; else: ?>
            <p>記事がありません</p>
          <?php endif; ?>
          </div>
        </div>
      </div>
      <?php get_footer(); ?>