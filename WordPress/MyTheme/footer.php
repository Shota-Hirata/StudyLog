      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-12">
              <?php dynamic_sidebar('footer_widget01'); ?>
            </div>
            <div class="col-md-4 col-12 flex-row">
              <div class="pb-3">
                <h4 class="d-inline-block py-3 border-bottom border-info">Portfolio</h4>
              </div>
              <?php
              $defaults = array(
                'menu_class'      => 'list-unstyled',
                'container'       => false,
                'link_before'     => '<div class="p-3 border-top border-bottom border-secondary text-secondary">',
                'link_after'      => '</div>',
                'theme_location'  => 'footer-navigation',
                'items_wrap' => '<ul id="%1$s" class="%2$s flex-column">%3$s</ul>'
              );
              wp_nav_menu( $defaults );
              ?>
            </div>
            <div class="col-md-4 col-12">
              <?php dynamic_sidebar('footer_widget02'); ?>
            </div>
          </div>
        </div>
        <div class="bg-dark text-white text-center p-3">
          Copyright Shota Hirata <?php echo date("Y"); ?> All Right Reserved.
        </div>
      </footer>
    </main>
    <?php wp_footer(); ?>
  </body>
</html>