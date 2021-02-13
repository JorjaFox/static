<?php

/*
This file echos out a CSS file that changes as Astra changes.

Page 13271 == https://jorjafox.net/tos/
 */

$valid_types = array( 'addon', 'theme' );
$filename    = array(
	'addon' => '/home/jorjafox/jorjafox.net/static/wordpress/astra-addon/astra-addon-dynamic-css-post-13721.css',
	'theme' => '/home/jorjafox/jorjafox.net/static/wordpress/astra/astra-theme-dynamic-css-post-13721.css',
);
$backup      = array(
	'addon' => '/home/jorjafox/jorjafox.net/static/content/astra/astra-addon-dynamic.css',
	'theme' => '/home/jorjafox/jorjafox.net/static/content/astra/astra-theme-dynamic.css',
);

if ( isset( $_GET['type'] ) && in_array( $_GET['type'], $valid_types ) ) {
	if ( file_exists( $filename[ $_GET['type'] ] ) ) {
		header( 'Content-type: text/css' );
		echo file_get_contents( $filename[ $_GET['type'] ] );
	} else {
		// Show backup.
		header( 'Content-type: text/css' );
		echo file_get_contents( $backup[ $_GET['type'] ] );
	}
} else {
	header( 'Location: https://jorjafox.net/' ) ;
}
