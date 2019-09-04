<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/hero'); ?>
		<section id="pageContent">
			<?php get_template_part('/inc/mission'); ?>
			<?php get_template_part('/inc/customer-satisfaction'); ?>
			<section id="testimonialSlider" class="paddedSection">
				<?php get_template_part('/inc/testimonial-slider'); ?>
			</section>
			<?php get_template_part('/inc/safety'); ?>
			<!-- ********** Featured Services Section Start ********** -->
			<div class="paddedSection">
				<?php get_template_part('/inc/featured-services'); ?>
			</div>
			<!-- ********** Featured Services Section End ********** -->
			<?php get_template_part('/inc/contact'); ?>
		</section>
	</main>
</div>
<?php
get_footer();
