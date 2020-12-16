      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-12">
              <?php dynamic_sidebar('footer_widget01'); ?>
            </div>
            <div class="col-md-4 col-12">
              <div class="pb-5">
                <h4 class="d-inline-block py-3 border-bottom border-info">Portfolio</h4>
              </div>
              <?php
              $defaults = array(
                'menu_class'      => 'list-unstyled',
                'container'       => false,
                'link_before'     => '<div class="p-3 border-top border-bottom border-secondary text-secondary">',
                'link_after'      => '</div>',
                'theme_location'  => 'footer-navigation',
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
          Copyright Shota Hirata All Right Reserved.
        </div>
      </footer>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>