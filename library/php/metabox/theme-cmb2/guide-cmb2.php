<?php

function guide_metabox() {
    // Start with an underscore to hide fields from custom fields list
    $prefix = 'ss_';
    


    $cmb_guide_hero = new_cmb2_box( array(
        'id'            => $prefix . 'guide_hero_metabox',
        'title'         => __( 'Hero Panel', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-guide.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );
    $cmb_guide_hero->add_field( array(
        'name'       => __( 'Hero Small Copy', 'cmb2' ),
        'id'         => $prefix . 'guide_hero_small',
        'type'       => 'text',
    ) );
    $cmb_guide_hero->add_field( array(
        'name'       => __( 'Hero Large Copy', 'cmb2' ),
        'id'         => $prefix . 'guide_hero_large',
        'type'       => 'text',
    ) );
    $cmb_guide_hero->add_field( array(
        'name'       => __( 'Bar Icon', 'cmb2' ),
        'id'         => $prefix . 'guide_hero_bar_icon',
        'type'       => 'text',
    ) );
    $cmb_guide_hero->add_field( array(
        'name'       => __( 'Bar Copy', 'cmb2' ),
        'id'         => $prefix . 'guide_hero_bar_copy',
        'type'       => 'text',
    ) );
    $cmb_guide_hero->add_field( array(
        'name'       => __( 'Button Icon', 'cmb2' ),
        'id'         => $prefix . 'guide_hero_btn_icon',
        'type'       => 'text',
    ) );
    $cmb_guide_hero->add_field( array(
        'name'       => __( 'Button Copy', 'cmb2' ),
        'id'         => $prefix . 'guide_hero_btn_copy',
        'type'       => 'text',
    ) );
    $cmb_guide_hero->add_field( array(
        'name'       => __( 'Listx Label', 'cmb2' ),
        'id'         => $prefix . 'guide_hero_list',
        'type'       => 'text',
    ) );
    $cmb_guide_hero->add_field( array(
        'name'       => __( 'Background Color', 'cmb2' ),
        'id'         => $prefix . 'guide_hero_color',
        'type'       => 'text',
    ) );










$cmb_guide_toc = new_cmb2_box( array(
            'id'           => $prefix . 'add_guide_toc',
            'title'        => __( 'List Items', 'cmb2' ),
            'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-guide.php' ),
        ) );

        $cmb_add_guide_toc = $cmb_guide_toc->add_field( array(
          'id'          => $prefix . 'add_guide_toc',
          'type'        => 'group',
          'options'     => array(
              'group_title'   => __( 'List Item {#}', 'cmb2' ),
              'add_button'    => __( 'Add List Item', 'cmb2' ),
              'remove_button' => __( 'Remove List Item', 'cmb2' ),
              'sortable'      => true, // beta
          ),
      ) );
    $cmb_guide_toc->add_group_field( $cmb_add_guide_toc, array(
        'name'       => __( 'List Item Copy', 'cmb2' ),
        'id'         => $prefix . 'toc_item_copy',
        'type'       => 'text',
    ) );
    $cmb_guide_toc->add_group_field( $cmb_add_guide_toc, array(
        'name'       => __( 'List Item Destination URL', 'cmb2' ),
        'id'         => $prefix . 'toc_item_url',
        'type'       => 'text',
    ) );







$cmb_guide_list = new_cmb2_box( array(
            'id'           => $prefix . 'add_guide_list',
            'title'        => __( 'List Items', 'cmb2' ),
            'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-guide.php' ),
        ) );

        $cmb_add_guide_list = $cmb_guide_list->add_field( array(
          'id'          => $prefix . 'add_guide_list',
          'type'        => 'group',
          'options'     => array(
              'group_title'   => __( 'List Item {#}', 'cmb2' ),
              'add_button'    => __( 'Add List Item', 'cmb2' ),
              'remove_button' => __( 'Remove List Item', 'cmb2' ),
              'sortable'      => true, // beta
          ),
      ) );
    $cmb_guide_list->add_group_field( $cmb_add_guide_list, array(
        'name'       => __( 'List Item Icon', 'cmb2' ),
        'id'         => $prefix . 'list_item_icon',
        'type'       => 'text',
    ) );
    $cmb_guide_list->add_group_field( $cmb_add_guide_list, array(
        'name'       => __( 'List Item Copy', 'cmb2' ),
        'id'         => $prefix . 'list_item_copy',
        'type'       => 'text',
    ) );
    $cmb_guide_list->add_group_field( $cmb_add_guide_list, array(
        'name'       => __( 'List Item Destination URL', 'cmb2' ),
        'id'         => $prefix . 'list_item_url',
        'type'       => 'text',
    ) );






}

add_action( 'cmb2_init', 'guide_metabox' );






?>
