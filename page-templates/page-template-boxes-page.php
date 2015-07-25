<?php
/*
Template Name: Boxes
*/
?>

<?php get_header(); ?>


  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement">

    <div class="wrap">

<pre>
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
      'desc'     => 'Select an icon to use.',
      'type'     => 'pw_select',
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
</pre>
<pre>
&lt;article class="blocks row"&gt;
  &lt;div class="wrap"&gt;

  &lt;?php
    $entries = get_post_meta( get_the_ID(), 'dan_add_box_group', true );

    $i = 1;
    foreach ( (array) $entries as $key => $entry ) {

    $icon = $img = $title = $subtitle = $content = $btn = $btn_url = '';

    if ( isset( $entry['dan_icon'] ) ) { $icon = $entry['dan_icon']; }
    if ( isset( $entry['dan_image'] ) ) { $img = esc_html( $entry['dan_image']); }
    if ( isset( $entry['dan_title'] ) ) { $title = esc_html( $entry['dan_title'] ); }
    if ( isset( $entry['dan_subtitle'] ) ) { $subtitle = esc_html( $entry['dan_subtitle'] ); }
    if ( isset( $entry['dan_content'] ) ) { $content = esc_html( $entry['dan_content'] ); }
    if ( isset( $entry['dan_btn'] ) ) { $btn = esc_html( $entry['dan_btn'] ); }
    if ( isset( $entry['dan_btn_url'] ) ) { $btn_url = esc_html( $entry['dan_btn_url'] ); }
  ?&gt;

    &lt;div class="block six-col (four-col/three-col/two-col)"&gt;
      &lt;div class="banner"&gt;
        &lt;img src="&lt;?php echo $img; ?&gt;" /&gt;
      &lt;/div&gt;

      &lt;h4 class="title"&gt;&lt;?php echo $title; ?&gt;&lt;/h4&gt;
      &lt;p class="subtitle large"&gt;&lt;?php echo $subtitle; ?&gt;&lt;/p&gt;
      &lt;p class="content"&gt;&lt;?php echo $content; ?&gt;&lt;/p&gt;
      &lt;a class="button" href="&lt;?php echo $btn_url; ?&gt;"&gt;&lt;?php echo $btn; ?&gt;&lt;/a&gt;
    &lt;/div&gt;

  &lt;?php } ?&gt;

  &lt;/div&gt;
