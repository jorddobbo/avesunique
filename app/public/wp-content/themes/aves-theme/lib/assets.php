<?php

namespace ThemeTitle\Assets;

function asset_path( $filename ) {
	$dist_path = get_template_directory_uri() . '/assets/';
	$directory = dirname( $filename ) . '/';
	$file      = basename( $filename );
	return $dist_path . $directory . $file;
}