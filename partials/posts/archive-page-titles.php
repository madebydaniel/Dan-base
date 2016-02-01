

  <?php if (is_category()) : ?>

        <?php single_cat_title(); ?>

    <?php  elseif (is_tag()) : ?>
        <?php single_tag_title(); ?>

    <?php  elseif (is_author()) :
      global $post;
      $author_id = $post->post_author;
    ?>
        <?php the_author_meta('display_name', $author_id); ?>

    <?php  elseif (is_day()) : ?>
        <?php the_time('l, F j, Y'); ?>

    <?php  elseif (is_month()) : ?>
          <?php the_time('F Y'); ?>

    <?php  elseif (is_year()) : ?>
          <?php the_time('Y'); ?>

    <?php elseif (is_search()) : ?>
      <?php echo esc_attr(get_search_query()); ?>

    <?php endif; ?>

