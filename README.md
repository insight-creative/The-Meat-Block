# Lamers Bus Lines, Inc.
A custom WordPress website theme for Lamers Bus Lines, Inc.

# :warning: Make sure to read this carefully before updating any plugins or editing the site

# :metal: Getting started

1. [Pages](#page_with_curl-pages)
2. [Styles](#dancer-styles)
3. [Navigation](#rocket-navigation)
4. [Footer](#shoe-footer)
5. [Advanced Custom Fields](#speech_balloon-advanced-custom-fields)
6. [Homepage](#house-homepage)
7. [Careers](#construction-adding-a-new-job-posting-to-the-careers-page)
8. [News](#newspaper-news-posts)
9. [Tour Vacations](#sunrise_over_mountains-tour-vacations)
10. [Locations](#newspaper-news-posts)

# :open_file_folder: Basic File Structure

## :page_with_curl: Pages

Each individual page is titled page - page title ex. about = page-about.php

## :dancer: Styles

Do not make style changes in the css directory. The styles for the website are all in the \_scss directory. Each individual page has had its own style sheet setup for styles unique to that page, and then there are sheets setup for general styling like the footer or typography. The \_variables.scss sheet has site wide variables that can be used in your scss sheets.

# :eyes: Usage

## :rocket: Navigation

This theme has seven registered menus so all menus are easily editable.

1. PrimaryMenu for the sites primary navigation
2. SecondaryMenu for the sub navigation bar
3. FooterMenu for the footer links
4. ServicesMenu, ConnectMenu, FleetMenu, and ExpressMenu for the sticky navigation menus for customizing each of these locations when needed.

To edit the main navigation use the header.php file

## :shoe: Footer

Edit the sites footer find footer.php

## :speech_balloon: Advanced Custom Fields

To allow easy editing of content for the client while maintaining a custom theme, I used advanced custom fields to gather input to display on page. Find all those and their settings in the Custom Fields menu

## :house: Homepage

The homepage uses the front-page.php file

A number of sections of the homepage are reused elsewhere on the site. Find those files in the inc folder for editing.

### Editing the featured services slider

For the sliders I used <a href="https://kenwheeler.github.io/slick/">slick slider</a>

The services slider can be found in the inc folder > featured-services.php. To edit the actual content of the slides login to the admin dashboard, navigation to options menu, and choose "Global Featured Services Slider"

### Editing the testimonials slider

This slider can be found in the inc folder > testimonial-slider.php. To edit the actual content login to the admin dashboard, navigation to options menu, and choose "Global Testimonial Slider"

### Editing the affiliations section

Find this file in the inc folder > affiliations.php. To edit the contents login to the admin dashboard, navigation to options menu, and choose "Global Affiliations Section"

### Editing the Contact Us section

Find this file in the inc folder > contact.php

## :construction: Adding a new job posting to the careers page

To display their careers I chose to use <a href="https://wordpress.org/plugins/wp-job-openings/">WP Job Openings plugin</a> to try to save some time. They did have a nice layout that fit our site without needing to customize the look. Also liked their filter options for user searches

To post a new job

1. Navigate to Lamer Job Openings in the admin menu
2. Select New Opening
3. Type in your job title and your job description
4. Enter in any categories, job type and job location that you need for this position
5. Add a new list item and upload  
6. Open up the Job Location Structured Data (WP Jobs) field. Here we created some custom fields to gather more location data for our schema markup that gets output for each job post. By default the plugin output some location data but was receiving errors for not outputting data in the expected format.
7. Here enter in the location, city, state, and zip for the job that you are posting. This will output this location data in the schema markup in greater detail than what the plugin output by default  

To find these plugin edits navigate to the wp-job-openings-edited-files folder in this repo. wp-job-openings.php. Below is the code that we added to grab the data from the custom fields roughly line 1045

### Default

```
///////////////////////////////////////////////
// original jobLocation structured data code //
///////////////////////////////////////////////
// if ( taxonomy_exists( 'job-location' ) ) {
// 	$locations = get_the_terms( $post->ID, 'job-location' );

// 	if ( ! empty( $locations ) ) {
// 		$data['jobLocation'] = array();
// 		foreach ( $locations as $location ) {
// 			$data['jobLocation'][] = array(
// 				'@type'   => 'Place',
// 				'address' => $location->name,
// 			);
// 		}
// 		if ( count( $data['jobLocation'] ) === 1 ) {
// 			$data['jobLocation'] = $data['jobLocation'][0];
// 		}
// 	}
// }
```

### Updated Schema Data Output

```
/////////////////////////////////////
// ACF jobLocation structured data //
/////////////////////////////////////
$locationFields = [
  "streetAddress",
  "addressLocality",
  "addressRegion",
  "postalCode",
  "addressCountry",
];

foreach($locationFields as $name) {
  $field = get_field($name);
  if ($field) {
    $locationFields[$name] = $field;
  }
}

$locationFields = array_slice($locationFields, 5);

$data['jobLocation'] = array(
  '@type'   => 'Place',
  'address' => $locationFields,
);
```

We also decided to use the job application form that Lamers Bus Lines had already been using through JotForm instead of the default application form that this plugin output. To overwrite this edits were made to wp-job-openings-edited-files > single-job > form.php. The below embed script was added from JotForm to open their application in a popup window, instead of taking users to the JotForm website

```
<script src ="https://form.jotform.com/static/feedback2.js" type="text/javascript"></script><script type="text/javascript">
    var JFL_92314410382145 = new JotformFeedback({
      formId: '92314410382145',
      base: 'https://form.jotform.com/',
      windowTitle: 'Application of Employment',
      background: '#b70033',
      fontColor: '#FFFFFF',
      type: 'false',
      height: 500,
      width: 700,
      openOnLoad: false
    });
</script>
  <a class="redButton btn lightbox-92314410382145" style="margin-top: 16px">
    Apply Now
  </a>
```

### Edit the admin menu name

In wp-job-openings-edited-files > inc > templates > archive-job.php I edited the output of the page to match page styles of all our other pages on site

### Edit the admin menu name

One little change I made when I stumbled upon it, In wp-job-openings-edited-files > inc > class-awsm-job-openings-core.php I edited the menu name to overwrite the default menu name with Lamers Job Openings

## :newspaper: News Posts  

The news page uses the index.php template file and all archive page files/components can be found in the template-parts folder.

### Adding a blog post  

Nothing fancy here. Simply add a blog post just like you would any standard WordPress site. Add a featured image, add your author and any categories that apply.

## :sunrise_over_mountains: Tour Vacations  

To display the tours and inquiry options I used the plugin <a href="http://demo.goodlayers.com/document/tourmaster/">Tourmaster</a>. Read the documentation, to learn how the plugin works. For the most part we used only the most basic features

To accomplish output that we were looking for I had to edit some of the plugin files

Tourmaster plugin edits

tourmasterEditedPluginFiles > single > tour.php is the primary file for outputting single tours. This file was edited to add in the assistance CTA block at the end of each single tour content post.

```
echo '<div>';
echo '<div class="assistanceCTA">';
echo '<h3><span class="underline">Need Assistance?</span></h3>';
echo '<p>Don’t hesitate to contact us with any questions and concerns.</p>';
echo '<a href="tel:1-800-236-8687">1-800-236-8687</a>';
echo '</div>';
echo '</div>';
```

tourmasterEditedPluginFiles > single > archive.php and search.php were edited to add breadcrumbs navigation and some small styling changes to the output of the page.

tourmasterEditedPluginFiles > include > tour-util.php was edited to change the default disclaimer on the inquiry form to include Lamers Tour & Travel disclaimer about their RoamRight travel insurance

### Default

```
$ret .= sprintf(wp_kses(
				__('* Creating an account means you\'re okay with our <a href="%s" target="_blank">Terms of Service</a> and <a href="%s" target="_blank">Privacy Statement</a>.', 'tourmaster'),
				array('a' => array( 'href'=>array(), 'target'=>array() ))
			), $our_term, $privacy);
```
### Updated Output

```
$ret .= sprintf(wp_kses(
  __('* Lamers Tour & Travel recommends purchasing travel insurance with RoamRight® Travel Insurance. A RoamRight brochure will be included with your travel confirmation with instructions how to purchase. Continuing means you acknowledge you have read the Lamers Tour & Travel recommendation and you\'re okay with our <a href="%s" target="_blank">Privacy Policy</a>.', 'tourmaster'),
  array('a' => array( 'href'=>array(), 'target'=>array() ))
), $our_term, $privacy);
```

tourmasterEditedPluginFiles > include > tour-option.php I changed the menu name from Tourmaster to Lamers Tour & Travel

Also edited the output what they call related tours. They only show the latest added tours, not related tours using any kind of logic, so I changed the heading output to "Recently Added Tours" instead.

If there were any edits that I missed all the files can be found in the tourmasterEditedPluginFiles folder. Nothing else was edited directly in the plugin

Edits to the Agile Store Locator plugin
agile-store-locator-edited-files > public > class-agile-store-locator-public.php

```
$words = array(
  'direction' => __('Directions','asl_locator'),
  'zoom' => __('Zoom Here','asl_locator'),
  'detail' => __('More Info','asl_locator'),
  'select_option' => __('Select Option','asl_locator'),
  'none' => __('None','asl_locator')
);
```

Edit this file to change "Website" to "More Info" in the tooltip to make more sense to a user

In agile-store-locator-edited-files > includes > class-agile-store-locator I also edited the plugin name here to be Lamers Locations rather than AS Locator.

Edit the agile-store-locator-edited-files > public > js > site-script.js file to update the More Info link in tooltip to target = \_self vs. target= \_blank. Links opened up in another window by default creating a bit of a disconnect. Wasn't a good user experience for what we needed on this site

Hopefully that covers anything that you will need to update with this site.
