<div class="socialWrapper col20">
  <h6 class="accentText">Connect</h6>
  <nav id="social" role="navigation" aria-label="social navigation">
    <a href="#" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
      <div class="socialPadding">
        <i class="fab fa-facebook whiteText footerSocialIcon"></i>
      </div>
    </a>
    <a href="#" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
      <div class="socialPadding">
        <i class="fab fa-twitter whiteText footerSocialIcon"></i>
      </div>
    </a>
  </nav>
  <div>
    <?php
      $image = get_field('meat_crafter_logo', 'option');
      $imageID = $image['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </div>
</div>
