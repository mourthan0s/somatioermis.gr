<?php
    extract(wp_parse_args( $args, [
      'left_image' => '',
      'title_h3' => '',
      'content' => '',
      'button_learn_more' => ''
  ]));
?>

<section class="image_guiding">
    <div class="grid-x grid-padding-x">
        <div class="left_image large-6">
            <img src="<?php echo $left_image["sizes"]["2048x2048"]; ?>" alt="">
        </div>
        <div class="right large-6">
            <h3 class="title_h3"><?php echo $title_h3; ?></h3>
            <p class="content"><?php echo $content; ?></p>
            <?php if(!empty($button_learn_more["url"])) { ?>
                <a class="button_learn_more" href="<?php echo $button_learn_more["url"]; ?>"><?php echo $button_learn_more["title"]; ?></a>
            <?php } ?>
        </div>
    </div>
</section>