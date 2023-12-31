<?php

function flamingo_akismet_submit_spam( $comment ) {
	return flamingo_akismet_submit( $comment, 'spam' );
}

function flamingo_akismet_submit_ham( $comment ) {
	return flamingo_akismet_submit( $comment, 'ham' );
}

function flamingo_akismet_submit( $comment, $spam_or_ham = 'spam' ) {
	if ( ! flamingo_akismet_is_active() ) {
		return false;
	}

	if ( ! in_array( $spam_or_ham, array( 'spam', 'ham' ) ) ) {
		return false;
	}

	$query_string = '';

	foreach ( (array) $comment as $key => $data ) {
		$query_string .=
			$key . '=' . urlencode( wp_unslash( (string) $data ) ) . '&';
	}

	$response = Akismet::http_post( $query_string, 'submit-' . $spam_or_ham );

	return (bool) $response[1];
}

function flamingo_akismet_is_active() {
	if ( is_callable( array( 'Akismet', 'get_api_key' ) ) ) {
		return (bool) Akismet::get_api_key();
	}

	return false;
}
