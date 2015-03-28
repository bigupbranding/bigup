<?php
/**
 * Theme Customizer
 * @package maxlutz
 */

/**
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function maxlutz_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Section
	$wp_customize->add_section( 'maxlutz-intro-section' , array(
		'title' => __( 'Intro Section Settings', 'maxlutz' ),
		'priority' => 30,
		'description' => __( '', 'maxlutz' )
	));

		// Add Setting
		$wp_customize->add_setting( 'intro-title' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'intro-title', array(
			'label' => __( 'Introduction Title', 'maxlutz' ),
			'section' => 'maxlutz-intro-section',
			'settings' => 'intro-title',
			'description' => ''
		))); 

		// Add Setting
		$wp_customize->add_setting( 'intro-message' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'intro-message', array(
			'label' => __( 'Intro Message', 'maxlutz' ),
			'section' => 'maxlutz-intro-section',
			'settings' => 'intro-message',
			'description' => ''
		))); 

}
add_action( 'customize_register', 'maxlutz_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function maxlutz_customize_preview_js() {
	wp_enqueue_script( 'maxlutz_customizer', get_template_directory_uri() . '/js/plugins/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'maxlutz_customize_preview_js' );

?>