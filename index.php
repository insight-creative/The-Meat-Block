<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

get_header();
?>
<?php get_template_part('/inc/breadcrumbs'); ?>
<section class="removeBottomMargin">
  <div class="fullWidth flex-container centerAlignedContainer">
    <div class="col50">
      <img src="/wp-content/uploads/2019/08/blog-low-1.jpg" class="image">
    </div>
    <div class="col50 centerTextBlock">
      <div class="textWrap textBlock">
        <h1>News</h1>
		    <p>Lamers Bus Lines’ blog shares company news, bus travel information, and motor coach trip descriptions. Read more to learn about bus safety and tips for booking your trips and buses.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="pageWidth paddedSection">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="flex-container-reverse">
				<div class="col70">
					<?php
					if ( have_posts() ) :
						if ( is_home() && ! is_front_page() ) :
							?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
							<?php
						endif;
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
					<div class="paddedSection">
						<?php get_sidebar(); ?>
						<?php get_template_part('/inc/blog-sidebar'); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php
get_footer();
