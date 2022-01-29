<?php
/**
 * Geoff Cordnerfunctions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage geoff-cordner
 * @since Geoff Cordner 1.0
 */

if ( ! function_exists( 'geoffcordner_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function geoffcordner_styles() {
		// Register theme stylesheet.
			wp_register_style(
			'geoffcordner-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			$version_string
		);

			// Enqueue theme stylesheet.
		wp_enqueue_style( 'geoffcordner-style' );

	}

endif;

/* 
The parameter 99 below assigns priority & loads the child styles last.
This and a better way might be explained here: 
https://stackoverflow.com/questions/41938369/how-to-load-wordpress-child-theme-css-after-parent-theme-css
*/
add_action( 'wp_enqueue_scripts', 'geoffcordner_styles', 99 );

