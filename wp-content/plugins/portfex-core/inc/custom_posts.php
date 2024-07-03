<?php


if ( ! function_exists('portfex_work') ) {

// Register Custom Post Type
function portfex_work() {

	$labels = array(
		'name'                  => esc_html_x( 'Works', 'Post Type General Name', 'portfex' ),
		'singular_name'         => esc_html_x( 'Work', 'Post Type Singular Name', 'portfex' ),
		'menu_name'             => esc_html__( 'Works', 'portfex' ),
		'name_admin_bar'        => esc_html__( 'Works', 'portfex' ),
		'archives'              => esc_html__( 'Item Archives', 'portfex' ),
		'attributes'            => esc_html__( 'Item Attributes', 'portfex' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'portfex' ),
		'all_items'             => esc_html__( 'All Items', 'portfex' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'portfex' ),
		'add_new'               => esc_html__( 'Add New', 'portfex' ),
		'new_item'              => esc_html__( 'New Item', 'portfex' ),
		'edit_item'             => esc_html__( 'Edit Item', 'portfex' ),
		'update_item'           => esc_html__( 'Update Item', 'portfex' ),
		'view_item'             => esc_html__( 'View Item', 'portfex' ),
		'view_items'            => esc_html__( 'View Items', 'portfex' ),
		'search_items'          => esc_html__( 'Search Item', 'portfex' ),
		'not_found'             => esc_html__( 'Not found', 'portfex' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'portfex' ),
		'featured_image'        => esc_html__( 'Featured Image', 'portfex' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'portfex' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'portfex' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'portfex' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'portfex' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'portfex' ),
		'items_list'            => esc_html__( 'Items list', 'portfex' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'portfex' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'portfex' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Work', 'portfex' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'   => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'work', $args );

}
add_action( 'init', 'portfex_work', 0 );

}

if ( ! function_exists( 'portfex_work_cat' ) ) {

// Register Custom Taxonomy
function portfex_work_cat() {

	$labels = array(
		'name'                       => esc_html_x( 'Categories', 'Taxonomy General Name', 'portfex' ),
		'singular_name'              => esc_html_x( 'Category', 'Taxonomy Singular Name', 'portfex' ),
		'menu_name'                  => esc_html__( 'Category', 'portfex' ),
		'all_items'                  => esc_html__( 'All Items', 'portfex' ),
		'parent_item'                => esc_html__( 'Parent Item', 'portfex' ),
		'parent_item_colon'          => esc_html__( 'Parent Item:', 'portfex' ),
		'new_item_name'              => esc_html__( 'New Item Name', 'portfex' ),
		'add_new_item'               => esc_html__( 'Add New Item', 'portfex' ),
		'edit_item'                  => esc_html__( 'Edit Item', 'portfex' ),
		'update_item'                => esc_html__( 'Update Item', 'portfex' ),
		'view_item'                  => esc_html__( 'View Item', 'portfex' ),
		'separate_items_with_commas' => esc_html__( 'Separate items with commas', 'portfex' ),
		'add_or_remove_items'        => esc_html__( 'Add or remove items', 'portfex' ),
		'choose_from_most_used'      => esc_html__( 'Choose from the most used', 'portfex' ),
		'popular_items'              => esc_html__( 'Popular Items', 'portfex' ),
		'search_items'               => esc_html__( 'Search Items', 'portfex' ),
		'not_found'                  => esc_html__( 'Not Found', 'portfex' ),
		'no_terms'                   => esc_html__( 'No items', 'portfex' ),
		'items_list'                 => esc_html__( 'Items list', 'portfex' ),
		'items_list_navigation'      => esc_html__( 'Items list navigation', 'portfex' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'work_cat', array( 'work' ), $args );

}
add_action( 'init', 'portfex_work_cat', 0 );

}



if ( ! function_exists('portfex_testimonials') ) {

// Register Testimonial Post Type
function portfex_testimonials() {

	$labels = array(
		'name'                  => esc_html_x( 'Testimonials', 'Post Type General Name', 'portfex' ),
		'singular_name'         => esc_html_x( 'Testimonial', 'Post Type Singular Name', 'portfex' ),
		'menu_name'             => esc_html__( 'Testimonials', 'portfex' ),
		'name_admin_bar'        => esc_html__( 'Testimonials', 'portfex' ),
		'archives'              => esc_html__( 'Item Archives', 'portfex' ),
		'attributes'            => esc_html__( 'Item Attributes', 'portfex' ),
		'parent_item_colon'     => esc_html__( 'Parent Item:', 'portfex' ),
		'all_items'             => esc_html__( 'All Items', 'portfex' ),
		'add_new_item'          => esc_html__( 'Add New Item', 'portfex' ),
		'add_new'               => esc_html__( 'Add New', 'portfex' ),
		'new_item'              => esc_html__( 'New Item', 'portfex' ),
		'edit_item'             => esc_html__( 'Edit Item', 'portfex' ),
		'update_item'           => esc_html__( 'Update Item', 'portfex' ),
		'view_item'             => esc_html__( 'View Item', 'portfex' ),
		'view_items'            => esc_html__( 'View Items', 'portfex' ),
		'search_items'          => esc_html__( 'Search Item', 'portfex' ),
		'not_found'             => esc_html__( 'Not found', 'portfex' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'portfex' ),
		'featured_image'        => esc_html__( 'Featured Image', 'portfex' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'portfex' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'portfex' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'portfex' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'portfex' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'portfex' ),
		'items_list'            => esc_html__( 'Items list', 'portfex' ),
		'items_list_navigation' => esc_html__( 'Items list navigation', 'portfex' ),
		'filter_items_list'     => esc_html__( 'Filter items list', 'portfex' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Testimonial', 'portfex' ),
		'description'           => esc_html__( 'Post Type Description', 'portfex' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'   => 'dashicons-format-chat',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'portfex_testimonials', 0 );

}