&lt;/article&gt;
</pre>
    </div><!--\wrap-->

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <span class="divider center">Two Boxes</span>

      <article class="blocks row">
        <div class="wrap">

        <?php
          $entries = get_post_meta( get_the_ID(), 'dan_add_box_group', true );

          $i = 1;
          foreach ( (array) $entries as $key => $entry ) {

          $icon = $img = $title = $subtitle = $content = $btn = $btn_url = '';

          if ( isset( $entry['dan_icon'] ) ) { $icon = $entry['dan_icon']; }
          if ( isset( $entry['dan_image'] ) ) { $img = esc_html( $entry['dan_image']); }
          if ( isset( $entry['dan_title'] ) ) { $title = esc_html( $entry['dan_title'] ); }
          if ( isset( $entry['dan_subtitle'] ) ) { $subtitle = esc_html( $entry['dan_subtitle'] ); }
          if ( isset( $entry['dan_content'] ) ) { $content = esc_html( $entry['dan_content'] ); }
          if ( isset( $entry['dan_btn'] ) ) { $btn = esc_html( $entry['dan_btn'] ); }
          if ( isset( $entry['dan_btn_url'] ) ) { $btn_url = esc_html( $entry['dan_btn_url'] ); }

        ?>

          <div class="block six-col">
            <div class="banner">
              <img src="<?php echo $img; ?>" />
            </div>

            <h4 class="title"><?php echo $title; ?></h4>
            <p class="subtitle large"><?php echo $subtitle; ?></p>
            <p class="content"><?php echo $content; ?></p>
            <a class="button" href="<?php echo $btn_url; ?>"><?php echo $btn; ?></a>
          </div>

        <?php if($i++ == 2) break; } ?>


     </div><!--\wrap-->
    </article>


    <span class="divider center">Three Boxes</span>

    <article class="blocks row">
      <div class="wrap">

      <?php
        $entries = get_post_meta( get_the_ID(), 'dan_add_box_group', true );

        $i = 1;
        foreach ( (array) $entries as $key => $entry ) {

          $icon = $img = $title = $subtitle = $content = $btn = $btn_url = '';

          if ( isset( $entry['dan_icon'] ) ) { $icon = $entry['dan_icon']; }
          if ( isset( $entry['dan_image'] ) ) { $img = esc_html( $entry['dan_image']); }
          if ( isset( $entry['dan_title'] ) ) { $title = esc_html( $entry['dan_title'] ); }
          if ( isset( $entry['dan_subtitle'] ) ) { $subtitle = esc_html( $entry['dan_subtitle'] ); }
          if ( isset( $entry['dan_content'] ) ) { $content = esc_html( $entry['dan_content'] ); }
          if ( isset( $entry['dan_btn'] ) ) { $btn = esc_html( $entry['dan_btn'] ); }
          if ( isset( $entry['dan_btn_url'] ) ) { $btn_url = esc_html( $entry['dan_btn_url'] ); }

      ?>

        <div class="block four-col">
          <i class="fa <?php echo $icon; ?>"></i>
          <div class="banner">
            <img src="<?php echo $img; ?>" />
          </div>

          <h4 class="title"><?php echo $title; ?></h4>
          <p class="subtitle large"><?php echo $subtitle; ?></p>
          <p class="content"><?php echo $content; ?></p>
          <a class="button" href="<?php echo $btn_url; ?>"><?php echo $btn; ?></a>
        </div>

      <?php if($i++ == 3) break; } ?>


   </div><!--\wrap-->
  </article>


  <span class="divider center">Four Boxes</span>

  <article class="blocks row">
    <div class="wrap">

    <?php
      $entries = get_post_meta( get_the_ID(), 'dan_add_box_group', true );

      $i = 1;
      foreach ( (array) $entries as $key => $entry ) {

        $icon = $img = $title = $subtitle = $content = $btn = $btn_url = '';

        if ( isset( $entry['dan_icon'] ) ) { $icon = $entry['dan_icon']; }
        if ( isset( $entry['dan_image'] ) ) { $img = esc_html( $entry['dan_image']); }
        if ( isset( $entry['dan_title'] ) ) { $title = esc_html( $entry['dan_title'] ); }
        if ( isset( $entry['dan_subtitle'] ) ) { $subtitle = esc_html( $entry['dan_subtitle'] ); }
        if ( isset( $entry['dan_content'] ) ) { $content = esc_html( $entry['dan_content'] ); }
        if ( isset( $entry['dan_btn'] ) ) { $btn = esc_html( $entry['dan_btn'] ); }
        if ( isset( $entry['dan_btn_url'] ) ) { $btn_url = esc_html( $entry['dan_btn_url'] ); }
    ?>

      <div class="block center three-col">
        <div class="banner center">
          <img src="<?php echo $img; ?>" />
        </div>

        <h4 class="title center"><?php echo $title; ?></h4>
        <p class="content center"><?php echo $content; ?></p>
        <div class="center">
          <a class="button small" href="<?php echo $btn_url; ?>"><?php echo $btn; ?></a>
        </div>
      </div>

    <?php if($i++ == 4) break; } ?>


 </div><!--\wrap-->
</article>


<span class="divider center">Six Boxes</span>

<article class="blocks row">
  <div class="wrap">

  <?php
    $entries = get_post_meta( get_the_ID(), 'dan_add_box_group', true );

    $i = 1;
    foreach ( (array) $entries as $key => $entry ) {
      $icon = $img = $title = $subtitle = $content = $btn = $btn_url = '';

      if ( isset( $entry['dan_icon'] ) ) { $icon = $entry['dan_icon']; }
      if ( isset( $entry['dan_image'] ) ) { $img = esc_html( $entry['dan_image']); }
      if ( isset( $entry['dan_title'] ) ) { $title = esc_html( $entry['dan_title'] ); }
      if ( isset( $entry['dan_subtitle'] ) ) { $subtitle = esc_html( $entry['dan_subtitle'] ); }
      if ( isset( $entry['dan_content'] ) ) { $content = esc_html( $entry['dan_content'] ); }
      if ( isset( $entry['dan_btn'] ) ) { $btn = esc_html( $entry['dan_btn'] ); }
      if ( isset( $entry['dan_btn_url'] ) ) { $btn_url = esc_html( $entry['dan_btn_url'] ); }
  ?>

    <div class="block two-col">
      <i class="fa <?php echo $icon; ?> center"></i>

      <h4 class="center title"><?php echo $title; ?></h4>
      <p class="center content"><?php echo $content; ?></p>
    </div>

  <?php if($i++ == 6) break; } ?>

 <?php endwhile; endif;?>
</div><!--\wrap-->
</article>

  </main>


<?php get_footer(); ?>
