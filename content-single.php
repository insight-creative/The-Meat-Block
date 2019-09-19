<?php
/**
 * Template used to display post content on single pages.
 *
 * @package insightcustom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	do_action( 'insightcustom_single_post_top' );

	/**
	 * Functions hooked into insightcustom_single_post add_action
	 *
	 * @hooked insightcustom_post_header          - 10
	 * @hooked insightcustom_post_meta            - 20
	 * @hooked insightcustom_post_content         - 30
	 */
	do_action( 'insightcustom_single_post' );

	/**
	 * Functions hooked in to insightcustom_single_post_bottom action
	 *
	 * @hooked insightcustom_post_nav         - 10
	 * @hooked insightcustom_display_comments - 20
	 */
	do_action( 'insightcustom_single_post_bottom' );
	?>

</article><!-- #post-## -->
