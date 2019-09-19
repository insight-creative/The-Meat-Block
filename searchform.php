<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field whiteText"
            placeholder="<?php echo esc_attr_x( 'Search Products', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <button type="submit" class="search-submit whiteText"><!-- TODO: clean this up -->
      <span class="screen-reader-text"><?php echo esc_attr_x( 'Search', 'submit button' ) ?></span>
      <i class="whiteIcon fas fa-search"></i>
    </button>
</form>
