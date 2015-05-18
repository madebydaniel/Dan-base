<div id="" class="wrap left-sidebar">

  <?php get_sidebar('blog-sidebar'); ?>

  <main class="dan-blogroll layout-two" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


      <article class="article-container">

          <?php if (is_single() ) : //SINGLE POST LAYOUT ?>
            <header class="article-header entry-header">
              <div class="dan-meta">
              <?php

               get_template_part('partials/posts/post', 'date');

               get_template_part('partials/posts/post', 'author');
               ?>
             </div>
             <?php

               get_template_part('partials/posts/post', 'title');

               if(has_post_thumbnail()){
                get_template_part('partials/posts/post', 'banner');
              }



               get_template_part('partials/posts/post', 'category');

               ?>

           </header>
           <section class="entry-content">
             <?php the_content(); ?>
           </section>

       <?php else: //BLOG AND ARCHIVE LAYOUT ?>
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
               get_template_part('partials/posts/post', 'title');

               the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'dantheme' ) . '</span>' );
            ?>
           </div>

         <?php endif; ?>





        <?php if (is_single() ) : ?>
          <footer class="entry-footer">

            <?php get_template_part('partials/posts/post', 'commentcount'); ?>

            <?php get_template_part('partials/posts/post', 'tags'); ?>

          </footer>

        <?php endif; ?>

      </article>

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
