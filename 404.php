<?php

header( 'Content-Type: text/html; charset=utf-8' );
header( 'Cache-Control: s-maxage=2678400, max-age=2678400' );

require_once __DIR__ . '/getTranslations.php';

$getLanguageCode = 'getLanguageCode';
$getTranslation = 'getTranslation';

$path = $_SERVER['REQUEST_URI'];
$encUrl = htmlspecialchars( $path );

if ( preg_match( '/(%2f)/i', $path, $matches )
	|| preg_match( '/^\/(?:upload|style|wiki|w|extensions)\/(.*)/i', $path, $matches )
) {
	// "/w/Foo" -> "/wiki/Foo"
	$target = '/wiki/' . $matches[1];
} else {
	// "/Foo" -> "/wiki/Foo"
	$target = '/wiki' . $path;
}

$encTarget = htmlspecialchars( $target );

echo <<<EOF
	<!DOCTYPE html>
	<html lang="{$getLanguageCode()}">
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<meta name="description" content="Page not found" />
			<title>{$getTranslation( 'notfound' )}</title>
			<link rel="icon" type="image/x-icon" href="https://meta.miraheze.org/favicon.ico" />
			<link rel="apple-touch-icon" href="https://meta.miraheze.org/apple-touch-icon.png" />
			<!-- Bootstrap core CSS -->
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"/>
			<style>
				/* Error Page Inline Styles */
				body {
					padding-top: 20px;
				}
				/* Layout */
				.jumbotron {
					font-size: 21px;
					font-weight: 200;
					line-height: 2.1428571435;
					color: inherit;
					padding: 10px 0px;
					text-align: center;
					background-color: transparent;
				}
				/* Everything but the jumbotron gets side spacing for mobile-first views */
				.body-content {
					padding-left: 15px;
					padding-right: 15px;
				}
				/* button */
				.jumbotron .btn {
					font-size: 21px;
					padding: 14px 24px;
				}
				/* Fade-in */
				@keyframes fadein {
					from { opacity: 0; }
					to   { opacity: 1; }
				}
				/* Bottom links */
				.bottom-links {
					display: flex;
					justify-content: space-between;
					margin:-30px auto;
					max-width: 100%;
					text-align: center;
					width: 600px;
				}
				/* Dark mode */
				@media (prefers-color-scheme: dark) {
					body {
						background-color: #282828;
					}
					h1, p {
						color: white;
					}
				}
			</style>
		</head>
		<div class="container">
			<!-- Jumbotron -->
			<div class="jumbotron">
				<p>
					<a href="https://miraheze.org">
						<img src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" style="animation: fadein 1s;" alt="Miraheze Logo">
					</a>
				</p>
				<h1>{$getTranslation( 'page-not-found' )}</h1>
				<p style="font-size: 100%;"><b>{$getTranslation( 'did-you-mean' )} <a href="$encTarget">$encTarget</a></b></p>
				<p>{$getTranslation( 'page-not-found-more' )}</p>
			</div>
		</div>
		<div class="bottom-links">
			<a href="#" onClick="history.go(-1); return false;">&larr; {$getTranslation( 'wiki-not-found-goback' )}</a>
			<a href="/">{$getTranslation( 'page-not-found-mainpage' )}</a>
		</div>
	</html>
EOF;
