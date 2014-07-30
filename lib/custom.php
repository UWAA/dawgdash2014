<?php
/**
 * Custom functions
 */

add_filter( 'use_default_gallery_style', '__return_false' );

/*add_action('template_redirect', 'seattle_redirect');

function seattle_redirect() {
// Redirect until other pages are done
	global $post;
	$post_slug=$post->post_name;
	if ($post_slug != 'seattle') {	
  	wp_redirect(home_url('/races/seattle/'), 302); exit;
	}
}
*/

//Add RaceDetail Meta Boxes
require (get_template_directory(). '/lib/custom/customMetaBuilder.php');

// Register Custom Post Types
require (get_template_directory(). '/lib/custom/customPosts.php');

// Build Custom Shortcodes
require (get_template_directory(). '/lib/custom/dd_shortcodes.php');


//Add 'active' menu class to nav when on home page
// require (get_template_directory(). '/lib/custom/customNavMenu.php')

add_CustomMetaBox('dd_race_meta', array(
'title' => 'DawgDash Custom Fields', // Meta Box Title
'pages' => array('races'),  // Post Types
'context' => 'normal', // meta box context (see above)
'priority' => 'high', // meta box priority (see above)
'fields' => array( // Array detailing the fields we will make
array(
'name' => 'Race Date',
'id' => 'dd_race_date',
'type' => 'text',
),
array(
'name' => 'Race Length',
'id' => 'dd_race_length',
'type' => 'text',
),
array(
'name' => 'Race Start Time',
'id' => 'dd_race_start_time',
'type' => 'text',
),
array(
'name' => 'Race City',
'id' => 'dd_race_city',
'type' => 'text',
),
array(
'name' => 'Alt. Length One',
'id' => 'dd_race_alt_length_1',
'type' => 'text',
),
array(
'name' => 'Alt. Length Two',
'id' => 'dd_race_alt_length_2',
'type' => 'text',
),

)
));