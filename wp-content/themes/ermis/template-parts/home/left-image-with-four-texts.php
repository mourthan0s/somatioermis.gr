<?php
    extract(wp_parse_args( $args, [
      'left_image' => '',
      'contentlist' => ''
  ]));
?>

<section class="left_image_with_four_texts">
    <div class="left_image">
        <img src=<?php echo $left_image["sizes"]["2048x2048"]; ?> alt="<?php echo $left_image["alt"]; ?>">
    </div>
    <div class="right_list">
        <?php echo $contentlist; ?>
    </div>
</section>