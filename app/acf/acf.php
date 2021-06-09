<?php
/*********************************************************
Add ACF options page for global settings
*********************************************************/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
/*********************************************************
Set fields to collapsed for a condensed view for new users
*********************************************************/
function my_acf_admin_head() {
    ?>
    <script type="text/javascript">
        (function($){
            $(document).ready(function(){
                $('.layout').addClass('-collapsed');
                $('.acf-postbox').addClass('closed');
            });
        })(jQuery);
    </script>
    <?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');
?>
