<?php get_header(); ?>

<?php
	if (have_posts()) : while (have_posts()) : the_post();

	$home_pitch_title = get_post_meta( $post->ID, 'dan_home_pitch_title', true );
	$home_pitch_content = get_post_meta( $post->ID, 'dan_home_pitch_content', true );

	//$home_video_oembed = get_post_meta( $post->ID, 'dan_home_video_oembed', true );

?>
<div class="wrap">
<pre>
//function to display metaboxes only on page tagged as front page
function ed_metabox_include_front_page( $display, $meta_box ) {
    if ( ! isset( $meta_box['show_on']['key'] ) ) {
        return $display;
    }

    if ( 'front-page' !== $meta_box['show_on']['key'] ) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if ( isset( $_GET['post'] ) ) {
        $post_id = $_GET['post'];
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = $_POST['post_ID'];
    }

    if ( ! $post_id ) {
        return $display;
    }

    // Get ID of page set as front page, 0 if there isn't one
    $front_page = get_option( 'page_on_front' );

    // there is a front page set and we're on it!
    return $post_id == $front_page;
}
add_filter( 'cmb2_show_on', 'ed_metabox_include_front_page', 10, 2 );
</pre>

<pre>
	//front page metabox
	function front_page_metabox() {
		// Start with an underscore to hide fields from custom fields list
		$prefix = 'dan_';
		/**
		 * Sample metabox to demonstrate each field type included
		 */
		$cmb_home_hero = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'Hero Panel', 'cmb2' ),
			'object_types'  => array( 'page', ), // Post type
	    'show_on' => array( 'key' => 'front-page', 'value' => '' ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true, // Show field names on the left
		) );
		$cmb_home_hero->add_field( array(
			'name'       => __( 'First Line', 'cmb2' ),
			//'desc'       => __( 'field description (optional)', 'cmb2' ),
			'id'         => $prefix . 'home_hero_one',
			'type'       => 'text',
			//'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
			// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
			// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
			// 'on_front'        => false, // Optionally designate a field to wp-admin only
			// 'repeatable'      => true,
		) );
	  $cmb_home_hero->add_field( array(
			'name'       => __( 'Second Line', 'cmb2' ),
			'id'         => $prefix . 'home_hero_two',
			'type'       => 'text',
		) );
	  $cmb_home_hero->add_field( array(
			'name'       => __( 'CTA Button Copy', 'cmb2' ),
			'id'         => $prefix . 'home_cta_btn_one',
			'type'       => 'text_medium',
		) );
	  $cmb_home_hero->add_field( array(
			'name'       => __( 'CTA Button URL', 'cmb2' ),
			'id'         => $prefix . 'home_cta_url_one',
			'type'       => 'text_url',
		) );


	  $cmb_home_trust_symbols = new_cmb2_box( array(
			'id'            => $prefix . 'home_client_cmb',
			'title'         => __( 'Trust Symbols', 'cmb2' ),
			'object_types'  => array( 'page', ), // Post type
	    'show_on' => array( 'key' => 'front-page', 'value' => '' ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true, // Show field names on the left
		) );
		$cmb_home_trust_symbols->add_field( array(
			'name'       => __( 'Client Logo', 'cmb2' ),
			'desc'       => __( 'Upload logos as trust symbols: recommended size is ???x???', 'cmb2' ),
			'id'         => $prefix . 'trust_symbols',
			'type'       => 'file_list',
		) );

	  }
	add_action( 'cmb2_init', 'front_page_metabox' );
</pre>
</div>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

<div class="wrap">
<pre>
//display a file list as a carousel - might be buggy at the moment
&lt;section id="trust-symbols" class="dan-logo-carousel" data-carousel&gt;
	&lt;div class="carousel-items"&gt;
		&lt;ul data-carousel-items&gt;
			&lt;?php cmb_home_file_list( 'dan_trust_symbols', 'small' ); ?&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
&lt;/section&gt;


//and cmb_home_file_list function can be listed in the metabox file or functions fieldset
function cmb_home_file_list( $file_list_meta_key, $img_size = 'medium' ) {

    // Get the list of files
    $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

    echo '&lt;div class="file-list-wrap"&gt;';
    // Loop through them and output an image
    foreach ( (array) $files as $attachment_id =&gt; $attachment_url ) {
        echo '&lt;div class="file-list-image"&gt;';
        echo wp_get_attachment_image( $attachment_id, $img_size );
        echo '&lt;/div&gt;';
    }
    echo '&lt;/div&gt;';
}
</pre>
</div>

	</article>

	<?php endwhile;  endif; ?>

	<div class="wrap">
		<pre>
			//function to display blogpost on pages
			//located in library>>php>>fuctions>>dan-blogposts.php
			&lt;?php dan_blogposts(); ?&gt;
		</pre>
	</div>


<?php get_footer(); ?>
