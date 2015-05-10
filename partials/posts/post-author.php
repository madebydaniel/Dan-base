<p class="entry-author entry-meta vcard">

  <?php printf( __( '%1$s', 'bonestheme' ),
     /* the author of the post */
     '<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
  ); ?>

</p>
