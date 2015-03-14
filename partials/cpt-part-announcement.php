<?php
    // if there is a published announcement, then this will display the newest one only
      $args = array( 'post_type' => 'announce_type', 'post_parent' => 0, 'posts_per_page' => 1 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();

    $announce_url = get_post_meta( $post->ID, '_ctc_announce_url', true );
    $announce_btn = get_post_meta( $post->ID, '_ctc_announce_btn', true );

  ?>
  <div class="announce-overlay">
    <div class="announce-alert">
      <p class="close">X</p>
      <p class="announce-title"><?php the_title(); ?></p>
      <div class="announce-content"><?php the_content(); ?></div>
      <a href="<?php echo $announce_url;?>" class="button"><?php echo $announce_btn; ?></a>
    </div>
  </div>
<?php endwhile; wp_reset_query(); ?>
