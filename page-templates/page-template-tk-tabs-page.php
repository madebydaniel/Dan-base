<?php
/*
Template Name: TK Tabs
*/
?>

<?php get_header(); ?>


  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement">
    <div class="wrap ">
<pre>
  function tabs_metabox() {
  	// Start with an underscore to hide fields from custom fields list
  	$prefix = 'dan_';
  	/**
  	 * Sample metabox to demonstrate each field type included
  	 */

  	$cmb_group = new_cmb2_box( array(
  			'id'           => $prefix . 'add_tabs',
  			'title'        => __( 'Repeating Tab Group', 'cmb2' ),
  			'object_types' => array( 'page', ),
  			'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-tk-tabs-page.php' ),
  		) );

  		$cmb_add_tabs = $cmb_group->add_field( array(
  	      'id'          => $prefix . 'add_tab_group',
  	      'type'        => 'group',
  	      'description' => __( 'Create as many additional tabs as desired', 'cmb2' ),
  	      'options'     => array(
  	          'group_title'   => __( 'Tab {#}', 'cmb2' ),
  	          'add_button'    => __( 'Add Another Tab', 'cmb2' ),
  	          'remove_button' => __( 'Remove Tab', 'cmb2' ),
  	          'sortable'      => true, // beta
  	      ),
  	  ) );
  	$cmb_group->add_group_field( $cmb_add_tabs, array(
  		'name'       => __( 'Tab Title', 'cmb2' ),
  		'id'         => $prefix . 'tab_title',
  		'desc'			 => 'The title that appears in the tab navigation',
  		'type'       => 'text',
  	) );
  	$cmb_group->add_group_field( $cmb_add_tabs, array(
  		'name'       => __( 'Tab Content', 'cmb2' ),
  		'id'         => $prefix . 'divider_title',
  		'type'       => 'title',
  	) );
  	$cmb_group->add_group_field( $cmb_add_tabs, array(
  		'name'       => __( 'Content Title', 'cmb2' ),
  		'id'         => $prefix . 'content_title',
  		'type'       => 'text',
  	) );
  	$cmb_group->add_group_field( $cmb_add_tabs, array(
  		'name'       => __( 'Content Subtitle', 'cmb2' ),
  		'id'         => $prefix . 'subtitle',
  		'type'       => 'text',
  	) );
  	$cmb_group->add_group_field( $cmb_add_tabs, array(
  	    'name'       => __( 'Content', 'cmb2' ),
  	    'id'         => $prefix . 'content',
  	    'type'       => 'textarea_small',
  	) );

  }

  add_action( 'cmb2_init', 'tabs_metabox' );
</pre>
<pre>
&lt;script&gt;
(function($){
  $('.tabs').tab();
})(jQuery);
&lt;/script&gt;

&lt;div class="tabs" data-tab&gt;
 &lt;nav class="tab-nav" data-tab-nav&gt;
   &lt;ul&gt;

   &lt;?php
     $entries = get_post_meta( get_the_ID(), 'dan_add_tab_group', true );

     foreach ( (array) $entries as $key =&gt; $entry ) {

     $tab_title = '';

     if ( isset( $entry['dan_tab_title'] ) ) { $tab_title = esc_html( $entry['dan_tab_title']); }

   ?&gt;

      &lt;li&gt;
        &lt;a href="#&lt;?php echo $tab_title; ?&gt;"&gt;
          &lt;?php echo $tab_title; ?&gt;
        &lt;/a&gt;
      &lt;/li&gt;

   &lt;?php } ?&gt;

   &lt;/ul&gt;
 &lt;/nav&gt;

 &lt;?php
   $entries = get_post_meta( get_the_ID(), 'dan_add_tab_group', true );

   foreach ( (array) $entries as $key =&gt; $entry ) {

   $content_title = $subtitle = $content ='';

   if ( isset( $entry['dan_content_title'] ) ) { $content_title = esc_html( $entry['dan_content_title']); }

   if ( isset( $entry['dan_subtitle'] ) ) { $subtitle = esc_html( $entry['dan_subtitle']); }

   if ( isset( $entry['dan_content'] ) ) { $content = esc_html( $entry['dan_content']); }

 ?&gt;

  &lt;section class="tab-section" data-tab-section&gt;
    &lt;h4 class="title"&gt;&lt;?php echo $content_title; ?&gt;&lt;/h4&gt;
    &lt;p class="large subtitle"&gt;&lt;?php echo $subtitle; ?&gt;&lt;/p&gt;
    &lt;p class="content"&gt;&lt;?php echo $content; ?&gt;&lt;/p&gt;
  &lt;/section&gt;
  &lt;?php } ?&gt;
&lt;/div&gt;
</pre>


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

        <li>
          <a href="#<?php echo $tab_title; ?>">
            <?php echo $tab_title; ?>
          </a>
        </li>

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
