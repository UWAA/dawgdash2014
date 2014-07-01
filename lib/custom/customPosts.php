<?php
function dd_register_raceInfo() {

	$labels = array(
		'name'                => _x( 'Races', 'Post Type General Name', 'dd_custom' ),
		'singular_name'       => _x( 'Race', 'Post Type Singular Name', 'dd_custom' ),
		'menu_name'           => __( 'Race Pages', 'dd_custom' ),
		'parent_item_colon'   => __( 'Parent Item:', 'dd_custom' ),
		'all_items'           => __( 'All Races', 'dd_custom' ),
		'view_item'           => __( 'View Item', 'dd_custom' ),
		'add_new_item'        => __( 'Add New Item', 'dd_custom' ),
		'add_new'             => __( 'Add New', 'dd_custom' ),
		'edit_item'           => __( 'Edit Item', 'dd_custom' ),
		'update_item'         => __( 'Update Item', 'dd_custom' ),
		'search_items'        => __( 'Search Item', 'dd_custom' ),
		'not_found'           => __( 'Not found', 'dd_custom' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'dd_custom' ),
	);
	$args = array(
		'label'               => __( 'dd_raceInfo', 'dd_custom' ),
		'description'         => __( 'Race Information Posts', 'dd_custom' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'dd_raceInfo', $args );

}

// Hook into the 'init' action
add_action( 'init', 'dd_register_raceInfo', 0 );