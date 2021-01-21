<?php

/**
 * @param $name
 * @param array $args
 * https://developer.wordpress.org/resource/dashicons/#schedule
 */
function add_post_type( $name, $args = array() ) {
	add_action( 'init', function () use ( $name, $args ) {
		$upper = ucwords( $name );
		$name  = strtolower( str_replace( ' ', '_', $name ) );

		$args = array_merge(
			[
				'public'      => true,
				'label'       => $upper . "s",
				'labels'      => array( 'add_new_item' => "Add new $upper" ),
				'supports'    => array( 'title', 'editor', 'comments', 'thumbnail' ),
				'has_archive' => true
			],
			$args );

		register_post_type( $name, $args );
	} );
}

function add_taxonomy( $name, $post_type, $args = array() ) {
	$name = strtolower( $name );
	add_action( 'init', function () use ( $name, $post_type, $args ) {
		$args = array_merge(
			[
				'label' => ucwords( $name )
			],
			$args );

		register_taxonomy( $name, $post_type, $args );
	} );
}

add_post_type( 'Tour', [
    'public' => true,
//    'menu_position' => 5,
    'labels'      => [ 'add_new_item' => "Add new tour" ],
    'supports' => ['title', 'editor','thumbnail'],
    'taxonomies'  => [ 'tour-category' ],
    'has_archive' => true,
] );

add_post_type( 'Hotel', [
    'public' => true,
//    'menu_position' => 5,
    'labels'      => [ 'add_new_item' => "Add new hotel" ],
    'supports' => ['title', 'editor','thumbnail'],
    'taxonomies'  => [ 'hotel-category' ],
    'has_archive' => true,
] );

add_post_type( 'Destination', [
    'public' => true,
//    'menu_position' => 5,
    'labels'      => [ 'add_new_item' => "Add new Destination" ],
    'supports' => ['title', 'editor','thumbnail'],
//    'taxonomies'  => [ 'hotel-category' ],
    'has_archive' => true,
] );


$labels = array(
    'name'                       => _x( 'Hotel Categories', 'taxonomy general name' ),
    'singular_name'              => _x( 'Hotel Category', 'taxonomy singular name' ),
    'search_items'               => __( 'Search Hotel Categories' ),
    'popular_items'              => __( 'Popular Hotel Categories' ),
    'all_items'                  => __( 'All Hotel Categories' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Edit Hotel Category' ),
    'update_item'                => __( 'Update Hotel Category' ),
    'add_new_item'               => __( 'Add New Hotel Category' ),
    'new_item_name'              => __( 'New Hotel Category Name' ),
    'separate_items_with_commas' => __( 'Separate Hotel categories with commas' ),
    'add_or_remove_items'        => __( 'Add or remove Hotel categories' ),
    'choose_from_most_used'      => __( 'Choose from the most used Hotel categories' ),
    'menu_name'                  => __( ' Hotel Categories' ),
);
add_taxonomy( "hotel-category", 'hotel', [
	'labels'       => $labels,
	'hierarchical' => true
] );

$labels = array(
    'name'                       => _x( 'Tour Categories', 'taxonomy general name' ),
    'singular_name'              => _x( 'Tour Category', 'taxonomy singular name' ),
    'search_items'               => __( 'Search Tour Categories' ),
    'popular_items'              => __( 'Popular Tour Categories' ),
    'all_items'                  => __( 'All Tour Categories' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Edit Tour Category' ),
    'update_item'                => __( 'Update Tour Category' ),
    'add_new_item'               => __( 'Add New Tour Category' ),
    'new_item_name'              => __( 'New Tour Category Name' ),
    'separate_items_with_commas' => __( 'Separate Tour categories with commas' ),
    'add_or_remove_items'        => __( 'Add or remove Tour categories' ),
    'choose_from_most_used'      => __( 'Choose from the most used Tour categories' ),
    'menu_name'                  => __( ' Tour Categories' ),
);

add_taxonomy( "tour-category", 'tour', [
	'labels'       => $labels,
    'hierarchical' => true
] );
// clear the permalinks after the post type has been registered
flush_rewrite_rules();


