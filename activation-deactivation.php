<?php

function volman_activate() {

	/* These roles will need to clone from existing roles or we need to specify more capabilities */
	add_role( 'volunteer', 'Volunteer', array( 'read' => true, 'volunteer' => true ) );
	add_role( 'volunteer-admin', 'Volunteer Admin', array( 'read' => true, 'volunteer' => true, 'volunteer admin' => true ) );

	/* Add necessary roles to administrator user */
	$role_object = get_role( 'administrator' );
	$role_object->add_cap( 'volunteer');
	$role_object->add_cap( 'volunteer admin');

}

function volman_deactivate() {
	remove_action( 'admin_menu', 'volunteer_manager_menu' );
	
	remove_role( 'volunteer');
	remove_role( 'volunteer-admin');

	$role_object = get_role( 'administrator' );
	$role_object->remove_cap( array( 'volunteer', 'volunteer admin') );
}

?>