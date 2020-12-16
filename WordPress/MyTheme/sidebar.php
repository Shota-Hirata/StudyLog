<div class="col-md-4 col-12">
  <?php dynamic_sidebar('sidebar_widget01'); ?>
  <!-- 読んでほしい記事 -->
  <div class="container bg-white mb-5 py-5">
    <div class="text-center pb-5">
      <h4 class="d-inline-block py-3 border-bottom border-info">読んでほしい記事</h4>
    </div>
    <?php $side_query = new WP_Query('tag=sidepickup'); ?>
    <?php if ($side_query->have_posts()) : ?>
      <?php while ($side_query->have_posts()) : $side_query->the_post(); ?>
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