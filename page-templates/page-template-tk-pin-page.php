<?php
/*
Template Name: TK Pin
*/
?>

<?php get_header(); ?>


<div id="" class="left-sidebar pin-content-container">
  <div class="wrap">

    <?php get_sidebar('page-tkpin-example-sidebar'); ?>

  <main class="dan-page-content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPage">

<pre>
&lt;script&gt;
(function($){
  $('.pin').pin({
    //animation: 'slide',
    location: 'left',
    fixed: true
  });
})(jQuery);
&lt;/script&gt;

Pinned element, such as the sidebar needs a class of "pin"
</pre>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/WebPageElement">

        <section class="entry-content" itemprop="articleBody">
          <?php the_content();  ?>
        </section>

      </article>

    <?php endwhile; else : ?>
      <?php get_template_part('partials/content', 'post-not-found'); ?>
    <?php endif; ?>
  </main>

</div><!--\wrap-->
</div><!--\#left-sidebar-->



<?php get_footer(); ?>
