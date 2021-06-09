<?php
/**
 * @package InsightCustom
 **/
?>

</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-content">
			<div class="footer-content__inner page-width flex-container">
				<?php get_template_part("/inc/footer/footer-nav"); ?>
				<?php get_template_part("/inc/footer/contact"); ?>
				<?php get_template_part("/inc/footer/policies"); ?>
				<?php get_template_part("/inc/footer/social-nav"); ?>
			</div>
			<div class="footer-content__bottom page-width flex-container">
				<?php get_template_part("/inc/footer/our-brands"); ?>
				<?php get_template_part("/inc/footer/newsletter"); ?>
			</div>
		</div>
		<div class="footer-copyright">
			<?php get_template_part("/inc/footer/copyright"); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
