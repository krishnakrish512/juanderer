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

function my_custom_post_activities()
{
    $labels = array(
        'name' => "Activitie",
        'singular_name' => "Activitie",
        'menu_name' => 'Activitie'
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
    register_post_type('activitie', $args);
}
add_action('init', 'my_custom_post_activities');

