<?php

function change_gravity_forms_url( $translated_text, $text, $domain ) {
	if ( $text === 'Please enter a valid Website URL (e.g. https://gravityforms.com).' && $domain === 'gravityforms' ) {
		$translated_text = 'Please enter a valid Website URL (e.g. https://crispydiv.com).';
	}
	return $translated_text;
}
//add_filter( 'gettext', 'change_gravity_forms_url', 20, 3 );
