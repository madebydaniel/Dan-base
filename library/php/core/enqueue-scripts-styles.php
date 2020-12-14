<?php

/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading modernizr and jquery, and reply script
function dan_scripts_and_styles() {

  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  if (!is_admin()) {

		// register main stylesheet
		wp_register_style( 'dan-stylesheet', get_stylesheet_directory_uri() . '/library/css/style.min.css?v=1.0.0', array(), '', 'all' );


		// register main stylesheet
		wp_register_style( 'dan-stylesheet-hotfix', get_stylesheet_directory_uri() . '/library/css/new-rules.css?v=1.0.1', array(), '', 'all' );


    // comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
		  wp_enqueue_script( 'comment-reply' );
    }


		//adding scripts file in the footer
		wp_register_script( 'dan-js', get_stylesheet_directory_uri() . '/library/js/scripts.min.js', array( 'jquery' ), '', true );



		/* if using font awesome, then include this - change the js file name to match specific account

		wp_register_script( 'ss-fa', "https://kit.fontawesome.com/ddccc462ed.js", array( 'jquery' ), '', false );
		*/

		// enqueue styles and scripts
		wp_enqueue_style( 'dan-stylesheet' );
		wp_enqueue_style( 'dan-stylesheet-hotfix' );

		wp_enqueue_script( 'jquery' );
		//wp_enqueue_script( 'ss-fa' );
		
		wp_enqueue_script( 'dan-js' );

	}
}

?>
