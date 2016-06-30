<?php

/**
 * Plugin Name: Palette
 * Version: 1.0.0
 * Description: Creates custmization box which can show customization options of theme.
 * Author: Code Vision
 * Author URI: http://wearecodevision.com
 * Text Domain: palette
 * Domain Path: /languages/
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package Palette
 */

if ( ! class_exists( 'Palette' ) ) {
	/**
	 * Class Palette
	 *
	 * @class Palette
	 * @package Palette
	 * @author Code Vision
	 */	
	final class Palette {
		/**
		 * Initialize
		 */
		public function __construct() {	
			define( 'PALETTE_DIR', plugin_dir_path( __FILE__ ) );

			add_action( 'wp_enqueue_scripts', array( __CLASS__, 'assets' ) );
			add_action( 'wp_footer', array( __CLASS__, 'show' ) );
		}

		/**
		 * Displays palette tempalte
		 * 
		 * @hook wp_footer
		 * @access public
		 * @return void
		 */
		public static function show() {			
			// Current theme base dir
			$template = locate_template( 'palette.php' );

			// Child theme
			if ( ! $template &&  file_exists( get_stylesheet_directory() . '/templates/palette.php' ) ) {
				$template = get_stylesheet_directory() . 'templates/palette.php';
			}

			// Original theme
			if ( ! $template && file_exists( get_template_directory() . '/templates/palette.php' ) ) {
				$template = get_template_directory() . 'templates/palette.php';
			}			

			// Current Plugin
			if ( ! $template && file_exists( PALETTE_DIR . '/templates/palette.php' ) ) {
				$template = PALETTE_DIR . 'templates/palette.php';
			}						

			include $template;
		}		

		/**
		 * Load assets
		 * 
		 * @hook wp_enqueue_scripts
		 * @access public
		 * @return void
		 */
		public static function assets() {
			wp_enqueue_style( 'palette', plugins_url( '/palette/assets/css/palette.css' ) );
			wp_enqueue_script( 'palette', plugins_url( '/palette/assets/js/palette.js' ), array( 'jquery' ) );
		}
	}

	new Palette();
}