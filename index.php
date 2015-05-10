<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap">

			<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php get_template_part('partials/posts/post', 'excerpt'); ?>

			</main>


			<?php get_sidebar(); ?>

		</div>

	</div>


<?php get_footer(); ?>
