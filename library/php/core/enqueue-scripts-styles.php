<?php

/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading modernizr and jquery, and reply script
function dan_scripts_and_styles() {

  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  if (!is_admin()) {

		// modernizr (without media query polyfill)
		wp_register_script( 'dan-modernizr', get_stylesheet_directory_uri() . '/library/js/libs/modernizr.custom.min.js', array(), '2.5.3', false );

		// normalize css
		wp_register_style( 'dan-normalize', get_stylesheet_directory_uri() . '/library/css/normalize.min.css', array(), '', 'all' );

		// toolkit framework css
		wp_register_style( 'dan-toolkit-css', get_stylesheet_directory_uri() . '/library/css/toolkit.min.css', array(), '', 'all' );

		// register main stylesheet
		wp_register_style( 'dan-stylesheet', get_stylesheet_directory_uri() . '/library/css/style.css', array(), '', 'all' );

		// ie-only style sheet
		wp_register_style( 'dan-ie-only', get_stylesheet_directory_uri() . '/library/css/ie.css', array(), '' );

    // comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
		  wp_enqueue_script( 'comment-reply' );
    }

		//adding scripts file in the footer
		wp_register_script( 'dan-js', get_stylesheet_directory_uri() . '/library/js/scripts.js', array( 'jquery' ), '', true );

		// toolkit framework js
		wp_register_script( 'dan-toolkit-js', get_stylesheet_directory_uri() . '/library/js/libs/toolkit.min.js', array('jquery'), '', true );

		// enqueue styles and scripts
		wp_enqueue_script( 'dan-modernizr' );
		wp_enqueue_style( 'dan-normalize' );
		wp_enqueue_style( 'dan-toolkit-css' );
		wp_enqueue_style( 'dan-stylesheet' );
		wp_enqueue_style( 'dan-ie-only' );

		$wp_styles->add_data( 'dan-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet

		/*
		I recommend using a plugin to call jQuery
		using the google cdn. That way it stays cached
		and your site will load faster.
		*/
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'dan-toolkit-js' );
		wp_enqueue_script( 'dan-js' );

	}
}

?>
