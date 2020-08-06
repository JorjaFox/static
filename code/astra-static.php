<?php

$file_url = 'https://jorjafox.net/tos/';
$filename = '/home/jorjafox/jorjafox.net/static/wordpress/astra/astra-theme-dynamic-css-post-13721.css';

if ( ! file_exists( $filename ) ) {
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_TIMEOUT, 5 );
	curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_URL, $file_url );
	$exec = curl_exec( $ch );
}

if ( file_exists( $filename ) ) {
	header ("Content-type: text/css" );
	echo file_get_contents( $filename );
} else {
	// Show backup.
	header ("Content-type: text/css" );
	echo file_get_contents( '/home/jorjafox/jorjafox.net/static/content/code/astra-backup.css' );

}
