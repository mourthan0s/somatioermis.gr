<?php
    $title = get_field('title');
    $img = get_field('image');

    $green_up = get_field('green_up');
    $green_middle = get_field('green_middle');
    $green_down = get_field('green_down');

    $purple_up = get_field('purple_up');
    $purple_middle = get_field('purple_middle');
    $purple_down = get_field('purple_down');
?>


<div class="leads_circles_sec" style="background-color: #fff">

    <div class="leads_up grid-x grid-padding-x">
        <div class="large-1 cell"></div>
        <div class="leads_title large-11 cell"><h3> Όλα αυτά οδηγούν: </h3></div>
    </div>

    <div class="leads_circles grid-x grid-padding-x">
        <div class="large-1 cell"></div>

        <div class="green_side large-4 medium-5 small-5 cell">
            <div class="green_up">
                <div class="half_circle">
                    <?php if (!empty($green_up)) : ?> <div class="bullet"></div><p> <?php echo $green_up; ?> </p><?php endif; ?>
                </div>
            </div>
            <div class="green_middle">
                <div class="half_circle">
                    <?php if (!empty($green_middle)) : ?> <div class="bullet"></div><p>  <?php echo $green_middle; ?> </p><?php endif; ?>
                </div>
            </div>
            <div class="green_down">
                <div class="half_circle">
                    <?php if (!empty($green_down)) : ?> <div class="bullet"></div><p>  <?php echo $green_down; ?> </p><?php endif; ?>
                </div>
            </div>
        </div>

        <div class="black_middle large-2 medium-2 small-2 cell">
            <div class="dots_circle">
                <?php if (!empty($img)) : ?> <img class="img_black_middle" src="<?php echo $img["url"]; ?>" alt=""> <?php endif; ?>
            </div>
        </div>

        <div class="purple_side large-4 medium-5 small-5 cell">
            <div class="purple_up">
                <div class="half_circle">
                    <?php if (!empty($purple_up)) : ?> <div class="bullet"></div><p>  <?php echo $purple_up; ?> </p><?php endif; ?>
                </div>
            </div>
            <div class="purple_middle">
                <div class="half_circle">
                    <?php if (!empty($purple_middle)) : ?> <div class="bullet"></div><p>  <?php echo $purple_middle; ?> </p><?php endif; ?>
                </div>
            </div>
            <div class="purple_down">
                <div class="half_circle">
                    <?php if (!empty($purple_down)) : ?> <div class="bullet"></div><p>  <?php echo $purple_down; ?> </p><?php endif; ?>
                </div>
            </div>
        </div>
        
        <div class="large-1 cell"></div>
    </div>
</div>