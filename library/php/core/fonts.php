<?php /*
This is a modification of a function found in the
twentythirteen theme where we can declare some
external fonts. If you're using Google Fonts, you
can replace these fonts, change it in your scss files
and be up and running in seconds.
*/

// Enable support for HTML5 markup.
  add_theme_support( 'html5', array(
    'comment-list',
    'search-form',
    'comment-form'
  ) );


function google_fonts() {
  wp_enqueue_style('googleFonts', 'http://fonts.googleapis.com/css?family=Roboto:400,300,700|Oswald:400,300');
  wp_enqueue_style('fontAwesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
}

function fontawesome_icons() {
  wp_enqueue_style('fontAwesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'google_fonts');
add_action('wp_enqueue_scripts', 'fontawesome_icons');


add_action('admin_head', 'fontawesome_icons');





?>
