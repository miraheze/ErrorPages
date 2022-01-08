<?php

header( 'Content-Type: text/html; charset=utf-8' );
header( 'Cache-Control: s-maxage=2678400, max-age=2678400' );

require_once __DIR__ . '/getTranslations.php';

$getLanguageCode = 'getLanguageCode';
$getTranslation = 'getTranslation';

echo <<<EOF
	<!DOCTYPE html>
	<html lang="{$getLanguageCode()}">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="Bad Gateway">
			<title>{$getTranslation( 'bad-gateway' )}</title>
			<link rel="shortcut icon" href="/favicon.ico">
			<!-- Bootstrap core CSS -->
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
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
				}
				/* Everything but the jumbotron gets side spacing for mobile-first views */
				.masthead, .body-content {
					padding-left: 15px;
					padding-right: 15px;
				}
				/* Main marketing message and sign up button */
				.jumbotron {
					text-align: center;
					background-color: transparent;
				}
				.jumbotron .btn {
					font-size: 21px;
					padding: 14px 24px;
				}
				/* Colors */
				.green {color:#5cb85c;}
				.orange {color:#f0ad4e;}
				.red {color:#d9534f;}
			</style>
		</head>
		<div class="container">
			<!-- Jumbotron -->
			<div class="jumbotron">
				<a href="https://miraheze.org">
					<img src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Miraheze Logo">
				</a>
				<h1>{$getTranslation( '502-bad-gateway' )}</h1>
			</div>
		</div>
	</html>
EOF;
