<?php

$lang = Locale::acceptFromHttp( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'en' );
$i18nDirectory = scandir( 'i18n' );

unset( $i18nDirectory['.'], $i18nDirectory['..'], $i18nDirectory['qqq.json'] );

if ( in_array( "{$lang}.json", $i18nDirectory ) ) {
	$translations = json_decode( file_get_contents( __DIR__ . "/i18n/{$lang}.json" ), true );
} else {
	$translations = json_decode( file_get_contents( __DIR__ . "/i18n/en.json" ), true );
}

unset( $translations['@metadata'] );

function getTranslation( $key ) {
	global $translations;
	
	switch ( json_last_error() ) {
		case JSON_ERROR_NONE:
			$error = false;
			break;
		case JSON_ERROR_DEPTH:
			$error = 'The maximum stack depth has been exceeded';
			break;
		case JSON_ERROR_STATE_MISMATCH:
			$error = 'Invalid or malformed JSON';
			break;
		case JSON_ERROR_CTRL_CHAR:
			$error = 'Control character error, possibly incorrectly encoded';
			break;
		case JSON_ERROR_SYNTAX:
			$error = 'Syntax error';
			break;
		case JSON_ERROR_UTF8:
			$error = 'Malformed UTF-8 characters, possibly incorrectly encoded';
			break;
		case JSON_ERROR_UTF16:
			$error = 'Malformed UTF-16 characters, possibly incorrectly encoded';
			break;
		default:
			$error = 'There was an unknown problem with the JSON';
			break;
	}

	if ( $error ) {
		throw new Exception( $error );
	}

	if ( isset( $translations[$key] ) && $translations[$key] ) {
		return $translations[$key];
	}  else {	
		return json_decode( file_get_contents( __DIR__ . "/i18n/en.json" ), true )[$key];
	}
}
?>
