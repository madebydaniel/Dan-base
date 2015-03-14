<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/AudioObject">

  <?php get_template_part('partials/article', 'header'); ?>

  <section class="entry-content cf" itemprop="description">
    <?php the_content(); ?>
    <?php get_template_part('partials/global','link-pages'); ?>
  </section> <?php // end article section ?>

  <?php get_template_part('partials/article','footer-meta'); ?>
  <?php comments_template(); ?>

</article> <?php // end article ?>
