<?php
/*
Template Name: Posts - Layout 2
*/
?>

<?php get_header(); ?>

<div id="" class="wrap left-sidebar">

  <?php get_sidebar('blog-sidebar'); ?>

  <main class="dan-blogroll layout-two" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

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

</div>

<?php get_footer(); ?>
