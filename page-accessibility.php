<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="pageContent">
			<div class="limit-width padded-section">
				<h1>Website Accessibility</h1>
				<p>
					<?php printf( get_bloginfo ( 'name' ) ); ?> is committed to the accessibility and
					usability all of its digital properties, for all people with disabilities.
				</p>
				<p>
					Our website is regularly tested using web accessibility technologies.
				</p>
				<p>
					Please be aware that our efforts are ongoing. If at any time you have specific
					questions or concerns about the accessibility of any particular web page on this
					site, please fill out the form below and we will contact you.
				</p>
				<h3>Website features for visitors with web access disabilities</h3>
				<h4>Visitors with reading difficulties</h4>
				<p>
					It is possible to download software which enables your computer to read 'out loud' the words on our website. This means that you can listen to the words on the site as they are read 'out loud' by your computer. This is useful for people who have reading difficulties, mild vision disabilities or for whom English is a second language.
				</p>
				<h6>To 'read out loud' words on our website you can:</h6>
				<p>
					Download a small software program provided by many companies that specialise in making websites accessible to people with reading difficulties.
					Point at the website text you want to hear with your mouse
					The software will then read the text 'out loud'.
				</p>
				<h6>If you can't hear any sound:</h6>
				<p>
					Make sure your computer/mobile device has sound capability and that speakers or headphones are plugged in ensure the volume is turned on and is loud enough to hear.
				</p>
				<h5>Changing text size on this website</h5>
				<p>
					If you find the text size on this website is too small to read comfortably, you can change its size. The way you do this depends on your browser you use to view the web.
				</p>
				<p>
					Some computers also let you change text size simply by holding down the 'ctrl' or 'alt' keys, and '+' or '-' keys or by using the mouse wheel, if your mouse has a wheel.
				</p>
				<h6>Changing text size using Mozilla Firefox on a Personal Computer (PC):</h6>
				<p>
					Go to the menu at the top of the browser window and select "Options", from the "Language and Appearance" list of options, find "Fonts and Colors", use the drop-down select the size you wish to view the website in.
				</p>
				<h6>Changing text size using Google Chrome on a Personal Computer (PC):</h6>
				<p>
					You can adjust the size of everything on the webpages you visit, including text, images, and videos.
					Click the Chrome menu icon in the browser toolbar. Select settings. Click show advanced settings.
					In the "Appearance" section, use the "Font size" drop-down menu to make adjustments.
				</p>
				<h6>Keyboard Shortcuts</h6>
				<p>
					Firefox also allows you to change the text size using keyboard shortcuts:<br>
					Press Ctrl and + at the same time to increase the size.<br>
					Press Ctrl and - at the same time to decrease the size.<br>
					Press Ctrl and 0 at the same time to go back to the normal size.
				</p>
				<p>
					Shortcuts are also used to change text size on Google Chrome:<br>
					Click the Chrome menu icon in the browser toolbar.
					Find the "Zoom" section in the menu and choose one of the following options:
					Click plus symbol to make everything on the page larger. You can also use the keyboard shortcuts Ctrl and + (Windows, Linux, and Chrome OS)
					Click minus symbol to make everything smaller. You can also use the keyboard shortcuts Ctrl and - (Windows, Linux, and Chrome OS)
				</p>
				<p>
					Shortcuts are also used to change text size on an Apple Mac (all browsers):<br>
					Press Cmd and + at the same time to increase the size.
					Press Cmd and - at the same time to decrease the size.
					Press Cmd and 0 at the same time to go back to the normal size.
					For mobile devices, just enter your settings and click on the Accessibility tab for the option to change the text size to suit you.
				</p>
				<!-- Add Contact Form Here -->
				<?php echo do_shortcode('[gravityforms id="1"]'); ?>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
