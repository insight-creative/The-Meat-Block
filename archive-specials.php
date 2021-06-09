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
<div id="primary" class="content-area">
	<main id="main" class="site-main">
	<section id="specials">
		<div class="full-width-block">
			<div class="page-width content-container">
				<div class="container-inner">
					<h1 class="white-text block-title"><span class="black-back">Specials</span></h1>';
				</div>
			</div>
		</div>
	</section>
	<section class="page-width padded-section">
		<div class="post-wrapper">
			<?php if ( have_posts() ) : ?>
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				the_posts_pagination();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>
	</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
