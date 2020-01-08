<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package InsightCustom
 */

get_header();
?>
<div class="pageWidth paddedSection">
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div id="search" class="pageWidth limitWidth">
				<?php if ( have_posts() ) : ?>
					<header class="page-header greyBorder">
						<h1 class="page-title">
							<?php
								$allsearch = new WP_Query("s=$s&showposts=0");
								echo $allsearch ->found_posts.' results found';
								/* translators: %s: search query. */
								printf( esc_html__( ' for: %s', 'insightcustom' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</header><!-- .page-header -->
					<div class="paddedSection">
						<?php
						/* Start the Loop */
						rewind_posts();
						$my_query = new WP_Query( 'category_name=test-cat-1&posts_per_page=1' );
						while ( $my_query->have_posts() ) : $my_query->the_post();
						$do_not_duplicate = $post->ID;?>
						<!-- Do stuff... -->
						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
						endwhile; ?>
						<!-- Do other stuff... -->
						<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						if ( $post->ID == $do_not_duplicate ) continue;
						get_template_part( 'template-parts/content', 'search-2' );
					  endwhile; endif;
						the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->
</div>
<?php
get_footer();
