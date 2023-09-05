<?php
    extract(wp_parse_args( $args, [
      'full_width_image' => '',
      'text' => '',
      'button_learn_more' => ''
  ]));
?>

<section class="image_viewconsultation">
    <div class="home_parallax full_width_image" style="background-image: url('<?php echo $full_width_image["sizes"]["2048x2048"]; ?>');"></div>
    <div class="to_the_middle grid-x grid-padding-x">
        <div class="large-2"></div>

        <div class="large-8 center">
            <p><?php echo $text; ?></p>
            <?php if(!empty($button_learn_more["url"])) { ?>
                <a class="button_learn_more" href="<?php echo $button_learn_more["url"]; ?>"><?php echo $button_learn_more["title"]; ?></a>
            <?php } ?>
        </div>
    </div>
</section>