<?php
/*
Template Name: Slats
*/
?>

<?php get_header(); ?>


  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement">

    <div class="wrap">
<pre>
  function slat_metabox() {
  	// Start with an underscore to hide fields from custom fields list
  	$prefix = 'dan_';
  	/**
  	 * Sample metabox to demonstrate each field type included
  	 */
  	$cmb_slat = new_cmb2_box( array(
  		'id'            => $prefix . 'slat',
  		'title'         => __( 'Slat', 'cmb2' ),
  		'object_types'  => array( 'page', ), // Post type
  		'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-slat-page.php' ),
  		'context'       => 'normal',
  		'priority'      => 'high',
  		'show_names'    => true, // Show field names on the left
  	) );
  	$cmb_slat->add_field( array(
  		'name'       => __( 'Icon', 'cmb2' ),
  		'id'         => $prefix . 'icon',
  		'desc'		 => 'Select an icon to use.',
  		'type'		 => 'pw_select',
  		'options'    => 'show_icons'
  	) );
  	$cmb_slat->add_field( array(
  		'name'       => __( 'Title', 'cmb2' ),
  		'id'         => $prefix . 'title',
  		'type'       => 'text',
  	) );
  	$cmb_slat->add_field( array(
  		'name'       => __( 'Subtitle', 'cmb2' ),
  		'id'         => $prefix . 'subtitle',
  		'type'       => 'text',
  	) );
  	$cmb_slat->add_field( array(
  	    'name'       => __( 'Content', 'cmb2' ),
  	    'id'         => $prefix . 'content',
  	    'type'       => 'textarea_small',
  	) );
  	$cmb_slat->add_field( array(
  		'name'       => __( 'CTA Button Copy', 'cmb2' ),
  		'id'         => $prefix . 'btn',
  		'type'       => 'text_medium',
  	) );
  	$cmb_slat->add_field( array(
  		'name'       => __( 'CTA Button URL', 'cmb2' ),
  		'id'         => $prefix . 'btn_url',
  		'type'       => 'text_url',
  	) );
  	$cmb_slat->add_field( array(
  		'name'       => __( 'Additional CTA Button Copy', 'cmb2' ),
  		'id'         => $prefix . 'btn_two',
  		'type'       => 'text_medium',
  	) );
  	$cmb_slat->add_field( array(
  		'name'       => __( 'Additional CTA Button URL', 'cmb2' ),
  		'id'         => $prefix . 'btn_url_two',
  		'type'       => 'text_url',
  	) );

  }

  add_action( 'cmb2_init', 'slat_metabox' );
</pre>
<pre>
&lt;?php
$icon = get_post_meta( $post->ID, 'dan_icon', true );
$title = get_post_meta( $post->ID, 'dan_title', true );
$subtitle = get_post_meta( $post->ID, 'dan_subtitle', true );
$content = get_post_meta( $post->ID, 'dan_content', true );
$btn = get_post_meta( $post->ID, 'dan_btn', true );
$btn_url = get_post_meta( $post->ID, 'dan_btn_url', true );
$btn_two = get_post_meta( $post->ID, 'dan_btn_two', true );
$btn_url_two = get_post_meta( $post->ID, 'dan_btn_url_two', true );
?&gt;
</pre>
<pre>
&lt;div class="wrap "&gt;
  &lt;div class="slat"&gt;
    &lt;div class="icon"&gt;
      &lt;?php if($icon){ ?&gt;
        &lt;i class="fa &lt;?php echo $icon; ?&gt;"&gt;&lt;/i&gt;
      &lt;?php }?&gt;
    &lt;/div&gt;&lt;!--\icon--&gt;

    &lt;div class="details"&gt;
      &lt;?php if($title){ ?&gt;
        &lt;p class="h3 title"&gt;&lt;?php echo $title; ?&gt;&lt;/p&gt;
      &lt;?php } ?&gt;

      &lt;?php if($subtitle){ ?&gt;
        &lt;p class="large subtitle"&gt;&lt;?php echo $subtitle; ?&gt;&lt;/p&gt;
      &lt;?php } ?&gt;

      &lt;?php if($content){ ?&gt;
        &lt;p class="content"&gt;&lt;?php echo $content; ?&gt;&lt;/p&gt;
      &lt;?php } ?&gt;
    &lt;/div&gt;&lt;!--\details--&gt;

    &lt;div class="buttons"&gt;
      &lt;?php if($btn){ ?&gt;
        &lt;a href="&lt;?php echo $btn_url; ?&gt;" class="button primary"&gt;
        &lt;?php echo $btn; ?&gt;
      &lt;/a&gt;
      &lt;?php } ?&gt;
      &lt;?php if($btn_two) { ?&gt;

      &lt;a href="&lt;?php echo $btn_url_two; ?&gt;" class="button secondary"&gt;
        &lt;?php echo $btn_two; ?&gt;
      &lt;/a&gt;
      &lt;?php } ?&gt;
    &lt;/div&gt;&lt;!--\buttons--&gt;

  &lt;/div&gt;&lt;!--\slat--&gt;
