 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

    <?php get_template_part('partials/posts/layout', 'one'); ?>

  </article>

<?php endwhile; ?>

    <?php dan_page_navi(); ?>

<?php else : ?>

  <?php get_template_part('partials/content', 'post-not-found'); ?>

<?php endif; ?>
