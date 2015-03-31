<?php 

add_action( 'wp_enqueue_scripts', 'bigup_scripts_styles' );
function bigup_scripts_styles() {

	// stylesheets 
	wp_enqueue_style( 'bigup-style', get_stylesheet_uri() );

	// jquery library
	wp_deregister_script('jquery');
	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
	wp_enqueue_script('jquery');

	// icons
	wp_enqueue_style( 'bigup-icons', get_template_directory_uri() . '/inc/icons/styles.css' );

	// scripts.js
	wp_enqueue_script( 'bigup-scripts', get_template_directory_uri() . '/js/all-scripts.min.js', array('jquery'), '1.0.0', true );

	// headroom.js
	wp_enqueue_script( 'bigup-headroom-main', get_template_directory_uri() . '/js/plugins/headroom.min.js', array('bigup-scripts'), '1.0.0', true );
	wp_enqueue_script( 'bigup-headroom-jquery', get_template_directory_uri() . '/js/plugins/jQuery.headroom.min.js', array('bigup-scripts'), '1.0.0', true );

	// google font 
	wp_register_style('bigup-google-font', 'http://fonts.googleapis.com/css?family=Lato:300,400,300italic|Lora:400italic');
	wp_enqueue_style( 'bigup-google-font');

	// WordPress Fixes
	wp_enqueue_script( 'bigup-navigation', get_template_directory_uri() . '/js/plugins/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'bigup-skip-link-focus-fix', get_template_directory_uri() . '/js/plugins/skip-link-focus-fix.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

?>