&lt;/div&gt;
</pre>
    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php

      $icon = get_post_meta( $post->ID, 'dan_icon', true );
      $title = get_post_meta( $post->ID, 'dan_title', true );
      $subtitle = get_post_meta( $post->ID, 'dan_subtitle', true );
      $content = get_post_meta( $post->ID, 'dan_content', true );
      $btn = get_post_meta( $post->ID, 'dan_btn', true );
      $btn_url = get_post_meta( $post->ID, 'dan_btn_url', true );
      $btn_two = get_post_meta( $post->ID, 'dan_btn_two', true );
      $btn_url_two = get_post_meta( $post->ID, 'dan_btn_url_two', true );


       ?>

       <span class="divider center">slat</span>

      <div class="wrap ">
        <div class="slat">
          <div class="icon">
            <?php if($icon){ ?>
              <i class="fa <?php echo $icon; ?>"></i>
            <?php }?>
          </div><!--\icon-->

          <div class="details">
            <?php if($title){ ?>
              <p class="h3 title"><?php echo $title; ?></p>
            <?php } ?>

            <?php if($subtitle){ ?>
              <p class="large subtitle"><?php echo $subtitle; ?></p>
            <?php } ?>

            <?php if($content){ ?>
              <p class="content"><?php echo $content; ?></p>
            <?php } ?>
          </div><!--\details-->

          <div class="buttons">
            <?php if($btn){ ?>
              <a href="<?php echo $btn_url; ?>" class="button primary">
              <?php echo $btn; ?>
            </a>
            <?php } ?>
            <?php if($btn_two) { ?>

            <a href="<?php echo $btn_url_two; ?>" class="button secondary">
              <?php echo $btn_two; ?>
            </a>
            <?php } ?>
          </div><!--\buttons-->

        </div><!--\slat-->
      </div>

      <span class="divider center">simple-slat</span>
<div class="wrap">
<pre>
  &lt;div class="wrap"&gt;
    &lt;div class="simple-slat"&gt;
      &lt;div class="icon"&gt;
        &lt;?php if($icon){ ?&gt;
          &lt;i class="fa &lt;?php echo $icon; ?&gt;"&gt;&lt;/i&gt;
        &lt;?php }?&gt;
      &lt;/div&gt;&lt;!--\icon--&gt;

      &lt;div class="details"&gt;
        &lt;?php if($subtitle){ ?&gt;
          &lt;p class="large subtitle"&gt;&lt;?php echo $subtitle; ?&gt;&lt;/p&gt;
        &lt;?php } ?&gt;

        &lt;?php if($content){ ?&gt;
          &lt;p class="content"&gt;&lt;?php echo $content; ?&gt;&lt;/p&gt;
        &lt;?php } ?&gt;
      &lt;/div&gt;&lt;!--\details--&gt;

    &lt;/div&gt;&lt;!--\simple-slat--&gt;
</pre>
</div>
      <div class="wrap">
        <div class="simple-slat">
          <div class="icon">
            <?php if($icon){ ?>
              <i class="fa <?php echo $icon; ?>"></i>
            <?php }?>
          </div><!--\icon-->

          <div class="details">
            <?php if($subtitle){ ?>
              <p class="large subtitle"><?php echo $subtitle; ?></p>
            <?php } ?>

            <?php if($content){ ?>
              <p class="content"><?php echo $content; ?></p>
            <?php } ?>
          </div><!--\details-->

        </div><!--\simple-slat-->
      </div>

      <span class="divider center">simple-slat-cta</span>
<div class="wrap">
<pre>
  &lt;div class="wrap"&gt;
    &lt;div class="simple-slat-cta"&gt;
      &lt;div class="icon"&gt;
        &lt;?php if($icon){ ?&gt;
          &lt;i class="fa &lt;?php echo $icon; ?&gt;"&gt;&lt;/i&gt;
        &lt;?php }?&gt;
      &lt;/div&gt;&lt;!--\icon--&gt;

      &lt;div class="details"&gt;
        &lt;?php if($subtitle){ ?&gt;
          &lt;p class="large subtitle"&gt;&lt;?php echo $subtitle; ?&gt;&lt;/p&gt;
        &lt;?php } ?&gt;

        &lt;?php if($content){ ?&gt;
          &lt;p class="content"&gt;&lt;?php echo $content; ?&gt;&lt;/p&gt;
        &lt;?php } ?&gt;
      &lt;/div&gt;&lt;!--\details--&gt;
      &lt;div class="buttons"&gt;
        &lt;?php if($btn){ ?&gt;
          &lt;a href="&lt;?php echo $btn_url; ?&gt;" class="button primary"&gt;
          &lt;?php echo $btn; ?&gt;
        &lt;/a&gt;
        &lt;?php } ?&gt;
      &lt;/div&gt;&lt;!--\buttons--&gt;

    &lt;/div&gt;&lt;!--\simple-slat--&gt;
  &lt;/div&gt;
</pre>
</div>
      <div class="wrap">
        <div class="simple-slat-cta">
          <div class="icon">
            <?php if($icon){ ?>
              <i class="fa <?php echo $icon; ?>"></i>
            <?php }?>
          </div><!--\icon-->

          <div class="details">
            <?php if($subtitle){ ?>
              <p class="large subtitle"><?php echo $subtitle; ?></p>
            <?php } ?>

            <?php if($content){ ?>
              <p class="content"><?php echo $content; ?></p>
            <?php } ?>
          </div><!--\details-->
          <div class="buttons">
            <?php if($btn){ ?>
              <a href="<?php echo $btn_url; ?>" class="button primary">
              <?php echo $btn; ?>
            </a>
            <?php } ?>
          </div><!--\buttons-->

        </div><!--\simple-slat-->
      </div>




     <?php endwhile; endif;?>

  </main>


<?php get_footer(); ?>
