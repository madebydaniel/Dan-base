<?php
/*
- CLEANING UP & OPTIMIZING HEADER
- ADDING THEME SUPPORT
- ENQUEING SCRIPTS
- RANDOM CLEAN UP ITEMS
- LAUNCHING DAN
*/

function dan_head_cleanup() {
	// category feeds
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	// post and comment feeds
	remove_action( 'wp_head', 'feed_links', 2 );
	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version
	remove_action( 'wp_head', 'wp_generator' );
	// remove WP version from css
	add_filter( 'style_loader_src', 'dan_remove_wp_ver_css_js', 9999 );
	// remove Wp version from scripts
	add_filter( 'script_loader_src', 'dan_remove_wp_ver_css_js', 9999 );

} /* end dan head cleanup */

// A better title
// http://www.deluxeblogtips.com/2012/03/better-title-meta-tag.html
function rw_title( $title, $sep, $seplocation ) {
  global $page, $paged;

  // Don't affect in feeds.
  if ( is_feed() ) return $title;

  // Add the blog's name
  if ( 'right' == $seplocation ) {
    $title .= get_bloginfo( 'name' );
  } else {
    $title = get_bloginfo( 'name' ) . $title;
  }

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );

  if ( $site_description && ( is_home() || is_front_page() ) ) {
    $title .= " {$sep} {$site_description}";
  }

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 ) {
    $title .= " {$sep} " . sprintf( __( 'Page %s', 'dbt' ), max( $paged, $page ) );
  }

  return $title;

} // end better title

// remove WP version from RSS
function dan_rss_version() { return ''; }

// remove WP version from scripts
function dan_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

// remove injected CSS for recent comments widget
function dan_remove_wp_widget_recent_comments_style() {
	if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
		remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
	}
}

// remove injected CSS from recent comments widget
function dan_remove_recent_comments_style() {
	global $wp_widget_factory;
	if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
		remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
	}
}

// remove injected CSS from gallery
function dan_gallery_style($css) {
	return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
}


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

	// rss thingy
	add_theme_support('automatic-feed-links');

	// to add header image support go here: http://themble.com/support/adding-header-background-image-support/

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



/*********************
RANDOM CLEANUP ITEMS
*********************/

// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
function dan_filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// This removes the annoying […] to a Read More link
function dan_excerpt_more($more) {
	global $post;
	// edit here if you like
	return '...  <a class="excerpt-read-more" href="'. get_permalink( $post->ID ) . '" title="'. __( 'Read ', 'dantheme' ) . esc_attr( get_the_title( $post->ID ) ).'">'. __( 'Read more &raquo;', 'dantheme' ) .'</a>';
}


// Remove the "the" word from slugs
add_filter( 'sanitize_title', 'sanitize_title_slug' );

function sanitize_title_slug( $title ) {
    $title = str_replace( '-the-', '-', $title );
    $title = preg_replace( '/^the-/', '', $title );
    return $title;
}


//Remove the Version Parameter from Scripts being loaded (allows files to be cached)
function script_loader_src( $src ) {
    return remove_query_arg( 'ver', $src );
}

add_filter( 'script_loader_src', 'script_loader_src' );
add_filter( 'style_loader_src', 'script_loader_src' );

// Example source: http://www.wpmayor.com/15-practical-ways-boost-wordpress-speed/



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



/*********************
SECURITY dan
*********************/

//DISABLE THE FILE EDITOR INSIDE THE ADMIN
define( 'DISALLOW_FILE_EDIT', true );

//Mark comments with really long usernames as spam
add_filter( 'pre_comment_approved', 'pre_comment_approved_example', 99, 2 );

function pre_comment_approved_example( $approved, $commentdata ) {
    return ( strlen( $commentdata['comment_author'] ) > 75 ) ? 'spam' : $approved;
}

// removing the toolbar for subscribers
add_action( 'set_current_user', 'set_current_user_example' );
function set_current_user_example() {

    if ( ! current_user_can( 'edit_posts' ) ) {
        show_admin_bar( false );
    }

}

?>
