<?php
    $title = get_field('title_of_element');
    $full_r = get_field('row_full_width');
    $left_r = get_field('row_left_column');
    $right_r = get_field('row_right_column');
    $anchor_ID =  get_field('anchor_id');
?>


<div id="<?php echo $anchor_ID; ?>" class="disorders_one_column_text grid-x grid-padding-x #700353" style="background-color: #700353;">
    <div class="large-1 cell"></div>
    <div class="disorders_big_col large-10 cell">
        <?php if (!empty($title)) : ?> <div class="disorders_title"><h3> <?php echo $title; ?> </h3></div> <?php endif; ?>
        <?php if (!empty($full_r)) : ?> <div class="disorders_content"> <?php echo $full_r; ?> </div> <?php endif; ?>
    </div>
    <div class="large-1 cell"></div>
    <div class="large-12 space_between"></div>
    <div class="large-1 cell"></div>
    <?php if (!empty($left_r)) : ?> <div class="disorders_content large-5 cell"> <?php echo $left_r; ?> </div> <?php endif; ?>
    <?php if (!empty($left_r)) : ?> <div class="disorders_content large-5 cell"> <?php echo $right_r; ?> </div> <?php endif; ?>
    <div class="large-1 cell"></div>
</div>