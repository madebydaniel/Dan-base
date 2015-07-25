<?php
/*
Template Name: TK Modal
*/
?>

<?php get_header(); ?>


  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement">
    <div class="wrap ">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php

      $icon = get_post_meta( $post->ID, 'dan_icon', true );

       ?>

       <span class="divider center">Modal</span>

       <?php if($icon){ ?>
         <i class="fa <?php echo $icon; ?>"></i>
       <?php }?>


        <div class="tabs" data-tab>
          <nav class="tab-nav" data-tab-nav>
              <ul>
                  <li><a href="#one">First</a></li>
                  <li><a href="#two">Second</a></li>
                  <li><a href="#three">Third</a></li>
              </ul>
          </nav>

          <section class="tab-section" data-tab-section>...</section>
          <section class="tab-section" data-tab-section>...</section>
          <section class="tab-section" data-tab-section>...</section>
        </div>

     <?php endwhile; endif;?>


   </div><!--\wrap-->
  </main>


<?php get_footer(); ?>
