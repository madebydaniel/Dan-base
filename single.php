<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap">

			  <main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'post-formats/format', get_post_format() ); ?>

			    <?php endwhile; ?>
			    <?php else : ?>
			      <?php get_template_part('partials/content', 'post-not-found'); ?>
			    <?php endif; ?>

			  </main>

			<?php get_sidebar(); ?>

		</div>

	</div>

<?php get_footer(); ?>
