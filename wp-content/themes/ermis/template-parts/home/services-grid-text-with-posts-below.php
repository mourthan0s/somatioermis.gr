<?php
    extract(wp_parse_args( $args, [
      'title_h2' => '',
      'content' => '',
    //   'postsList' => '',
  ]));
?>

<!-- DIVIDER -->
<div class="sections_divider"></div>
<!--  -->

<section class="services_grid_text_with_posts_below">
    <div class="to_the_middle grid-x grid-padding-x">
        <div class="large-1"></div>

        <div class="large-10 center">
            <div class="photos_wrapper">
                <div class="left_photo">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/bullets_left.webp" alt="Left Photo">
                </div>
                <h2><?php echo $title_h2; ?></h2>
                <div class="right_photo">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/bullets_right.webp" alt="Right Photo">
                </div>
            </div>
            <p><?php echo $content; ?></p>
        </div>
        <div class="the_services_shortcode cell"><?php echo do_shortcode('[post_services]'); ?></div>
    </div>
    
</section>