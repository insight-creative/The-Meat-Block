<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id ="contactContent" class="paddedSection">
			<div id="contactWrap">
				<div class="pageWidth flex-container">
					<div id="formWrap" class="col60">
						<div id="formWrapInner">
							<h4 class="noMargin">Contact The Meat Block</h4>
							<div class="underline"></div>
							<img src="/wp-content/uploads/2019/09/BU4A4785-Version-3-1024x683.jpg" class="image" alt="Group photo of the Fox Structures Team on Owners">
							<div class="formWrapper">
								<?php echo do_shortcode('[caldera_form id="CF5d83c5d3b9606"]'); ?>
							</div>
						</div>
					</div>
					<div class="col40">
						<div class="smallMapWrapper">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2855.2305113107213!2d-88.54973288448097!3d44.30521147910434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8803c9501cd79c63%3A0xaee970865f0cda80!2sN1739%20Lily%20of%20the%20Valley%20Dr%2C%20Greenville%2C%20WI%2054942!5e0!3m2!1sen!2sus!4v1568917514172!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							<p> N1739 Lily of the Valley Dr<br>
							Greenville ,WI</p>
							<hr>
							<p>
								Phone: <a class="primaryLink" href="tel:920-757-6622">920-757-6622</a>
								<br>
								Fax: 920-757-6660
								<br>
								Email: info@themeatblock.com
							</p>
							<?php the_field('store_hours', 'option'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
