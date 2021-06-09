<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

get_header();
?>

	<div class="page-width padded-section">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="flex-container">
					<div class="col70 post-wrapper">
						<?php if ( have_posts() ) : ?>
							<header class="page-header gray-border">
								<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
								?>
							</header><!-- .page-header -->
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_type() );
							endwhile;
							the_posts_pagination();
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
					</div>
					<div class="col30">
						<div class="padded-section">
							<?php get_sidebar(); ?>
							<?php get_template_part('/inc/blog-sidebar'); ?>
						</div>
					</div>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

<?php
get_sidebar();
get_footer();
