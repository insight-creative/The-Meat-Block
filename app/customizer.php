<?php
/**
 * InsightCustom Theme Customizer
 *
 * @package InsightCustom
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function insightcustom_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'insightcustom_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'insightcustom_customize_partial_blogdescription',
		) );
	}
	$wp_customize->add_setting('primary_logo');
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'primary_logo',
	array(
	'label' => 'Primary Logo',
	'section' => 'title_tagline',
	'settings' => 'primary_logo',
	) ) );
	$wp_customize->add_setting('your_second_logo');
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_second_logo',
	array(
	'label' => 'Second Logo',
	'section' => 'title_tagline',
	'settings' => 'your_second_logo',
	) ) );
	$wp_customize->add_setting('your_third_logo');
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_third_logo',
	array(
	'label' => 'Third Logo',
	'section' => 'title_tagline',
	'settings' => 'your_third_logo',
	) ) );
	$wp_customize->add_setting('address');
	$wp_customize->add_control('address',
	array(
		'label'    => __( 'Business Address', 'insightcustom' ),
		'section'  => 'title_tagline',
		'settings' => 'address',
		'type'     => 'textarea',
		)
	);
	$wp_customize->add_setting('phone');
	$wp_customize->add_control('phone',
	array(
		'label'    => __( 'Phone', 'insightcustom' ),
		'section'  => 'title_tagline',
		'settings' => 'phone',
		'type'     => 'text',
		)
	);
	$wp_customize->add_setting('fax');
	$wp_customize->add_control('fax',
	array(
		'label'    => __( 'Fax', 'insightcustom' ),
		'section'  => 'title_tagline',
		'settings' => 'fax',
		'type'     => 'text',
		)
	);
	$wp_customize->add_setting('email');
	$wp_customize->add_control('email',
	array(
		'label'    => __( 'Email', 'insightcustom' ),
		'section'  => 'title_tagline',
		'settings' => 'email',
		'type'     => 'text',
		)
	);
	$wp_customize->add_setting('hours');
	$wp_customize->add_control('hours',
	array(
		'label'    => __( 'Business Hours', 'insightcustom' ),
		'section'  => 'title_tagline',
		'settings' => 'hours',
		'type'     => 'textarea',
		)
	);
	// Add Social Media Customization Controls Section
	$wp_customize->add_section('social_media', array(
	'title' => 'Social Media',
	'description' => 'Link to and manage your social media accounts here',
	'priority' => 100,
	));
	$wp_customize->add_setting('facebook');
	$wp_customize->add_control('facebook',
	array(
		'label'    => __( 'Facebook', 'insightcustom' ),
		'section'  => 'social_media',
		'settings' => 'facebook',
		'type'     => 'text',
		)
	);
	$wp_customize->add_setting('instagram');
	$wp_customize->add_control('instagram',
	array(
		'label'    => __( 'Instagram', 'insightcustom' ),
		'section'  => 'social_media',
		'settings' => 'instagram',
		'type'     => 'text',
		)
	);
	$wp_customize->add_setting('twitter');
	$wp_customize->add_control('twitter',
	array(
		'label'    => __( 'Twitter', 'insightcustom' ),
		'section'  => 'social_media',
		'settings' => 'twitter',
		'type'     => 'text',
		)
	);
	$wp_customize->add_setting('linkedin');
	$wp_customize->add_control('linkedin',
	array(
		'label'    => __( 'LinkedIn', 'insightcustom' ),
		'section'  => 'social_media',
		'settings' => 'linkedin',
		'type'     => 'text',
		)
	);
	$wp_customize->add_setting('youtube');
	$wp_customize->add_control('youtube',
	array(
		'label'    => __( 'YouTube', 'insightcustom' ),
		'section'  => 'social_media',
		'settings' => 'youtube',
		'type'     => 'text',
		)
	);
}
add_action( 'customize_register', 'insightcustom_customize_register' );
// Add our css styles
add_action( 'wp_head', 'insight_customizer_css');
function insight_customizer_css()
	{
	  ?>
	     <style type="text/css">
			 
			 </style>
	  <?php
	}
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function insightcustom_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function insightcustom_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function insightcustom_customize_preview_js() {
	wp_enqueue_script( 'insightcustom-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'insightcustom_customize_preview_js' );
