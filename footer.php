<?php
/**
 * @package InsightCustom
 **/
?>

</div><!-- #content -->
	<footer id="colophon" class="site-footer">
		<div class="footerContent navWidth">
			<div id="copyright">
				<svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<defs>
						<symbol id="icon-copyright" viewBox="0 0 24 28">
							<title>copyright</title>
							<path d="M17.969 16.781v1.703c0 2.203-3.516 3.016-5.719 3.016-4.281 0-7.5-3.266-7.5-7.578 0-4.234 3.187-7.422 7.422-7.422 1.547 0 5.594 0.547 5.594 3.031v1.703c0 0.141-0.109 0.25-0.25 0.25h-1.844c-0.141 0-0.25-0.109-0.25-0.25v-1.094c0-0.984-1.891-1.437-3.172-1.437-2.922 0-4.953 2.109-4.953 5.141 0 3.141 2.125 5.437 5.078 5.437 1.125 0 3.25-0.422 3.25-1.406v-1.094c0-0.141 0.109-0.25 0.234-0.25h1.859c0.125 0 0.25 0.109 0.25 0.25zM12 4c-5.516 0-10 4.484-10 10s4.484 10 10 10 10-4.484 10-10-4.484-10-10-10zM24 14c0 6.625-5.375 12-12 12s-12-5.375-12-12 5.375-12 12-12v0c6.625 0 12 5.375 12 12z"></path>
						</symbol>
					</defs>
				</svg>
				<svg class="icon icon-copyright"><use xlink:href="#icon-copyright"></use></svg>
				<p>&nbsp;<script>document.write(new Date().getFullYear());</script> Lamers Bus Lines, Inc.</p>
			</div>
			<div id="footerLinks">
				<div class="footerLinkWrap">
					<?php
					wp_nav_menu( array( 'theme_location' => 'FooterMenu', 'menu_id' => 'FooterMenu' ) );
					get_search_form();
					?>
				</div>
			</div>
			<?php get_template_part("/inc/socialNav"); ?>
	 </div>
	 <script type="text/javascript" src="/wp-content/themes/insightCustom/js/slick-init.js"></script>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
