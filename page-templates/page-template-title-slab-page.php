<?php
/*
Template Name: Titles and Slabs
*/
?>

<?php get_header(); ?>


  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php

      $icon = get_post_meta( $post->ID, 'dan_icon', true );
      $title = get_post_meta( $post->ID, 'dan_title', true );
      $subtitle = get_post_meta( $post->ID, 'dan_subtitle', true );
      $content = get_post_meta( $post->ID, 'dan_content', true );
      $btn = get_post_meta( $post->ID, 'dan_btn', true );
      $btn_url = get_post_meta( $post->ID, 'dan_btn_url', true );
      $btn_two = get_post_meta( $post->ID, 'dan_btn_two', true );
      $btn_url_two = get_post_meta( $post->ID, 'dan_btn_url_two', true );


       ?>

      <article class="title-group center">
        <div class="wrap">
          <?php if($icon){ ?>
            <i class="fa <?php echo $icon; ?>"></i>
          <?php }?>

          <?php if($title){ ?>
            <p class="h3 title"><?php echo $title; ?></p>
          <?php } ?>

          <?php if($subtitle){ ?>
            <p class="large subtitle"><?php echo $subtitle; ?></p>
          <?php } ?>

          <?php if($content){ ?>
            <p class="content"><?php echo $content; ?></p>
          <?php } ?>
          <div class="buttons">
            <?php if($btn){ ?>
              <a href="<?php echo $btn_url; ?>" class="button primary">
              <?php echo $btn; ?>
            </a>
            <?php } ?>
            <?php if($btn_two) { ?>

            <a href="<?php echo $btn_url_two; ?>" class="button secondary">
              <?php echo $btn_two; ?>
            </a>
            <?php } ?>
        </div><!--\wrap-->
       </article>

       <article class="title-group center slab">
         <div class="wrap">
           <?php if($icon){ ?>
             <i class="fa <?php echo $icon; ?>"></i>
           <?php }?>

           <?php if($title){ ?>
             <p class="h3 title"><?php echo $title; ?></p>
           <?php } ?>

           <?php if($subtitle){ ?>
             <p class="large subtitle"><?php echo $subtitle; ?></p>
           <?php } ?>

           <?php if($content){ ?>
             <p class="content"><?php echo $content; ?></p>
           <?php } ?>

           <div class="buttons">
             <?php if($btn){ ?>
               <a href="<?php echo $btn_url; ?>" class="button primary light">
               <?php echo $btn; ?>
             </a>
             <?php } ?>

             <?php if($btn_two) { ?>
             <a href="<?php echo $btn_url_two; ?>" class="button ghost light">
               <?php echo $btn_two; ?>
             </a>
             <?php } ?>
         </div><!--\wrap-->
        </article>

        <article class="title-group">
          <div class="wrap">
            <?php if($icon){ ?>
              <i class="fa <?php echo $icon; ?>"></i>
            <?php }?>

            <?php if($title){ ?>
              <p class="h3 title"><?php echo $title; ?></p>
            <?php } ?>

            <?php if($subtitle){ ?>
              <p class="large subtitle"><?php echo $subtitle; ?></p>
            <?php } ?>

            <?php if($content){ ?>
              <p class="content"><?php echo $content; ?></p>
            <?php } ?>

            <div class="buttons">
              <?php if($btn){ ?>
                <a href="<?php echo $btn_url; ?>" class="button primary">
                <?php echo $btn; ?>
              </a>
              <?php } ?>

              <?php if($btn_two) { ?>
              <a href="<?php echo $btn_url_two; ?>" class="button secondary">
                <?php echo $btn_two; ?>
              </a>
              <?php } ?>
          </div><!--\wrap-->
         </article>

         <article class="title-group slab dark">
           <div class="wrap">
             <?php if($icon){ ?>
               <i class="fa <?php echo $icon; ?>"></i>
             <?php }?>

             <?php if($title){ ?>
               <p class="h3 title"><?php echo $title; ?></p>
             <?php } ?>

             <?php if($subtitle){ ?>
               <p class="large subtitle"><?php echo $subtitle; ?></p>
             <?php } ?>

             <?php if($content){ ?>
               <p class="content"><?php echo $content; ?></p>
             <?php } ?>

             <div class="buttons">
               <?php if($btn){ ?>
                 <a href="<?php echo $btn_url; ?>" class="button primary light">
                 <?php echo $btn; ?>
               </a>
               <?php } ?>

               <?php if($btn_two) { ?>
               <a href="<?php echo $btn_url_two; ?>" class="button secondary light">
                 <?php echo $btn_two; ?>
               </a>
               <?php } ?>
           </div><!--\wrap-->
          </article>

          <article class="title-group slab light">
            <div class="wrap">
              <?php if($icon){ ?>
                <i class="fa <?php echo $icon; ?>"></i>
              <?php }?>

              <?php if($title){ ?>
                <p class="h3 title"><?php echo $title; ?></p>
              <?php } ?>

              <?php if($subtitle){ ?>
                <p class="large subtitle"><?php echo $subtitle; ?></p>
              <?php } ?>

              <?php if($content){ ?>
                <p class="content"><?php echo $content; ?></p>
              <?php } ?>

              <div class="buttons">
                <?php if($btn){ ?>
                  <a href="<?php echo $btn_url; ?>" class="button primary">
                  <?php echo $btn; ?>
                </a>
                <?php } ?>

                <?php if($btn_two) { ?>
                <a href="<?php echo $btn_url_two; ?>" class="button secondary">
                  <?php echo $btn_two; ?>
                </a>
                <?php } ?>
            </div><!--\wrap-->
           </article>


     <?php endwhile; endif;?>

  </main>


<?php get_footer(); ?>
