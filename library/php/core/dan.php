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

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



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

if (!is_admin()) {
	add_filter( 'script_loader_src', 'script_loader_src' );
	add_filter( 'style_loader_src', 'script_loader_src' );
}


//Disable dashicons on the front-end - the will stop loading dashicons.min.css on the front-end

add_action( 'wp_enqueue_scripts', 'go_dequeue_dashicons' );
function go_dequeue_dashicons() {
    if ( ! is_user_logged_in() ) {
        wp_deregister_style( 'dashicons' );
    }
}


//Remove JQuery migrate
 function remove_jquery_migrate( $scripts ) {
	 if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		 $script = $scripts->registered['jquery'];
		 
		 if ( $script->deps ) { // Check whether the script has any dependencies
		 $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
		 }
	 }
 }

 add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

// Example source: http://www.wpmayor.com/15-practical-ways-boost-wordpress-speed/






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
