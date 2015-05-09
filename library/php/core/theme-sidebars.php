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
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

}

?>
