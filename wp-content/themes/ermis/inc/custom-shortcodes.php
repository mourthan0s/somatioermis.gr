<?php

// Shortcode for Sponsors
function custom_post_sponsors() {
    $args = [
        'post_type' => 'sponsor',
    ];
    $sponsors = new WP_Query($args);

    $sponsor_imgs = '<div class="swiper post_sponsors">';
    $sponsor_imgs .= '<div class="swiper-wrapper">';
    foreach ($sponsors->posts as $sponsor) {
        $sponsor_imgs .= '<div class="swiper-slide">'.get_the_post_thumbnail($sponsor->ID, 'sponsors-industry-thumbnail').'</div>';
    }
    $sponsor_imgs .= '</div>';

    // $sponsor_imgs .= '<div class="swiper-pagination"></div>';

    $sponsor_imgs .= '<div class="swiper-button-prev"></div>';
    $sponsor_imgs .= '<div class="swiper-button-next"></div>';

    $sponsor_imgs .= '</div>';

    return $sponsor_imgs;
}

add_shortcode( 'post_sponsors', 'custom_post_sponsors' );

// Shortcode for Disorders
function custom_post_disorders() {
    $args = [
        'post_type' => 'disorder',
    ];
    $disorders = new WP_Query($args);

    $disorder_imgs = '<div class="post_disorders">';
    foreach ($disorders->posts as $disorder) {
        $disorder_imgs .= '<div class="disorder"><a href="' . get_permalink($disorder->ID) . '"><div class="disorder_img">'.get_the_post_thumbnail($disorder->ID, 'disorders-industry-thumbnail').'</div>';
        $disorder_imgs .= '<div class="disorder_title"><h4>'.get_the_title($disorder->ID).'</h4></div></a></div>';
    }
    $disorder_imgs .= '</div>';

    return $disorder_imgs;
}

add_shortcode( 'post_disorders', 'custom_post_disorders' );

// Shortcode for Services
function custom_post_services() {
    $args = [
        'post_type' => 'service',
    ];
    $services = new WP_Query($args);

    $service_imgs = '<div class="post_services">';
    foreach ($services->posts as $index => $service) {
        $service_imgs .= '<div class="service service-' . ($index+1) . '"><a href="' . get_permalink($service->ID) . '"><div class="service_img">'.get_the_post_thumbnail($service->ID, 'services-industry-thumbnail').'</div>';
        $service_imgs .= '<div class="service-inner"><div class="service_title">'.get_the_title($service->ID).'</div><div class="service_excerpt">'.get_the_excerpt($service->ID).'</div></div></a></div>';
    }
    $service_imgs .= '</div>'; 

    return $service_imgs;
}

add_shortcode( 'post_services', 'custom_post_services' );

?>
