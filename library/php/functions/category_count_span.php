<?php

add_filter('wp_list_categories', 'cat_count_inline');
	function cat_count_inline($links) {
		$links = str_replace('</a> (', '<span class="count">(', $links);
		$links = str_replace(')', ')</span></a>', $links);
	return $links;
}

?>