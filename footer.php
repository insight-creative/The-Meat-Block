<?php
/**
 * @package InsightCustom
 **/
?>

</div><!-- #content -->
	<footer id="colophon" class="site-footer">
		<div class="footerContent">
			<div id="footerContentInner" class="pageWidth flex-container">
				<?php get_template_part("/inc/footer/footer-nav"); ?>
				<?php get_template_part("/inc/footer/contact"); ?>
				<?php get_template_part("/inc/footer/hours"); ?>
				<?php get_template_part("/inc/footer/socialNav"); ?>
			</div>
			<div id="footerContentBottom" class="pageWidth flex-container">
				<?php get_template_part("/inc/footer/our-brands"); ?>
				<?php get_template_part("/inc/footer/newsletter"); ?>
			</div>
	 </div>
	 <div id="footerSecond">
		 <?php get_template_part("/inc/footer/copyright"); ?>
	 </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
