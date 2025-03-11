<?php

namespace IAC_Scripts;

use WPHelper\Utility\PluginCoreStaticWrapper;

/**
 * Plugin Config
 * 
 * @since 1.0
 */
class Plugin {
	use PluginCoreStaticWrapper;

	public static function init( $plugin_core ) {
		self::set_plugin_core( $plugin_core );

		Slick::init();
		Swiper::init();
	}

	/**
	 * @since 1.0
	 */
	public static function scripts_url( $path ) {
		return self::url( 'scripts/' . ltrim( $path, '/' ) );
	}

}