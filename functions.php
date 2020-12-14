<?php

// LOAD core/dan.php (if you remove this, the theme will break)
require_once( 'library/php/core/launch-dan.php' );
require_once( 'library/php/core/dan.php' );
require_once( 'library/php/core/theme-support.php' );
require_once( 'library/php/core/theme-sidebars.php' );
require_once( 'library/php/core/enqueue-scripts-styles.php' );
require_once( 'library/php/core/fonts.php' );
require_once( 'library/php/core/admin.php' );
require_once( 'library/php/customizer/theme-customizer.php' ); // theme customizer

// ###### THEME - CMB2 METABOXES ###### //
require_once( 'library/php/metabox/theme-cmb2/guide-cmb2.php' );
require_once( 'library/php/metabox/theme-cmb2/theme-options.php' );
require_once( 'library/php/metabox/theme-cmb2/cmb2-filelist-output.php' );

// ###### CUSTOM POST-TYPES ###### //
require_once( 'library/php/functions/flush-rewrite-posttypes.php' );
require_once( 'library/php/posttypes/custom-post-type.php' );

// ###### CUSTOM FUNCTIONS ###### //
require_once( 'library/php/functions/page-navi.php' ); // page navigation
//require_once( 'library/php/functions/comment-layout.php' ); //comments layout
require_once( 'library/php/functions/category_count_span.php');

// ###### CUSTOM MENU ###### //
require_once( 'library/php/functions/custom-menu/custom-walker.php');
require_once( 'library/php/functions/custom-menu/menu-field-function.php');
require_once( 'library/php/functions/custom-menu/edit-custom-walker.php');

?>