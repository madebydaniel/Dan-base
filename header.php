<?php get_template_part('partials/globals/head', 'main'); ?>

<body <?php body_class(); ?>>

<?php get_template_part('partials/globals/ga', 'tracking'); ?>

<?php get_template_part('partials/parts/modal', 'default'); ?>

<?php get_template_part('partials/parts/nav', 'offScreen'); ?>

<div data-effeckt-page>
	<div class="on-page-container" >
		
	<?php get_template_part('partials/parts/nav', 'offScreenTrigger'); ?>
	<?php get_template_part('partials/parts/nav', 'main'); ?>

	<?php get_template_part('partials/parts/hero', 'default'); ?>

		<div class="page-content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement">