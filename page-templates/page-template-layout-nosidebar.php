<?php
/*
Template Name: Page - No Sidebar
*/
?>

<?php get_header(); ?>

	<div class="wrap">

		<div class="page-content-sidebar-flex-container sidebar-none">
			
			<?php get_template_part('partials/layout/page', 'nosidebar'); ?>

		</div><!--\.page-content-sidebar-flex-container-->
	</div><!--\wrap-->


<?php get_footer(); ?>
