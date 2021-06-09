<?php
/**
 * @package InsightCustom
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
	<?php insightCustom_post_thumbnail(); ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
