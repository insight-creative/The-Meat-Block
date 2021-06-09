<?php
/**
 * The header for our theme
 * @package InsightCustom
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="/wp-content/uploads/2021/06/favicon.png" rel="shortcut icon">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.typekit.net/llp7vmt.css">
	<link href="/wp-content/themes/insightCustom/css/MyFontsWebfontsKit.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-to-content" href="#main" tabindex="0">Skip to main content</a>
<a class="skip-to-content" href="#colophon" tabindex="0">Skip to footer</a>
<div class="site">
	<header class="masthead site-header" role="banner">
		<div class="masthead-container">
			<?php get_template_part('/inc/header/site-branding'); ?>
		</div>
		<?php get_template_part('/inc/header/mega-menu'); ?>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
