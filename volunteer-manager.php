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
add_action( 'admin_menu', 'volunteer_manager_menu' );

function volunteer_manager_menu() {
	add_menu_page( 'Volunteer Manager Options', 'Volunteer Manager', 'manage_options', 'volman', 'volunteer_manager_main', null, 40);
	add_submenu_page( 'volman', 'My Calendar', 'My Calendar', 'manage_options', 'volman-cal', 'volunteer_manager_calendar');
}

function volunteer_manager_main() {
	
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Volunteer Manager Main will live here.</p>';
	echo '</div>';
}

function volunteer_manager_calendar() {
	
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Volunteer Manager Calendar will live here.</p>';
	echo '</div>';
}

?>