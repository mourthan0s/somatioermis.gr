<?php
    $column_img = get_field('column_image');
    $anchor_ID =  get_field('anchor_id');
?>


<?php if (!empty($column_img)) : ?>
    <div id="<?php echo $anchor_ID; ?>" class="column_image grid-x grid-padding-x #FFF" style="background-color: #fff;">
        <div class="large-1 cell"></div>
        <div class="large-6 cell">
            <div class="disorders_title"><h3> <?php echo $column_img["title_column"]; ?> </h3></div>
            <div class="disorders_content"> <?php echo $column_img["text_column"]; ?> </div>
        </div>
        <div class="large-5 cell">
            <img class="one_right_column_image" src="<?php echo $column_img["right_image_column"]["url"]; ?>" alt="">
        </div>
    </div>
<?php endif; ?>
