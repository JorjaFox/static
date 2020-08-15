<?php

$valid_types = array( 'js', 'css' );

if ( isset( $_GET['type'] ) && in_array( $_GET['type'], $valid_types ) ) {

	$directory = '/home/jorjafox/jorjafox.net/static/wordpress/astra-addon';
	$scanned   = array_diff( scandir( $directory ), array( '..', '.' ) );

	foreach ( $scanned as $filename ) {
		if ( ( strpos( $filename, 'dynamic' ) === false ) && ( strpos( $filename, $_GET['type'] ) !== false ) ) {
			header( 'Content-type: text/' . $_GET['type'] );
			echo file_get_contents( $directory . '/' . $filename );
		}
	}
} else {
	header( 'Location: https://jorjafox.net/' ) ;
}
