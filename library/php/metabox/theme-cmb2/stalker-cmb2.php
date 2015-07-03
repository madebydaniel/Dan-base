<?php

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



?>
