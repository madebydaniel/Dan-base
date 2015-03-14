<?php if (is_single()) : // Single Blog Post ?>

  <main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part( 'post-formats/format', get_post_format() ); ?>
    <?php endwhile; ?>
    <?php else : ?>
      <?php get_template_part('partials/content', 'post-not-found'); ?>
    <?php endif; ?>

  </main>

<?php else : // Index Blogroll Page ?>

  <main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

    <?php get_template_part('partials/article', 'excerpt'); ?>

  </main>

<?php endif; ?>
