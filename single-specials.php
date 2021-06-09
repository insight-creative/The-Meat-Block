<?php
/**
 * @package InsightCustom
 */

get_header();
?>
	<div class="page-width padded-section">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="post-wrapper">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content-single', get_post_type() );
					endwhile; // End of the loop.
					?>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php
get_footer();
