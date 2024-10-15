<?php

use MediaWiki\MediaWikiServices;

global $wgDBname;

if ( MW_ENTRY_POINT !== 'cli' ) {
	require_once __DIR__ . '/getTranslations.php';

	$requestWikiUrl = 'https://meta.miraheze.org/wiki/Special:RequestWiki?wpsubdomain=' . substr($wgDBname, 0, -4);

	$getLanguageCode = 'getLanguageCode';
	$getTranslation = 'getTranslation';

	http_response_code( 404 );

	$output = <<<EOF

		<!DOCTYPE html>
		<html lang="en">
			<head>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<meta name="description" content="{$getTranslation( 'missingwiki' )}" />
				<title>{$getTranslation( 'missingwiki' )}</title>
				<link rel="icon" type="image/x-icon" href="https://meta.miraheze.org/favicon.ico" />
				<link rel="apple-touch-icon" href="https://meta.miraheze.org/apple-touch-icon.png" />
				<!-- Bootstrap core CSS -->
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
				<!-- Outfit font from Google Fonts -->
				<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit">
				<link href="/ErrorPages/assets/main.css" rel="stylesheet">
			</head>
			<div class="container" style="padding: 70px 0; text-align: center;">
				<!-- Jumbotron -->
				<div class="jumbotron">
					<p style="text-align: center; animation: fadein 1s;">
						<?xml version="1.0" encoding="UTF-8" standalone="no"?>
							<svg
							id="svg4206"
							version="1.1"
							width="135"
							height="135"
							viewBox="0 0 135 135"
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
								inkscape:cx="21.65493"
								inkscape:cy="65.492958"
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
								originx="-25.148999"
								originy="-23.256" />
							</sodipodi:namedview>
							<path
								style="fill:#8e7650;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
								d="m 56.721681,48.541548 21.189606,0.06232 10.968739,18.946003 -10.84409,18.696711 -21.37658,0 -10.906413,-18.759035 z"
								id="path4756"
								inkscape:connector-curvature="0" />
							<path
								style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
								d="M 56.7219,0.01584202 77.911507,0.07816637 88.880246,19.02417 l -10.84409,18.696709 -21.37658,0 -10.906414,-18.759033 z"
								id="path4756-4"
								inkscape:connector-curvature="0" />
							<path
								style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
								d="M 56.7219,97.294954 77.911507,97.357279 88.880246,116.30329 78.036156,135 56.659576,135 45.753162,116.24097 Z"
								id="path4756-4-7"
								inkscape:connector-curvature="0"
								inkscape:transform-center-x="23.96383"
								inkscape:transform-center-y="-86.164066" />
							<path
								style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
								d="m 98.666142,72.694267 21.189608,0.06232 10.96874,18.946004 -10.84409,18.696719 -21.376583,0 -10.906414,-18.759039 z"
								id="path4756-4-7-0"
								inkscape:connector-curvature="0"
								inkscape:transform-center-x="23.963829"
								inkscape:transform-center-y="-86.16407" />
							<path
								style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
								d="m 98.666356,24.329153 21.189604,0.06232 10.96874,18.946001 -10.84409,18.696715 -21.376578,0 -10.906414,-18.75903 z"
								id="path4756-4-7-0-4"
								inkscape:connector-curvature="0"
								inkscape:transform-center-x="23.963831"
								inkscape:transform-center-y="-86.164068" />
							<path
								style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
								d="m 14.946578,24.329157 21.1464,0.06232 10.94636,18.945997 -10.821965,18.696715 -21.332992,0 -10.8841774,-18.75903 z"
								id="path4756-4-7-0-4-0"
								inkscape:connector-curvature="0"
								inkscape:transform-center-x="23.914978"
								inkscape:transform-center-y="-86.164069" />
							<path
								style="fill:#ffc200;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
								d="m 14.968739,72.694267 21.189607,0.06232 10.968734,18.946004 -10.844086,18.696719 -21.376579,0 L 4,91.640276 Z"
								id="path4756-4-7-0-4-5"
								inkscape:connector-curvature="0"
								inkscape:transform-center-x="23.96383"
								inkscape:transform-center-y="-86.16407" />
							<path
								d="M 132.542,118.96746 112.62754,99.053 a 27.068197,27.068197 0 1 0 -7.73377,7.73377 l 19.91446,19.91446 z M 72.605285,84.165492 A 17.400984,17.400984 0 1 1 90.006266,101.56648 17.400984,17.400984 0 0 1 72.605285,84.165492 Z"
								id="path23087"
								style="stroke-width:3.86688" />
							</svg>
					</p>
					<h1><b>{$getTranslation( 'missingwiki' )}</b></h1>
					<p class="lead">{$getTranslation( 'wiki-not-found' )}</p>
					<p>
						<a href="{$requestWikiUrl}" class="btn btn-lg btn-outline-primary" role="button">{$getTranslation( 'wiki-not-found-startwiki' )}</a>
					</p>
				</div>
			</div>
			<div class="bottom-links">
				<a href="#" onClick="history.go(-1); return false;">&larr; {$getTranslation( 'wiki-not-found-goback' )}</a>
				<a href="https://miraheze.org">Miraheze</a>
				<a href="https://meta.miraheze.org/wiki/Special:WikiDiscover">{$getTranslation( 'wiki-directory' )} &rarr;</a>
			</div>
		</html>
	EOF;
	header( 'Content-length: ' . strlen( $output ) );
	echo $output;

	try {
		MediaWikiServices::allowGlobalInstance();
		$dataFactory = MediaWikiServices::getInstance()->get( 'CreateWikiDataFactory' );
		$data = $dataFactory->newInstance( $wgDBname );
		$data->syncCache();
	} catch ( Throwable $ex ) {
		// Do nothing
	}

	die( 1 );
} else {
	// $wgDBname will always be set to a string, even if the --wiki parameter was not passed to a script.
	echo "The wiki database '{$wgDBname}' was not found." . PHP_EOL;
}
