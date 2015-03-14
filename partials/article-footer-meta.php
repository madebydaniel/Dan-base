<footer class="article-footer">
  <p class="footer-comment-count">
    <?php comments_number( __( '<span>No</span> Comments', 'dantheme' ), __( '<span>One</span> Comment', 'dantheme' ), __( '<span>%</span> Comments', 'dantheme' ) );?>
  </p>
  <?php if(get_the_category_list(', ') != ''): ?>
            <?php printf( __( 'Filed under: %1$s', 'dantheme' ), get_the_category_list(', ') ); ?>
            <?php endif; ?>

           <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'dantheme' ) . '</span> ', ', ', '</p>' ); ?>

</footer> <!-- end article footer -->
