<?php
    $background = get_field('background_color_of_columns');
    $but_choose_two = get_field('choose_columns');
    $one = get_field('one_columns_text');
    $two = get_field('two_columns_text');
    $anchor_ID =  get_field('anchor_id');
?>


<?php if (!$but_choose_two) { ?>
    <?php if (!empty($one)) : ?>
        <div id="<?php echo $anchor_ID; ?>" class="disorders_one_column_text grid-x grid-padding-x <?php echo $background; ?> <?php if ($but_choose_two) { echo 'two_columns_field'; } ?>" style="background-color: <?php echo $background; ?>;">
            <div class="large-1 cell"></div>
            <div class="disorders_big_col large-10 cell">
                <div class="disorders_title"><h3> <?php echo $one["column_title"]; ?> </h3></div>
                <div class="disorders_content"> <?php echo $one["column_text"]; ?> </div>
            </div>
        </div>
    <?php endif; ?>
<?php } ?>

<?php if ($but_choose_two) { ?>
    <?php if (!empty($two)) : ?>
        <div id="<?php echo $anchor_ID; ?>" class="disorders_two_columns_text grid-x grid-padding-x <?php echo $background; ?> <?php if ($but_choose_two) { echo 'two_columns_field'; } ?>" style="background-color: <?php echo $background; ?>;">
            <div class="large-1 cell"></div>
            <div class=" large-5 cell">
                <div class="disorders_title">
                    <h3> <?php echo $two["left_column_title"]; ?> </h3>
                    <?php echo $two["left_column_text"]; ?> 
                </div>
            </div>
            <div class="large-5 cell"> 
                <div class="disorders_content">
                    <h3> <?php echo $two["right_column_title"]; ?> </h3>
                    <?php echo $two["right_column_text"]; ?>
                </div> 
            </div>
            <div class="large-1 cell"></div>
        </div>
    <?php endif; ?>
<?php } ?>