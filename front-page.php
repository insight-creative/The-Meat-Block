<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="home" class="site-main">
		<?php
			// check if the flexible content field has rows of data
			if( have_rows('content_fields') ):
		    // loop through the rows of data
		    while ( have_rows('content_fields') ) : the_row();
					// Vars
					$iconImage = get_sub_field('icon_image');
					$logoImage = get_sub_field('logo');
					/////////////////////////////////////
					// Full Width block
					/////////////////////////////////////
					if( get_row_layout() == 'full_width_block' ):
						?>
						<section id="<?php get_sub_field('section_name'); ?>">
					  	<div class="full-width-block" <?php if( get_sub_field('full_width_background') ): ?> style="background-image: url('<?php echo get_sub_field('full_width_background'); ?>')";><?php endif; ?>
								<div class="page-width content-container">
									<div class="container-inner">
										<?php
										if( $logoImage ):
											echo '<div class="logo-wrap">';
											$imageID = $logoImage['ID'];
											echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
											?>
										</div>
										<?php
										endif;
										if( get_sub_field('section_title') ):
										?>
										<h1 class="white-text block-title"><span class="black-back"><?php echo get_sub_field('section_title'); ?></span></h1>
										<div class="icon-wrap">
											<?php
											$imageID = $iconImage['ID'];
											echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
											?>
										</div>
										<?php
										endif;
										if( get_sub_field('section_sub_title') ):
											echo '<h2 class="white-glow hero-subtitle">' . get_sub_field('section_sub_title') . '</h2>';
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
						</section>
						<?php
						////////////////////////////////////////////////
						// Full Width Block With Attached Copy Block
						////////////////////////////////////////////////
						elseif( get_row_layout() == 'full_width_block_with_copy_block' ):
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
								<div class="full-width-back" <?php if( get_sub_field('section_background') ): ?>style="background-image: url('<?php echo get_sub_field('section_background'); ?>')";><?php endif; ?>
									<div class="background-overlay">
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
								</div>
							</section>
							<?php
							////////////////////////////////////////////////
							// Full Width Block With Testimonial
							////////////////////////////////////////////////
							elseif( get_row_layout() == 'full_width_block_with_testimonial' ):
							?>
							<section id="<?php echo get_sub_field('section_name'); ?>">
								<div class="full-width-block testimonial-wrapper" style="background-image: url('<?php echo get_sub_field('full_width_background'); ?>')";>
									<div class="page-width">
										<div class="testimonial-inner">
											<div class="testimonial">
												<?php echo get_sub_field('testimonial'); ?>
											</div>
										</div>
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
									<div class="page-width padded-section limit-width">
										<?php echo get_sub_field('copy'); ?>
									</div>
								</div>
							</section>
							<?php
							/////////////////////////////////////////////////
							// Full width featured products section
							////////////////////////////////////////////////
							elseif( get_row_layout() == 'full_width_featured_products_section' ):
								echo '<section id="' . get_sub_field('section_id') . '" class="padded-section">';
								if( have_rows('featured_product_columns') ):
									// loop through the rows of data
						    	while ( have_rows('featured_product_columns') ) : the_row();
									if( get_row_layout() == 'two_column_block' ):
										echo '<div class="page-width col-container">';
											// vars
											$col1 = get_sub_field('col1');
											$col2 = get_sub_field('col2');
											$brndLogoLeft = get_sub_field('brand_logo_left');
											$brndLogoRight = get_sub_field('brand_logo_right');
											if( $col1 ): ?>
												<div class="col50 twoCol colLeft colLogo">
													<a href="<?php echo $col1['col_link_1']; ?>">
														<div class="image-wrapper-cover">
														<?php
															if($col1['col_image_1']):
																$Image = $col1['col_image_1'];
																$imageID = $Image['ID'];
																echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
															endif;
														?>
														</div>
														<div class="featured-heading">
															<div class="featured-heading-inner">
																<?php echo $col1['section_heading']; ?>
															</div>
														</div>
														<div class="center-text">
															<?php
															$imageID = $col1['brand_logo_left']['ID'];
															echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
															?>
														</div>
														<div class="center-text">
															<span class="specials-btn">View Bi-Weekly Specials</span>
														</div>
													</a>
												</div>
											<?php endif;
											if( $col2 ): ?>
												<div class="col50 twoCol colRight colLogo">
													<a href="<?php echo $col2['col_link_2']; ?>">
														<div class="image-wrapper-cover">
														<?php
															if($col2['col_image_2']):
																$Image = $col2['col_image_2'];
																$imageID = $Image['ID'];
																echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
															endif;
														?>
														</div>
														<div class="featured-heading">
															<div class="featured-heading-inner">
																<?php echo $col2['section_heading_right']; ?>
															</div>
														</div>
														<div class="center-text">
															<?php
															$imageID = $col2['brand_logo_right']['ID'];
															echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
															?>
														</div>
													</a>
												</div>
											<?php endif;
										echo '</div>';
							//////////////////////////////////////
							// Three column products blocks
							/////////////////////////////////////
							elseif( get_row_layout() == 'three_column_block' ):
								echo '<div class="page-width col-container">';
									// vars
									$col1 = get_sub_field('col1');
									$col2 = get_sub_field('col2');
									$col3 = get_sub_field('col3');
									if( $col1 ): ?>
										<div class="col30 threeCol colLeft" style="background-image: url(<?php echo $col1['col1_background_image']; ?>)">
											<a href="<?php echo $col1['col1_link']; ?>">
												<div class="featured">
													<h6><?php echo $col1['col1_heading']; ?></h6>
													<p><?php echo $col1['col1_subheading']?></p>
													<a href="<?php echo $col1['col1_link']; ?>">View Products</a><i class="smallArrow fas fa-chevron-right"></i>
												</div>
											</a>
										</div>
									<?php endif;
									if( $col2 ): ?>
										<div class="col30 threeCol colMiddle" style="background-image: url(<?php echo $col2['col2_background_image']; ?>)">
											<a href="<?php echo $col2['col2_link']; ?>">
												<div class="featured">
													<h6><?php echo $col2['col2_heading']; ?></h6>
													<p><?php echo $col2['col2_subheading']?></p>
													<a href="<?php echo $col2['col2_link']; ?>">View Products</a><i class="smallArrow fas fa-chevron-right"></i>
												</div>
											</a>
										</div>
									<?php endif;
									if( $col3 ): ?>
										<div class="col30 threeCol colRight" style="background-image: url(<?php echo $col3['col3_background_image']; ?>)">
											<a href="<?php echo $col3['col3_link']; ?>">
												<div class="featured">
													<h6><?php echo $col3['col3_heading']; ?></h6>
													<p><?php echo $col3['col3_subheading']?></p>
													<a href="<?php echo $col3['col3_link']; ?>">View Products</a><i class="smallArrow fas fa-chevron-right"></i>
												</div>
											</a>
										</div>
									<?php endif;
								echo '</div>';
							endif;
							endwhile;
						endif;
						echo '</section>';
	        endif;
	    endwhile;
		else:
		    // no layouts found
		endif;
		?>
		<section class="latest-specials">
			<div class="background-overlay padded-section">
				<div class="limit-width">												
					<h3 class="center-text">Specials</h3>
					<div class="specials-grid">
						<?php 
							$specials_query = new WP_Query( array(
								'post_type'      => 'Specials',
								'order'          =>  'DESC',
								'posts_per_page' => 1,
								'category_name'  => 'regular-specials'
							));
							while ( $specials_query->have_posts() ):
								$specials_query->the_post();
							?>
							<article class="special" role="article">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
							</article>
							<?php 
							endwhile;
							wp_reset_postdata();
						?>
						<?php 
							$seafood_query = new WP_Query( array(
								'post_type'      => 'Specials',
								'order'          =>  'DESC',
								'posts_per_page' => 1,
								'category_name'  => 'seafood-specials'
							));
							while ( $seafood_query->have_posts() ):
								$seafood_query->the_post();
							?>
							<article class="special" role="article">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
							</article>
							<?php 
							endwhile;
							wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</section>
		<section id="testimonial" class="homepage-testimonial">
			<div class="full-width-block testimonial-wrapper">
				<div class="page-width">
					<div class="testimonial-inner">
						<div class="testimonial">
						<p><em>The meat from the Meat Block is the best in the area. If you want hand cut, hand selected meat that’s marbled to perfection visit The Meat Block. You won’t regret it!</em><br>
						– Jay Bauer, Little Chute, WI</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
