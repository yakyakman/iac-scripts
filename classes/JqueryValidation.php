<?php

namespace IAC_Scripts;

/**
 * Jquery Validation
 * 
 * @since 1.3
 */
class JqueryValidation {
	
	public static $lib = 'jquery-validation';

	public static $basename = 'jquery.validate';

	public static $file_path = 'dist/';

	public static $file_name = 'jquery.validate.js';
	
	public static $file_name_min = 'jquery.validate.min.js';
	
	public static $deps = [ 'jquery' ];

	public static $remote = 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js';

	/**
	 * @since 1.3
	 */
	public static function init() {
		add_action( 'wp_enqueue_scripts', [ self::class, 'wp_register_scripts'], 5 );
	}

	/**
	 * @since 1.3
	 */
	public static function wp_register_scripts() {

		$file_name = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? self::$file_name : self::$file_name_min;

		wp_register_script(
			self::$lib,
			Plugin::scripts_url( self::$lib . '/' . self::$file_path . $file_name ),
			self::$deps,
			Plugin::cache_buster()
		);
	}
}
