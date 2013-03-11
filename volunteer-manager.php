<?php
/*
Plugin Name: Volunteer Manager
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Volunteer Management Plugin
Version: 0.1
Author: Jon Solove, Nathan McNeel
Author URI: http://jonsolove.com
License: GPL2
*/

/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );

/** Step 1. */
function my_plugin_menu() {
	add_options_page( 'Volunteer Manager Options', 'Volunteer Manager', 'manage_options', 'volman', 'my_plugin_options' );
}

/** Step 3. */
function my_plugin_options() {
	
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Volunteer Manager Options will live here.</p>';
	echo '</div>';
}

?>