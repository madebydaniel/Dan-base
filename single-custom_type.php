<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap">

			<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

					<header class="article-header">
						<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>
					</header>

					<section class="entry-content cf">
						<?php the_content(); ?>
					</section> <!-- end article section -->

				</article>

				<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part('partials/content', 'post-not-found'); ?>
				<?php endif; ?>

			</main>

			<?php get_sidebar(); ?>

	</div><!--\#inner-content-->

</div><!--\#content-->

<?php get_footer(); ?>
