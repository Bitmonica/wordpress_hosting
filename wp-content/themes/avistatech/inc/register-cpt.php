<?php

/**
 * Register a Custom post type for Services Section.
 */
function custom_services() {
	$labels = array(
    'name'               => _x( 'Services', 'twentytwentyone'),
		'singular_name'      => _x( 'Services', 'twentytwentyone'),
		'menu_name'          => _x( 'Services', 'admin menu', 'twentytwentyone'),
		'name_admin_bar'     => _x( 'Services', 'add new on admin bar', 'twentytwentyone'),
		'add_new'            => _x( 'Add New', 'Services'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Services'),
		'edit_item'          => __( 'Edit Services'),
		'view_item'          => __( 'View Services'),
		'all_items'          => __( 'All Services'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Services'),
		'parent_item_colon'  => __( 'Parent Services:'),
		'not_found'          => __( 'No Services found.'),
		'not_found_in_trash' => __( 'No Services in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-clipboard',
    'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 30,
    'supports'           => array('title','editor','thumbnail') // editor is disable
		//'supports'           => array('title','editor','thumbnail')
	);

	register_post_type( 'services', $args );
}

add_action( 'init', 'custom_services' );


/**
 * Register a Custom post type for Offices Section.
 */
function custom_offices() {
	$labels = array(
    'name'               => _x( 'Offices', 'twentytwentyone'),
		'singular_name'      => _x( 'Offices', 'twentytwentyone'),
		'menu_name'          => _x( 'Offices', 'admin menu', 'twentytwentyone'),
		'name_admin_bar'     => _x( 'Offices', 'add new on admin bar', 'twentytwentyone'),
		'add_new'            => _x( 'Add New', 'Offices'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Offices'),
		'edit_item'          => __( 'Edit Offices'),
		'view_item'          => __( 'View Offices'),
		'all_items'          => __( 'All Offices'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Offices'),
		'parent_item_colon'  => __( 'Parent Offices:'),
		'not_found'          => __( 'No Offices found.'),
		'not_found_in_trash' => __( 'No Offices in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-location-alt',
    'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 31,
    'supports'           => array('title') // editor is disable
		//'supports'           => array('title','editor','thumbnail')
	);

	register_post_type( 'offices', $args );
}

add_action( 'init', 'custom_offices' );
