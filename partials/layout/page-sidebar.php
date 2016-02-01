<main class="page-main-content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">

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

<aside class="sidebar" role="complementary">
	<?php get_sidebar('page-sidebar'); ?>
</aside>