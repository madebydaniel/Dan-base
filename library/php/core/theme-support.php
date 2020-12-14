<?php



/*********************
THEME SUPPORT
*********************/

// Adding WP 3+ Functions & Theme Support
function dan_theme_support() {

	// wp thumbnails (sizes handled in functions.php)
	add_theme_support( 'post-thumbnails' );

	// default thumb size
	// set_post_thumbnail_size(125, 125, true);

	// wp custom background (thx to @bransonwerner for update)
	add_theme_support( 'custom-background',
	    array(
	    'default-image' => '',    // background image default
	    'default-color' => '',    // background color default (dont add the #)
	    'wp-head-callback' => '_custom_background_cb',
	    'admin-head-callback' => '',
	    'admin-preview-callback' => ''
	    )
	);


	//adding header support
	/*
	add_theme_support( 'custom-header', apply_filters( 'dan_custom_header_args', array(
		'width'                  => 1300,
		'height'                 => 500,
		'wp-head-callback'       => 'dan_header_style',
	) ) );


	if ( ! function_exists( 'dan_header_style' ) ) :
	function dan_header_style() {
		$header_image = get_header_image();
	?>

	<style type="text/css" id="dan-header-css">
		<?php if ( ! empty( $header_image ) ) :	?>
			.site-header {
				background: url(<?php header_image(); ?>) no-repeat 50% 50%;
				-webkit-background-size: cover;
				-moz-background-size:    cover;
				-o-background-size:      cover;
				background-size:         cover;
			}
		<?php endif; ?>
	</style>
	<?php } endif;
	*/
	// dan_header_style



	// rss thingy
	add_theme_support('automatic-feed-links');

	// to add header image support go here: http://themble.com/support/adding-header-background-image-support/

	/*
	// adding post format support
	add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	);
	*/

	// wp menus
	add_theme_support( 'menus' );

	// registering wp3+ menus
	register_nav_menus(
		array(
			'main-nav' => __( 'The Main Menu', 'dantheme' ),   // main nav in header
			'footer-links' => __( 'Footer Links', 'dantheme' ) // secondary nav in footer
		)
	);
} /* end dan theme support */

function dan_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'main-nav' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'dan_nav_description', 10, 4 );





/*******************  SVG SUPPORT   ***************************/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

?>
