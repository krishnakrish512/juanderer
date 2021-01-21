<?php
function my_custom_post_Tours()
{
    $labels = array(
        'name' => "Tours",
        'singular_name' => "Tour",
        'menu_name' => 'Tour'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'taxonomies' => array('tour_cat'),
    );
    register_post_type('tour', $args);
}
add_action('init', 'my_custom_post_Tours');

function my_custom_post_hotels()
{
    $labels = array(
        'name' => "Hotel",
        'singular_name' => "Hotel",
        'menu_name' => 'Hotel'
    );
    $args = array(
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
//        'taxonomies' => array('category'),

    );
    register_post_type('hotel', $args);
}

add_action('init', 'my_custom_post_hotels');

