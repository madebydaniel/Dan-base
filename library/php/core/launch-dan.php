<?php

/*********************
LAUNCH dan
*********************/

function dan() {

	// let's get language support going, if you need it
	load_theme_textdomain( 'dantheme', get_template_directory() . '/library/translation' );

	// launching operation cleanup
	add_action( 'init', 'dan_head_cleanup' );
	// A better title
	add_filter( 'wp_title', 'rw_title', 10, 3 );
	// remove WP version from RSS
	add_filter( 'the_generator', 'dan_rss_version' );
	// remove pesky injected css for recent comments widget
	add_filter( 'wp_head', 'dan_remove_wp_widget_recent_comments_style', 1 );
	// clean up comment styles in the head
	add_action( 'wp_head', 'dan_remove_recent_comments_style', 1 );
	// clean up gallery output in wp
	add_filter( 'gallery_style', 'dan_gallery_style' );

	// enqueue base scripts and styles
	add_action( 'wp_enqueue_scripts', 'dan_scripts_and_styles', 999 );
	// ie conditional wrapper

	// launching this stuff after theme setup
	dan_theme_support();

	// adding sidebars to Wordpress (these are created in functions.php)
	add_action( 'widgets_init', 'dan_register_sidebars' );

	// cleaning up random code around images
	add_filter( 'the_content', 'dan_filter_ptags_on_images' );
	// cleaning up excerpt
	add_filter( 'excerpt_more', 'dan_excerpt_more' );

	//allow shotcodes inside the text widget
	add_filter( 'widget_text', 'do_shortcode' );

} /* end dan */
// let's get this party started
add_action( 'after_setup_theme', 'dan' );
?>
