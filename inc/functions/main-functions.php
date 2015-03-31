<?php 
/**
 * main-functions.php
 * @package bigup
 */



// add theme support 
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );

/**
 * Register widget area.
 */
function bigup_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bigup' ),
		'id'            => 'sidebar-main',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'bigup_widgets_init' );



/** 
 * Simplified way to get featured image url
 * Recommend using conditional statement
 * @global <?php echo post_image_url(); ?> 
*/ 
function get_image_url() {
	$get_img_ID = get_post_thumbnail_id();
	$img_src_url = wp_get_attachment_image_src($get_img_ID, 'large')[0];
	return $img_src_url;
}
function get_medium_url() {
	$get_img_ID = get_post_thumbnail_id();
	$img_src_url = wp_get_attachment_image_src($get_img_ID, 'medium')[0];
	return $img_src_url;
}



/** 
 * Trim the_content() and add permalink with '... Read More'
 * @global <?php the_trimmed_content($wordcount, $readmoretext); ?>
*/ 
function the_trimmed_content( $wordcount = 30, $readmoretext = 'Read More' ) {
	$content = get_the_content();
	$trimmed_content = wp_trim_words( $content, $wordcount, '... <a href="'. get_permalink() .'" class="tc-read-more">' . $readmoretext . '</a>' );
	echo wpautop($trimmed_content);
}



// Add new taxonomy, make it hierarchical (like categories)
$labels = array(
	'name'              => _x( 'Types', 'taxonomy general name' ),
	'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
	'search_items'      => __( 'Search Types' ),
	'all_items'         => __( 'All Types' ),
	'parent_item'       => __( 'Parent Type' ),
	'parent_item_colon' => __( 'Parent Type:' ),
	'edit_item'         => __( 'Edit Type' ),
	'update_item'       => __( 'Update Type' ),
	'add_new_item'      => __( 'Add New Type' ),
	'new_item_name'     => __( 'New Type Name' ),
	'menu_name'         => __( 'Type' ),
);
$args = array(
	'hierarchical'      => true,
	'labels'            => $labels,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => array( 'slug' => 'type' ),
);
//register_taxonomy( 'type', array( 'post' ), $args );



/**
 * Display navigation to next/previous post when applicable.
 */
function bigup_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'bigup' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav">&larr;</span>&nbsp;%title', 'Previous post link', 'bigup' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title&nbsp;<span class="meta-nav">&rarr;</span>', 'Next post link',     'bigup' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}



/**
 * Wrap images in a div rather than <p>
 */
add_filter( 'image_send_to_editor', 'wp_image_wrap_init', 10, 8 );    
    function wp_image_wrap_init( $html, $id, $caption, $title, $align, $url, $size, $alt ) {
    return '<div id="wp-image-wrap-'. $id .'" class="wp-image-wrap">'. $html .'</div>';
}



/**
 * Admin CSS
 */
add_editor_style( get_template_directory_uri() . '/inc/css/admin.css' ); 


/**
 * Paging Nav
 */
function bigup_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'bigup' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'bigup' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'bigup' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}



?>