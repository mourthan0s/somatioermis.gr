<?php
    $text =  get_field('quote_text');
?>


<div class="disorders_quotes grid-x grid-padding-x">
    <div class="quot_img large-1 cell">
        <img class="left_quot_img" src="<?php echo get_template_directory_uri()?>/assets/images/left-quote.webp">
    </div>
        <?php if (!empty($text)) : ?> <div class="quote_text large-10 cell"><?php echo $text; ?></div> <?php endif; ?>
    <div class="quot_img large-1 cell">
        <img class="right_quot_img" src="<?php echo get_template_directory_uri()?>/assets/images/right-quote.webp">
    </div>
</div>