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

include_once plugin_dir_path( __FILE__ ).'activation-deactivation.php';

register_activation_hook( __FILE__, 'volman_activate' );
register_deactivation_hook( __FILE__, 'volman_deactivate' );

add_action( 'admin_menu', 'volunteer_manager_menu' );



function volunteer_manager_menu() {
	add_menu_page( 'Volunteer', 'Volunteer', 'volunteer', 'volman', 'volunteer_manager_main');
	add_submenu_page( 'volman', 'Calendar', 'Calendar', 'volunteer', 'volman-cal', 'volunteer_manager_calendar');
	add_submenu_page( 'volman', 'Profile', 'Profile', 'volunteer', 'volman-profile', 'volunteer_manager_profile');
	add_submenu_page( 'volman', 'Admin', 'Admin', 'volunteer admin', 'volman-admin', 'volunteer_manager_admin');
}

function volunteer_manager_main() {
	
	/* I'm not sure what to do here... */
	if ( !current_user_can( 'volunteer' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Volunteer Main will live here.</p>';
	echo '</div>';
}

function volunteer_manager_calendar() {
	
	if ( !current_user_can( 'volunteer' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Volunteer Calendar will live here.</p>';
	echo '</div>';
}

function volunteer_manager_profile() {
	
	if ( !current_user_can( 'volunteer' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	echo '<div class="wrap">';
	echo '<p>Volunteer Profile will live here.</p>';
	echo '</div>';
}

function volunteer_manager_admin() {
	
	if ( !current_user_can( 'volunteer admin' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	echo '<div class="wrap">';
	echo '<p>Volunteer Admin will live here.</p>';
	echo '</div>';
}
?>