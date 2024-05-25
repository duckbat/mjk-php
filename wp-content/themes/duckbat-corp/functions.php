<?php


    // Load styles
    function duckbat_register_styles(){

        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style( 'duckbat-style', get_template_directory_uri() . '/style.css', array('duckbat-bootstrap'), $version, 'all' );
        wp_enqueue_style( 'duckbat-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all' );
        wp_enqueue_style( 'duckbat-fontawesome', '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">', array(), '6.0.0', 'all' );
    }

    add_action( 'wp_enqueue_scripts', 'duckbat_register_styles' );


    // Load scripts
    function duckback_register_scripts(){

        wp_enqueue_script( 'duckbat-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
        wp_enqueue_script( 'duckbat-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), '2.11.8', true );
        wp_enqueue_script( 'duckbat-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', array(), '5.3.3', true );
        wp_enqueue_script( 'duckbat-main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0', true );

    }

    add_action( 'wp_enqueue_scripts', 'duckback_register_scripts' );


    // Filters
    // filters
    function search_filter( $query ) {
        if ( $query->is_search ) {
            $query->set( 'category_name', 'products' );
        }

        return $query;
    }

    add_filter( 'pre_get_posts', 'search_filter' );

    function my_breadcrumb_title_swapper( $title, $type, $id ) {
        if ( in_array( 'home', $type ) ) {
            $title = __( 'Home' );
        }

        return $title;
    }

    add_filter( 'bcn_breadcrumb_title', 'my_breadcrumb_title_swapper', 3, 10 );

    // Actions
    function theme_setup(): void {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-logo', [
            'height'      => 100,
            'width'       => 200,
            'flex-height' => true,
        ] );
        add_theme_support( 'html5', array( 'search-form' ) );
    
        // Set the default Post Thumbnail size
        set_post_thumbnail_size( 200, 200, true ); // 200px wide by 200px high, hard crop mode
    
        // Add custom image sizes
        add_image_size( 'custom-header', 1200, 400, true ); // Custom header size
    
        // Add menu
        register_nav_menu( 'main-menu', __( 'Main Menu' ) );
    }
    
    add_action( 'after_setup_theme', 'theme_setup' );

    // Custom functions
    

    ?>