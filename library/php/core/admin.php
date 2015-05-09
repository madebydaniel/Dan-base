<?php
/*
This file handles the admin area and functions.
You can use this file to make changes to the
dashboard. Updates to this page are coming soon.
It's turned off by default, but you can call it
via the functions file.

	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin


*/

/************* DASHBOARD WIDGETS *****************/

// disable default dashboard widgets
function disable_default_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);    // Right Now Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);        // Activity Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // Comments Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);  // Incoming Links Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);         // Plugins Widget

	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);    // Quick Press Widget
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);     // Recent Drafts Widget
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);           //
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);         //

	// remove plugin dashboard boxes
	unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);           // Yoast's SEO Plugin Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['rg_forms_dashboard']);        // Gravity Forms Plugin Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['bbp-dashboard-right-now']);   // bbPress Plugin Widget

	/*
	have more plugin widgets you'd like to remove?
	share them with us so we can get a list of
	the most commonly used. :D
	https://github.com/eddiemachado/dan/issues
	*/
}

// removing the dashboard widgets
add_action( 'wp_dashboard_setup', 'disable_default_dashboard_widgets' );
// adding any custom widgets


/************* CUSTOM LOGIN PAGE *****************/

// calling your own login css so you can style it

//Updated to proper 'enqueue' method
//http://codex.wordpress.org/Plugin_API/Action_Reference/login_enqueue_scripts
function dan_login_css() {
	wp_enqueue_style( 'dan_login_css', get_template_directory_uri() . '/library/css/login.css', false );
}

// changing the logo link from wordpress.org to your site
function dan_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function dan_login_title() { return get_option( 'blogname' ); }

// calling it only on the login page
add_action( 'login_enqueue_scripts', 'dan_login_css', 10 );
add_filter( 'login_headerurl', 'dan_login_url' );
add_filter( 'login_headertitle', 'dan_login_title' );


/************* CUSTOMIZE ADMIN *******************/

/*
I don't really recommend editing the admin too much
as things may get funky if WordPress updates. Here
are a few funtions which you can choose to use if
you like.
*/

// Custom Backend Footer
function dan_custom_admin_footer() {
	_e( '<span id="footer-thankyou">Developed by <a href="http://baydan.us" target="_blank">Dan</a></span>.', 'dantheme' );
}

// adding it to the admin area
add_filter( 'admin_footer_text', 'dan_custom_admin_footer' );



// unregister wordpress widgets
add_action( 'widgets_init', 'widgets_init_example' );

function widgets_init_example() {
    //unregister_widget( 'WP_Widget_Pages' );
    //unregister_widget( 'WP_Widget_Calendar' );
    //unregister_widget( 'WP_Widget_Archives' );
    //unregister_widget( 'WP_Widget_Links' );
    //unregister_widget( 'WP_Widget_Meta' );
    //unregister_widget( 'WP_Widget_Search' );
    //unregister_widget( 'WP_Widget_Text' );
    //unregister_widget( 'WP_Widget_Categories' );
    //unregister_widget( 'WP_Widget_Recent_Posts' );
    //unregister_widget( 'WP_Widget_Recent_Comments' );
    //unregister_widget( 'WP_Widget_RSS' );
    //unregister_widget( 'WP_Widget_Tag_Cloud' );
}


 // remove menu items that clients shouldn't see within the dashboard
function remove_menus(){

  //remove_menu_page( 'index.php' );                  //Dashboard
  //remove_menu_page( 'edit.php' );                   //Posts
  //remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  //remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance
  //remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  //remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings

}

add_action( 'admin_menu', 'remove_menus' );


// Example Source: http://wpsnippy.com/remove-top-level-wordpress-dashboard-menu/




// add a new item to the wp toolbar
add_action( 'wp_before_admin_bar_render', 'wp_before_admin_bar_render_dan' );

function wp_before_admin_bar_render_dan() {
    global $wp_admin_bar;
    $wp_admin_bar->add_node( array(
        'id'    => 'contact-dan',
        'title' => 'Contact Dan',
        'href'  => 'http://bydan.us/contact/',
        'meta'  => array( 'target' => '_blank' )
    ) );
}




//remove the post editor from page that is set to be the static front page
add_action( 'add_meta_boxes_page', 'dan_remove_editor' );
function dan_remove_editor( $post )
{
    if ( $post->ID == get_option( 'page_on_front' ) )
        remove_post_type_support( 'page', 'editor' );
}

?>
