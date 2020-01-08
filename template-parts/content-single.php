<?php
/**
 * @package InsightCustom
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title centerText">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title centerText"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php insightCustom_post_thumbnail(); ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
