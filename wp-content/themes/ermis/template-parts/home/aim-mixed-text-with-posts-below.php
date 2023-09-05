<?php
    extract(wp_parse_args( $args, [
        'title_h2' => '',
        'content' => '',
      //   'postsList' => ''
    ]));

  $aims = new WP_Query([
      'post_type' => 'aim',
  ]);

  foreach ($aims->posts as $index => $aim) {
      if(get_field('make_post_external_link',$aim->ID)){
        $link = get_field('link',$aim->ID);
        if (empty($link)) { 
          $pointerEvents = 'style="pointer-events:none;"' ; 
        } else{
          $pointerEvents = '' ; 
        }
      }else{
        $link = get_permalink($aim->ID);
      }
      if ($index < 1){
        $aim_img1 .= '<div class="aim aim-' . ($index+1) . '"><a '. $pointerEvents .' href="' . $link . '"><div class="aim_img">'.get_the_post_thumbnail($aim->ID, 'aims-industry-thumbnail').'</div>';
        $aim_img1 .= '<div class="tit_excp"><div class="aim_title"><h2>'.get_the_title($aim->ID).'</h2></div><div class="aim_excerpt">'.get_the_excerpt($aim->ID).'</div><img class="aim_arrow" src="'.get_template_directory_uri().'/assets/images/arrow.webp"></div></a></div>';
      } else {
        $aim_imgs .= '<div class="aim aim-' . ($index+1) . '"><a '. $pointerEvents .' href="' . $link . '"><div class="aim_img">'.get_the_post_thumbnail($aim->ID, 'aims-industry-thumbnail').'</div>';
        $aim_imgs .= '<div class="tit_excp"><div class="aim_title"><h2>'.get_the_title($aim->ID).'</h2></div><div class="aim_excerpt">'.get_the_excerpt($aim->ID).'</div><img class="aim_arrow" src="'.get_template_directory_uri().'/assets/images/arrow.webp"></div></a></div>';
      }
  }
?>

<section class="aim_mixed_text_with_posts_below">
    <div class="to_the_middle grid-x grid-padding-x">
        <div class="large-1"></div>
        <div class="aim_content large-10 medium-12">
          <div class="centerCols">
            <div class="aim_text">
              <h2><?php echo $title_h2; ?></h2>
              <p><?php echo $content; ?></p>
            </div>
            <div class="first_aim">
              <?php echo $aim_img1; ?>
            </div>
          </div>
          <div class="post_aims centerCols">
             <?php echo $aim_imgs; ?>
          </div>
        </div>
    </div>
</section>