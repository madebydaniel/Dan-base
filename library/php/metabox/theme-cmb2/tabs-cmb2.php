<?php

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



?>
