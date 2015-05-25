<?php
/*
Template Name: Boxes
*/
?>

<?php get_header(); ?>


  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <span class="divider center">Two Boxes</span>

      <article class="blocks two-blocks">
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

      		<div class="block">
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

    <article class="blocks three-blocks">
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

        <div class="block">
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

  <article class="blocks four-blocks">
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

      <div class="block center">
        <div class="banner">
          <img src="<?php echo $img; ?>" />
        </div>

        <h4 class="title"><?php echo $title; ?></h4>
        <p class="content"><?php echo $content; ?></p>
        <a class="button small" href="<?php echo $btn_url; ?>"><?php echo $btn; ?></a>
      </div>

    <?php if($i++ == 4) break; } ?>


 </div><!--\wrap-->
</article>


<span class="divider center">Five Boxes</span>

<article class="blocks five-blocks">
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

    <div class="block">
      <div class="banner">
        <img src="<?php echo $img; ?>" />
      </div>

      <h4 class="title"><?php echo $title; ?></h4>
      <p class="content"><?php echo $content; ?></p>
    </div>

  <?php if($i++ == 5) break; } ?>


</div><!--\wrap-->
</article>



<span class="divider center">Six Boxes</span>

<article class="blocks six-blocks">
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

    <div class="block center">
      <i class="fa <?php echo $icon; ?>"></i>

      <h4 class="title"><?php echo $title; ?></h4>
      <p class="content"><?php echo $content; ?></p>
    </div>

  <?php if($i++ == 6) break; } ?>

 <?php endwhile; endif;?>
</div><!--\wrap-->
</article>

  </main>


<?php get_footer(); ?>
