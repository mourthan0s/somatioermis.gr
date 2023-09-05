<?php
    $button = get_field('use_text_only');
    $text = get_field('text_only');
    $title =  $button ? '' : get_field('anchor_title');
    $sub_title =  $button ? '' : get_field('anchor_sub_title');
    $links =  $button ? '' : get_field('anchor_links');
    $img =  get_field('anchor_img_background');
    $anchor_ID =  get_field('anchor_id');
    $color =  get_field('letters_color');
?>


<section class="anchor_menu_sec">
    <div class="grid-container">
        <div id="<?php echo $anchor_ID; ?>" class="menu_with_image_background grid-x grid-padding-x <?php if ($color) { echo 'letters_green'; } ?>">

            <?php if ($button) : ?>
                <div class="text_only"><?php echo $text; ?></div>
            <?php elseif (!empty($title)) : ?>
                <div class="the_disorders_title"><h1><?php echo $title; ?></h1></div>
            <?php else: ?>
                <div class="the_disorders_title"><h1><?php the_title(); ?></h1></div>
            <?php endif; ?>
            
            <?php if (!$button) : ?>
                <div class="the_anchor_menu">
                    <?php if (!empty($links)) : ?>
                        <?php foreach ($links as $link) { ?>
                            <a href="<?php echo $link["anchor_id"]?>"> <div class="disorders_title_menu"><?php echo $link["anchor_list_text"]; ?></div> </a>
                        <?php } ?>
                    <?php endif; ?>
                    <?php if (!empty($sub_title)) : ?> <div class="disorders_sub_title_menu"><?php echo $sub_title; ?></div> <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <?php if (!empty($img)) : ?> <img class="image_background" src="<?php echo $img["url"]; ?>" alt="post_background"> <?php endif; ?>
</section>