<?php
/* dan Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/dan/
*/



// let's create the function for the custom type
function custom_post_example() {
	// creating (registering) the custom type
	register_post_type( 'custom_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Custom Types', 'dantheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Custom Post', 'dantheme' ), /* This is the individual type */
			'all_items' => __( 'All Custom Posts', 'dantheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'dantheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Custom Type', 'dantheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'dantheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Post Types', 'dantheme' ), /* Edit Display Title */
			'new_item' => __( 'New Post Type', 'dantheme' ), /* New Display Title */
			'view_item' => __( 'View Post Type', 'dantheme' ), /* View Display Title */
			'search_items' => __( 'Search Post Type', 'dantheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Nothing found in the Database.', 'dantheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Nothing found in Trash', 'dantheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example custom post type', 'dantheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'category', 'custom_type' );
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type( 'post_tag', 'custom_type' );

}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_example');

	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

	// now let's add custom categories (these act like categories)
	register_taxonomy( 'custom_cat',
		array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Custom Categories', 'dantheme' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Custom Category', 'dantheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Custom Categories', 'dantheme' ), /* search title for taxomony */
				'all_items' => __( 'All Custom Categories', 'dantheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Custom Category', 'dantheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Custom Category:', 'dantheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Custom Category', 'dantheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Custom Category', 'dantheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Custom Category', 'dantheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Custom Category Name', 'dantheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'custom-slug' ),
		)
	);

	// now let's add custom tags (these act like categories)
	register_taxonomy( 'custom_tag',
		array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => false,    /* if this is false, it acts like tags */
			'labels' => array(
				'name' => __( 'Custom Tags', 'dantheme' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Custom Tag', 'dantheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Custom Tags', 'dantheme' ), /* search title for taxomony */
				'all_items' => __( 'All Custom Tags', 'dantheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Custom Tag', 'dantheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Custom Tag:', 'dantheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Custom Tag', 'dantheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Custom Tag', 'dantheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Custom Tag', 'dantheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Custom Tag Name', 'dantheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);

	/*
		looking for custom meta boxes?
		check out this fantastic tool:
		https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
	*/

	add_filter( 'cmb2_meta_boxes', 'cmb2_sample_metaboxes' );
/**
* Define the metabox and field configurations.
*
* @param  array $meta_boxes
* @return array
*/
function cmb2_sample_metaboxes( array $meta_boxes ) {

		// Start with an underscore to hide fields from custom fields list
		$prefix = '_cmb2_';

		/**
		* Sample metabox to demonstrate each field type included
		*/
		$meta_boxes['test_metabox'] = array(
				'id'            => 'test_metabox',
				'title'         => __( 'Test Metabox', 'cmb2' ),
				'object_types'  => array( 'custom_type', ), // Post type
				'context'       => 'normal',
				'priority'      => 'high',
				'show_names'    => true, // Show field names on the left
				// 'cmb_styles' => false, // false to disable the CMB stylesheet
				// 'closed'     => true, // Keep the metabox closed by default
				'fields'        => array(
						array(
								'name'       => __( 'Test Text', 'cmb2' ),
								'desc'       => __( 'field description (optional)', 'cmb2' ),
								'id'         => $prefix . 'text',
								'type'       => 'text',
								'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
								// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
								// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
								// 'on_front'        => false, // Optionally designate a field to wp-admin only
								// 'repeatable'      => true,
						),
						array(
								'name' => __( 'Website URL', 'cmb2' ),
								'desc' => __( 'field description (optional)', 'cmb2' ),
								'id'   => $prefix . 'url',
								'type' => 'text_url',
								// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
								// 'repeatable' => true,
						),
						array(
								'name' => __( 'Test Text Email', 'cmb2' ),
								'desc' => __( 'field description (optional)', 'cmb2' ),
								'id'   => $prefix . 'email',
								'type' => 'text_email',
								// 'repeatable' => true,
						),
				),
		);

		// Add other metaboxes as needed

		return $meta_boxes;
}

?>
