<?php
    include('inc/custom-shortcodes.php');
    include('inc/custom-post-types.php');

    function load_css_js() {
        wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/assets/css/foundation.css', false, NULL, 'all' );
        wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );
        wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', false, NULL, 'all' );
        wp_enqueue_script('infinite-scroll', 'https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js', array(), '1.0.0', true);
        wp_enqueue_script('jquery');
        wp_enqueue_script('app-js', get_template_directory_uri().'/assets/js/app.js', array('jquery'), '1.0.0');
        wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), '1.0.0', true );
    }

    add_action( 'wp_enqueue_scripts', 'load_css_js' );

    // Acf - Options Page
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
    }

    function theme_setup() {
        //require get_template_directory() . '/inc/customiser.php';
        /* Language Support */
        load_theme_textdomain( 'ermis', get_template_directory() . '/languages' );
        
        /* Supports */
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );
        remove_theme_support('core-block-patterns');
        /* MENUS */
        register_nav_menus([
            'main' => esc_html__( 'Main Menu', 'ermis' ),
            'main_right' => esc_html__( 'Main Menu Right', 'ermis' ),
            'footer' => esc_html__( 'Footer Menu', 'ermis'),
            'copyright' => esc_html__( 'Copyright Menu', 'ermis'),
        ]);

        if ( function_exists('register_sidebar') )

        /* WIDGETS */
        register_sidebar(array(
            'id' => 'main-sidebar',
            'name' => 'Main Sidebar',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

        register_sidebar(array(
            'id' => 'rightheader-widget',
            'name' => 'Rightheader',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

        register_sidebar(array(
            'id' => 'back_to_top-widget',
            'name' => 'BacktoTop',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

        register_sidebar(array(
            'id' => 'footer1-widget',
            'name' => 'Footer1',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

        register_sidebar(array(
            'id' => 'footer2-widget',
            'name' => 'Footer2',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

        register_sidebar(array(
            'id' => 'footer3-widget',
            'name' => 'Footer3',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

    }
    add_action( 'after_setup_theme', 'theme_setup' );

    /* FOR THEME LOGO */
    function ermis_customize_register( $wp_customize ) {
        // Add a section for logo
        $wp_customize->add_section( 'ermis_logo_section', array(
            'title'       => __( 'Logo', 'ermis' ),
            'description' => __( 'Upload your logo image.', 'ermis' ),
            'priority'    => 30,
        ) );

        // Add the logo control
        $wp_customize->add_setting( 'ermis_logo', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ermis_logo', array(
            'label'       => __( 'Logo Image', 'ermis' ),
            'section'     => 'ermis_logo_section',
            'settings'    => 'ermis_logo',
            'description' => __( 'Upload your logo image.', 'ermis' ),
        ) ) );
    }
    add_action( 'customize_register', 'ermis_customize_register' );

    function makeUppercase( $str ) {
        return str_replace( ['Ά', 'Έ', 'Ή', 'Ί', 'Ό', 'Ύ', 'Ώ'], ['Α', 'Ε', 'Η', 'Ι', 'Ο', 'Υ', 'Ω'], mb_strtoupper($str));
    }

    function ermis_acf_init_block_types() {

    ////////////////////////// First Section BLOCK //////////////////////////
        //First Section Block
        acf_register_block_type(array(
            'name'              => 'anchor-menu-sec',
            'title'             => __('First Section'),
            'description'       => __('A contained anchor menu'),
            'render_template'   => 'template-parts/blocks/anchor-menu-sec.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));
    
    ////////////////////////// Image With Text BLOCK //////////////////////////
        //Image With Text Block
        acf_register_block_type(array(
            'name'              => 'image-with-text',
            'title'             => __('Image With Text'),
            'description'       => __('A contained image with text'),
            'render_template'   => 'template-parts/blocks/image-with-text.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));
        
    //////////////////////////  Quotes BLOCK //////////////////////////
        //Quotes Block
        acf_register_block_type(array(
            'name'              => 'quotes',
            'title'             => __('Quotes'),
            'description'       => __('A contained text on quotes'),
            'render_template'   => 'template-parts/blocks/quotes.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));

    ////////////////////////// Columns Text BLOCK //////////////////////////
    //Columns Text Block
        acf_register_block_type(array(
            'name'              => 'one-column-text',
            'title'             => __('Columns Text'),
            'description'       => __('A contained text in columns'),
            'render_template'   => 'template-parts/blocks/columns-text.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));

    ////////////////////////// Columns and Rows Text BLOCK //////////////////////////
    //Columns and Rows Text Block
        acf_register_block_type(array(
            'name'              => 'column-row-text',
            'title'             => __('Columns and Rows Text'),
            'description'       => __('A contained text in columns and rows'),
            'render_template'   => 'template-parts/blocks/column-row-text.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));

    ////////////////////////// Column Image BLOCK //////////////////////////
    //Column Image Block
        acf_register_block_type(array(
            'name'              => 'column-image',
            'title'             => __('Column Image'),
            'description'       => __('A contained text and image'),
            'render_template'   => 'template-parts/blocks/column-image.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));

    ////////////////////////// Little Banners BLOCK //////////////////////////
    //Little Banners Block
        acf_register_block_type(array(
            'name'              => 'little-banners',
            'title'             => __('Little Banners'),
            'description'       => __('A contained text in banners'),
            'render_template'   => 'template-parts/blocks/little-banners.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));

    ////////////////////////// Arrow With Text BLOCK //////////////////////////
        //Arrow With Text Block
        acf_register_block_type(array(
            'name'              => 'arrow_with_text',
            'title'             => __('Arrow With Text'),
            'description'       => __('A contained text in banners'),
            'render_template'   => 'template-parts/blocks/arrow-with-text.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));

    ////////////////////////// Circles Background BLOCK //////////////////////////
        //Circles Background Block
        acf_register_block_type(array(
            'name'              => 'circles_background',
            'title'             => __('Circles Background'),
            'description'       => __('A contained titles in circles'),
            'render_template'   => 'template-parts/blocks/circles-background.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));

    ////////////////////////// Pie Chart BLOCK //////////////////////////
        //Pie Chart Block
        acf_register_block_type(array(
            'name'              => 'pie_chart',
            'title'             => __('Pie Chart'),
            'description'       => __('A contained text with pie chart at left'),
            'render_template'   => 'template-parts/blocks/pie-chart.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));

    ////////////////////////// Circles Contain Text BLOCK //////////////////////////
        //Circles Contain Text Block
        acf_register_block_type(array(
            'name'              => 'leads_circles_sec',
            'title'             => __('Circles Leads'),
            'description'       => __('A contained text inside in circles'),
            'render_template'   => 'template-parts/blocks/leads-circles-sec.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));
        
    ////////////////////////// Blog BLOCK //////////////////////////
        //Blog Block
        acf_register_block_type(array(
            'name'              => 'blog_sec',
            'title'             => __('Blog  Header'),
            'description'       => __('A contained text inside in circles'),
            'render_template'   => 'template-parts/blocks/blog_sec.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'text' ),
            'mode'				=> 'edit',
        ));

        //Gallery Slider Block
        acf_register_block_type(array(
            'name'              => 'gallery_slider',
            'title'             => __('Gallery Slider'),
            'description'       => __('A slider with images'),
            'render_template'   => 'template-parts/blocks/gallery-slider.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'gallery, images, slider' ),
            'mode'				=> 'edit',
        ));

        //Employers List
        acf_register_block_type(array(
            'name'              => 'employers-list',
            'title'             => __('Employers List'),
            'description'       => __('A list with employers'),
            'render_template'   => 'template-parts/blocks/employers-list.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'list, people, text' ),
            'mode'				=> 'edit',
        ));

        //Centered Text
        acf_register_block_type(array(
            'name'              => 'centered-text',
            'title'             => __('Centered Text'),
            'description'       => __('A centered text with button'),
            'render_template'   => 'template-parts/blocks/centered-text.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'button, text' ),
            'mode'				=> 'edit',
        ));

        //Image Puzzle
        acf_register_block_type(array(
            'name'              => 'image-puzzle',
            'title'             => __('Image Puzzle'),
            'description'       => __('A section with three images'),
            'render_template'   => 'template-parts/blocks/image-puzzle.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'images, image' ),
            'mode'				=> 'edit',
        ));

        //Lists
        acf_register_block_type(array(
            'name'              => 'lists',
            'title'             => __('Lists'),
            'description'       => __('A section with lists'),
            'render_template'   => 'template-parts/blocks/lists.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'list' ),
            'mode'				=> 'edit',
        ));

        //Counters
        acf_register_block_type(array(
            'name'              => 'Counters',
            'title'             => __('Counters'),
            'description'       => __('A section with counters'),
            'render_template'   => 'template-parts/blocks/counters.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'numbers, text' ),
            'mode'				=> 'edit',
        ));

        //Boxes
        acf_register_block_type(array(
            'name'              => 'Boxes',
            'title'             => __('Boxes'),
            'description'       => __('A section with boxes'),
            'render_template'   => 'template-parts/blocks/boxes.php',
            'category'          => 'ermis',
            'icon'              => 'layout',
            'keywords'          => array( 'boxes, text' ),
            'mode'				=> 'edit',
        ));
    }
    
    add_action('acf/init', 'ermis_acf_init_block_types');

    // add_action('init', function() {
    //     if( function_exists('pll_register_string')) {
    //     pll_register_string('ermis', '');
    //     } 
    // });

   function load_more_scripts() {
        wp_enqueue_script( 'loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
        wp_localize_script( 'loadmore', 'loadmore_params', array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'posts_per_page' => get_option('posts_per_page'),
            'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
            'max_page' => $wp_query->max_num_pages
        ) );
    }
    add_action( 'wp_enqueue_scripts', 'load_more_scripts' );

    //Main Menu Walker
    class Main_Menu_Custom_Walker extends Walker_Nav_Menu {
        function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
            $output .= "<li class='" .  implode(" ", $item->classes) . "'>";
            $output .= '<a class="level' . $depth .'" href="' . $item->url . '">' . $item->title;
            if ($args->walker->has_children) {
                if($depth > 0){
                    $output .= '<svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 0.5L5.5 5.5L10.5 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                } else{
                    $output .= '<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13L7 7L1 1" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                }
            }
            $output .= '</a>';
        }
    }

?>