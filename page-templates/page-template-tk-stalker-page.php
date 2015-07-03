<?php
/*
Template Name: TK Stalker
*/
?>

<?php get_header(); ?>

<div id="" class="left-sidebar stalker-content-container pin-content-container">
  <div class="wrap">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div id="post-sidebar stalker-targets" class="dan-sidebar pin" role="complementary">
      <p></p>
      <ul id="stalker-nav">
      <?php
        $i = 1;
        $entries = get_post_meta( get_the_ID(), 'dan_add_stalker_group', true );

        foreach ( (array) $entries as $key => $entry ) {

        $nav_title = '';

        if ( isset( $entry['dan_nav_title'] ) ) { $nav_title = esc_html( $entry['dan_nav_title']); }

      ?>

      <li>
        <a href="#stalker-<?php echo $i; ?>"><?php echo $nav_title; ?></a>
      </li>

      <?php $i++; } ?>
      </ul>
    </div>

    <main id="stalker-articles" class="dan-page-content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement">

      <?php
        $x = 1;
        $entries = get_post_meta( get_the_ID(), 'dan_add_stalker_group', true );

        foreach ( (array) $entries as $key => $entry ) {

        $section_title = $section_content = '';

        if ( isset( $entry['dan_section_title'] ) ) { $section_title = esc_html( $entry['dan_section_title']); }

        if ( isset( $entry['dan_section_content'] ) ) { $section_content = esc_html( $entry['dan_section_content']); }

      ?>

       <article id="stalker-<?php echo $x; ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/WebPageElement">

         <section class="entry-content" itemprop="articleBody">
           <h4><?php echo $section_title;  ?></h4>
           <div>
             <?php echo $section_content;  ?>
           </div>
         </section>

       </article>

       <?php $x++; } endwhile; endif; ?>
     </main>

   </div><!--\wrap-->
 </div><!--\#left-sidebar-->


<?php get_footer(); ?>
