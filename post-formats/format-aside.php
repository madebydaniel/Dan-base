<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

  <?php get_template_part('partials/article', 'header'); ?>

  <section class="entry-content cf" itemprop="articleBody">
    <?php the_content(); ?>
    <?php get_template_part('partials/global','link-pages'); ?>
  </section> <?php // end article section ?>

  <?php get_template_part('partials/article','footer-meta'); ?>
  <?php comments_template(); ?>
</article> <?php // end article ?>
