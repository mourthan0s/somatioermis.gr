<?php
    extract(wp_parse_args( $args, [
      'numbers' => ''
  ]));
?>

<section class="rating">
<div class="sub_rating">
    <?php foreach ($numbers as $i=>$number) {?>
        <div class="single_rating">
            <div class="rate"><?php echo $number['rate']; ?></div>
            <div class="rate_title"><?php echo $number['rate_title']; ?></div>
        </div>
        <?php if($i < count($numbers)-1) {?>
            <div class="rate_divider"><img src="<?php echo get_template_directory_uri()?>/assets/images/divider.webp" alt=""></div>
        <?php } ?>
    <?php }?>
</div>
</section>