<?php 
/**
 * Custom Post Types
 * @package maxlutz
 */


/**
 * Register post type.
 */
add_action( 'init', 'post_type_example' );
function post_type_example() {
	$labels = array(
		'name'               => _x( 'Examples', 'post type general name', 'maxlutz' ),
		'singular_name'      => _x( 'Example', 'post type singular name', 'maxlutz' ),
		'menu_name'          => _x( 'Examples', 'admin menu', 'maxlutz' ),
		'name_admin_bar'     => _x( 'Example', 'add new on admin bar', 'maxlutz' ),
		'add_new'            => _x( 'Add New', 'book', 'maxlutz' ),
		'add_new_item'       => __( 'Add New Example', 'maxlutz' ),
		'new_item'           => __( 'New Example', 'maxlutz' ),
		'edit_item'          => __( 'Edit Example', 'maxlutz' ),
		'view_item'          => __( 'View Example', 'maxlutz' ),
		'all_items'          => __( 'All Examples', 'maxlutz' ),
		'search_items'       => __( 'Search Examples', 'maxlutz' ),
		'parent_item_colon'  => __( 'Parent Examples:', 'maxlutz' ),
		'not_found'          => __( 'No examples found.', 'maxlutz' ),
		'not_found_in_trash' => __( 'No examples found in Trash.', 'maxlutz' )
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