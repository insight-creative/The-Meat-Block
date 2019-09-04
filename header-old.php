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
	<script src="/wp-content/themes/insightCustom/js/slick.js"></script>
	<link rel="stylesheet" href="https://use.typekit.net/mkv6ofm.css">
	<!-- Hotjar Tracking Code for https://wordpress-154794-852975.cloudwaysapps.com/ -->
	<script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:1455347,hjsv:6};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="screenReaderSkipToContent" href="#primary" tabindex="0">Skip to main content</a>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<nav role="navigation" aria-label="desktop sub navigation" class="secondaryNavigation">
			<div class="fullWidth secondaryMenuWrap">
				<?php wp_nav_menu( array( 'theme_location' => 'SecondaryMenu', 'menu_id' => 'SecondaryMenu' ) );
				get_search_form();
				?>
			</div>
		</nav>
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="primary navigation">
			<div class="navWidth menuLinkWrap">
					<a href="http://wordpress-154794-852975.cloudwaysapps.com/">
						<img src="/wp-content/uploads/2019/05/Lamers-Bus-Lines-Logo-RGB.jpg" class="siteLogo" alt="Lamer's Bus Lines Logo">
					</a>
					<?php wp_nav_menu( array( 'theme_location' => 'PrimaryMenu', 'menu_id' => 'PrimaryMenu' ) ); ?>
					<div class = "menuButtonWrap" aria-label="mobile menu toggle button" tabindex="0">
						<div class = "menuTextWrap">
							<span class = "menuText">MENU</span>
							<button class="hamburger hamburger--collapse" type="button" aria-label="Mobile menu button" aria-expanded="false">
							  <span class="hamburger-box">
							    <span class="hamburger-inner"></span>
							  </span>
							</button>
						</div>
					</div>
			</div>
		</nav>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
