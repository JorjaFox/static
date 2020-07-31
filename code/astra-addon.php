<?php

$valid_types = array( 'js', 'css' );

if ( isset( $_GET['type'] ) && in_array( $_GET['type'], $valid_types ) ) {
	foreach( glob('/home/jorjafox/jorjafox.net/static/wordpress/astra-addon/*.' . $_GET['type'] ) as $filename ) {
		header ("Content-type: text/" . $_GET['type'] );
		echo file_get_contents( $filename );
	}
} else {
	header( 'Location: https://jorjafox.net/' ) ;
}
