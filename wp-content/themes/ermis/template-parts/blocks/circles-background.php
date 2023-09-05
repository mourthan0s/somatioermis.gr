<?php
    $shape_title = get_field('shape_title');
    $title_1 = get_field('title_1');
    $title_2 = get_field('title_2');
    $title_3 = get_field('title_3');
    $title_4 = get_field('title_4');
?>

<div class="title_of_circles_background grid-x grid-padding-x" style="background-color: #fff;">
    <div class="large-1"></div>
    <div class="large-10">
        <?php if (!empty($shape_title)) : ?> <h3> <?php echo $shape_title; ?> </h3> <?php endif; ?>
    </div>
</div>

<div class="sec_with_circles_background" style="background-color: #700353;">

    <!-- <div class="circles_background">
    </div> -->
    <!-- <div class="left_col_circles">
        <h1>Επαγγελματίες</h1>
        <h1>Γνωστοί</h1>
        <h1>Οι άνθρωποι που αγαπάμε</h1>
        <h1>Εγώ</h1>
    </div> -->
    <div class="circles_background_4">
        <?php if (!empty($title_1)) : ?> <h1> <?php echo $title_1; ?> </h1> <?php endif; ?>
        <div class="circles_background_3">
            <?php if (!empty($title_2)) : ?> <h1> <?php echo $title_2; ?> </h1> <?php endif; ?>
            <div class="circles_background_2">
                <?php if (!empty($title_3)) : ?> <h1> <?php echo $title_3; ?> </h1> <?php endif; ?>
                <div class="circles_background_1">
                    <?php if (!empty($title_4)) : ?> <h1> <?php echo $title_4; ?> </h1> <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
</div>