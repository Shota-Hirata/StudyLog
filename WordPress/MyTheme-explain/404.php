<?php get_header(); ?>
    <main class="bg-light">
      <div class="container">
        <div class="row py-3">
          <!-- メインコンテンツ -->
          <div class="col-md-8 col-12">
            <div class="bg-white mb-5 p-5">
              <h1 class="h2 px-3 pb-3 font-weight-bolder">
                記事がありません
              </h1>
              <p>キーワード検索</p>
              <!-- 検索バーを表示 -->
              <?php get_search_form(); ?>
              <p>カテゴリーから探す</p>
              <!-- カテゴリー一覧を表示 -->
              <?php wp_list_categories( ); ?>
            </div>
          </div>
          <!-- サイドバー -->
          <?php get_sidebar(); ?>
        </div>
      </div>
      <?php get_footer(); ?>