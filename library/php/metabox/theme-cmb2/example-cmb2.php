<?php

function fl_example_metabox() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = 'dan_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */

	$cmb_group = new_cmb2_box( array(
			'id'           => $prefix . 'add_fl_example',
			'title'        => __( 'Repeating FL Group', 'cmb2' ),
			'object_types' => array( 'page', ),
			'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-cmb-example.php' ),
		) );

		$cmb_add_fl_example = $cmb_group->add_field( array(
	      'id'          => $prefix . 'add_fl_group',
	      'type'        => 'group',
	      'description' => __( 'Create as many additional fl_example as desired', 'cmb2' ),
	      'options'     => array(
	          'group_title'   => __( 'FL {#}', 'cmb2' ),
	          'add_button'    => __( 'Add Another FL', 'cmb2' ),
	          'remove_button' => __( 'Remove FL', 'cmb2' ),
	          'sortable'      => true, // beta
	      ),
	  ) );
	$cmb_group->add_group_field( $cmb_add_fl_example, array(
		'name'       => __( 'FL Icon', 'cmb2' ),
		'id'         => $prefix . 'fl_icon',
		'desc'		 => 'Select an icon to use.',
		'type'		 => 'pw_select',
		'options'    => 'show_icons'
	) );
	$cmb_group->add_group_field( $cmb_add_fl_example, array(
		'name'       => __( 'FL Title', 'cmb2' ),
		'id'         => $prefix . 'fl_title',
		'type'       => 'text',
	) );
	$cmb_group->add_group_field( $cmb_add_fl_example, array(
		'name'       => __( 'FL Subtitle', 'cmb2' ),
		'id'         => $prefix . 'fl_subtitle',
		'type'       => 'text',
	) );



	$cmb_file_list_example = new_cmb2_box( array(
		'id'            => $prefix . 'fl_list_example_cmb',
		'title'         => __( 'Example Images', 'cmb2' ),
		'type' => 'file_list',
	    'object_types' => array( 'page', ),
		'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-cmb-example.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$cmb_file_list_example->add_field( array(
		'name'       => __( 'Example Image', 'cmb2' ),
		'desc'       => __( 'Upload Img: recommended size is ???x???', 'cmb2' ),
		'id'         => $prefix . 'example_image',
		'type'       => 'file_list',
	) );

}

add_action( 'cmb2_init', 'fl_example_metabox' );






?>
