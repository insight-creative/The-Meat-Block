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
		<h3>Contact</h3>
		<p>
			Here is where you will find your contact forms and settings.
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
		<h2>Adding a new video</h2>
		<p>
			<ol>
				<li>Find the section titled "Portfolio".</li>
				<li>Find the block you want to edit, hover over the block, click "Element Options".</li>
				<li>Find your Vimeo video ID ex. https://vimeo.com/75230326 you only need 75230326.</li>
				<li>Paste the video ID into the "Video ID" field.</li>
				<li>Click "Preview" to view your changes or "Update" to take your changes live.</li>
			</ol>
		</p>
		<h2>WordPress Theme</h2>
		<p>
			<ol>
				<li>To learn more about the theme your website uses, <a href="https://lavideoproductions.com/wp-admin/admin.php?page=avada">click here</a></li>
				<li>Here you can find Avada's tutorial video that will give an overview of the theme and some of the features that it offers</li>
			</ol>
		</p>
	</div>
	<?php
}
