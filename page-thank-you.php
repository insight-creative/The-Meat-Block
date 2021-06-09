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
		<section id="thank-you">
			<div class="full-width-block">
				<div class="page-width content-container">
					<div class="container-inner">
						<h1 class="white-text block-title"><span class="black-back">Thank You</span></h1>
					</div>
				</div>
			</div>
		</section>
		<section class="error-404 not-found page-width limit-width padded-section">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Thank you for your message. A Meat Block team member will contact you within 24 hours.', 'insightcustom' ); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content">
				<p><?php esc_html_e( 'While you\'re waiting for a response from us, feel free to browse some of the links below and learn more about what we offer you!', 'insightcustom' ); ?></p>
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
