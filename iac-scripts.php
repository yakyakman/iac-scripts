<?php
/**
 * Plugin Name: IAC Scripts
 * Description: Register various 3rd-party JavaScript libraries used by IAC theme and plugins.
 * Version: 1.0-alpha
 * Author: abuyoyo
 */

// vendor/autoload
// Allow all other loaders to fail before auto-loading 
if (
	(
		! class_exists( 'WPHelper\PluginCore' )
		||
		! trait_exists( 'WPHelper\Utility\PluginCoreStaticWrapper' )
	)
	&&
	file_exists( __DIR__ . '/vendor/autoload.php' )
){
	require_once __DIR__ . '/vendor/autoload.php';
}

// fail gracefully
if (
	! class_exists( 'WPHelper\PluginCore' )
	||
	! trait_exists( 'WPHelper\Utility\PluginCoreStaticWrapper' )
){
	return;
}

require_once __DIR__ . '/autoload.php';

add_action( 'plugins_loaded', fn() => IAC_Scripts\Plugin::init( __FILE__ ) ); 