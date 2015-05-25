<?php
/*
Template Name: Slats
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

       <span class="divider center">slat</span>

      <div class="wrap ">
        <div class="slat">
          <div class="icon">
            <?php if($icon){ ?>
              <i class="fa <?php echo $icon; ?>"></i>
            <?php }?>
          </div><!--\icon-->

          <div class="details">
            <?php if($title){ ?>
              <p class="h3 title"><?php echo $title; ?></p>
            <?php } ?>

            <?php if($subtitle){ ?>
              <p class="large subtitle"><?php echo $subtitle; ?></p>
            <?php } ?>

            <?php if($content){ ?>
              <p class="content"><?php echo $content; ?></p>
            <?php } ?>
          </div><!--\details-->

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
          </div><!--\buttons-->

        </div><!--\slat-->
      </div>

      <span class="divider center">simple-slat</span>

      <div class="wrap">
        <div class="simple-slat">
          <div class="icon">
            <?php if($icon){ ?>
              <i class="fa <?php echo $icon; ?>"></i>
            <?php }?>
          </div><!--\icon-->

          <div class="details">
            <?php if($subtitle){ ?>
              <p class="large subtitle"><?php echo $subtitle; ?></p>
            <?php } ?>

            <?php if($content){ ?>
              <p class="content"><?php echo $content; ?></p>
            <?php } ?>
          </div><!--\details-->

        </div><!--\simple-slat-->
      </div>

      <span class="divider center">simple-slat-cta</span>

      <div class="wrap">
        <div class="simple-slat-cta">
          <div class="icon">
            <?php if($icon){ ?>
              <i class="fa <?php echo $icon; ?>"></i>
            <?php }?>
          </div><!--\icon-->

          <div class="details">
            <?php if($subtitle){ ?>
              <p class="large subtitle"><?php echo $subtitle; ?></p>
            <?php } ?>

            <?php if($content){ ?>
              <p class="content"><?php echo $content; ?></p>
            <?php } ?>
          </div><!--\details-->
          <div class="buttons">
            <?php if($btn){ ?>
              <a href="<?php echo $btn_url; ?>" class="button primary">
              <?php echo $btn; ?>
            </a>
            <?php } ?>
          </div><!--\buttons-->

        </div><!--\simple-slat-->
      </div>




     <?php endwhile; endif;?>

  </main>


<?php get_footer(); ?>
