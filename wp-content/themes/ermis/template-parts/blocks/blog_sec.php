<?php
    $title = get_field('title');
    $sub = get_field('sub_title');
    $content = get_field('content');
?>


<div class="blog_sec grid-x grid-padding-x">

    <div class="large-1"></div>
    
    <div class="large-11">

        <?php if (!empty($title)) : ?>
            <h1><?php echo $title; ?></h1>
        <?php else: ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>

        <div class="blog_subtitle"><h5><?php echo $sub; ?></h5></div>

        <div class="blog_paragraph"><?php echo $content; ?></div>

    </div>

</div>