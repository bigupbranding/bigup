<?php 
/**
 * Custom Post Types
 * @package bigup
 */


/**
 * Register post type.
 */
add_action( 'init', 'post_type_example' );
function post_type_example() {
	$labels = array(
		'name'               => _x( 'Examples', 'post type general name', 'bigup' ),
		'singular_name'      => _x( 'Example', 'post type singular name', 'bigup' ),
		'menu_name'          => _x( 'Examples', 'admin menu', 'bigup' ),
		'name_admin_bar'     => _x( 'Example', 'add new on admin bar', 'bigup' ),
		'add_new'            => _x( 'Add New', 'book', 'bigup' ),
		'add_new_item'       => __( 'Add New Example', 'bigup' ),
		'new_item'           => __( 'New Example', 'bigup' ),
		'edit_item'          => __( 'Edit Example', 'bigup' ),
		'view_item'          => __( 'View Example', 'bigup' ),
		'all_items'          => __( 'All Examples', 'bigup' ),
		'search_items'       => __( 'Search Examples', 'bigup' ),
		'parent_item_colon'  => __( 'Parent Examples:', 'bigup' ),
		'not_found'          => __( 'No examples found.', 'bigup' ),
		'not_found_in_trash' => __( 'No examples found in Trash.', 'bigup' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'example' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-cloud',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
	);
	flush_rewrite_rules();
	register_post_type( 'example', $args );
}



 ?>