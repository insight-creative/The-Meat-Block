<?php
/**
 * Template Name: Universal Template
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

get_header();
?>

<div id="primary" class="universal-content-area">
	<main id="home" class="site-main">
		<section id="pageContent">
			<?php
				// check if the flexible content field has rows of data
				if( have_rows('content_fields') ):
					// loop through the rows of data
					while ( have_rows('content_fields') ) : the_row();
						// Vars
						$iconImage = get_sub_field('icon_image');
						$logoImage = get_sub_field('logo');
							if( get_row_layout() == 'full_width_block' ):
								//$imageID = $image['ID'];
								//echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image portfolioFeaturedImage', 'data-sizes' => 'auto' ) );
								echo '<section id="' . get_sub_field('section_name') . '">';
								echo '<div class="fullWidthBlock" style="background-image: url('. get_sub_field('full_width_background') . ')";>';
								echo '<div class="pageWidth contentContainer">';
								echo '<div class="containerInner">';
								if( $logoImage ):
									echo '<div class="logoWrap">';
									$imageID = $logoImage['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									echo '</div>';
								endif;
								if( get_sub_field('section_title') ):
									echo '<h1 class="whiteText blockTitle"><span class="blackBack">' . get_sub_field('section_title') . '</span></h1>';
									echo '<div class="iconWrap">';
									$imageID = $iconImage['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									echo '</div>';
								endif;
								if( get_sub_field('section_sub_title') ):
									echo '<h2 class="whiteGlow heroSubtitle">' . get_sub_field('section_sub_title') . '</h2>';
								endif;
								if( get_sub_field('button') ):
									echo '<div class="buttonWrapper">';
									echo '<a href="' . get_sub_field('button_url') . '" class="primaryButtonAlt">' . get_sub_field('button') . '</a>';
									echo '</div>';
									endif;
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</section>';
								elseif( get_row_layout() == 'full_width_cta_block' ):
									//$imageID = $image['ID'];
									//echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image portfolioFeaturedImage', 'data-sizes' => 'auto' ) );
									echo '<section id="' . get_sub_field('section_name') . '">';
									echo '<div class="fullWidthBlock" style="background-color:'.get_sub_field('full_width_background_color').'";>';
									echo '<div class="pageWidth limitWidth contentContainer">';
									echo '<div class="containerInner">';
									if( get_sub_field('section_title') ):
										echo '<h6 class="whiteText largeHeading">' . get_sub_field('section_title') . '</h6>';
									endif;
									if( get_sub_field('section_sub_title') ):
										echo '<h6 class="whiteText mediumHeading">' . get_sub_field('section_sub_title') . '</h6>';
									endif;
										echo '</div>';
										echo '</div>';
										echo '</div>';
										echo '</section>';
								elseif( get_row_layout() == 'full_width_block_with_copy_block' ):
									//$imageID = $image['ID'];
									//echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image portfolioFeaturedImage', 'data-sizes' => 'auto' ) );
									echo '<section id="' . get_sub_field('section_name') . '">';
									echo '<div class="divider div-transparent div-arrow-down">';
									echo '</div>';
									echo '<div class="fullWidthBlock" style="background-image: url('. get_sub_field('full_width_background') . ')";>';
									echo '<div class="pageWidth contentContainer">';
									echo '<div class="containerInner">';
								if( $logoImage ):
									echo '<div class="logoWrap">';
									$imageID = $logoImage['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									echo '</div>';
								endif;
								if( get_sub_field('section_title') ):
									echo '<h1 class="whiteText blockTitle"><span class="blackBack">' . get_sub_field('section_title') . '</span></h1>';
									echo '<div class="iconWrap">';
									$imageID = $iconImage['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									echo '</div>';
								endif;
								if( get_sub_field('section_sub_title') ):
									echo '<h2 class="whiteGlow">' . get_sub_field('section_sub_title') . '</h2>';
								endif;
								if( get_sub_field('button') ):
									echo '<div class="buttonWrapper">';
									echo '<a href="' . get_sub_field('button_url') . '" class="primaryButtonAlt">' . get_sub_field('button') . '</a>';
									echo '</div>';
								endif;
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '<div>';
									echo '<div class="fullWidthBack" style="background-image: url('. get_sub_field('section_background') . ')";>';
									echo '<div class="pageWidth paddedSection limitWidth">';
								if (get_sub_field('copy_section_title')):
									echo '<div class="centerText">';
									echo '<h3>' . get_sub_field('copy_section_title') . '</h3>';
									echo '</div>';
								endif;
									echo get_sub_field('copy');
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</section>';
								elseif( get_row_layout() == 'full_width_block_with_testimonial' ):
									//$imageID = $image['ID'];
									//echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image portfolioFeaturedImage', 'data-sizes' => 'auto' ) );
									echo '<section id="' . get_sub_field('section_name') . '">';
									echo '<div class="fullWidthBlock testimonialWrapper" style="background-image: url('. get_sub_field('full_width_background') . ')";>';
									echo '<div class="pageWidth">';
									echo '<div class="testimonialInner">';
									echo '<div class="testimonial">';
									echo get_sub_field('testimonial');
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</section>';
								elseif( get_row_layout() == 'copy_block' ):
									echo '<section id="' . get_sub_field('section_name') . '">';
									echo '<div class="fullWidthBack" style="background-image: url('. get_sub_field('section_background') . ')";>';
									echo '<div class="pageWidth paddedSection limitWidth">';
									if (get_sub_field('section_title')):
										echo '<div class="centerText">';
										echo '<h3>' . get_sub_field('section_title') . '</h3>';
										echo '</div>';
									endif;
									echo get_sub_field('copy');
									echo '</div>';
									echo '</div>';
									echo '</section>';
								elseif( get_row_layout() == 'full_width_image_block' ):
									echo '<section id="' . get_sub_field('section_name') . '">';
									echo '<div class="pageWidth limitWidth">';
									if (get_sub_field('image')):
										$fullWidthImage = get_sub_field('image');
										$imageID = $fullWidthImage['ID'];
										echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									endif;
									echo '</div>';
									echo '</section>';
								elseif( get_row_layout() == 'brand_logos' ):
								?>
								<div class="limitWidth pageWidth">
									<div class="brandLogos">
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
								<?php
								elseif( get_row_layout() == 'customizable_two_column_block' ):
									echo '<section id="' . get_sub_field('section_id') . '" class="paddedSection">';
									if(get_sub_field('section_background')):
										echo '<div class="fullWidthBlock" style="background-image: url('. get_sub_field('section_background') . ')";>';
									endif;
									echo '<div class="pageWidth flex-container centerAlignedContainer">';
									echo '<div class="col50">';
										if( have_rows('block_1_content_options') ):
											// loop through the rows of data
											while ( have_rows('block_1_content_options') ) : the_row();
											if(get_sub_field('image')):
												$Image = get_sub_field('image');
												$imageID = $Image['ID'];
												echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
											endif;
											if(get_sub_field('copy')):
												echo '<div class="blockText">';
												echo get_sub_field('copy');
												echo '</div>';
											endif;
											if(get_sub_field('button_url')):
												echo '<div class="blockText">';
												echo '<div class="buttonWrapper">';
												echo '<a href="' . get_sub_field('button_url') . '" class="primaryButton">';
												echo get_sub_field('button_text');
												echo '</a>';
												echo '</div>';
												echo '</div>';
											endif;
											endwhile;
										endif;
									echo '</div>';
									echo '<div class="col50">';
										if( have_rows('block_2_content_options') ):
											// loop through the rows of data
											while ( have_rows('block_2_content_options') ) : the_row();
											if(get_sub_field('image')):
												$Image = get_sub_field('image');
												$imageID = $Image['ID'];
												echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
											endif;
											if(get_sub_field('copy')):
												echo '<div class="blockText">';
												echo get_sub_field('copy');
												echo '</div>';
											endif;
											if(get_sub_field('button_url')):
												echo '<div class="blockText">';
												echo '<div class="buttonWrapper">';
												echo '<a href="' . get_sub_field('button_url') . '" class="primaryButton">';
												echo get_sub_field('button_text');
												echo '</a>';
												echo '</div>';
												echo '</div>';
											endif;
											endwhile;
										endif;
									echo '</div>';
									echo '</div>';
									if(get_sub_field('section_background')):
											echo '</div>';
									endif;
									echo '</section>';
								elseif( get_row_layout() == 'customizable_75_25_2_column_block' ):
									echo '<section id="' . get_sub_field('section_id') . '" class="paddedSection">';
									if(get_sub_field('section_background')):
										echo '<div class="fullWidthBlock" style="background-image: url('. get_sub_field('section_background') . ')";>';
									endif;
									echo '<div class="pageWidth flex-container centerAlignedContainer">';
									echo '<div class="col70">';
										if( have_rows('block_1_content_options') ):
											// loop through the rows of data
											while ( have_rows('block_1_content_options') ) : the_row();
											if(get_sub_field('image')):
												$Image = get_sub_field('image');
												$imageID = $Image['ID'];
												echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
											endif;
											if(get_sub_field('copy')):
												echo '<div class="blockText">';
												echo get_sub_field('copy');
												echo '</div>';
											endif;
											if(get_sub_field('button_url')):
												echo '<div class="blockText">';
												echo '<div class="buttonWrapper">';
												echo '<a href="' . get_sub_field('button_url') . '" class="primaryButton">';
												echo get_sub_field('button_text');
												echo '</a>';
												echo '</div>';
												echo '</div>';
											endif;
											endwhile;
										endif;
									echo '</div>';
									echo '<div class="col30">';
										if( have_rows('block_2_content_options') ):
											// loop through the rows of data
											while ( have_rows('block_2_content_options') ) : the_row();
											if(get_sub_field('image')):
												$Image = get_sub_field('image');
												$imageID = $Image['ID'];
												echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
											endif;
											if(get_sub_field('copy')):
												echo '<div class="blockText">';
												echo get_sub_field('copy');
												echo '</div>';
											endif;
											if(get_sub_field('button_url')):
												echo '<div class="blockText">';
												echo '<div class="buttonWrapper">';
												echo '<a href="' . get_sub_field('button_url') . '" class="primaryButton">';
												echo get_sub_field('button_text');
												echo '</a>';
												echo '</div>';
												echo '</div>';
											endif;
											endwhile;
										endif;
									echo '</div>';
									echo '</div>';
									if(get_sub_field('section_background')):
											echo '</div>';
									endif;
									echo '</section>';
								elseif( get_row_layout() == 'three_column_block' ):
									echo '<div class="pageWidth col-container">';
										// vars
										$col1 = get_sub_field('col1');
										$col2 = get_sub_field('col2');
										$col3 = get_sub_field('col3');

										if( $col1['col_image_1'] ): ?>
											<div class="col30 threeCol colLeft">
												<a href="<?php echo $col1['col_link_1']; ?>">
													<?php
														if($col1['col_image_1']):
															$Image = $col1['col_image_1'];
															$imageID = $Image['ID'];
															echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
														endif;
													?>
													<?php if ($col1['col1_heading']): ?>
														<div class="blockTitleAlt">
															<h6><?php echo $col1['col1_heading']; ?></h6>
														</div>
													<?php endif; ?>
													<div class="blockOverlay">
														<div class="blockBorder">
															<h6>View More</h6>
														</div>
													</div>
												</a>
											</div>
										<?php endif;
										if( $col2['col_image_2'] ): ?>
											<div class="col30 threeCol colMiddle">
												<a href="<?php echo $col2['col_link_2']; ?>">
													<?php
														if($col2['col_image_2']):
															$Image = $col2['col_image_2'];
															$imageID = $Image['ID'];
															echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
														endif;
													?>
													<?php if ($col2['col2_heading']): ?>
														<div class="blockTitleAlt">
															<h6><?php echo $col2['col2_heading']; ?></h6>
														</div>
													<?php endif; ?>
													<div class="blockOverlay">
														<div class="blockBorder">
															<h6>View More</h6>
														</div>
													</div>
												</a>
											</div>
										<?php endif;
										if( $col3['col_image_3'] ): ?>
											<div class="col30 threeCol colRight">
												<a href="<?php echo $col3['col_link_3']; ?>">
													<?php
														if($col3['col_image_3']):
															$Image = $col3['col_image_3'];
															$imageID = $Image['ID'];
															echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
														endif;
													?>
													<?php if ($col3['col3_heading']): ?>
														<div class="blockTitleAlt">
															<h6><?php echo $col3['col3_heading']; ?></h6>
														</div>
													<?php endif; ?>
													<div class="blockOverlay">
														<div class="blockBorder">
															<h6>View More</h6>
														</div>
													</div>
												</a>
											</div>
										<?php endif;
									echo '</div>';
								elseif( get_row_layout() == 'full_width_featured_products_section' ):
									echo '<section id="' . get_sub_field('section_id') . '" class="paddedSection">';
									if( have_rows('featured_product_columns') ):
										// loop through the rows of data
										while ( have_rows('featured_product_columns') ) : the_row();
										if( get_row_layout() == 'two_column_block' ):
											//$imageID = $image['ID'];
											//echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image portfolioFeaturedImage', 'data-sizes' => 'auto' ) );
											echo '<div class="pageWidth col-container">';
											// vars
											$col1 = get_sub_field('col1');
											$col2 = get_sub_field('col2');
											$brndLogoLeft = get_sub_field('brand_logo_left');
											$brndLogoRight = get_sub_field('brand_logo_right');
											if( $col1 ): ?>
												<div class="col50 twoCol colLeft colLogo" style="background-image: url(<?php echo $col1['background_image']; ?>)">
													<?php echo $col1['section_heading']; ?>
													<div class="centerText">
														<?php
														$imageID = $col1['brand_logo_left']['ID'];
														echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
														?>
													</div>
												</div>
											<?php endif;
											if( $col2 ): ?>
												<div class="col50 twoCol colRight colLogo" style="background-image: url(<?php echo $col2['background_image_right']; ?>)">
													<?php echo $col2['section_heading_right']; ?>
													<div class="centerText">
														<?php
														$imageID = $col2['brand_logo_right']['ID'];
														echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
														?>
													</div>
												</div>
											<?php endif;
										echo '</div>';
									elseif( get_row_layout() == 'three_column_block' ):
										//$imageID = $image['ID'];
										//echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image portfolioFeaturedImage', 'data-sizes' => 'auto' ) );
										echo '<div class="pageWidth col-container">';
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
		</section>
	</main>
</div>
<?php
get_footer();
