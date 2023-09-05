<?php $boxes = get_field('boxes'); ?>
<div class="boxes-wrapper">
    <div class="inner">
        <?php foreach($boxes as $box) { ?>
            <div class="box">
                <div class="title"><?php echo $box['box']['title']; ?></div>
                <div class="title-green-bg"><?php echo $box['box']['green_bg_titlwe']; ?></div>
                <div class="desc"><?php echo $box['box']['description']; ?></div>
            </div>
        <?php } ?>
    </div>
</div>