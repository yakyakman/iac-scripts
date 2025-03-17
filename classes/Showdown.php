<?php

namespace IAC_Scripts;

/**
 * ShowdownJS
 * Markdown to HTML Converter
 * 
 * @since 1.2
 */
class Showdown {
	
	public static $lib = 'showdown';

	public static $basename = 'showdown';

	public static $js_file_path = 'dist/';

	public static $js_file_name = 'showdown.js';

	public static $js_file_name_min = 'showdown.min.js';

	public static $deps = [ 'jquery' ];

	/**
	 * @since 1.2
	 */
	public static function init( $args = [] ) {
		add_action( 'admin_enqueue_scripts', [ self::class, 'wp_register_scripts'], 5 );
	}

	/**
	 * @since 1.2
	 */
	public static function wp_register_scripts() {

		$file_name = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? self::$js_file_name : self::$js_file_name_min;

		wp_register_script(
			self::$lib,
			Plugin::scripts_url( self::$lib . '/' . self::$js_file_path . $file_name ),
			self::$deps,
			Plugin::cache_buster()
		);
	}
}
