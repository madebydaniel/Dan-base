<?php
/*
Template Name: CMB - Repeatable Groups
*/
?>

<?php get_header(); ?>

	<div class="wrap">
		<h3>How to use repeatable groups</h3>

	<h3>Creating the Metabox</h3>

<pre>

function example_metabox() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = 'dan_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */

	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'add_example',
		'title'        => __( 'Repeating Box Group', 'cmb2' ),
		'object_types' => array( 'page', ),
		'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-example-page.php' ),
	) );

	$cmb_add_example = $cmb_group->add_field( array(
		'id'          => $prefix . 'add_box_group',
		'type'        => 'group',
		'description' => __( 'Create as many additional example as desired', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Box {#}', 'cmb2' ),
			'add_button'    => __( 'Add Another Box', 'cmb2' ),
			'remove_button' => __( 'Remove Box', 'cmb2' ),
			'sortable'      => true, // beta
		),
	) );

	$cmb_group->add_group_field( $cmb_add_example, array(
		'name'       => __( 'Icon', 'cmb2' ),
		'id'         => $prefix . 'icon',
		'desc'		 => 'Select an icon to use.',
		'type'		 => 'pw_select',
		'options'    => 'show_icons'
	) );
	$cmb_group->add_group_field( $cmb_add_example, array(
		'name'       => __( 'Image', 'cmb2' ),
		'id'         => $prefix . 'image',
		'type'       => 'file',
	) );
	$cmb_group->add_group_field( $cmb_add_example, array(
		'name'       => __( 'Title', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
	) );
}

add_action( 'cmb2_init', 'example_metabox' );

</pre>

<h3>Displaying/Outputting File List Content</h3>
<p class="well">This goes inside the template file</p>

<pre>
&lt;?php if (have_posts()) : while (have_posts()) : the_post(); ?&gt;
      &lt;article class="blocks row"&gt;
        &lt;div class="wrap"&gt;

        &lt;?php
          $entries = get_post_meta( get_the_ID(), 'dan_add_box_group', true );

          foreach ( (array) $entries as $key =&gt; $entry ) {
          $icon = $img = $title = $subtitle = $content = $btn = $btn_url = '';
          if ( isset( $entry['dan_icon'] ) ) { $icon = $entry['dan_icon']; }
          if ( isset( $entry['dan_image'] ) ) { $img = esc_html( $entry['dan_image']); }
          if ( isset( $entry['dan_title'] ) ) { $title = esc_html( $entry['dan_title'] ); }
        ?&gt;
			
		&lt;i class="fa &lt;?php echo $icon; ?&gt;"&gt;&lt;/i&gt;
		&lt;div class="banner"&gt;
		  &lt;img src="&lt;?php echo $img; ?&gt;" /&gt;
		&lt;/div&gt;

		&lt;h4 class="title"&gt;&lt;?php echo $title; ?&gt;&lt;/h4&gt;
   
     &lt;/div&gt;&lt;!--\wrap--&gt;
    &lt;/article&gt;
&lt;?php endwhile; endif;?&gt;
</pre>


	</div><!--\wrap-->


<?php get_footer(); ?>
