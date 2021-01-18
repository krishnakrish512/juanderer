<?php
function juanderer_setup() {
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
//    add_theme_support( 'woocommerce' );

//    add_image_size( 'photography_thumbnail', 99999, 600, false );
//    add_image_size( 'photography_small', 800, 800, false );
//    add_image_size( 'photography_medium', 1920, 1920, false );
//    add_image_size( 'photography_large', 1920, 1024, false );
//    add_image_size( 'photography_preview', 2000, 2000, false );
//    add_image_size( 'gallery_thumbnail', 300, 300, true );
//    add_image_size( 'profile_gallery', 350, 350, true );

    register_nav_menus( [
        'primary' => 'Primary'
    ] );

}

add_action( 'after_setup_theme', 'juanderer_setup' );

function juanderer_scripts() {

    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'icons-style', get_template_directory_uri() . '/assets/css/all_icons.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'vendors-style', get_template_directory_uri() . '/assets/css/vendors.css' );

    wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/assets/js/modernizr_slider.js', [], '1.0', true );
    wp_enqueue_script( 'common-script', get_template_directory_uri() . '/assets/js/common_scripts.js', [], '1.0', true );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true );
    wp_enqueue_script( 'validate-script', get_template_directory_uri() . '/assets/js/validate.js', [], '1.0', true );
    wp_enqueue_script( 'flexslider-script', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', [], '1.0', true );
    wp_enqueue_script( 'input_qty', get_template_directory_uri() . '/assets/js/input_qty.js', [], '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'juanderer_scripts' );
