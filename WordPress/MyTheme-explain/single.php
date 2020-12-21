<?php get_header(); ?>
    <main class="bg-light">
      <div class="container">
        <div class="row py-3">
          <!-- メインコンテンツ -->
          <div class="col-md-8 col-12">
            <?php
              if (have_posts()): while (have_posts()):
                the_post();
            ?>
              <div class="bg-white py-3 mb-5 text-center">
                <!-- 日付 -->
                <p><?php the_time('Y/n/j'); ?>
                <!-- 更新があれば更新日を表示 -->
                <?php if(get_the_modified_date("Y/n/j")): ?>
                  (更新日：<?php echo get_the_modified_date("Y/n/j"); ?>)
                <?php endif; ?>
                <!-- カスタムフィールド -->
                <?php $weather = get_post_meta($post->ID, 'Weather', true) ?>
                <?php if($weather): ?>
                  天気は<?php echo $weather; ?>
                <?php endif; ?></p>
                <!-- 記事タイトル  -->
                <h1 class="h2 px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h1>
                <!-- カテゴリー -->
                <p><?php the_category(' '); ?></p>
                <!-- カスタムタクソノミー -->
                <!-- <p><?php the_terms($post->ID, 'genre'); ?></p> -->
                <?php
                  $terms = get_the_terms($post->ID, 'genre');
                  if($terms):
                ?>
                  <?php foreach($terms as $term): ?>
                    <p>
                      <a href="<?php echo get_term_link($term->slug, 'genre'); ?>">
                        <?php echo $term->name; ?>
                      </a>
                    </p>
                  <?php endforeach; ?>
                <?php endif; ?>
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
                  <!-- SNSシェアボタン -->
                  <?php get_template_part('parts-sns'); ?>
                  <!-- comment.phpを呼び出す -->
                  <?php comments_template(); ?>
                  <p>投稿者
                        <!-- 投稿者のTwitterのリンクを挿入 -->
                    <a href="<?php echo esc_url(get_the_author_meta('twitter')); ?>">
                        <!-- 投稿者のニックネームを表示 -->
                    <?php echo esc_attr(get_the_author_meta('nickname')); ?>
                    </a>
                  </p>
                  <!-- パンくずリストを表示 -->
                  <?php get_template_part('breadcrumb'); ?>
                  <!-- 関連記事を表示 -->
                  <?php get_template_part('related'); ?>
                </div>
              </div>
          <?php endwhile; else: ?>
            <p>記事がありません</p>
          <?php endif; ?>
          </div>
          <!-- サイドバー -->
          <?php get_sidebar(); ?>
        </div>
      </div>
      <?php get_footer(); ?>