<?php
/**
 * Template Name: Universal Template With Sidebar
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="universal-content-area">
	<main class="site-main">
		<?php
		////////////////////////////////
		// Stand alone hero block
		///////////////////////////////
		if( have_rows('hero_block') ):
			while ( have_rows('hero_block') ) : the_row();
				if( get_row_layout() == 'hero_block' ):
					?>
					<section id="<?php echo get_sub_field('section_name'); ?>">
						<div class="full-width-block" style="background-image: url('<?php echo get_sub_field('full_width_background'); ?>')";>
						<?php
						if( get_sub_field('hero_title') ):
						?>
						<div class="page-width content-container">
							<div class="container-inner">
								<h1 class="white-text block-title"><span class="black-back"><?php echo get_sub_field('hero_title'); ?></span></h1>
							</div>
						</div>
						<?php
						endif;
						?>
						</div>
					</section>
					<?php
					else:
							// no layouts found
				endif;
			endwhile;
		endif;
		?>
		<div class="page-width flex-container">
			<div class="col30">
				<?php get_template_part('/inc/sidebar/sidebar-menu'); ?>
				<?php get_template_part('/inc/sidebar/smallCTA'); ?>
			</div>
			<div class="col70">
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('content_fields') ):
					// loop through the rows of data
					while ( have_rows('content_fields') ) : the_row();
					////////////////////////////////////////////////
					// Full Width Block With Attached Copy Block
					////////////////////////////////////////////////
					if( get_row_layout() == 'full_width_block_with_copy_block' ):
						?>
						<section id="<?php echo get_sub_field('section_name'); ?>">
							<div class="divider div-transparent div-arrow-down">
							</div>
							<div class="full-width-block" style="background-image: url('<?php echo get_sub_field('full_width_background'); ?>')";>
								<div class="page-width content-container">
									<div class="container-inner">
									<?php
									if( $logoImage ):
										echo '<div class="logo-wrap">';
										$imageID = $logoImage['ID'];
										echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
										echo '</div>';
									endif;
									if( get_sub_field('section_title') ):
									echo '<h1 class="white-text block-title"><span class="black-back">' . get_sub_field('section_title') . '</span></h1>';
									echo '<div class="icon-wrap">';
									$imageID = $iconImage['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									echo '</div>';
									endif;
									if( get_sub_field('section_sub_title') ):
										echo '<h2 class="white-glow">' . get_sub_field('section_sub_title') . '</h2>';
									endif;
									if( get_sub_field('button') ):
									?>
									<div class="button-wrapper">
										<a href="<?php echo get_sub_field('button_url'); ?>" class="btn primary-button-alt"><?php echo get_sub_field('button'); ?></a>
									</div>
									<?php
									endif;
									?>
									</div>
								</div>
							</div>
							<div class="full-width-back" style="background-image: url('<?php echo get_sub_field('section_background'); ?>')";>
								<div class="page-width padded-section limit-width">
								<?php
								if (get_sub_field('copy_section_title')):
								?>
									<div class="center-text">
										<h3><?php echo get_sub_field('copy_section_title'); ?></h3>
									</div>
								<?php
								endif;
								echo get_sub_field('copy');
								?>
								</div>
							</div>
						</section>
						<?php
						////////////////////////////////////////////
						// Simple copy block
						////////////////////////////////////////////
						elseif( get_row_layout() == 'copy_block' ):
						?>
						<section id="<?php echo get_sub_field('section_name'); ?>">
							<div class="full-width-back" style="background-image: url('<?php echo get_sub_field('section_background'); ?>')";>
								<div class="padded-section">
									<?php echo get_sub_field('copy'); ?>
								</div>
							</div>
						</section>
						<?php
						////////////////////////////
						// Full Width Image Block
						///////////////////////////
						elseif( get_row_layout() == 'full_width_image_block' ):
						?>
						<section id="<?php echo get_sub_field('section_name'); ?>">
							<div class="page-width limit-width">
							<?php
							if (get_sub_field('image')):
								$fullWidthImage = get_sub_field('image');
								$imageID = $fullWidthImage['ID'];
								echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
							endif;
							?>
							</div>
						</section>
						<?php
						//////////////////////////////////
						// Brand Logos
						//////////////////////////////////
						elseif( get_row_layout() == 'brand_logos' ):
						?>
						<div class="limit-width page-width">
							<div class="brand-logos">
								<?php
									$image = get_sub_field('brand_logo_1');
									$imageID = $image['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
								?>
								<?php
									$image = get_sub_field('brand_logo_2');
									$imageID = $image['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
								?>
								<?php
									$image = get_sub_field('brand_logo_3');
									$imageID = $image['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
								?>
							</div>
						</div>
						<?
						///////////////////////////////////
						// 70/30 Split Two Column Block
						//////////////////////////////////
						elseif( get_row_layout() == 'customizable_75_25_2_column_block' ):
						?>
						<section id="<?php echo get_sub_field('section_id'); ?>" class="padded-section">
						<?php
							if(get_sub_field('section_background')):
						?>
							<div class="full-width-block" style="background-image: url('<?php echo get_sub_field('section_background'); ?>')";>
							<?php
							endif;
							?>
								<div class="page-width flex-container center-aligned-container">
									<div class="col70">
										<div class="block-text">
											<?php echo get_sub_field('block_1_contents'); ?>
										</div>
									</div>
									<div class="col30">
										<div class="block-text">
											<?php echo get_sub_field('block_2_contents'); ?>
										</div>
									</div>
								</div>
							</div>
						</section>
						<?
						///////////////////////////////////
						// Simple Two Column Block
						//////////////////////////////////
						elseif( get_row_layout() == 'two_column_block' ):
						?>
						<section id="<?php echo get_sub_field('section_name'); ?>" class="padded-section">
							<div class="page-width flex-container center-aligned-container padded-top">
							<?php
							$col_1 = get_sub_field('col_contents_1');
							$col_2 = get_sub_field('col_contents_2');
								if( $col_1 ): ?>
									<div class="col50">
										<div class="block-text">
											<?php echo $col_1 ?>
										</div>
									</div>
								<?php endif;
								if( $col_2 ): ?>
									<div class="col50">
										<div class="block-text">
											<?php echo $col_2 ?>
										</div>
									</div>
								<?php endif;
								?>
							</div>
						</section>
						<?php
						///////////////////////////////////
						// Simple Three Column Block
						//////////////////////////////////
						elseif( get_row_layout() == 'three_column_block' ):
						?>
						<section id="<?php echo get_sub_field('section_name'); ?>" class="padded-section">
							<div class="page-width flex-container padded-top">
							<?php
								$col_1 = get_sub_field('col_contents_1');
								$col_2 = get_sub_field('col_contents_2');
								$col_3 = get_sub_field('col_contents_3');
									if( $col_1 ): ?>
										<div class="col30">
											<div class="block-text">
												<?php echo $col_1 ?>
											</div>
										</div>
									<?php endif;
									if( $col_2 ): ?>
										<div class="col30">
											<div class="block-text">
												<?php echo $col_2 ?>
											</div>
										</div>
									<?php endif;
									if( $col_3 ): ?>
										<div class="col30">
											<div class="block-text">
												<?php echo $col_3 ?>
											</div>
										</div>
									<?php endif;
									?>
								</div>
							</section>
							<?php
						endif;
					endwhile;
				else:
					// no layouts found
				endif;
				?>
			</div>
		</div>
		<?php get_template_part('/inc/full-width-cta'); ?>
	</main>
</div>
<?php
get_footer();
