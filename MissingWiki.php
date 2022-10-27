<?php

if ( !$wgCommandLineMode ) {
	require_once __DIR__ . '/getTranslations.php';

	$getLanguageCode = 'getLanguageCode';
	$getTranslation = 'getTranslation';

	http_response_code( 404 );
	$requestURL = htmlspecialchars( $_SERVER['REQUEST_URI'] );
	date_default_timezone_set( 'UTC' ); // Set to UTC +0
	$fullTimestamp = date( 'Y-m-d H:i:s' );

	echo <<<EOF
		<!DOCTYPE html>
		<html lang="{$getLanguageCode()}">
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta name="description" content="Wiki not found">
				<title>{$getTranslation( 'missingwiki' )}</title>
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
					/* Main body and and button */
					.jumbotron {
						text-align: center;
						background-color: transparent;
					}
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
					margin: 30px auto;
					max-width: 100%;
					width: 600px;
					}
					/* Colors */
					.green {color:#5cb85c;}
					.orange {color:#f0ad4e;}
					.red {color:#d9534f;}
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
					<p style="font-align: center; animation: fadein 1s;"><?xml version="1.0" encoding="UTF-8" standalone="no"?><svg id="svg4206" version="1.1" inkscape:version="1.2.1 (9c6d41e410, 2022-07-14)" width="130.851" height="134.98416" viewBox="0 0 130.851 134.98416" sodipodi:docname="mhwarn.svg" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"><defs id="defs4210" /> <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1920" inkscape:window-height="1009" id="namedview4208" showgrid="true" fit-margin-top="0" fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0" inkscape:zoom="4.0163665" inkscape:cx="99.343524" inkscape:cy="87.890385" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" inkscape:current-layer="svg4206" showborder="false" inkscape:showpageshadow="2" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1"> <inkscape:grid type="xygrid" id="grid4863" originx="-29.149001" originy="-23.271838" /> </sodipodi:namedview> <path style="fill:#8e7650;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 52.721681,48.525706 21.189606,0.06232 10.968739,18.946003 -10.84409,18.696711 H 52.659356 L 41.752943,67.471705 Z" id="path4756" inkscape:connector-curvature="0" /> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="M 52.7219,0 73.911507,0.06233 84.880246,19.008333 74.036156,37.705042 H 52.659576 L 41.753162,18.946004 Z" id="path4756-4" inkscape:connector-curvature="0" /> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 52.7219,97.279112 21.189607,0.06233 10.968739,18.946008 -10.84409,18.69671 H 52.659576 L 41.753162,116.22513 Z" id="path4756-4-7" inkscape:connector-curvature="0" inkscape:transform-center-x="23.96383" inkscape:transform-center-y="-86.164066" /> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 94.666356,24.313311 21.189604,0.06232 10.96874,18.946001 -10.84409,18.696715 H 94.604032 L 83.697618,43.259317 Z" id="path4756-4-7-0-4" inkscape:connector-curvature="0" inkscape:transform-center-x="23.963831" inkscape:transform-center-y="-86.164068" /> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="m 10.946578,24.313315 21.1464,0.06232 10.94636,18.945997 -10.821965,18.696715 H 10.884381 L 2.04e-4,43.259317 Z" id="path4756-4-7-0-4-0" inkscape:connector-curvature="0" inkscape:transform-center-x="23.914978" inkscape:transform-center-y="-86.164069" /> <path style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="M 10.968739,72.678425 32.158346,72.740745 43.12708,91.686749 32.282994,110.38347 H 10.906415 L 0,91.624434 Z" id="path4756-4-7-0-4-5" inkscape:connector-curvature="0" inkscape:transform-center-x="23.96383" inkscape:transform-center-y="-86.16407" /> <path d="M 92.925494,56.217561 A 37.925497,37.925497 0 1 0 130.851,94.143056 37.925497,37.925497 0 0 0 92.925494,56.217561 Z m 3.792549,60.680789 h -7.5851 v -7.58509 h 7.5851 z m 0,-15.17019 h -7.5851 V 71.387759 h 7.5851 z" id="path4" style="fill:#ff5d00;fill-opacity:1;stroke-width:3.79255" /></svg></p>
					<h1>{$getTranslation( 'missingwiki' )}</h1>
					<p class="lead">{$getTranslation( 'wiki-not-found' )}</p>
					<p>
						<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Miraheze" class="btn btn-lg btn-outline-primary" role="button">{$getTranslation( 'wiki-not-found-meta' )}</a>
					</p>
				</div>
			</div>
			<div class="bottom-links">
				<a href="#" onClick="history.go(-1); return false;">&larr; Go back</a>
				<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Miraheze">Miraheze Meta</a>
				<a href="https://archive.org/search.php?query=miraheze">Search on Archive.org</a>
			</div>
		</html>
	EOF;

	die( 1 );
} else {
	// $wgDBname will always be set to a string, even if the --wiki parameter was not passed to a script.
	echo "The wiki database '{$wgDBname}' was not found." . PHP_EOL;
}
