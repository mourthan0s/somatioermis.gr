<?php
/** Template Name: Home Page **/
get_header(); 
$fields = get_field('homepage_sections');
?>

<?php foreach ($fields as $field) {
    if($field['acf_fc_layout'] === "full_width_image_titles" ) {
        get_template_part( '/template-parts/home/full-width-image-titles', null, [
            'full_width_image' => $field["full_width_image"],
            'title_h1' => $field['title_h1'],
            'min_title' => $field['min_title']
        ] );

    } else if($field['acf_fc_layout'] === "left_image_with_four_texts" ) { 
            get_template_part( '/template-parts/home/left-image-with-four-texts', null, [
            'left_image' => $field['left_image'],
            'contentlist' => $field['contentlist']
        ] );

    } else if($field['acf_fc_layout'] === "image_aboutbuilding" ) {
        get_template_part( '/template-parts/home/image-aboutbuilding', null, [
            'full_width_image' => $field['full_width_image'],
            'title_h3' => $field['title_h3'],
            'content' => $field['content'],
            'button_learn_more' => $field['button_learn_more']
        ] );

    } else if($field['acf_fc_layout'] === "help_row_text_with_posts_below" ) {
        get_template_part( '/template-parts/home/help-row-text-with-posts-below', null, [
            'title_h2' => $field['title_h2'],
            'content' => $field['content'],
            // 'postsList' => $field['postsList'],
        ] );

    } else if($field['acf_fc_layout'] === "services_grid_text_with_posts_below" ) {
        get_template_part( '/template-parts/home/services-grid-text-with-posts-below', null, [
            'title_h2' => $field['title_h2'],
            'content' => $field['content'],
            // 'postsList' => $field['postsList'],
        ] );

    } else if($field['acf_fc_layout'] === "image_innovations" ) {
        get_template_part( '/template-parts/home/image-innovations', null, [
            'full_width_image' => $field['full_width_image'],
            'title_h3' => $field['title_h3'],
            'content' => $field['content'],
            'button_learn_more' => $field['button_learn_more']
        ] );

    } else if($field['acf_fc_layout'] === "aim_mixed_text_with_posts_below" ) {
        get_template_part( '/template-parts/home/aim-mixed-text-with-posts-below', null, [
            'title_h2' => $field['title_h2'],
            'content' => $field['content'],
            // 'postsList' => $field['postsList'],
        ] );

    } else if($field['acf_fc_layout'] === "image_guiding" ) {
        get_template_part( '/template-parts/home/image-guiding', null, [
            'left_image' => $field['left_image'],
            'title_h3' => $field['title_h3'],
            'content' => $field['content'],
            'button_learn_more' => $field['button_learn_more']
        ] );

    } else if($field['acf_fc_layout'] === "rating" ) {
        get_template_part( '/template-parts/home/rating', null, [
            'numbers' => $field['numbers'],
        ] );
        
    } else if($field['acf_fc_layout'] === "news_slider_text_with_posts_below" ) {
        get_template_part( '/template-parts/home/news-slider-text-with-posts-below', null, [
            'title_h2' => $field['title_h2'],
            // 'postsList' => $field['postsList'],
        ] );
        
    } else if($field['acf_fc_layout'] === "image_viewconsultation" ) {
        get_template_part( '/template-parts/home/image-viewconsultation', null, [
            'full_width_image' => $field['full_width_image'],
            'text' => $field['text'],
            'button_learn_more' => $field['button_learn_more'],
        ] );
    }
}?>

<?php

get_template_part( '/template-parts/home/helpers_slides', 'slides');

get_footer();

?>
