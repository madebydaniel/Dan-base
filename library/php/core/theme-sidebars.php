<?php

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function dan_register_sidebars() {
	register_sidebar(array(
		'id' => 'footer-menus',
		'name' => __( 'Footer Menus Widgets', 'dantheme' ),
		'description' => __( 'Widget Area for Menu Section in the Footer', 'dantheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle h4">',
		'after_title' => '</p>',
	));

	register_sidebar(array(
		'id' => 'blog-sidebar',
		'name' => __( 'Blog Sidebar Widgets', 'dantheme' ),
		'description' => __( 'Widget Area for the blog and archive pages.', 'dantheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle h4">',
		'after_title' => '</p>',
	));


	register_sidebar(array(
		'id' => 'page-sidebar',
		'name' => __( 'Page Sidebar Widgets', 'dantheme' ),
		'description' => __( 'Widget Area for the general pages.', 'dantheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle h4">',
		'after_title' => '</p>',
	));

	register_sidebar(array(
		'id' => 'mobilemenu',
		'name' => __( 'Mobile Menu Widgets', 'dantheme' ),
		'description' => __( 'Widget Area for the blog and archive pages.', 'dantheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle h4">',
		'after_title' => '</p>',
	));


}

?>
