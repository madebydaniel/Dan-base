<header class="article-header entry-header">

  <?php get_template_part('partials/posts/post', 'date'); ?>

  <?php get_template_part('partials/posts/post', 'title'); ?>

  <?php the_author_posts_link(); ?> 

  <?php get_template_part('partials/posts/post', 'category'); ?>

</header>

<section class="entry-content">
  <?php
  if (is_single() ) :
      the_content();
  else :
      the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'dantheme' ) . '</span>' );
  endif;
  ?>
</section>


<?php if (is_single() ) : ?>
  <footer class="entry-footer">

    <?php get_template_part('partials/posts/post', 'commentcount'); ?>

    <?php get_template_part('partials/posts/post', 'tags'); ?>

  </footer>

  <?php comments_template(); ?>

<?php endif; ?>
