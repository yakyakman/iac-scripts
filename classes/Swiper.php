<?php

namespace IAC_Scripts;

/**
 * Swiper js
 * 
 * @since 1.0
 */
class Swiper {
	
	public static $lib = 'swiper';

	public static $basename = 'swiper';

	public static $js_file_path = 'dist/js/';
	
	public static $js_file_name = 'swiper.js';
	
	public static $js_file_name_min = 'swiper.min.js';
	
	public static $css_file_path = 'dist/css/';

	public static $css_file_name = 'swiper.css';
	
	public static $js_deps = [];
	
	public static $css_deps = [];

	/**
	 * @since 1.0
	 */
	public static function init( $args = [] ) {

		add_action( 'wp_enqueue_scripts', [ self::class, 'wp_register_scripts'], 5 );
		add_action( 'wp_enqueue_scripts', [ self::class, 'wp_register_styles'], 5 );
	}

	/**
	 * @since 1.0
	 */
	public static function wp_register_scripts() {
		wp_register_script(
			self::$lib,
			Plugin::scripts_url( self::$lib . '/' . self::$js_file_path . self::$js_file_name ),
			self::$js_deps,
			Plugin::cache_buster()
		);
	}

	/**
	 * @since 1.0
	 */
	public static function wp_register_styles() {

		self::$css_file_name = self::$basename . '.css';

		wp_register_style(
			self::$lib,
			Plugin::scripts_url( self::$lib . '/' . self::$css_file_path . self::$css_file_name ),
			self::$css_deps,
			Plugin::cache_buster()
		);
	}
}
