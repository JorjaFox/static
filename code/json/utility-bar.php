<?php

/* This code shows the content of a WP post or page.
 *
 * To use, pass the variable ?url=FOO
 *
 */

if (!$_GET || !$_GET["url"]) return;

include_once( "StrictUrlValidator.php" );

$this_url = (string) filter_var( $_GET['url'], FILTER_SANITIZE_URL );

if (strpos( $this_url, 'wp-json') == FALSE ) return;

function do_curl ( $url ) {
	$curl = curl_init();

	curl_setopt_array( $curl, array(
		CURLOPT_FAILONERROR    => true,
		CURLOPT_CONNECTTIMEOUT => 30,
		CURLOPT_TIMEOUT        => 60,
		CURLOPT_FOLLOWLOCATION => false,
		CURLOPT_MAXREDIRS      => 3,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_URL            => $url
	) );

	return curl_exec( $curl );
	curl_close( $curl );
}

if ( StrictUrlValidator::validate( $this_url, true, true ) === false ) {
	$return = "ERROR: Bad URL";
} else {
	$obj = json_decode( do_curl ( $this_url ) );

	if ( json_last_error() === JSON_ERROR_NONE ) {
		$return = $obj->content->rendered;
	} else {
		$return = "ERROR: Bad JSON";
	}
}

echo $return;