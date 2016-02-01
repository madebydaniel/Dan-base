<?php
/*
Template Name: CMB - Helpers
*/
?>

<?php get_header(); ?>

	<div class="wrap">
		<h3>Use select field type that displays font awesome icons.</h3>

<pre>
'type'		 => 'pw_select',
'options'    => 'show_icons'

as in

$cmb_title_group->add_field( array(
	'name'       => __( 'Icon', 'cmb2' ),
	'id'         => $prefix . 'icon',
	'desc'		 => 'Select an icon to use.',
	'type'		 => 'pw_select',
	'options'    => 'show_icons'
) );
</pre>

<h3>Display Metaboxes on a specific page template.</h3>

<pre>
'object_types'  => array( 'page', ),
'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-title-slab-page.php' ),

as in

$cmb_title_group = new_cmb2_box( array(
	'id'            => $prefix . 'title_group',
	'title'         => __( 'Title Group', 'cmb2' ),
	'object_types'  => array( 'page', ), // Post type
	'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-title-slab-page.php' ),
	'context'       => 'normal',
	'priority'      => 'high',
	'show_names'    => true, // Show field names on the left
) );
$cmb_title_group->add_field( array(
	'name'       => __( 'Icon', 'cmb2' ),
	'id'         => $prefix . 'icon',
	'desc'		 => 'Select an icon to use.',
	'type'		 => 'pw_select',
	'options'    => 'show_icons'
) );
</pre>


	</div><!--\wrap-->


<?php get_footer(); ?>
