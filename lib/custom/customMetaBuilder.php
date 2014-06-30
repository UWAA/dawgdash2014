<?php
/* Create the DawgDash Custom Field Admin Boxes */

function call_DawgDash_MetaBoxes() {
	new DawgDash_MetaBoxes();
}

if (is_admin() ) {
	add_action('load-post.php', 'call_DawgDash_MetaBoxes');
	add_action('load-post-new.php', 'call_DawgDash_MetaBoxes');
}

//
// DawgDash_MetaBoxes Class
//////////////////////////////////

class DawgDash_MetaBoxes {

	public function __construct() {
		add_action ('add_meta_boxes', array($this, 'add_meta_box'));
		add_action( 'save_post', array( $this, 'save'));
	} //end constructor


	public function add_meta_box($post_type) {
		$post_types = array('dd_raceinfo');  //Determines on what admin panels this meta box will show up.
		if (in_array($post_type, $post_types)) {
			add_meta_box(
				'dd_meta_fields_box'
				,'DawgDash Special Fields'   //TODO- If ever internationalized or wrapped into a plugin, this need to be updated: http://codex.wordpress.org/I18n_for_WordPress_Developers
				,array($this, 'render_meta_box_content')
				,$post_type
				,'advanced' //can be 'normal' or 'side'
				,'high'  //helps with display order
			);
		}  //endif
	} //end function add_meta_box

	
	public function save($post_id) {

	//no nonce?  no saving this post...
	if (!isset($_POST['dd_meta_fields_content_nonce'])) {
		return $post_id;
	}

	//Take the POST variable and set it here
	$nonce = $_POST['dd_meta_fields_content_nonce'];

	//Is this nonce legit?  If not...
	if (!wp_verify_nonce($nonce, 'dd_meta_fields_content')) {
		return $post_id;
	}

	//Don't run for autosaves
	if (defined('DOING_AUTOSAVE')  && DOING_AUTOSAVE ) {
		return $post_id;
	}

	//Check user perms
	if ('page' == $_POST['post_type']) {

		if( !current_user_can ('edit_page', $post_id)){
			return $post_id;
		}
	} else {

		if(!current_user_can('edit_post', $post_id)){
			return $post_id;
		}
	}

	//We're good,  clean that action.
	$mydata = sanitize_text_field($_POST['dd_racelength']);

	//Save that action
	update_post_meta($post_id, '_my_meta_value_key', $mydata);

	}//end public function save


	public function render_meta_box_content ($post) {
		//Add nonce for security, will be checked later.
		wp_nonce_field('dd_meta_fields_content','dd_meta_fields_content_nonce');

		//Use get_post_meta to pull out the values we want if they already exist
		$value = get_post_meta($post->ID, '_my_meta_value_key', true);

		//Render the form, with the current value (if set)
		echo '<label for="dd_racelength">';
		echo 'Length of the Race';
		echo '</label>';
		echo '<input type="text" id="dd_racelength" name="dd_racelength"';
		echo ' value=" '. esc_attr($value) .'" size="15" />';

	}  //end function render_meta_box_content





}  //class


