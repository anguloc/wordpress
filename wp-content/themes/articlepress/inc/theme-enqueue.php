<?php
/**
 * Theme Scripts Enqueue
 * @package ArticlePress
 */



/**
 * Enqueue scripts and styles.
 */
function articlepress_scripts(){

	// Normalize Css
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.min.css' );

	// Bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

	// FontAwesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.all.min.css' );

	// Main StyleSheet
	wp_enqueue_style( 'articlepress-style', get_stylesheet_uri() );

	// Responsive Css
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	
	// jQuery v3.3.1 -ajax,-aja
	wp_enqueue_script( 'articlepress-jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js', '', '3.3.1', true );

	// Popper Script
	wp_enqueue_script( 'articlepress-popper', get_template_directory_uri() . '/assets/js/popper.min.js', 'articlepress-jquery', '1.14.7', true );

	// Bootstrap Script
	wp_enqueue_script( 'articlepress-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'articlepress-popper', '4.1.1', true );

	// Comment Reply Scripts
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Main Script
	wp_enqueue_script( 'articlepress-main', get_template_directory_uri() . '/assets/js/main.js', 'articlepress-bootstrap', '', true );


}
add_action( 'wp_enqueue_scripts', 'articlepress_scripts' );