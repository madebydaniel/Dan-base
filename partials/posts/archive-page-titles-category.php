<?php if (is_category()) : ?>

      <?php _e( 'Posts Categorized:', 'dantheme' ); ?>

  <?php  elseif (is_tag()) : ?>
      <?php _e( 'Posts Tagged:', 'dantheme' ); ?>

  <?php  elseif (is_author()) :
    global $post;
    $author_id = $post->post_author;
  ?>
      <?php _e( 'Posts By:', 'dantheme' ); ?>

  <?php  elseif (is_day()) : ?>
      <?php _e( 'Daily Archives:', 'dantheme' ); ?>

  <?php  elseif (is_month()) : ?>
        <?php _e( 'Monthly Archives:', 'dantheme' ); ?>

  <?php  elseif (is_year()) : ?>
        <?php _e( 'Yearly Archives:', 'dantheme' ); ?>

  <?php elseif (is_search()) : ?>
    <?php _e( 'Search Results for:', 'dantheme' ); ?>

  <?php endif; ?>

