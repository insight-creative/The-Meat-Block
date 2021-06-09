<div id="copyright" class="page-width">
    <p>&copy;<?php
    echo date_i18n(
      /* translators: Copyright date format, see https://www.php.net/date */
      _x( 'Y', 'copyright date format', 'insightcustom' )
    );
    ?> <?php printf( get_bloginfo ( 'name' ) ); ?> | </p>
  	<nav role="navigation" aria-label="Sub Footer Links">
		<a href="/my-account/"> My Account</a>
		<a href="/sitemap/"> Sitemap</a>
		<a href="/contact/" class="last"> Contact Us</a>
	</nav>
</div>
