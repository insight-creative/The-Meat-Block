<?php
/**
 * Template Name: Outdoor Brands Template
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="universal-content-area">
	<main id="main" class="site-main">
		<div class="page-width padded-section">
			<h1><?php the_title(); ?> Brands</h1>
			<p>Contact The Meat Block to learn more about our <?php the_title(); ?> Brands and available customization options.</p>
			<a href="/contact/" class="btn primary-button">Contact Us</a>
			<div class="outdoor-brands-grid">
				<?php
				if( have_rows('outdoor_brands') ):
					// loop through the rows of data
					while ( have_rows( 'outdoor_brands' ) ) : the_row();
						// display a sub field value
						$brandLogo = get_sub_field( 'brand_logo' );
						$brandName = get_sub_field( 'brand_name' );
						$brandWebsite = get_sub_field( 'website' );
						$imageID = $brandLogo['ID'];
				?>
				<div class="outdoor-brand">
					<?php if( $brandWebsite ): ?>
					<a href="<?php echo $brandWebsite; ?>" class="outdoor-brand__link" target="_blank" rel="noopener noreferrer">
						<div class="outdoor-brand__logo-wrapper">
							<?php
								echo wp_get_attachment_image( $imageID, 'medium', false, array( 'class' => 'outdoor-brand__logo', 'data-sizes' => 'auto' ) );
							?>
						</div>
						<h2 class="outdoor-brand__name"><?php echo $brandName; ?></h2>
					</a>
					<?php else: ?>
						<div class="outdoor-brand__logo-wrapper">
							<?php
								echo wp_get_attachment_image( $imageID, 'medium', false, array( 'class' => 'outdoor-brand__logo', 'data-sizes' => 'auto' ) );
							?>
						</div>
						<h2 class="outdoor-brand__name"><?php echo $brandName; ?></h2>
					<?php endif; ?>
				</div>
				<?php 
				endwhile;
				endif;
				?>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
