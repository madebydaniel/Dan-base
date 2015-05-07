<?php

// LOAD core/dan.php (if you remove this, the theme will break)
require_once( 'library/php/core/dan.php' );


require_once( 'library/php/core/admin.php' );

//require_once( 'library/php/core/oembed-width-options.php' ); // oembed width option

require_once( 'library/php/core/ftrimage-config.php' ); // feature images
require_once( 'library/php/core/sidebar-config.php' ); // sidebars
require_once( 'library/php/core/og-property.php'); //Utilizing Open Graph
// require_once( 'library/php/customizer/theme-customizer.php' ); // theme customizer

// ###### CMB2 METABOXES ###### //
require_once( 'library/php/metabox/start-cmb2.php' );

// ###### CUSTOM POST-TYPES ###### //
require_once( 'library/php/functions/flush-rewrite-posttypes.php' );
require_once( 'library/php/posttypes/custom-post-type.php' );
require_once( 'library/php/posttypes/cpt-announcement.php' );

// ###### CUSTOM FUNCTIONS ###### //
require_once( 'library/php/functions/related-posts.php' ); // related posts
require_once( 'library/php/functions/page-navi.php' ); // page navigation
require_once( 'library/php/functions/comment-layout.php' ); //comments layout
require_once( 'library/php/functions/fonts.php' ); // google fonts

// ###### SHORTCODES ###### //
require_once( 'library/php/shortcodes/shortcodes.php' ); //


?>
