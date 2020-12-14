<?php


// let's create the function for the example
function example() {
	// creating (registering) the example
	register_post_type( 'example', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this example
		array( 'labels' => array(
			'name' => __( 'example', 'dantheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'example', 'dantheme' ), /* This is the individual type */
			'all_items' => __( 'All examples', 'dantheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'dantheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New example', 'dantheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'dantheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit examples', 'dantheme' ), /* Edit Display Title */
			'new_item' => __( 'New example', 'dantheme' ), /* New Display Title */
			'view_item' => __( 'View example', 'dantheme' ), /* View Display Title */
			'search_items' => __( 'Search example', 'dantheme' ), /* Search example Title */
			'not_found' =>  __( 'Nothing found in the Database.', 'dantheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Nothing found in Trash', 'dantheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example example type', 'dantheme' ), /* example Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 32, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the example type menu */
			'rewrite'	=> array( 'slug' => 'example', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'example', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			'show_in_rest' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
		) /* end of options */
	); /* end of register example */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'example');


// now let's add example categories (these act like categories)
	register_taxonomy( 'example_cat', 
		array('example'), /* if you change the name of register_post_type( 'example_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'example Categories', 'sstheme' ), /* name of the example taxonomy */
				'singular_name' => __( 'example Category', 'sstheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search example Categories', 'sstheme' ), /* search title for taxomony */
				'all_items' => __( 'All example Categories', 'sstheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent example Category', 'sstheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent example Category:', 'sstheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit example Category', 'sstheme' ), /* edit example taxonomy title */
				'update_item' => __( 'Update example Category', 'sstheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New example Category', 'sstheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New example Category Name', 'sstheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'example-slug' ),
		)
	);

	
?>