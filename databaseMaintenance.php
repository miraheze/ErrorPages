<?php

require_once __DIR__ . '/getTranslations.php';

$getLanguageCode = 'getLanguageCode';
$getTranslation = 'getTranslation';
$getParsedTranslation = 'getParsedTranslation';

http_response_code( 503 );

echo <<<EOF
	<!DOCTYPE html>
	<html lang="{$getLanguageCode()}">
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<meta name="description" content="{$getTranslation( 'database-maintenance' )}" />
			<title>{$getTranslation( 'database-maintenance' )}</title>
			<link rel="icon" type="image/x-icon" href="https://meta.miraheze.org/favicon.ico" />
			<link rel="apple-touch-icon" href="https://meta.miraheze.org/apple-touch-icon.png" />
			<!-- Bootstrap core CSS -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
			<!-- Outfit font from Google Fonts -->
			<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit">
			<link href="/ErrorPages/assets/main.css" rel="stylesheet">
		</head>

		<div class="container">
			<!-- Jumbotron -->
			<div class="jumbotron">
				<?xml version="1.0" encoding="UTF-8" standalone="no"?>
					<svg
					id="svg4206"
					version="1.1"
					width="130.851"
					height="134.98416"
					viewBox="0 0 130.851 134.98416"
					xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
					xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
					xmlns="http://www.w3.org/2000/svg"
					xmlns:svg="http://www.w3.org/2000/svg"
					xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
					xmlns:cc="http://creativecommons.org/ns#"
					xmlns:dc="http://purl.org/dc/elements/1.1/">
					<defs
						id="defs4210" />
					<sodipodi:namedview
						pagecolor="#ffffff"
						bordercolor="#666666"
						borderopacity="1"
						objecttolerance="10"
						gridtolerance="10"
						guidetolerance="10"
						inkscape:pageopacity="0"
						inkscape:pageshadow="2"
						inkscape:window-width="1920"
						inkscape:window-height="1009"
						id="namedview4208"
						showgrid="true"
						fit-margin-top="0"
						fit-margin-left="0"
						fit-margin-right="0"
						fit-margin-bottom="0"
						inkscape:zoom="2.84"
						inkscape:cx="19.894366"
						inkscape:cy="66.901409"
						inkscape:window-x="-8"
						inkscape:window-y="-8"
						inkscape:window-maximized="1"
						inkscape:current-layer="svg4206"
						showborder="false"
						inkscape:showpageshadow="2"
						inkscape:pagecheckerboard="0"
						inkscape:deskcolor="#d1d1d1">
						<inkscape:grid
						type="xygrid"
						id="grid4863"
						originx="-29.149002"
						originy="-23.271838" />
					</sodipodi:namedview>
					<path
						style="fill:#8e7650;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
						d="m 52.721681,48.525706 21.189606,0.06232 10.968739,18.946003 -10.84409,18.696711 H 52.659356 L 41.752943,67.471705 Z"
						id="path4756"
						inkscape:connector-curvature="0" />
					<path
						style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
						d="M 52.7219,0 73.911507,0.06233 84.880246,19.008333 74.036156,37.705042 H 52.659576 L 41.753162,18.946004 Z"
						id="path4756-4"
						inkscape:connector-curvature="0" />
					<path
						style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
						d="m 52.7219,97.279112 21.189607,0.06233 10.968739,18.946008 -10.84409,18.69671 H 52.659576 L 41.753162,116.22513 Z"
						id="path4756-4-7"
						inkscape:connector-curvature="0"
						inkscape:transform-center-x="23.96383"
						inkscape:transform-center-y="-86.164066" />
					<path
						style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
						d="m 94.666356,24.313311 21.189604,0.06232 10.96874,18.946001 -10.84409,18.696715 H 94.604032 L 83.697618,43.259317 Z"
						id="path4756-4-7-0-4"
						inkscape:connector-curvature="0"
						inkscape:transform-center-x="23.963831"
						inkscape:transform-center-y="-86.164068" />
					<path
						style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
						d="m 10.946578,24.313315 21.1464,0.06232 10.94636,18.945997 -10.821965,18.696715 H 10.884381 L 2.04e-4,43.259317 Z"
						id="path4756-4-7-0-4-0"
						inkscape:connector-curvature="0"
						inkscape:transform-center-x="23.914978"
						inkscape:transform-center-y="-86.164069" />
					<path
						style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
						d="M 10.968739,72.678425 32.158346,72.740745 43.12708,91.686749 32.282994,110.38347 H 10.906415 L 0,91.624434 Z"
						id="path4756-4-7-0-4-5"
						inkscape:connector-curvature="0"
						inkscape:transform-center-x="23.96383"
						inkscape:transform-center-y="-86.16407" />
					<g
						id="g29875"
						style="fill:#3366cc"
						transform="matrix(3.7224712,0,0,3.7224712,55.707752,54.50345)">
						<path
						d="M 10,2.5 A 7.5,7.5 0 1 0 17.5,10 7.5,7.5 0 0 0 10,2.5 Z m 0,11 A 3.5,3.5 0 1 1 13.5,10 3.5,3.5 0 0 1 10,13.5 Z"
						id="path28657"
						style="fill:#3366cc" />
						<path
						d="M 12,3.29 11.5,0 h -3 L 8,3.29 a 7,7 0 0 1 4,0 z M 8,16.71 8.5,20 h 3 L 12,16.71 a 7,7 0 0 1 -4,0 z m 8.16,-10.04 2,-2.68 -2.16,-2.12 -2.68,2 A 7,7 0 0 1 16.15,6.7 Z M 3.84,13.33 1.87,16 4,18.13 l 2.68,-2 A 7,7 0 0 1 3.85,13.3 Z M 16.71,12 20,11.5 v -3 L 16.71,8 a 7,7 0 0 1 0,4 z M 3.29,8 0,8.5 v 3 L 3.29,12 a 7,7 0 0 1 0,-4 z m 10.04,8.16 2.68,2 2.12,-2.16 -2,-2.68 A 7,7 0 0 1 13.3,16.15 Z M 6.67,3.84 4,1.87 1.87,4 l 2,2.68 a 7,7 0 0 1 2.8,-2.84 z"
						id="path28659"
						style="fill:#3366cc" />
					</g>
					</svg>
				<h1><b>{$getParsedTranslation( 'database-maintenance' )}</b></h1>
				<p class="lead">{$getParsedTranslation( 'wiki-unscheduled-database-maintenance' )}</p>
				<p>
					<a href="https://miraheze.org/discord" class="btn btn-lg btn-outline-primary" role="button">{$getParsedTranslation( 'database-maintenance-join-discord' )}</a>
				</p>
				<!--<small>Maintenance has been extended for this database cluster to 12:00 UTC, Monday, 19 December, 2022. Please check back soon.</small>-->
			</div>
		</div>
		<div class="bottom-links">
			<a href="#" onClick="history.go(-1); return false;">&larr; {$getParsedTranslation( 'wiki-not-found-goback' )}</a>
			<!--<a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Miraheze">{$getParsedTranslation( 'wiki-not-found-meta' )}</a>-->
		</div>
	</html>
EOF;

die( 1 );
