<h1 class="archive-title">

  <?php if (is_category()) : ?>

        <span><?php _e( 'Posts Categorized:', 'dantheme' ); ?></span> <?php single_cat_title(); ?>

    <?php  elseif (is_tag()) : ?>
        <span><?php _e( 'Posts Tagged:', 'dantheme' ); ?></span> <?php single_tag_title(); ?>

    <?php  elseif (is_author()) :
      global $post;
      $author_id = $post->post_author;
    ?>
        <span><?php _e( 'Posts By:', 'dantheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

    <?php  elseif (is_day()) : ?>
        <span><?php _e( 'Daily Archives:', 'dantheme' ); ?></span> <?php the_time('l, F j, Y'); ?>

    <?php  elseif (is_month()) : ?>
          <span><?php _e( 'Monthly Archives:', 'dantheme' ); ?></span> <?php the_time('F Y'); ?>

    <?php  elseif (is_year()) : ?>
          <span><?php _e( 'Yearly Archives:', 'dantheme' ); ?></span> <?php the_time('Y'); ?>

    <?php elseif (is_search()) : ?>
      <span><?php _e( 'Search Results for:', 'dantheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?>

    <?php endif; ?>

</h1>
