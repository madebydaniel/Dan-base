<main class="page-main-content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php if (is_single() ) : ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf post-single'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/WebPageElement">

				
				<?php if(has_post_thumbnail()){ get_template_part('partials/posts/post', 'banner'); } ?>

				<p class="dan-author">by <?php the_author_posts_link(); ?></p>

				<?php get_template_part('partials/posts/post', 'category'); ?>

				<section class="entry-content" itemprop="articleBody">
					<?php the_content();  ?>
				</section>


				 <footer class="entry-footer">

		            <?php get_template_part('partials/posts/post', 'commentcount'); ?>

		            <?php get_template_part('partials/posts/post', 'tags'); ?>

		          </footer>

			</article>

			<?php comments_template(); ?>

		<?php else : ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('cf post-list'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/WebPageElement">

				<?php get_template_part('partials/posts/post', 'title'); ?>
				
				<?php if(has_post_thumbnail()){ get_template_part('partials/posts/post', 'banner'); } ?>

				<?php the_excerpt();  ?>
			</article>

		<?php endif; ?>

	<?php endwhile; ?>

		<?php dan_page_navi(); ?>

	<?php else : ?>
	  <?php get_template_part('partials/content', 'post-not-found'); ?>
	<?php endif; ?>


</main>

<aside class="sidebar" role="complementary">
	<?php get_sidebar('blog-sidebar'); ?>
</aside>