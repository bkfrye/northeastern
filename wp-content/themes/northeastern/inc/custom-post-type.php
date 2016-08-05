<?php
/* Center Locations */
function cpt_locations() {
	register_post_type( 'locations',
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Centers', 'post type general name'),
			'singular_name' => __('Center', 'post type singular name'),
			'add_new' => __('Add New', 'custom post type item'),
			'add_new_item' => __('Add New Center'),
			'edit' => __( 'Edit' ),
			'edit_item' => __('Edit Center'),
			'new_item' => __('New Center'),
			'view_item' => __('View Center'),
			'search_items' => __('Search Centers'),
			'not_found' =>  __('Nothing found in the Database.'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
			),
			'description' => __( 'C2 Centers' ),
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 40,
			'menu_icon' => 'dashicons-store',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor'),
			'has_archive' => false,
			'rewrite' => array('slug' => 'locations'),
			'query_var' => true
	 	)
	);

}
add_action( 'init', 'cpt_locations');

?>
