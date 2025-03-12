<?php

namespace IAC_Scripts;

/**
 * Slick Carousel
 * 
 * @since 1.0
 */
class Slick {
	
	public static $lib = 'slick-carousel';

	public static $file_path = 'slick/';

	public static $file_name = 'slick.js';
	
	public static $file_name_min = 'slick.min.js';
	
	public static $deps = [ 'jquery' ];

	public static $remote = 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js';

	/**
	 * @since 1.0
	 */
	public static function init() {

		add_action( 'wp_enqueue_scripts', [ self::class, 'wp_register_scripts'], 5 );
	}

	/**
	 * @since 1.0
	 */
	public static function wp_register_scripts() {

		// Always use .min.js file. Non-minified version breaks all our widgets.
		wp_register_script(
			self::$lib,
			Plugin::scripts_url( self::$lib . '/' . self::$file_path . self::$file_name_min ),
			self::$deps,
			null,
			true
		);
	}
}
