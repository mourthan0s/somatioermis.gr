<?php
    extract(wp_parse_args( $args, [
      'title_h2' => '',
      'content' => '',
    //   'postsList' => '',
  ]));
?>

<section class="help_row_text_with_posts_below">
    <div class="to_the_middle grid-x grid-padding-x">
        <div class="large-1"></div>

        <div class="large-10 center">
            <h2><?php echo $title_h2; ?></h2>
            <p><?php echo $content; ?></p>
            <div class="help_container">
                <img class="top-left" src="<?php echo get_template_directory_uri()?>/assets/images/shapes_left.webp">
                <img class="top-right" src="<?php echo get_template_directory_uri()?>/assets/images/shapes_right.webp">
                <img class="bottom-left" src="<?php echo get_template_directory_uri()?>/assets/images/border_left.webp">
                <img class="bottom-right" src="<?php echo get_template_directory_uri()?>/assets/images/border_right.webp">
                <div class="the_help_shortcode"><?php echo do_shortcode('[post_disorders]'); ?></div>
            </div>
        </div>
    </div>
</section>