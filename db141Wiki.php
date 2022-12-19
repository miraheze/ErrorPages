<?php

global $wgCommandLineMode;

if ( !$wgCommandLineMode ) {
	require_once __DIR__ . '/getTranslations.php';

	$getLanguageCode = 'getLanguageCode';
	$getTranslation = 'getTranslation';

	http_response_code( 500 );

	$output = <<<EOF
		<!DOCTYPE html>
		<html lang="{$getLanguageCode()}">
			<head>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<meta name="description" content="Action is required before this wiki can be restored" />
				<title>{$getTranslation( 'wiki-temporarily-unavailable' )}</title>
				<link rel="icon" type="image/x-icon" href="https://meta.miraheze.org/favicon.ico" />
				<link rel="apple-touch-icon" href="https://meta.miraheze.org/apple-touch-icon.png" />
				<!-- Bootstrap core CSS -->
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
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
						font-size: 19px;
						padding: 14px 24px;
						margin-bottom: 10px;
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
						margin: 30px auto;
						max-width: 100%;
						text-align: center;
						width: 600px;
						line-height: 1;
					}
					/* Dark mode */
					@media (prefers-color-scheme: dark) {
						body {
							background-color: #282828;
						}
						h1, h2, p {
							color: white;
						}
					}
				</style>
			</head>
			<div class="container">
				<!-- Jumbotron -->
				<div class="jumbotron">
					<p style="font-align: center; animation: fadein 1s;"><svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" id="svg4206" version="1.1" inkscape:version="1.0.2 (e86c870879, 2021-01-15)" width="136.7968" height="135.53114" viewBox="0 0 136.7968 135.53114"> <defs id="defs4210"> <radialGradient id="shadow_1_" cx="12.9778" cy="729.80261" r="0.5" gradientTransform="matrix(564.344,0,0,-564.3557,-6998.8677,412193.16)" gradientUnits="userSpaceOnUse"> <stop offset="0" style="stop-color:#C0C0C0" id="stop347" /> <stop offset="0.88" style="stop-color:#C0C0C0" id="stop349" /> <stop offset="1" style="stop-color:#C0C0C0;stop-opacity:0" id="stop351" /> </radialGradient> <linearGradient id="field_2_" gradientUnits="userSpaceOnUse" x1="602.67621" y1="414.88531" x2="308.8356" y2="-199.59689" gradientTransform="matrix(0.6756,0,0,-0.6756,2.9571,380.9155)"> <stop offset="0" style="stop-color:#FFC9A1" id="stop355" /> <stop offset="0.5" style="stop-color:#FDA557" id="stop357" /> <stop offset="1" style="stop-color:#F88C2C" id="stop359" /> </linearGradient> <linearGradient id="field_3_" gradientUnits="userSpaceOnUse" x1="797.04492" y1="-92.815399" x2="125.8326" y2="294.70901" gradientTransform="matrix(0.6756,0,0,-0.6756,2.9571,380.9155)"> <stop offset="0" style="stop-color:#B74E08" id="stop362" /> <stop offset="1" style="stop-color:#D87B3F" id="stop364" /> </linearGradient> </defs> <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1920" inkscape:window-height="1015" id="namedview4208" showgrid="true" fit-margin-top="0" fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0" inkscape:zoom="4.0163665" inkscape:cx="49.914272" inkscape:cy="89.956272" inkscape:window-x="0" inkscape:window-y="0" inkscape:window-maximized="1" inkscape:current-layer="svg4206" showborder="false" inkscape:document-rotation="0"> <inkscape:grid type="xygrid" id="grid4863" originx="-29.148999" originy="-23.271842" /> </sodipodi:namedview> <path style="fill:#8e7650;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 52.721681,48.525706 21.189606,0.06232 10.968739,18.946003 -10.84409,18.696711 H 52.659356 L 41.752943,67.471705 Z" id="path4756" inkscape:connector-curvature="0" /> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="M 52.7219,0 73.911507,0.06232 84.880246,19.008324 74.036156,37.705033 H 52.659576 L 41.753162,18.946004 Z" id="path4756-4" inkscape:connector-curvature="0" /> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 52.7219,97.279112 21.189607,0.06233 10.968739,18.946008 -10.84409,18.69671 H 52.659576 L 41.753162,116.22513 Z" id="path4756-4-7" inkscape:connector-curvature="0" inkscape:transform-center-x="23.96383" inkscape:transform-center-y="-86.164066" /> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 94.666142,72.678425 21.189608,0.06232 10.96874,18.946004 -10.84409,18.696721 H 94.603817 L 83.697403,91.624429 Z" id="path4756-4-7-0" inkscape:connector-curvature="0" inkscape:transform-center-x="23.963829" inkscape:transform-center-y="-86.16407" /> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 94.666356,24.313311 21.189604,0.06232 10.96874,18.946001 -10.84409,18.696715 H 94.604032 L 83.697618,43.259317 Z" id="path4756-4-7-0-4" inkscape:connector-curvature="0" inkscape:transform-center-x="23.963831" inkscape:transform-center-y="-86.164068" /> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 10.946578,24.313315 21.1464,0.06232 10.94636,18.945997 -10.821965,18.696715 H 10.884381 L 2.04e-4,43.259317 Z" id="path4756-4-7-0-4-0" inkscape:connector-curvature="0" inkscape:transform-center-x="23.914978" inkscape:transform-center-y="-86.164069" /> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="M 10.968739,72.678425 32.158346,72.740745 43.12708,91.686749 32.282994,110.38347 H 10.906415 L 0,91.624434 Z" id="path4756-4-7-0-4-5" inkscape:connector-curvature="0" inkscape:transform-center-x="23.96383" inkscape:transform-center-y="-86.16407" /> <g id="g409" transform="matrix(0.13624389,0,0,0.13388693,54.065151,54.239818)"> <ellipse id="shadow" fill="url(#shadow_1_)" cx="325.06" cy="324.98599" rx="282.172" ry="282.17801" style="fill:url(#shadow_1_)" /> <circle id="field_1_" fill="url(#field_2_)" stroke="url(#field_3_)" stroke-width="20" cx="310" cy="310" r="257.974" style="fill:url(#field_2_);stroke:url(#field_3_)" /> <polygon id="polygon26" fill="#ffffff" points="230,250 350,250 350,440 390,440 390,480 230,480 230,440 270,440 270,280 230,280 " /> <circle id="circle28" fill="#ffffff" cx="310" cy="170" r="40" /> </g> </svg></p>
					<h1>{$getTranslation( 'wiki-temporarily-unavailable' )}</h1>
					<p class="lead">{$getTranslation( 'wiki-temporarily-unavailable-subtitle' )}</p>
					<p style="font-size: 80%;">{$getTranslation( 'wiki-temporarily-unavailable-more' )}</p>
					<p>
						<a href="https://meta.miraheze.org/wiki/Tech:Wiki_recreations" class="btn btn-lg btn-outline-primary" role="button">{$getTranslation( 'db141wiki-learnmore' )}</a>
						<a href="https://discord.gg/TVAJTE4CUn" class="btn btn-lg btn-outline-primary" role="button">{$getTranslation( 'db141wiki-join-discord' )}</a>
					</p>
				</div>
			</div>
			<div class="bottom-links">
				<a href="#" onClick="history.go(-1); return false;">&larr; {$getTranslation( 'wiki-not-found-goback' )}</a>
				<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Miraheze">{$getTranslation( 'wiki-not-found-meta' )}</a>
			</div>
		</html>
	EOF;
	header( 'Content-length: ' . strlen( $output ) );
	echo $output;
	die( 1 );
} else {
	global $wgDBname;

	// $wgDBname will always be set to a string, even if the --wiki parameter was not passed to a script.
	exit( "The wiki database '{$wgDBname}' is on db141 and therefore is currently down." . PHP_EOL );
}
