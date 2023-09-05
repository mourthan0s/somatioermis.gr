<?php
    $title = get_field('title_of_banners');
    $banners = get_field('bannerslist');
?>

<div class="little_banners grid-x grid-padding-x">
    <div class="large-1 cell"></div>
    <div class="banner_needs large-11 cell"><h3> <?php echo $title; ?> </h3></div>
    <div class="large-1 cell"></div>
    <div class="large-5 cell">
        <div class="banner_content">
            <div class="banner_content_up">
                    <div class="img-wrapper"><img class="image_one_side" src=" <?php echo $banners[0]["image"]["sizes"]["large"]; ?> " alt=""></div>
                    <div class="banner_sub_content">
                        <div class="banner_title"><h2> <?php echo $banners[0]["title"]; ?> </h2></div>
                        <div class="banner_text"> <?php echo $banners[0]["content"]; ?> </div>
                    </div>
            </div>
            <div class="banner_content_bottom">
                    <div class="img-wrapper"><img class="image_one_side" src=" <?php echo $banners[1]["image"]["sizes"]["large"]; ?> " alt=""></div>
                    <div class="banner_sub_content">
                        <div class="banner_title"><h2> <?php echo $banners[1]["title"]; ?> </h2></div>
                        <div class="banner_text"> <?php echo $banners[1]["content"]; ?> </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="large-5 cell">
        <div class="banner_content">
            <div class="banner_content_up">
                    <div class="img-wrapper"><img class="image_one_side" src=" <?php echo $banners[2]["image"]["sizes"]["large"]; ?> " alt=""></div>
                    <div class="banner_sub_content">
                        <div class="banner_title"><h2> <?php echo $banners[2]["title"]; ?> </h2></div>
                        <div class="banner_text"> <?php echo $banners[2]["content"]; ?> </div>
                    </div>
            </div>
            <div class="banner_content_bottom">
                    <div class="img-wrapper"><img class="image_one_side" src=" <?php echo $banners[3]["image"]["sizes"]["large"]; ?> " alt=""></div>
                    <div class="banner_sub_content">
                        <div class="banner_title"><h2> <?php echo $banners[3]["title"]; ?> </h2></div>
                        <div class="banner_text"> <?php echo $banners[3]["content"]; ?> </div>
                    </div>
            </div>
        </div>
    </div>
</div>