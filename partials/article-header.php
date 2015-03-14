<header class="article-header entry-header">

  <?php get_template_part('partials/article', 'header-title'); ?>

  <p class="byline entry-meta vcard">

    <?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
       /* the time the post was published */
       '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
       /* the author of the post */
       '<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
    ); ?>

  </p>

</header> <?php // end article header ?>
