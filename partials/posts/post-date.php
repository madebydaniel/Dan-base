
  <?php printf( __( '%1$s', 'bonestheme' ),
     /* the time the post was published */
     '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
  ); ?>
