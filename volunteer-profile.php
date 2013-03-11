<?php

$current_user = wp_get_current_user();

?>
<h1>Profile</h1>
<p><?php 
	$current_user = wp_get_current_user();
	echo $current_user->first_name . " " . $current_user->last_name; ?></p>
