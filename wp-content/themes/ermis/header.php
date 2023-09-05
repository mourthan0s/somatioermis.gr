<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?> 
</head>
<body <?php body_class( $bodyClass . ' view ' . $user_browser ); ?>>

<script>
  var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>

<div class="header">
  <div class="header-inner">

    <div class="left_h">
      <div class="header_menu js-show-menu">
        <div class="burger-menu"><span></span><span></span><span></span></div>
        <div class="text_menu">Μενού</div>
      </div>
    </div>

    <div class="middle_h">
      <div class="logo">
        <a href="<?php echo get_home_url(); ?>">
          <?php $logo_image = get_theme_mod( 'ermis_logo' );
          if ( $logo_image ) {
              echo '<img src="' . esc_url( $logo_image ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
          } else {
              echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
          } ?>
        </a>
      </div>
    </div>

    <div class="right_h">
      <?php if ( is_active_sidebar( 'rightheader-widget' ) ) : ?>
      <div class="right_header">
        <?php dynamic_sidebar( 'rightheader-widget' ); ?>
      </div>
      <?php endif; ?>
    </div>
    <div class="fullscreen-menu-wrapper">
      <div class="inner">
          <div class="closeBtn">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/closex.png" alt="close menu">
              <span>ΚΛΕΙΣΙΜΟ</span>
          </div>
            <div class="inner grid-x grid-padding-x">
                <div class="large-1"></div>
                <div class="large-5 menu-left">
                  <?php wp_nav_menu(['theme_location' => 'main', 'menu_class' => 'main-menu-wrapper','walker' => new Main_Menu_Custom_Walker()]); ?>
                </div>
                <div class="large-5 text-right">
                  <img class="logo-right" src="<?php echo get_template_directory_uri()?>/assets/images/ermis-logo-menu-right.png" alt="Ermis logo menu">
                  <?php wp_nav_menu(['theme_location' => 'main_right', 'menu_class' => 'main-menu-right-wrapper']); ?>
                </div>
                <div class="large-1"></div>
            </div> 
      </div> 
    </div>
  </div>




</div>