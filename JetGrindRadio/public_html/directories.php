<?php
	//directories.php

	if ( ! isset( $root ) ) {
		$root = "";
	}

	// Directories
	$dirImages  = $root . "images/";
	$dirTags    = $dirImages . "tags/";

	// Tag Sizes
	define( "TAG_SMALL", "sm" );
	define( "TAG_LARGE", "lg" );
	define( "TAG_XTRA_LARGE", "xlg" );
?>
