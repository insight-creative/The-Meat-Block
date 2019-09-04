<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="sitemapEntry">
			<div class="pageWidth">
				<h1 class="primaryText">Sitemap</h1>
			</div>
		</section>
		<div class="pageWidth flex-container">
			<div class="col50">
				<h3>Pages</h3>
					<?php wp_list_pages(array('sort_column' => 'post_title', 'exclude' => '70, 1358, 19, 3130, 581', 'title_li' => ' ', 'depth' => 0)); ?>
			</div>
			<div class="col50">
				<h3>News</h3>
				<ul class="newsPosts">
					<?php wp_get_archives('type=alpha'); ?>
				</ul>
				<h3>Alerts</h3>
				<ul class="newsPosts">
				  <?php
				  query_posts( array ( 'category_name' => 'Travel Alerts', 'posts_per_page' => -1 ) );
				  while ( have_posts() ) : the_post(); ?>
			    <li>
			  		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			  	</li>
				  <?php endwhile;
				  wp_reset_query();
				  ?>
				</ul>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
