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
<pre>
  function stalker_metabox() {
  	// Start with an underscore to hide fields from custom fields list
  	$prefix = 'dan_';
  	/**
  	 * Sample metabox to demonstrate each field type included
  	 */

  	$cmb_group = new_cmb2_box( array(
  			'id'           => $prefix . 'add_stalker',
  			'title'        => __( 'Repeating Stalker Group', 'cmb2' ),
  			'object_types' => array( 'page', ),
  			'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-tk-stalker-page.php' ),
  		) );

  		$cmb_add_stalker = $cmb_group->add_field( array(
  	      'id'          => $prefix . 'add_stalker_group',
  	      'type'        => 'group',
  	      'description' => __( 'Create as many additional stalker as desired', 'cmb2' ),
  	      'options'     => array(
  	          'group_title'   => __( 'Stalker {#}', 'cmb2' ),
  	          'add_button'    => __( 'Add Another Stalker', 'cmb2' ),
  	          'remove_button' => __( 'Remove Stalker', 'cmb2' ),
  	          'sortable'      => true, // beta
  	      ),
  	  ) );
  	$cmb_group->add_group_field( $cmb_add_stalker, array(
  		'name'       => __( 'Section Nav Title', 'cmb2' ),
  		'id'         => $prefix . 'nav_title',
  		'desc'			 => 'The title that appears in the tab navigation',
  		'type'       => 'text',
  	) );
  	$cmb_group->add_group_field( $cmb_add_stalker, array(
  		'name'       => __( 'Stalker Content', 'cmb2' ),
  		'id'         => $prefix . 'section_title',
  		'type'       => 'text',
  	) );
  	$cmb_group->add_group_field($cmb_add_stalker, array(
  		'name'       => __( 'Stalker Content', 'cmb2' ),
  		'id'         => $prefix . 'section_content',
  		'type'       => 'textarea',
  	) );


  }

  add_action( 'cmb2_init', 'stalker_metabox' );
</pre>
<pre>
&lt;script&gt;
  (function($){
    $('body').stalker({
      target: '#stalker-nav li a',
      marker: '#stalker-articles article'
    });
  })(jQuery);
&lt;/script&gt;

&lt;?php if (have_posts()) : while (have_posts()) : the_post(); ?&gt;

&lt;div id="post-sidebar stalker-targets" class="dan-sidebar pin" role="complementary"&gt;
  &lt;ul id="stalker-nav"&gt;
  &lt;?php
    $i = 1;
    $entries = get_post_meta( get_the_ID(), 'dan_add_stalker_group', true );

    foreach ( (array) $entries as $key =&gt; $entry ) {

    $nav_title = '';

    if ( isset( $entry['dan_nav_title'] ) ) { $nav_title = esc_html( $entry['dan_nav_title']); }

  ?&gt;

  &lt;li&gt;
    &lt;a href="#stalker-&lt;?php echo $i; ?&gt;"&gt;&lt;?php echo $nav_title; ?&gt;&lt;/a&gt;
  &lt;/li&gt;

  &lt;?php $i++; } ?&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;main id="stalker-articles" class="dan-page-content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement"&gt;

  &lt;?php
    $x = 1;
    $entries = get_post_meta( get_the_ID(), 'dan_add_stalker_group', true );

    foreach ( (array) $entries as $key =&gt; $entry ) {

    $section_title = $section_content = '';

    if ( isset( $entry['dan_section_title'] ) ) { $section_title = esc_html( $entry['dan_section_title']); }

    if ( isset( $entry['dan_section_content'] ) ) { $section_content = esc_html( $entry['dan_section_content']); }

  ?&gt;

   &lt;article id="stalker-&lt;?php echo $x; ?&gt;" &lt;?php post_class('cf'); ?&gt; role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/WebPageElement"&gt;

     &lt;section class="entry-content" itemprop="articleBody"&gt;
       &lt;h4&gt;&lt;?php echo $section_title;  ?&gt;&lt;/h4&gt;
       &lt;div&gt;
         &lt;?php echo $section_content;  ?&gt;
       &lt;/div&gt;
     &lt;/section&gt;

   &lt;/article&gt;

   &lt;?php $x++; } ?&gt;
 &lt;/main&gt;
 &lt;?php endwhile; endif; ?&gt;
</pre>


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

       <?php $x++; } ?>
     </main>
     <?php endwhile; endif; ?>

   </div><!--\wrap-->
 </div><!--\#left-sidebar-->


<?php get_footer(); ?>
