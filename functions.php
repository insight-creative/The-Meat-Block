<?php
/**
 * InsightCustom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package InsightCustom
 */

if ( ! function_exists( 'insightcustom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function insightcustom_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on InsightCustom, use a find and replace
		 * to change 'insightcustom' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'insightcustom', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'insightcustom_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'insightcustom_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function insightcustom_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'insightcustom_content_width', 640 );
}
add_action( 'after_setup_theme', 'insightcustom_content_width', 0 );
/*********************************************************
Add custom admin login screen styles
*********************************************************/
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
/*
* Add a custom excerpt length
*/
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-contents'] = ob_get_clean();
	return $fragments;
}

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

require_once('app/woocommerce/woocommerce.php');
///////////////////////////////////////////////////////////////
//// Set search results to display only 'product' post type results
//////////////////////////////////////////////////////////////
if ( !is_admin() ) {
function searchfilter($query) {
 if ($query->is_search && !is_admin() ) {
 $query->set('post_type',array('product'));
 }
return $query;
}
add_filter('pre_get_posts','searchfilter');
}
/*********************************************************
Advanced Custom Fields Customizations
*********************************************************/
require_once("app/acf/acf.php");
/********************************************
Register theme menus
********************************************/
require_once("app/register-menus.php");
/********************************************
Register theme widgets
********************************************/
require_once("app/register-widgets.php");
/********************************************
Require login by email address
********************************************/
require_once("app/login-by-email.php");
/*********************************************
Limit Login Attempts
*********************************************/
require_once("app/limit-login.php");
/********************************************
 Remove the WordPress emojis
********************************************/
require_once("app/remove-emoji.php");
require_once("app/customizer.php");
require_once("app/custom-login-url.php");
///////////////////////////////////////////////////////////////
//// Enqueue scripts and styles
//////////////////////////////////////////////////////////////
function insightcustom_styles() {
	wp_enqueue_style( 'insightcustom-style', get_stylesheet_uri() );
	wp_enqueue_style( 'insight-custom-style', get_stylesheet_directory_uri() . '/resources/css/style.min.css');
	wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap', false );
	wp_register_style('font-awesome', get_stylesheet_directory_uri() . '/css/css/all.css');
	wp_enqueue_style('font-awesome');
}
add_action( 'wp_enqueue_scripts', 'insightcustom_styles' );
function insightcustom_scripts() {
	wp_enqueue_script( 'insightcustom-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'insightcustom-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/resources/js/custom.min.js', ['jquery'], '1.0.0', true);
	wp_enqueue_script('vendors', get_stylesheet_directory_uri() . '/resources/js/vendor.min.js', ['jquery'], '1.0.0', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'insightcustom_scripts' );
///////////////////////////////////////////////////////////////
//// Custom template tags for this theme
//////////////////////////////////////////////////////////////
require_once("app/template-tags.php");
///////////////////////////////////////////////////////////////
//// Functions which enhance the theme by hooking into WordPress
//////////////////////////////////////////////////////////////
require_once("app/template-functions.php");
