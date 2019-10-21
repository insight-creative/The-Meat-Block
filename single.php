<?php
/**
 * @package InsightCustom
 */

get_header();
?>
	<div class="pageWidth paddedSection">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="pageWidth">
					<div class="postWrapper">
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'single' );
						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="paddedSection greyBorderTop">
			<?php the_post_navigation(); ?>
		</div>
	</div>
<?php
get_footer();
