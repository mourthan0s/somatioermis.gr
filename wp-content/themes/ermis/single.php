<?php get_header(); ?>
<div class="single-post-wrapper">
    <div class="featured-img"><?php the_post_thumbnail(); ?></div>
    <h1 class="post-title"><?php the_title(); ?></h1>
    <div class="date"><?php echo get_the_date('d/m/Y',get_the_ID()); ?></div>
    <?php the_content(); ?>
</div>
<div class="news_slider_text_with_posts_below">
    <div class="to_the_middle">
        <div class="photos_wrapper_outer">
            <div class="photos_wrapper">
                <div class="left_photo">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/comment.webp" alt="Left Photo">
                </div>
                <h2>Σχετικά Άρθρα</h2>
                <div class="right_photo">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/important.webp" alt="Right Photo">
                </div>
            </div>
        </div>

        <div class="news_slider_text_with_posts_below_wrapper">
            <div class="the_news_slides swiper">
                <div class="swiper-wrapper">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query( $args );
                        if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) :
                                $query->the_post();
                    ?>
                    <div class="swiper-slide">
                        <div class="post-wrapper">
                            <div class="post-image">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'full' ); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="post-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="post-date"><?php echo get_the_date(); ?></div>
                            </div>
                        </div>
                    </div>
                    <!-- <?php// if ( $query->current_post % 3 === 2 ) : ?>
                        <div class="swiper-slide"></div>
                    <?php //endif; ?> -->
                    <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>