<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// display the plugin settings page
function display_welcome_page() {
	// check if user is allowed access
	if ( ! current_user_can( 'manage_options' ) ) return;
	?>
	<div id="welcome" class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<h2>Working in Your WordPress Dashboard</p>
		<h3>Media</h3>
		<p>
			Your media folder is where you will find all the images that are used on your website.
		</p>
		<h3>Posts</h3>
		<p>
			If you have a blog here is where your blog posts can be found and new posts can be created.
		</p>
		<h3>Pages</h3>
		<p>
			Contains all the pages for your website.
		</p>
		<h3>Comments</h3>
		<p>
			Here you will find any comments that have been left on your website. Product reviews can be found here.
		</p>
		<h2>Editing the content of your pages</h2>
		<p>
			<ol>
				<li>Click pages</li>
				<li>Select the page you want to edit from the list by either clicking the title or hover over the title and select "edit" from the options.</li>
				<li>Once the page loads you will see a list of all the blocks that make up your page.</li>
				<li>Find the block you want to edit, hover over the block, click "Element Options".</li>
				<li>Change the image or copy as you need.</li>
				<li>Preview your changes by clicking the "Preview" button at the top right or bottom right of the page.</li>
				<li>When you are satisfied with your changes, click "Update" to take those changes live.</li>
				<li>Switch to the front end of your site to see your new changes.</li>
			</ol>
		</p>
	</div>
	<?php
}
