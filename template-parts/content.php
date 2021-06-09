<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

?>
<div class="articleWrapper">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
		<div class="flex-container-reverse padded-section gray-border">
			<div>
				<div class="text-wrap">
					<div class="thumbnailWrapper">
						<?php insightCustom_post_thumbnail(); ?>
					</div>
					<header class="entry-header">
						<?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title medium-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;
						if ( 'post' === get_post_type() ) :
							?>
							<div class="entry-meta">
								<?php the_excerpt(); ?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->
					<div class="continue-reading">
						<?php
						$read_more_link = sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'View Specials %s', 'insightCustom' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						);
						?>
						<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark" class="btn primary-button"><?php echo $read_more_link; ?></a>
					</div>
				</div>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
