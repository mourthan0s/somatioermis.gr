<?php 
    ////////////////// Sponsors //////////////////
    $sponsorslabels = array(
        'name'                  => _x( 'Sponsors', 'Post Type General Name', 'ermis' ),
        'singular_name'         => _x( 'Sponsor', 'Post Type Singular Name', 'ermis' ),
        'menu_name'             => __( 'Sponsors Logos', 'ermis' ),
        'name_admin_bar'        => __( 'Sponsor', 'ermis' ),
        'archives'              => __( 'Sponsor Archives', 'ermis' ),
        'attributes'            => __( 'Sponsor Attributes', 'ermis' ),
        'parent_item_colon'     => __( 'Parent Sponsor:', 'ermis' ),
        'all_items'             => __( 'All Sponsors', 'ermis' ),
        'add_new_item'          => __( 'Add New Sponsor', 'ermis' ),
        'add_new'               => __( 'Add New', 'ermis' ),
        'new_item'              => __( 'New Sponsor', 'ermis' ),
        'edit_item'             => __( 'Edit Sponsor', 'ermis' ),
        'update_item'           => __( 'Update Sponsor', 'ermis' ),
        'view_item'             => __( 'View Sponsor', 'ermis' ),
        'view_items'            => __( 'View Sponsors', 'ermis' ),
        'search_items'          => __( 'Search Sponsor', 'ermis' ),
        'not_found'             => __( 'Not found', 'ermis' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'ermis' ),
        'featured_image'        => __( 'Featured Image', 'ermis' ),
        'set_featured_image'    => __( 'Set featured image', 'ermis' ),
        'remove_featured_image' => __( 'Remove featured image', 'ermis' ),
        'use_featured_image'    => __( 'Use as featured image', 'ermis' ),
        'insert_into_item'      => __( 'Insert into Sponsor', 'ermis' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Sponsor', 'ermis' ),
        'items_list'            => __( 'Sponsors list', 'ermis' ),
        'items_list_navigation' => __( 'Sponsors list navigation', 'ermis' ),
        'filter_items_list'     => __( 'Filter Sponsors list', 'ermis' ),
    );

    $sponsorsargs = array(
        'label'                 => __( 'Sponsor', 'ermis' ),
        'description'           => __( 'List of available Sponsors', 'ermis' ),
        'labels'                => $sponsorslabels,
        'show_in_rest'          => true,
        'supports'              => array( 'title', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );

    register_post_type( 'sponsor', $sponsorsargs );


    ////////////////// Services //////////////////
    $servicesLabels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'ermis' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'ermis' ),
        'menu_name'             => __( 'Services', 'ermis' ),
        'name_admin_bar'        => __( 'Service', 'ermis' ),
        'archives'              => __( 'Service Archives', 'ermis' ),
        'attributes'            => __( 'Service Attributes', 'ermis' ),
        'parent_item_colon'     => __( 'Parent Service:', 'ermis' ),
        'all_items'             => __( 'All Services', 'ermis' ),
        'add_new_item'          => __( 'Add New Service', 'ermis' ),
        'add_new'               => __( 'Add New', 'ermis' ),
        'new_item'              => __( 'New Service', 'ermis' ),
        'edit_item'             => __( 'Edit Service', 'ermis' ),
        'update_item'           => __( 'Update Service', 'ermis' ),
        'view_item'             => __( 'View Service', 'ermis' ),
        'view_items'            => __( 'View Services', 'ermis' ),
        'search_items'          => __( 'Search Service', 'ermis' ),
        'not_found'             => __( 'Not found', 'ermis' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'ermis' ),
        'featured_image'        => __( 'Featured Image', 'ermis' ),
        'set_featured_image'    => __( 'Set featured image', 'ermis' ),
        'remove_featured_image' => __( 'Remove featured image', 'ermis' ),
        'use_featured_image'    => __( 'Use as featured image', 'ermis' ),
        'insert_into_item'      => __( 'Insert into Service', 'ermis' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Service', 'ermis' ),
        'items_list'            => __( 'Services list', 'ermis' ),
        'items_list_navigation' => __( 'Services list navigation', 'ermis' ),
        'filter_items_list'     => __( 'Filter Services list', 'ermis' ),
    );

    $servicesArgs = array(
        'label'                 => __( 'Service', 'ermis' ),
        'description'           => __( 'List of available Services', 'ermis' ),
        'labels'                => $servicesLabels,
        'show_in_rest'          => true,
        'supports'              => array( 'title', 'thumbnail', 'excerpt', 'editor'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );

    register_post_type( 'service', $servicesArgs );


    //////////////////  Disorders  //////////////////
    $disorderLabels = array(
        'name'                  => _x( 'Disorders', 'Post Type General Name', 'ermis' ),
        'singular_name'         => _x( 'Disorder', 'Post Type Singular Name', 'ermis' ),
        'menu_name'             => __( 'Disorders', 'ermis' ),
        'name_admin_bar'        => __( 'Disorder', 'ermis' ),
        'archives'              => __( 'Disorder Archives', 'ermis' ),
        'attributes'            => __( 'Disorder Attributes', 'ermis' ),
        'parent_item_colon'     => __( 'Parent Disorder:', 'ermis' ),
        'all_items'             => __( 'All Disorders', 'ermis' ),
        'add_new_item'          => __( 'Add New Disorder', 'ermis' ),
        'add_new'               => __( 'Add New', 'ermis' ),
        'new_item'              => __( 'New Disorder', 'ermis' ),
        'edit_item'             => __( 'Edit Disorder', 'ermis' ),
        'update_item'           => __( 'Update Disorder', 'ermis' ),
        'view_item'             => __( 'View Disorder', 'ermis' ),
        'view_items'            => __( 'View Disorders', 'ermis' ),
        'search_items'          => __( 'Search Disorder', 'ermis' ),
        'not_found'             => __( 'Not found', 'ermis' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'ermis' ),
        'featured_image'        => __( 'Featured Image', 'ermis' ),
        'set_featured_image'    => __( 'Set featured image', 'ermis' ),
        'remove_featured_image' => __( 'Remove featured image', 'ermis' ),
        'use_featured_image'    => __( 'Use as featured image', 'ermis' ),
        'insert_into_item'      => __( 'Insert into Disorder', 'ermis' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Disorder', 'ermis' ),
        'items_list'            => __( 'Disorders list', 'ermis' ),
        'items_list_navigation' => __( 'Disorders list navigation', 'ermis' ),
        'filter_items_list'     => __( 'Filter Disorders list', 'ermis' ),
    );

    $disorderArgs = array(
        'label'                 => __( 'Disorder', 'ermis' ),
        'description'           => __( 'List of available Disorders', 'ermis' ),
        'labels'                => $disorderLabels,
        'show_in_rest'          => true,
        'supports'              => array( 'title', 'thumbnail', 'editor'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );

    register_post_type( 'disorder', $disorderArgs );

    //////////////////  Aims  //////////////////
    $aimLabels = array(
        'name'                  => _x( 'Aims', 'Post Type General Name', 'ermis' ),
        'singular_name'         => _x( 'Aim', 'Post Type Singular Name', 'ermis' ),
        'menu_name'             => __( 'Aims', 'ermis' ),
        'name_admin_bar'        => __( 'Aim', 'ermis' ),
        'archives'              => __( 'Aim Archives', 'ermis' ),
        'attributes'            => __( 'Aim Attributes', 'ermis' ),
        'parent_item_colon'     => __( 'Parent Aim:', 'ermis' ),
        'all_items'             => __( 'All Aims', 'ermis' ),
        'add_new_item'          => __( 'Add New Aim', 'ermis' ),
        'add_new'               => __( 'Add New', 'ermis' ),
        'new_item'              => __( 'New Aim', 'ermis' ),
        'edit_item'             => __( 'Edit Aim', 'ermis' ),
        'update_item'           => __( 'Update Aim', 'ermis' ),
        'view_item'             => __( 'View Aim', 'ermis' ),
        'view_items'            => __( 'View Aims', 'ermis' ),
        'search_items'          => __( 'Search Aim', 'ermis' ),
        'not_found'             => __( 'Not found', 'ermis' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'ermis' ),
        'featured_image'        => __( 'Featured Image', 'ermis' ),
        'set_featured_image'    => __( 'Set featured image', 'ermis' ),
        'remove_featured_image' => __( 'Remove featured image', 'ermis' ),
        'use_featured_image'    => __( 'Use as featured image', 'ermis' ),
        'insert_into_item'      => __( 'Insert into Aim', 'ermis' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Aim', 'ermis' ),
        'items_list'            => __( 'Aims list', 'ermis' ),
        'items_list_navigation' => __( 'Aims list navigation', 'ermis' ),
        'filter_items_list'     => __( 'Filter Aims list', 'ermis' ),
    );

    $aimArgs = array(
        'label'                 => __( 'Aim', 'ermis' ),
        'description'           => __( 'List of available Aims', 'ermis' ),
        'labels'                => $aimLabels,
        'show_in_rest'          => true,
        'supports'              => array( 'title', 'thumbnail', 'excerpt', 'editor' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );

    register_post_type( 'aim', $aimArgs );

    //////////////////  Programs  //////////////////
    $programLabels = array(
        'name'                  => _x( 'Programs', 'Post Type General Name', 'ermis' ),
        'singular_name'         => _x( 'Program', 'Post Type Singular Name', 'ermis' ),
        'menu_name'             => __( 'Programs', 'ermis' ),
        'name_admin_bar'        => __( 'Program', 'ermis' ),
        'archives'              => __( 'Program Archives', 'ermis' ),
        'attributes'            => __( 'Program Attributes', 'ermis' ),
        'parent_item_colon'     => __( 'Parent Program:', 'ermis' ),
        'all_items'             => __( 'All Programs', 'ermis' ),
        'add_new_item'          => __( 'Add New Program', 'ermis' ),
        'add_new'               => __( 'Add New', 'ermis' ),
        'new_item'              => __( 'New Program', 'ermis' ),
        'edit_item'             => __( 'Edit Program', 'ermis' ),
        'update_item'           => __( 'Update Program', 'ermis' ),
        'view_item'             => __( 'View Program', 'ermis' ),
        'view_items'            => __( 'View Programs', 'ermis' ),
        'search_items'          => __( 'Search Program', 'ermis' ),
        'not_found'             => __( 'Not found', 'ermis' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'ermis' ),
        'featured_image'        => __( 'Featured Image', 'ermis' ),
        'set_featured_image'    => __( 'Set featured image', 'ermis' ),
        'remove_featured_image' => __( 'Remove featured image', 'ermis' ),
        'use_featured_image'    => __( 'Use as featured image', 'ermis' ),
        'insert_into_item'      => __( 'Insert into Program', 'ermis' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Program', 'ermis' ),
        'items_list'            => __( 'Programs list', 'ermis' ),
        'items_list_navigation' => __( 'Programs list navigation', 'ermis' ),
        'filter_items_list'     => __( 'Filter Programs list', 'ermis' ),
    );

    $programArgs = array(
        'label'                 => __( 'Program', 'ermis' ),
        'description'           => __( 'List of available Programs', 'ermis' ),
        'labels'                => $programLabels,
        'show_in_rest'          => true,
        'supports'              => array( 'title', 'thumbnail', 'editor'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );

    register_post_type( 'program', $programArgs );
    
?>