<?php
/*
Template Name: Posts - Layout 2
*/
?>

<?php get_header(); ?>

<div id="" class="left-sidebar">
<div class="wrap">
  <?php get_sidebar('blog-sidebar'); ?>

  <main class="dan-blogroll layout-two" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
<pre>
&lt;main class="dan-blogroll layout-two" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog"&gt;
//loop starts here
  &lt;article class="article-container"&gt;
    &lt;?php
       if(has_post_thumbnail()){
        get_template_part('partials/posts/post', 'banner');
      } else { ?&gt;
        &lt;span class="dan-banner missing-banner"&gt;&lt;/span&gt;
      &lt;?php } ?&gt;
    &lt;div class="dan-excerpt-container"&gt;
      &lt;div class="dan-meta"&gt;
      &lt;?php
         get_template_part('partials/posts/post', 'date');

         get_template_part('partials/posts/post', 'author');
       ?&gt;
       &lt;/div&gt;
    &lt;?php
       get_template_part('partials/posts/post', 'titlelink');

       the_excerpt( '&lt;span class="read-more"&gt;' . __( 'Read more &raquo;', 'dantheme' ) . '&lt;/span&gt;' );
    ?&gt;
   &lt;/div&gt;
  &lt;/article&gt;
//loop ends here
&lt;/main&gt;
</pre>
    <?php
      $args = array(
        'posts_per_page' => '10',
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
      );

      $blogposts = get_posts( $args );

      foreach ( $blogposts as $post ) : setup_postdata( $post );
    ?>

      <article class="article-container">

          <?php
             if(has_post_thumbnail()){
              get_template_part('partials/posts/post', 'banner');
            } else { ?>
              <span class="dan-banner missing-banner"></span>
            <?php } ?>
          <div class="dan-excerpt-container">
            <div class="dan-meta">
            <?php
               get_template_part('partials/posts/post', 'date');

               get_template_part('partials/posts/post', 'author');
             ?>
             </div>
          <?php
             get_template_part('partials/posts/post', 'titlelink');

             the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'dantheme' ) . '</span>' );
          ?>
         </div>

       </article>

     <?php endforeach; wp_reset_postdata();?>

  </main>
</div><!--\wrap-->
</div>

<?php get_footer(); ?>
