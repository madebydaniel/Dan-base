<?php
/*
 Template Name: Full-Width / No Sidebar
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap">

				<main id="main" class="nosidebar" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

					<?php get_template_part( 'partials/page' , 'main'); ?>

				</main>

		</div><!--\#inner-content-->

	</div><!--\#content-->

<?php get_footer(); ?>
