<?php
    extract(wp_parse_args( $args, [
      'full_width_image' => '',
      'title_h3' => '',
      'content' => '',
      'button_learn_more' => ''
  ]));
?>

<section class="image_aboutbuilding">
    <div class="full_width_image">
        <img src="<?php echo $full_width_image["sizes"]["2048x2048"]; ?>" alt="">
    </div>
    <div class="left grid-x grid-padding-x">
        <div class="large-1"> </div>
        <div class="large-5">
            <h3 class="title_h3"><?php echo $title_h3; ?></h3>
            <p class="content"><?php echo $content; ?></p>
            <?php if(!empty($button_learn_more["url"])) { ?>
                <a class="button_learn_more" href="<?php echo $button_learn_more["url"]; ?>"><?php echo $button_learn_more["title"]; ?></a>
            <?php } ?>
        </div>
    </div>
</section>