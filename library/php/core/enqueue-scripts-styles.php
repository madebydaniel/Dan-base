<?php

/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading modernizr and jquery, and reply script
function dan_scripts_and_styles() {

  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  if (!is_admin()) {


		// normalize css
		wp_register_style( 'dan-normalize', get_stylesheet_directory_uri() . '/library/css/normalize.min.css', array(), '', 'all' );

		// register slick slider stylesheet
		wp_register_style( 'slick-stylesheet', get_stylesheet_directory_uri() . '/library/js/libs/slick-slider/slick.css', array(), '', 'all' );

		// register main stylesheet
		wp_register_style( 'dan-stylesheet', get_stylesheet_directory_uri() . '/library/css/style.min.css', array(), '', 'all' );

		// ie-only style sheet
		wp_register_style( 'dan-ie-only', get_stylesheet_directory_uri() . '/library/css/ie.css', array(), '' );

    // comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
		  wp_enqueue_script( 'comment-reply' );
    }

	


		//adding slick.js carousel file in the footer
		wp_register_script( 'slick-js', get_stylesheet_directory_uri() . '/library/js/libs/slick-slider/slick.min.js', array( 'jquery' ), '', true );


		//adding scripts file in the footer
		wp_register_script( 'dan-js', get_stylesheet_directory_uri() . '/library/js/scripts.min.js', array( 'jquery' ), '', true );

		wp_register_script( 'effeckt-core', get_stylesheet_directory_uri() . '/library/js/libs/effeckt/core.js', array( 'jquery' ), '', true );
		wp_register_script( 'effeckt-captions', get_stylesheet_directory_uri() . '/library/js/libs/effeckt/captions.js', array( 'jquery' ), '', true );
		wp_register_script( 'effeckt-modal', get_stylesheet_directory_uri() . '/library/js/libs/effeckt/modal.js', array( 'jquery' ), '', true );
		wp_register_script( 'effeckt-off-screen-nav', get_stylesheet_directory_uri() . '/library/js/libs/effeckt/off-screen-nav.js', array( 'jquery' ), '', true );
		wp_register_script( 'effeckt-page-transitions', get_stylesheet_directory_uri() . '/library/js/libs/effeckt/page-transitions.js', array( 'jquery' ), '', true );
		wp_register_script( 'effeckt-positional-modals', get_stylesheet_directory_uri() . '/library/js/libs/effeckt/positional-modals.js', array( 'jquery' ), '', true );
		wp_register_script( 'effeckt-tabs', get_stylesheet_directory_uri() . '/library/js/libs/effeckt/tabs.js', array( 'jquery' ), '', true );

		// enqueue styles and scripts
		wp_enqueue_style( 'dan-normalize' );
		wp_enqueue_style( 'slick-stylesheet' );
		wp_enqueue_style( 'dan-stylesheet' );
		wp_enqueue_style( 'dan-ie-only' );

		$wp_styles->add_data( 'dan-ie-only', 'conditional', 'lt IE 9' ); // add conditional wrapper around ie stylesheet

		/*
		I recommend using a plugin to call jQuery
		using the google cdn. That way it stays cached
		and your site will load faster.
		*/
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'slick-js' );
		wp_enqueue_script( 'dan-js' );
		wp_enqueue_script( 'effeckt-core' );
		wp_enqueue_script( 'effeckt-captions' );
		wp_enqueue_script( 'effeckt-modal' );
		wp_enqueue_script( 'effeckt-off-screen-nav' );
		wp_enqueue_script( 'effeckt-page-transitions' );
		wp_enqueue_script( 'effeckt-positional-modals' );
		wp_enqueue_script( 'effeckt-tabs' );

	}
}

?>
