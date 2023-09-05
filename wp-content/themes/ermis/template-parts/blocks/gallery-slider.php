<div class="slider-gallery-wrapper">
    <div class="gallery-slider swiper">
        <div class="swiper-wrapper">
            <?php foreach(get_field('gallery') as $img){ ?>
                <div class="swiper-slide">
                    <div class="img-wrapper">
                        <img src="<?php echo $img["sizes"]["large"]; ?>" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>