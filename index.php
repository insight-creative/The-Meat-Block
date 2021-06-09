<?php
/**
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
		<div class="page-width padded-top">
			<div class="limit-width">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna nunc id cursus metus aliquam.
				</p>
			</div>
		</div>
		<div class="page-width flex-container-wrapped">
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
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
