<div class="col70 whiteText">
  <h6 class="accentText">The Meat Block Brands</h6>
  <div class="brandLogos">
    <?php
      $image = get_field('brand_logo_1', 'option');
      $imageID = $image['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
    <?php
      $image = get_field('brand_logo_2', 'option');
      $imageID = $image['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
    <?php
      $image = get_field('brand_logo_3', 'option');
      $imageID = $image['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </div>
  <?php the_field('brand_description', 'option'); ?>
</div>
