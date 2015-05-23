<?php

function title_group_metabox() {
	// Start with an underscore to hide fields from custom fields list
	$prefix = 'dan_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_title_group = new_cmb2_box( array(
		'id'            => $prefix . 'title_group',
		'title'         => __( 'Title Group', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'key' => 'page-templates', 'value' => 'page-template-title-slab-page.php' ),
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
	$cmb_title_group->add_field( array(
		'name'       => __( 'Title', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
	) );
	$cmb_title_group->add_field( array(
		'name'       => __( 'Subtitle', 'cmb2' ),
		'id'         => $prefix . 'subtitle',
		'type'       => 'text',
	) );
	$cmb_title_group->add_field( array(
	    'name'       => __( 'Content', 'cmb2' ),
	    'id'         => $prefix . 'content',
	    'type'       => 'textarea_small',
	) );
	$cmb_title_group->add_field( array(
		'name'       => __( 'CTA Button Copy', 'cmb2' ),
		'id'         => $prefix . 'btn',
		'type'       => 'text_medium',
	) );
	$cmb_title_group->add_field( array(
		'name'       => __( 'CTA Button URL', 'cmb2' ),
		'id'         => $prefix . 'btn_url',
		'type'       => 'text_url',
	) );
	$cmb_title_group->add_field( array(
		'name'       => __( 'Additional CTA Button Copy', 'cmb2' ),
		'id'         => $prefix . 'btn_two',
		'type'       => 'text_medium',
	) );
	$cmb_title_group->add_field( array(
		'name'       => __( 'Additional CTA Button URL', 'cmb2' ),
		'id'         => $prefix . 'btn_url_two',
		'type'       => 'text_url',
	) );

}

add_action( 'cmb2_init', 'title_group_metabox' );



?>
