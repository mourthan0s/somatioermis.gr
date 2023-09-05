<?php
    $background = get_field('background_color_of_section');
    $but_img_right = get_field('image_position_right');
    $but_img_padding = get_field('image_padding');
    $contents =  get_field('paragraph_of_section');
    $img =  get_field('image_of_section');
    $img_second =  get_field('second_image');
    $anchor_ID =  get_field('anchor_id');
    $but_donate =  get_field('button_donation');
?>


<div id="<?php echo $anchor_ID; ?>" class="image_with_text grid-x grid-padding-x <?php echo $background; ?> <?php if ($but_img_right) { echo 'image_right'; } ?> <?php if ($but_img_padding) { echo 'image_padding'; } ?> <?php if (!empty($img_second)) { echo 'second_image'; } ?>" style="background-color: <?php echo $background; ?>;">
    
    <?php if ($but_img_right) { ?>
        <div class="large-6 medium-12">
            <?php if (!empty($img)) : ?> <img class="image_one_side" src="<?php echo $img["url"]; ?>" alt="image_one_side"> <?php endif; ?>
        </div>
    <?php } ?>

    <?php if (!$but_img_right) { ?>
        <div class="large-1"></div>
    <?php } ?>

    <div class="text_one_side large-5 medium-12">
        <?php if (!empty($contents)) : ?>
            <?php foreach ($contents as $content) { ?>
                <div class="disorders_content <?php echo $content["divider_location"]; ?>"> <?php echo $content["content_of_section"]; ?> </div>
            <?php } ?>
        <?php endif; ?>
        <?php if (!empty($but_donate)) : ?> <a class="but_head custom_button" href="<?php echo $but_donate["url"]; ?>" title="" id=""><?php echo $but_donate["title"]; ?></a> <?php endif; ?>
    </div>
    
    <?php if (!$but_img_right) { ?>
        <div class="large-6 medium-12">
            <?php if (!empty($img)) : ?> <img class="image_one_side" src="<?php echo $img["url"]; ?>" alt="image_one_side"> <?php endif; ?>
            <?php if (!empty($img_second)) : ?> <img class="image_one_side sec" src="<?php echo $img_second["url"]; ?>" alt="second_image"> <?php endif; ?>
        </div>
    <?php } ?>

</div>