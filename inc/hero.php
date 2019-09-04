<section class="removeBottomMargin">
  <div class="fullWidth flex-container centerAlignedContainer">
    <div class="col50">
      <?php
        $image = get_field('intro_image');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </div>
    <div class="col50 centerTextBlock">
      <div class="textWrap textBlock">
        <?php if( get_field('intro_headline') ): ?>
        	<?php the_field('intro_headline'); ?>
        <?php endif; ?>
        <?php if( get_field('intro_copy') ): ?>
        	<p><?php the_field('intro_copy'); ?></p>
        <?php endif; ?>
        <div class="btnContainer">
          <?php if( get_field('intro_button_1_link') ): ?>
          	<a class="redButton" href="<?php the_field('intro_button_1_link'); ?>"><?php if( get_field('intro_button_1') ): ?>
            	<?php the_field('intro_button_1'); ?></a>
            <?php endif; ?></a>
          <?php endif; ?>
          <?php if( get_field('intro_button_2_link') ): ?>
          	<a class="redButton btn2" href="<?php the_field('intro_button_2_link'); ?>"><?php if( get_field('intro_button_2') ): ?>
            	<?php the_field('intro_button_2'); ?></a>
            <?php endif; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
