<?php
/*
Template Name: TK Tabs
*/
?>

<?php get_header(); ?>


  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement">
    <div class="wrap ">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


       <span class="divider center">Tabs</span>

       <div class="tabs" data-tab>
         <nav class="tab-nav" data-tab-nav>
             <ul>

       <?php
         $entries = get_post_meta( get_the_ID(), 'dan_add_tab_group', true );

         foreach ( (array) $entries as $key => $entry ) {

         $tab_title = '';

         if ( isset( $entry['dan_tab_title'] ) ) { $tab_title = esc_html( $entry['dan_tab_title']); }

       ?>


        <li><a href="#<?php echo $tab_title; ?>"><?php echo $tab_title; ?></a></li>

       <?php } ?>

             </ul>
         </nav>

         <?php
           $entries = get_post_meta( get_the_ID(), 'dan_add_tab_group', true );

           foreach ( (array) $entries as $key => $entry ) {

           $content_title = $subtitle = $content ='';

           if ( isset( $entry['dan_content_title'] ) ) { $content_title = esc_html( $entry['dan_content_title']); }

           if ( isset( $entry['dan_subtitle'] ) ) { $subtitle = esc_html( $entry['dan_subtitle']); }

           if ( isset( $entry['dan_content'] ) ) { $content = esc_html( $entry['dan_content']); }

         ?>

          <section class="tab-section" data-tab-section>
            <h4 class="title"><?php echo $content_title; ?></h4>
            <p class="large subtitle"><?php echo $subtitle; ?></p>
            <p class="content"><?php echo $content; ?></p>
          </section>
          <?php } ?>
        </div>








     <?php endwhile; endif;?>
   </div><!--\wrap-->
  </main>

<?php get_footer(); ?>
