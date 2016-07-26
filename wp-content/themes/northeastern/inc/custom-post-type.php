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

/* Testimonials */
function cpt_testimonials() {
	register_post_type( 'testimonials',
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Testimonials', 'post type general name'),
			'singular_name' => __('Testimonial', 'post type singular name'),
			'add_new' => __('Add New', 'custom post type item'),
			'add_new_item' => __('Add New Testimonial'),
			'edit' => __( 'Edit' ),
			'edit_item' => __('Edit Testimonial'),
			'new_item' => __('New Testimonial'),
			'view_item' => __('View Testimonial'),
			'search_items' => __('Search Testimonials'),
			'not_found' =>  __('Nothing found in the Database.'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
			),
			'description' => __( 'C2 Testimonials' ),
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 40,
			'menu_icon' => 'dashicons-format-quote',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor'),
			'has_archive' => false,
			'rewrite' => true,
			'query_var' => true
	 	)
	);

}
add_action( 'init', 'cpt_testimonials');

/* Promotions */
function cpt_promotions() {
	register_post_type( 'promotions',
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Promotions', 'post type general name'),
			'singular_name' => __('Promotion', 'post type singular name'),
			'add_new' => __('Add New', 'custom post type item'),
			'add_new_item' => __('Add New Promotion'),
			'edit' => __( 'Edit' ),
			'edit_item' => __('Edit Promotion'),
			'new_item' => __('New Promotion'),
			'view_item' => __('View Promotion'),
			'search_items' => __('Search Promotions'),
			'not_found' =>  __('Nothing found in the Database.'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
			),
			'description' => __( 'C2 Promotions' ),
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 40,
			'menu_icon' => 'dashicons-tag',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'page-attributes'),
			'has_archive' => false,
			'rewrite' => array('slug' => 'promotions'),
			'query_var' => true
	 	)
	);

}
add_action( 'init', 'cpt_promotions');


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
			'description' => __( 'C2 Promotions' ),
			'public' => true,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 40,
			'menu_icon' => 'dashicons-calendar',
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor'),
			'has_archive' => false,
			'rewrite' => array('slug' => 'events'),
			'query_var' => true
	 	)
	);

}
add_action( 'init', 'cpt_events');


/* Services (paid A / B test pages) */
// function cpt_services() {
// 	register_post_type( 'Services',
// 	 	// let's now add all the options for this post type
// 		array('labels' => array(
// 			'name' => __('Services', 'post type general name'),
// 			'singular_name' => __('Service', 'post type singular name'),
// 			'add_new' => __('Add New', 'custom post type item'),
// 			'add_new_item' => __('Add New Service'),
// 			'edit' => __( 'Edit' ),
// 			'edit_item' => __('Edit Service'),
// 			'new_item' => __('New Service'),
// 			'view_item' => __('View Service'),
// 			'search_items' => __('Search Services'),
// 			'not_found' =>  __('Nothing found in the Database.'),
// 			'not_found_in_trash' => __('Nothing found in Trash'),
// 			'parent_item_colon' => ''
// 			),
// 			'description' => __( 'C2 Paid Promotions' ),
// 			'public' => true,
// 			'exclude_from_search' => false,
// 			'publicly_queryable' => true,
// 			'show_ui' => true,
// 			'show_in_nav_menus' => false,
// 			'menu_position' => 40,
// 			'menu_icon' => 'dashicons-star-filled',
// 			'capability_type' => 'post',
// 			'hierarchical' => false,
// 			'supports' => array( 'title', 'editor'),
// 			'has_archive' => false,
// 			'rewrite' => array('slug' => 'services'),
// 			'query_var' => true
// 	 	)
// 	);
//
// }
// add_action( 'init', 'cpt_services');

?>
