<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package InsightCustom
 */

get_header();
?>
<?php get_template_part('/inc/breadcrumbs'); ?>
	<div class="pageWidth paddedSection">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="flex-container">
					<div class="col70 postWrapper">
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'single' );
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile; // End of the loop.
						?>
					</div>
					<div class="col30">
						<div class="paddedSection">
							<?php get_sidebar(); ?>
							<?php get_template_part('/inc/blog-sidebar'); ?>
						</div>
					</div>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="paddedSection greyBorderTop">
			<?php the_post_navigation(); ?>
		</div>
	</div>

<?php
get_sidebar();
get_footer();
