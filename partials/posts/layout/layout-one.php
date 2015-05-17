<div id="" class="wrap left-sidebar">

  <?php get_sidebar('blog-sidebar'); ?>

  <main class="dan-blogroll layout-one" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


      <div class="article-container">
        <header class="article-header entry-header">

          <?php if (is_single() ) :

           get_template_part('partials/posts/post', 'date');

           get_template_part('partials/posts/post', 'title');

           if(has_post_thumbnail()){
            get_template_part('partials/posts/post', 'banner');
          }

           get_template_part('partials/posts/post', 'author');

           get_template_part('partials/posts/post', 'category');

           else:

             get_template_part('partials/posts/post', 'date');

             if(has_post_thumbnail()){
              get_template_part('partials/posts/post', 'banner');
            }

             get_template_part('partials/posts/post', 'title');

             get_template_part('partials/posts/post', 'author');

             get_template_part('partials/posts/post', 'category');

           endif;
          ?>

        </header>

        <section class="entry-content">
          <?php
          if (is_single() ) :
              the_content();
          else :
              the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'dantheme' ) . '</span>' );
          endif;
          ?>
        </section>


        <?php if (is_single() ) : ?>
          <footer class="entry-footer">

            <?php get_template_part('partials/posts/post', 'commentcount'); ?>

            <?php get_template_part('partials/posts/post', 'tags'); ?>

          </footer>

        <?php endif; ?>

      </div>

        <?php if (is_single() ) : ?>

          <?php comments_template(); ?>

        <?php endif; ?>



    <?php endwhile; ?>

        <?php dan_page_navi(); ?>

    <?php else : ?>

      <?php get_template_part('partials/content', 'post-not-found'); ?>

    <?php endif; ?>

  </main>

</div>
