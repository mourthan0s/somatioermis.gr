<?php
    $title_up = get_field('title_up');
    $content = get_field('content');
    $title_down = get_field('title_down');
?>


<div class="pie_chart grid-x grid-padding-x" style="background-color: #fff">
    <div class="large-1"></div>
    <div class="pieContainer_arrows large-5 cell">
        <!-- <div class="pieContainer">
            <div class="pieBackground"></div>
            <div id="pieSlice1" class="hold"><div class="pie"></div></div>
            <div id="pieSlice2" class="hold"><div class="pie"></div></div>
        </div> -->
        <div class="pie-chart-wrapper"><?php echo  wp_get_attachment_image(get_field('pie_image'),'full'); ?>
            <svg class="up_arrow_pie" width="176" height="28" viewBox="0 0 176 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path style="fill:#007567;" d="M174.173 15.6986L6.76532 15.6986L15.6811 24.6144C16.3936 25.3269 16.3936 26.4962 15.6811 27.2087C14.9686 27.9212 13.8176 27.9212 13.105 27.2087L1.06505 15.1687C0.35251 14.4562 0.35251 13.3052 1.06505 12.5926L13.0868 0.534388C13.4281 0.192276 13.8915 1.4172e-05 14.3748 1.41297e-05C14.8581 1.40875e-05 15.3215 0.192275 15.6628 0.534388C16.3754 1.24692 16.3754 2.39794 15.6628 3.11047L6.76532 12.0445L174.173 12.0445C175.178 12.0445 176 12.8667 176 13.8715C176 14.8764 175.178 15.6986 174.173 15.6986Z" fill="#700353"/>
            </svg>
            <img class="down_arrow_pie" src="<?php echo get_template_directory_uri()?>/assets/images/down_arrow_pie.webp">
        </div>
    </div>
    <div class="pie_content large-5 cell">
        <?php if (!empty($title_up)) : ?> <div class="title_up"> <h3> <?php echo $title_up; ?> </h3> </div> <?php endif; ?>
        <?php if (!empty($content)) : ?> <div class="contain_text"> <?php echo $content; ?> </div> <?php endif; ?>
        <?php if (!empty($title_down)) : ?> <div class="title_down"> <h3> <?php echo $title_down; ?> </h3> </div> <?php endif; ?>
    </div>
</div>
