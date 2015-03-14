<?php


// let's create the function for the announce type
function announce() {
  // creating (registering) the faq type
  register_post_type( 'announce_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this post type
    array( 'labels' => array(
      'name' => __( 'Announcement', 'mbdtheme' ), /* This is the Title of the Group */
      'singular_name' => __( 'Announcement Post', 'mbdtheme' ), /* This is the individual type */
      'all_items' => __( 'All Announcement Posts', 'mbdtheme' ), /* the all items menu item */
      'add_new' => __( 'Add New', 'mbdtheme' ), /* The add new menu item */
      'add_new_item' => __( 'Add New Announcement Type', 'mbdtheme' ), /* Add New Display Title */
      'edit' => __( 'Edit', 'mbdtheme' ), /* Edit Dialog */
      'edit_item' => __( 'Edit Announcement', 'mbdtheme' ), /* Edit Display Title */
      'new_item' => __( 'New Announcement', 'mbdtheme' ), /* New Display Title */
      'view_item' => __( 'View Announcement', 'mbdtheme' ), /* View Display Title */
      'search_items' => __( 'Search Announcement', 'mbdtheme' ), /* Search faq Type Title */
      'not_found' =>  __( 'Nothing found in the Database.', 'mbdtheme' ), /* This displays if there are no entries yet */
      'not_found_in_trash' => __( 'Nothing found in Trash', 'mbdtheme' ), /* This displays if there is nothing in the trash */
      'parent_item_colon' => ''
      ), /* end of arrays */
      'description' => __( 'This is for a single special announcement', 'mbdtheme' ), /* faq Type Description */
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 38, /* this is what order you want it to appear in on the left hand side menu */
      'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the faq post type menu */
      'rewrite'	=> array( 'slug' => 'announcement', 'with_front' => false ), /* you can specify its url slug */
      'has_archive' => 'faq_type', /* you can rename the slug here */
      'capability_type' => 'post',
      'hierarchical' => false,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array( 'title', 'editor' )
    ) /* end of options */
  ); /* end of register post type */


}

  // adding the function to the Wordpress init
  add_action( 'init', 'announce');

function announce_metabox( $meta_boxes ) {
      $prefix = '_ctc_'; // Prefix for all fields

      $meta_boxes['announce_content'] = array(
        'id' => 'announce_content',
        'title' => 'Announcement',
        'pages' => array('announce_type'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
          array(
        'name' => 'Button Copy',
        'desc' => 'What should the button say?',
        'id'   => $prefix . 'announce_btn',
        'type' => 'text',
        ),
        array(
        'name' => 'URL',
        'desc' => 'What page should the announcemnt direct users to when clicked?',
        'id'   => $prefix . 'announce_url',
        'type' => 'text_url',
        )
      ),
        );

      return $meta_boxes;
    }
    add_filter( 'cmb_meta_boxes', 'announce_metabox' );

?>
