<?php


/**
 * Enqueue theme assets .
 *
 * @since 1.0.0
 * @return void
 */
function hampres_child_enqueue_child_styles() {
		wp_register_style(
			'parent-style',
			get_template_directory_uri() . '/style.css'
		);

		wp_enqueue_style( 'parent-style' );

		wp_register_style(
			'childe-style',
			get_stylesheet_directory_uri() . '/style.css?=12'
		);
		wp_enqueue_style( 'childe-style' );

		wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', [ 'jquery' ], '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'hampres_child_enqueue_child_styles' );

/*Write here your own functions */

// require 'inc/woo.php';
