<?php
/*
Template Name: Page - No Sidebar
*/
?>

<?php get_header(); ?>

	<div id="inner-content" class="no-sidebar wrap">

		<main class="dan-page-content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			  <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/WebPageElement">

				  <?php get_template_part('partials/posts/post', 'title'); ?>

				  <section class="entry-content" itemprop="articleBody">
				    <?php the_content();  ?>
				  </section>

				</article>

			<?php endwhile; else : ?>
			  <?php get_template_part('partials/content', 'post-not-found'); ?>
			<?php endif; ?>

		</main>

	</div><!--\#inner-content-->


<?php get_footer(); ?>
