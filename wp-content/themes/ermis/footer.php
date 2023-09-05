
    <footer class="footer">
      <div class="footer-inner grid-x grid-padding-x">

        <?php if ( is_active_sidebar( 'back_to_top-widget' ) ) : ?>
          <div class="back_to_top large-12 cell">
            <?php dynamic_sidebar( 'back_to_top-widget' ); ?>
          </div>
        <?php endif; ?>

        <div class="large-1 medium-1 cell"></div>

        <?php if ( is_active_sidebar( 'footer1-widget' ) ) : ?>
        <div class="footer1 large-3 medium-4 small-12 cell">
          <?php dynamic_sidebar( 'footer1-widget' ); ?>
        </div>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'footer2-widget' ) ) : ?>
        <div class="footer2 large-4 medium-3 small-12 cell">
          <div class="footer2_widget">
            <?php dynamic_sidebar( 'footer2-widget' ); ?>
          </div>
          <?php endif; ?>
          <div class="footer_menu">
            <?php wp_nav_menu( ['theme_location' => 'footer', 'menu_class' => 'column-wrapper',]); ?>
          </div>
        </div>
        <?php if ( is_active_sidebar( 'footer3-widget' ) ) : ?>
        <div class="footer3 large-3 medium-3 small-12 cell">
          <?php dynamic_sidebar( 'footer3-widget' ); ?>
        </div>
        <?php endif; ?>

      </div>
      <div class="copyright">
              <div class="inner">
                <?php wp_nav_menu(['theme_location' => 'copyright', 'menu_class' => 'copyright-wrapper col']); ?>
                <div class="col">Copyright <?php echo date("Y"); ?> All Rights Reserved</div>
                <div class="col">Designed & Developed by  <a target="_blank" href="https://wildwildweb.gr"><img class="wild" src="<?php echo get_template_directory_uri()?>/assets/images/wild-logo.png" alt="Κατασκευή Ιστοσελίδων"></a></div>
              </div>
      </div>
    </footer>

    <?php wp_footer();  ?>
  </body>
</html>