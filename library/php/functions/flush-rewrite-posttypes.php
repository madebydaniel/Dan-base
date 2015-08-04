<?php
// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'dan_flush_rewrite_rules' );

// Flush your rewrite rules
function dan_flush_rewrite_rules() {
	flush_rewrite_rules();
}
?>
