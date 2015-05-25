<?php
/*
Template Name: Posts - Layout 1
*/
?>

<?php get_header(); ?>

<div id="" class="left-sidebar">
<div class="wrap">
  <?php get_sidebar('blog-sidebar'); ?>

  <main class="dan-blogroll layout-one" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

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
        <header class="article-header entry-header">
          <?php
            get_template_part('partials/posts/post', 'date');

            if(has_post_thumbnail()){
             get_template_part('partials/posts/post', 'banner');
           }

            get_template_part('partials/posts/post', 'titlelink');

            get_template_part('partials/posts/post', 'author');
          ?>
        </header>

        <section class="entry-content">
          <?php
            the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'dantheme' ) . '</span>' );
          ?>
        </section>

       </article>

     <?php endforeach; wp_reset_postdata();?>

  </main>
</div><!--\wrap-->
</div>

<?php get_footer(); ?>
