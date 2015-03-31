<?php
/**
 * Theme Customizer
 * @package bigup
 */

/**
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bigup_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Section
	$wp_customize->add_section( 'bigup-design' , array(
		'title' => __( 'Website Options', 'bigup' ),
		'priority' => 30,
		'description' => __( '', 'bigup' )
	));

		// Add Setting
		$wp_customize->add_setting( 'website-color' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'website-color', array(
			'label' => __( 'Website Primary Color', 'bigup' ),
			'section' => 'bigup-design',
			'settings' => 'website-color',
			'description' => ''
		))); 

	// Section
	$wp_customize->add_section( 'bigup-intro-section' , array(
		'title' => __( 'Intro Section Settings', 'bigup' ),
		'priority' => 30,
		'description' => __( '', 'bigup' )
	));

		// Add Setting
		$wp_customize->add_setting( 'intro-title' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'intro-title', array(
			'label' => __( 'Introduction Title', 'bigup' ),
			'section' => 'bigup-intro-section',
			'settings' => 'intro-title',
			'description' => ''
		))); 

		// Add Setting
		$wp_customize->add_setting( 'intro-message' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'intro-message', array(
			'label' => __( 'Intro Message', 'bigup' ),
			'section' => 'bigup-intro-section',
			'settings' => 'intro-message',
			'description' => ''
		))); 


	// Section
	$wp_customize->add_section( 'bigup-actions' , array(
		'title' => __( 'Call To Action Buttons', 'bigup' ),
		'priority' => 30,
		'description' => __( 'Call to action buttons can be found on the homepage. They help highlight important pages that you want visitors to find.', 'bigup' )
	));

		// Add Setting
		$wp_customize->add_setting( 'actions-1' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'actions-1', array(
			'label' => __( 'Select a page to feature...', 'bigup' ),
			'section' => 'bigup-actions',
			'type' => 'dropdown-pages',
			'settings' => 'actions-1',
			'description' => ''
		))); 

		// Add Setting
		$wp_customize->add_setting( 'actions-2' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'actions-2', array(
			'label' => __( 'Select a page to feature...', 'bigup' ),
			'section' => 'bigup-actions',
			'type' => 'dropdown-pages',
			'settings' => 'actions-2',
			'description' => ''
		))); 

		// Add Setting
		$wp_customize->add_setting( 'actions-3' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'actions-3', array(
			'label' => __( 'Select a page to feature...', 'bigup' ),
			'section' => 'bigup-actions',
			'type' => 'dropdown-pages',
			'settings' => 'actions-3',
			'description' => ''
		))); 

	// Section
	$wp_customize->add_section( 'social-media' , array(
		'title' => __( 'Social Media', 'bigup' ),
		'priority' => 30,
		'description' => __( '', 'bigup' )
	));
 
		// Add Setting
		$wp_customize->add_setting( 'social-facebook' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social-facebook', array(
			'label' => __( 'Enter Facebook URL', 'bigup' ),
			'section' => 'social-media',
			'settings' => 'social-facebook',
			'description' => 'Must start with "http://"'
		))); 

		// Add Setting
		$wp_customize->add_setting( 'social-twitter' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social-twitter', array(
			'label' => __( 'Enter Twitter URL', 'bigup' ),
			'section' => 'social-media',
			'settings' => 'social-twitter',
			'description' => 'Must start with "http://"'
		))); 

		// Add Setting
		$wp_customize->add_setting( 'social-google-plus' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social-google-plus', array(
			'label' => __( 'Enter Google Plus URL', 'bigup' ),
			'section' => 'social-media',
			'settings' => 'social-google-plus',
			'description' => 'Must start with "http://"'
		))); 


		// Add Setting
		$wp_customize->add_setting( 'social-pinterest' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social-pinterest', array(
			'label' => __( 'Enter Pinterest URL', 'bigup' ),
			'section' => 'social-media',
			'settings' => 'social-pinterest',
			'description' => 'Must start with "http://"'
		))); 


		// Add Setting
		$wp_customize->add_setting( 'social-linkedin' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social-linkedin', array(
			'label' => __( 'Enter LinkedIn URL', 'bigup' ),
			'section' => 'social-media',
			'settings' => 'social-linkedin',
			'description' => 'Must start with "http://"'
		))); 

	// Section
	$wp_customize->add_section( 'company-info' , array(
		'title' => __( 'Company Info', 'bigup' ),
		'priority' => 30,
		'description' => __( '', 'bigup' )
	));

		// Add Setting
		$wp_customize->add_setting( 'company-name' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'company-name', array(
			'label' => __( 'Company Name', 'bigup' ),
			'section' => 'company-info',
			'settings' => 'company-name',
			'description' => ''
		))); 

		// Add Setting
		$wp_customize->add_setting( 'company-address' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'company-address', array(
			'label' => __( 'Address', 'bigup' ),
			'section' => 'company-info',
			'settings' => 'company-address',
			'description' => ''
		))); 

		// Add Setting
		$wp_customize->add_setting( 'company-location' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'company-location', array(
			'label' => __( 'Location (City, State, Zip)', 'bigup' ),
			'section' => 'company-info',
			'settings' => 'company-location',
			'description' => ''
		))); 

		// Add Setting
		$wp_customize->add_setting( 'company-phone' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'company-phone', array(
			'label' => __( 'Phone Number', 'bigup' ),
			'section' => 'company-info',
			'settings' => 'company-phone',
			'description' => ''
		))); 

		// Add Setting
		$wp_customize->add_setting( 'company-email' , array( 'default' => '' ));
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'company-email', array(
			'label' => __( 'Email Address', 'bigup' ),
			'section' => 'company-info',
			'settings' => 'company-email',
			'description' => ''
		))); 

}
add_action( 'customize_register', 'bigup_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bigup_customize_preview_js() {
	wp_enqueue_script( 'bigup_customizer', get_template_directory_uri() . '/js/plugins/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'bigup_customize_preview_js' );

?>