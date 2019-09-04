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
	<link href="/wp-content/uploads/2019/08/favicon.png" rel="shortcut icon">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.typekit.net/mkv6ofm.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="screenReaderSkipToContent" href="#primary" tabindex="0">Skip to main content</a>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div id="mastheadContainer">
			<?php get_template_part('/inc/header/site-branding'); ?>
		</div>
		<?php get_template_part('/inc/header/main-menu'); ?>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
