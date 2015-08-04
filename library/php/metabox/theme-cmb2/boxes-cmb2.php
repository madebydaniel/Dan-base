<?php

function boxes_metabox() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = 'dan_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */

	$cmb_group = new_cmb2_box( array(
			'id'           => $prefix . 'add_boxes',
			'title'        => __( 'Repeating Box Group', 'cmb2' ),
			'object_types' => array( 'page', ),
			'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-boxes-page.php' ),
		) );

		$cmb_add_boxes = $cmb_group->add_field( array(
	      'id'          => $prefix . 'add_box_group',
	      'type'        => 'group',
	      'description' => __( 'Create as many additional boxes as desired', 'cmb2' ),
	      'options'     => array(
	          'group_title'   => __( 'Box {#}', 'cmb2' ),
	          'add_button'    => __( 'Add Another Box', 'cmb2' ),
	          'remove_button' => __( 'Remove Box', 'cmb2' ),
	          'sortable'      => true, // beta
	      ),
	  ) );

	$cmb_group->add_group_field( $cmb_add_boxes, array(
		'name'       => __( 'Icon', 'cmb2' ),
		'id'         => $prefix . 'icon',
		'desc'		 => 'Select an icon to use.',
		'type'		 => 'pw_select',
		'options'    => 'show_icons'
	) );
	$cmb_group->add_group_field( $cmb_add_boxes, array(
		'name'       => __( 'Image', 'cmb2' ),
		'id'         => $prefix . 'image',
		'type'       => 'file',
	) );
	$cmb_group->add_group_field( $cmb_add_boxes, array(
		'name'       => __( 'Title', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
	) );
	$cmb_group->add_group_field( $cmb_add_boxes, array(
		'name'       => __( 'Subtitle', 'cmb2' ),
		'id'         => $prefix . 'subtitle',
		'type'       => 'text',
	) );
	$cmb_group->add_group_field( $cmb_add_boxes, array(
	    'name'       => __( 'Content', 'cmb2' ),
	    'id'         => $prefix . 'content',
	    'type'       => 'textarea_small',
	) );
	$cmb_group->add_group_field( $cmb_add_boxes, array(
		'name'       => __( 'CTA Button Copy', 'cmb2' ),
		'id'         => $prefix . 'btn',
		'type'       => 'text_medium',
	) );
	$cmb_group->add_group_field( $cmb_add_boxes, array(
		'name'       => __( 'CTA Button URL', 'cmb2' ),
		'id'         => $prefix . 'btn_url',
		'type'       => 'text_url',
	) );

}

add_action( 'cmb2_init', 'boxes_metabox' );



?>
