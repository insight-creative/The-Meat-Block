<?php
/**
 * Template Name: Test Template
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php if (have_rows('flexible_columns')): ?>
    <div class="page-width">
			<?php
				echo phpinfo();
			 ?>
        <?php
        while (have_rows('flexible_columns')) : the_row();
        	// one column layout
	        if (get_row_layout() == 'one_column'):
	            $column_1 = get_sub_field('one_column_content_1');
	            ?>
	            <section class="one-column">
	                <div class="one-column__inner">
	                    <div class="flexcolumn">
	                        <div class="flexcolumn__inner">
	                            <?= $column_1; ?>
	                        </div>
	                    </div>
	                </div>
	            </section>
              <?php
            //two column layout
            elseif (get_row_layout() == 'two_columns'):
              $content_1 = get_sub_field('two_columns_content_1');
              $content_2 = get_sub_field('two_columns_content_2');
              ?>
              <section  class="two-columns">
                  <div class="two-columns__inner flex-container">
                      <div class="flexcolumn col50">
                          <div class="flexcolumn__inner">
                              <?= $content_1; ?>
                          </div>
                      </div>
                      <div class="flexcolumn col50">
                          <div class="flexcolumn__inner">
                              <?= $content_2; ?>
                          </div>
                      </div>
                  </div>
              </section>
              <?php
            //three column layout
            elseif (get_row_layout() == 'three_columns'):
              $content_1 = get_sub_field('three_columns_content_1');
              $content_2 = get_sub_field('three_columns_content_2');
              $content_3 = get_sub_field('three_columns_content_3');
              ?>
              <section class="three-columns">
                  <div class="three-columns__inner flex-container">
                      <div class="flexcolumn col30">
                          <div class="flexcolumn__inner">
                              <?= $content_1; ?>
                          </div>
                      </div>
                      <div class="flexcolumn col30">
                          <div class="flexcolumn__inner">
                              <?= $content_2; ?>
                          </div>
                      </div>
                      <div class="flexcolumn col30">
                          <div class="flexcolumn__inner">
                              <?= $content_3; ?>
                          </div>
                      </div>
                  </div>
              </section>
              <?php
          endif;
	        endwhile;
	        ?>
    		</div>
    	<?php
			else :
				// no layouts found
			endif;
			?>
	</main>
</div>
<?php
get_footer();
