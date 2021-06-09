<?php
/**
 * @package InsightCustom
 */

get_header();
?>
	<div class="page-width padded-section">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="page-width">
					<div class="post-wrapper">
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
		<div class="padded-section gray-borderTop">
			<?php the_post_navigation(); ?>
		</div>
	</div>
<?php
get_footer();
