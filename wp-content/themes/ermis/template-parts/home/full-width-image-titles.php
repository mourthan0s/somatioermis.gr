<?php
    extract(wp_parse_args( $args, [
      'full_width_image' => '',
      'title_h1' => '',
      'min_title' => ''
  ]));
?>

<section class="full_width_image_titles">
    <div class="full_width_image">
        <img src="<?php echo $full_width_image["sizes"]["2048x2048"]; ?>" alt="">
    </div>
    <div class="main_title">
        <h1 class="text-center"><?php echo $title_h1; ?></h1>
        <p class="min_title text-center"><?php echo $min_title; ?></p>
    </div>
</section>
