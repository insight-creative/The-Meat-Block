<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main padded-section">
		<section id="sitemap-entry">
			<div class="page-width">
				<h1 class="primaryText">Sitemap</h1>
			</div>
		</section>
		<div class="page-width flex-container padded-section">
			<div class="col50">
				<h3>Pages</h3>
					<?php wp_list_pages(array('sort_column' => 'post_title', 'exclude' => '1057,1030,2183', 'title_li' => ' ', 'depth' => 0)); ?>
			</div>
			<div class="col50">
				<h3>Specials</h3>
				<ul class="newsPosts">
				<?php 
					$specials_query = new WP_Query( array(
						'post_type'      => 'Specials',
						'order'          =>  'DESC',
					));
					while ( $specials_query->have_posts() ):
						$specials_query->the_post();
					?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li>
					<?php 
					endwhile;
					wp_reset_postdata();
				?>
				</ul>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
