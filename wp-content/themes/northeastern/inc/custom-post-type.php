<?php
/* Communities */
function cpt_communities() {
	register_post_type( 'communities',
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Communities', 'post type general name'),
			'singular_name' => __('Community', 'post type singular name'),
			'add_new' => __('Add New', 'custom post type item'),
			'add_new_item' => __('Add New Community'),
			'edit' => __( 'Edit' ),
			'edit_item' => __('Edit Community'),
			'new_item' => __('New Community'),
			'view_item' => __('View Community'),
			'search_items' => __('Search Communities'),
			'not_found' =>  __('Nothing found in the Database.'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
			),
			'description' => __( 'NE Alumni Communities' ),
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 40,
			'menu_icon' => 'dashicons-groups',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor'),
			'has_archive' => false,
			'rewrite' => array('slug' => 'communities'),
			'query_var' => true
	 	)
	);

}
add_action( 'init', 'cpt_communities');

/* Events */
function cpt_events() {
	register_post_type( 'events',
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Events', 'post type general name'),
			'singular_name' => __('Event', 'post type singular name'),
			'add_new' => __('Add New', 'custom post type item'),
			'add_new_item' => __('Add New Event'),
			'edit' => __( 'Edit' ),
			'edit_item' => __('Edit Event'),
			'new_item' => __('New Event'),
			'view_item' => __('View Event'),
			'search_items' => __('Search Events'),
			'not_found' =>  __('Nothing found in the Database.'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
			),
			'description' => __( 'NE Alumni Events' ),
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 40,
			'menu_icon' => 'dashicons-calendar-alt',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor'),
			'has_archive' => false,
			'rewrite' => array('slug' => 'events'),
			'query_var' => true,
			'taxonomies' => array('category')
	 	)
	);

}
add_action( 'init', 'cpt_events');

?>
