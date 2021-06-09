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
	// Add colors to the color options
	$wp_customize->add_setting('header_color', array(
    'default'     => '#ffffff',
    'transport'   => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
	'label'        => 'Header Color',
	'section'    => 'colors',
	'settings'   => 'header_color',
	'priority'   => 1,
	) ) );
	$wp_customize->add_setting('primary_color', array(
    'default'     => '#112671',
    'transport'   => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
	'label'        => 'Primary Color',
	'section'    => 'colors',
	'settings'   => 'primary_color',
	) ) );
	$wp_customize->add_setting('accent_color', array(
    'default'     => '#61a60e',
    'transport'   => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
	'label'        => 'Accent Color',
	'section'    => 'colors',
	'settings'   => 'accent_color',
	) ) );
	$wp_customize->add_setting('text_color', array(
    'default'     => '#4D4D4D',
    'transport'   => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
	'label'        => 'Text Color',
	'section'    => 'colors',
	'settings'   => 'text_color',
	) ) );
	$wp_customize->add_setting('link_color', array(
    'default'     => '#112671',
    'transport'   => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'        => 'Link Color',
	'section'    => 'colors',
	'settings'   => 'link_color',
	) ) );
	$wp_customize->add_setting('primary_button_color', array(
    'default'     => '#61a60e',
    'transport'   => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_color', array(
	'label'        => 'Primary Button Color',
	'section'    => 'colors',
	'settings'   => 'primary_button_color',
	) ) );
	$wp_customize->add_setting('primary_button_hover_color', array(
    'default'     => '#112671',
    'transport'   => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_button_hover_color', array(
	'label'        => 'Primary Button Hover Color',
	'section'    => 'colors',
	'settings'   => 'primary_button_hover_color',
	) ) );
	$wp_customize->add_setting('secondary_button_color', array(
    'default'     => '#112671',
    'transport'   => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_color', array(
	'label'        => 'Secondary Button Color',
	'section'    => 'colors',
	'settings'   => 'secondary_button_color',
	) ) );
	$wp_customize->add_setting('secondary_button_hover_color', array(
    'default'     => '#61a60e',
    'transport'   => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_button_hover_color', array(
	'label'        => 'Secondary Button Hover Color',
	'section'    => 'colors',
	'settings'   => 'secondary_button_hover_color',
	) ) );
	// Add Blog Customization Controls Section
	$wp_customize->add_section('blog_options', array(
	'title' => 'Blog Options',
	'description' => 'Customization options for how your blog posts display',
	'priority' => 100,
	));
	$wp_customize->add_setting('hide_dates');
	$wp_customize->add_control('hide_dates',
	array(
		'label'    => __( 'Hide Dates', 'insightcustom' ),
		'section'  => 'blog_options',
		'settings' => 'hide_dates',
		'type'     => 'checkbox',
		)
	);
	$wp_customize->add_setting('hide_author');
	$wp_customize->add_control('hide_author',
	array(
		'label'    => __( 'Hide Author', 'insightcustom' ),
		'section'  => 'blog_options',
		'settings' => 'hide_author',
		'type'     => 'checkbox',
		)
	);
	$wp_customize->add_setting('hide_category');
	$wp_customize->add_control('hide_category',
	array(
		'label'    => __( 'Hide Categories', 'insightcustom' ),
		'section'  => 'blog_options',
		'settings' => 'hide_category',
		'type'     => 'checkbox',
		)
	);
	$wp_customize->add_setting('hide_featured_images');
	$wp_customize->add_control('hide_featured_images',
	array(
		'label'    => __( 'Hide Featured Images', 'insightcustom' ),
		'section'  => 'blog_options',
		'settings' => 'hide_featured_images',
		'type'     => 'checkbox',
		)
	);
	// Add Footer Section
	$wp_customize->add_section('theme_footer', array(
	'title' => 'Footer',
	'description' => '',
	'priority' => 120,
	));
	$wp_customize->add_setting('footer_logo');
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo',
	array(
	'label' => 'Footer Logo',
	'section' => 'theme_footer',
	'settings' => 'footer_logo',
	) ) );
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
			 <?php if (get_theme_mod('header_color')) { ?>
				 .site-header { background: <?php echo get_theme_mod('header_color', '#43C6E4'); ?>; }
			 <?php
			 }
			 ?>
			 <?php if (get_theme_mod('primary_color')) { ?>
				 h1,h2,h3,h4,h5,h6 { color: <?php echo get_theme_mod('primary_color'); ?>; }
			 <?php
			 }
			 ?>
			 <?php if (get_theme_mod('text_color')) { ?>
				 p { color: <?php echo get_theme_mod('text_color'); ?>; }
			 <?php
			 }
			 ?>
			 <?php if (get_theme_mod('link_color')) { ?>
				 a { color: <?php echo get_theme_mod('link_color'); ?>; }
			 <?php
			 }
			 ?>
			 <?php if (get_theme_mod('primary_button_color')) { ?>
				 .btn-fill { background: <?php echo get_theme_mod('primary_button_color'); ?>;
			  	border: <?php echo get_theme_mod('primary_button_color'); ?>;}
				 .btn-fill:hover, .btn-fill:focus { border-color: <?php echo get_theme_mod('primary_button_color'); ?>;
					background: <?php echo get_theme_mod('primary_button_color'); ?>;}
			 <?php
			 }
			 ?>
			 <?php if (get_theme_mod('primary_button_hover_color')) { ?>
				 .fill:hover, .fill:focus { box-shadow: inset 0 0 0 2em <?php echo get_theme_mod('primary_button_hover_color'); ?>; }
			 <?php
			 }
			 ?>
			 <?php if (get_theme_mod('secondary_button_color')) { ?>
				 .btn-fill-alt { background: <?php echo get_theme_mod('secondary_button_color'); ?>;
			  	border: <?php echo get_theme_mod('secondary_button_color'); ?>;}
				 .btn-fill-alt:hover, .btn-fill-alt:focus { border-color: <?php echo get_theme_mod('secondary_button_color'); ?>;
					background: <?php echo get_theme_mod('secondary_button_color'); ?>;}
			 <?php
			 }
			 ?>
			 <?php if (get_theme_mod('secondary_button_hover_color')) { ?>
				 .fill-alt:hover, .fill-alt:focus { box-shadow: inset 0 0 0 2em <?php echo get_theme_mod('secondary_button_hover_color'); ?>; }
			 <?php
			 }
			 ?>
			 <?php if (get_theme_mod('hide_dates')) { ?>
				 .post-date{display: none;}
			 <?php
			 }
			 ?>
			 <?php if (get_theme_mod('hide_author')) { ?>
				 .post-author{display: none;}
			 <?php
			 }
			 ?>
			 <?php if (get_theme_mod('hide_category')) { ?>
				 .post-cat{display: none;}
			 <?php
			 }
			 ?>
			 <?php if (get_theme_mod('hide_featured_images')) { ?>
				 .post-thumbnail{display: none;}
			 <?php
			 }
			 ?>
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
