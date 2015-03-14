<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap">

					<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<?php get_template_part('partials/article', 'header'); ?>

								<section class="entry-content">

									<?php the_excerpt(); ?>

								</section>

								<footer class="article-footer">

								</footer>

							</article>

							<?php endwhile; ?>

									<?php dan_page_navi(); ?>

							<?php else : ?>

								<?php get_template_part('partials/content', 'post-not-found'); ?>

							<?php endif; ?>

						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
