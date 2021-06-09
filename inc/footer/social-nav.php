<div class="social-wrapper col20">
  <h6 class="accent-text">Connect</h6>
  <nav id="social" role="navigation" aria-label="social navigation">
    <?php if(get_theme_mod('facebook')) { ?>
      <a href="<?php echo get_theme_mod('facebook'); ?>" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
        <div class="social-padding">
          <i class="fab fa-facebook white-text footer-social-icon"></i>
        </div>
      </a>
    <?php
    }
    ?>
    <?php if(get_theme_mod('twitter')) { ?>
      <a href="<?php echo get_theme_mod('twitter'); ?>" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
        <div class="social-padding">
          <i class="fab fa-twitter white-text footer-social-icon"></i>
        </div>
      </a>
    <?php
    }
    ?>
    <?php if(get_theme_mod('instagram')) { ?>
      <a href="<?php echo get_theme_mod('instagram'); ?>" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
        <div class="social-padding">
          <i class="fab fa-instagram white-text footer-social-icon"></i>
        </div>
      </a>
    <?php
    }
    ?>
    <?php if(get_theme_mod('linkedin')) { ?>
      <a href="<?php echo get_theme_mod('linkedin'); ?>" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
        <div class="social-padding">
          <i class="fab fa-linkedin white-text footer-social-icon"></i>
        </div>
      </a>
    <?php
    }
    ?>
    <?php if(get_theme_mod('youtube')) { ?>
      <a href="<?php echo get_theme_mod('youtube'); ?>" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
        <div class="social-padding">
          <i class="fab fa-youtube white-text footer-social-icon"></i>
        </div>
      </a>
    <?php
    }
    ?>
  </nav>
  <div>
    <?php
      $image = get_field('meat_crafter_logo', 'option');
      $imageID = $image['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
    ?>
  </div>
</div>
