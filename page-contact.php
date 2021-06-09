<?php
/**
 * @package InsightCustom
 */
get_header();

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id ="contactContent" class="padded-section">
			<div class="page-width flex-container">
				<div id="formWrap" class="col60">
					<div id="formWrapInner">
						<h4 class="no-margin">Contact The Meat Block</h4>
						<div class="underline"></div>
						<img src="/wp-content/uploads/2019/09/BU4A4785-Version-3-1024x683.jpg" class="image" alt="Group photo of The Meat Block family">
						<div class="form-wrapper">
							<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]'); ?>
						</div>
					</div>
				</div>
				<div class="col40">
					<div class="small-map-wrapper">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2855.2305113107213!2d-88.54973288448097!3d44.30521147910434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8803c9501cd79c63%3A0xaee970865f0cda80!2sN1739%20Lily%20of%20the%20Valley%20Dr%2C%20Greenville%2C%20WI%2054942!5e0!3m2!1sen!2sus!4v1568917514172!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						<?php echo get_theme_mod('address'); ?>
						<hr>
						<p>
							Phone: <a class="primary-link" href="tel:<?php echo get_theme_mod('phone'); ?>"><?php echo get_theme_mod('phone'); ?></a>
							<br>
							Fax: <?php echo get_theme_mod('fax'); ?>
							<br>
							Email: <a class="primary-link" href="mailto:<?php echo get_theme_mod('email'); ?>"><?php echo get_theme_mod('email'); ?></a>
						</p>
						<?php echo get_theme_mod('hours'); ?>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
