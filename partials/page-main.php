<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

  <?php get_template_part('partials/article', 'header'); ?>

  <section class="entry-content" itemprop="articleBody">
    <?php the_content();  ?>
  </section> <?php // end article section ?>

</article> <?php // end article ?>
<?php endwhile; else : ?>

  <?php get_template_part('partials/content', 'post-not-found'); ?>

<?php endif; ?>
