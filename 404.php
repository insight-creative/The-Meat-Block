<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="error">
			<div class="full-width-block">
				<div class="page-width content-container">
					<div class="container-inner">
						<h1 class="white-text block-title"><span class="black-back">404</span></h1>
					</div>
				</div>
			</div>
		</section>
		<section class="error-404 not-found page-width limit-width padded-section">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! It seems that page hasn&rsquo;t been cut yet!', 'insightcustom' ); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Take a look at some of the links below or try a search to find what you are looking for? Contact us if the issue persists and you cannot find what you\'re looking for.', 'insightcustom' ); ?></p>
				<ul>
					<li><a href="/shop">Shop Now</li>
					<li><a href="/foods">Foods</li>
					<li><a href="/product-category/grills-and-smokers">Grills and Smokers</li>
					<li><a href="/product-category/grilling-accessories">Grilling Accessories</li>
					<li><a href="/product-category/fuels">Fuels</li>
					<li><a href="/product-category/sauces-rubs-and-more">Sauces, Rubs and More</li>
					<li><a href="/outdoor-living/">Outdoor Living</li>
					<li><a href="/outdoor-kitchens/">Outdoor Kitchens</li>
					<li><a href="/sitemap/">Sitemap</li>
					<li><a href="/contact/">Contact Us</li>
				</ul>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
