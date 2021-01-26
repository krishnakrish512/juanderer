<?php
function juanderer_setup() {
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

    register_nav_menus( [
        'primary' => 'Primary'
    ] );
    add_image_size('category-thumb', 300, 200,true);
    add_image_size( 'thumb-crazy', 375,275, true);

}

add_action( 'after_setup_theme', 'juanderer_setup' );

function juanderer_scripts() {

    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'icons-style', get_template_directory_uri() . '/assets/css/all_icons.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'vendors-style', get_template_directory_uri() . '/assets/css/vendors.css' );

    wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/assets/js/modernizr_slider.js', [], '1.0', true );
    wp_enqueue_script( 'common-script', get_template_directory_uri() . '/assets/js/common_scripts.js', [], '1.0', true );
    wp_enqueue_script( 'validate-script', get_template_directory_uri() . '/assets/js/validate.js', [], '1.0', true );
    wp_enqueue_script( 'flexslider-script', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', [], '1.0', true );
    wp_enqueue_script( 'daterangepicker', get_template_directory_uri() . '/assets/js/daterangepicker.js', [], '1.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', [], '1.0', true );
    wp_enqueue_script( 'input_qty', get_template_directory_uri() . '/assets/js/input_qty.js', [], '1.0', true );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true );
//    wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', [], '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'juanderer_scripts' );
