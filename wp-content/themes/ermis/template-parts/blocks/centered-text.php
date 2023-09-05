<?php $btn = get_field('button'); ?>
<div class="centered-text">
    <div class="inner">
        <div class="title"><?php echo get_field('title'); ?></div>
        <div class="desc"><?php echo get_field('description'); ?></div>
        <div class="btn">
            <a href="<?php echo $btn["url"]; ?>" target="<?php echo $btn["target"]?>"><?php echo $btn["title"]; ?></a>
        </div>
    </div>
</div>