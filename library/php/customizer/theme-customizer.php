<?php
/************* THEME CUSTOMIZE *********************/

//register js
function dan_customizer_live_preview() {
	wp_enqueue_script(
		'dan-theme-customizer',
		get_template_directory_uri() . '/library/js/customizer/theme-customizer.js',
		array('jquery', 'customize-preview'),
		'',
		true
	);
}
add_action('customize_preview_init', 'dan_customizer_live_preview');




function dan_theme_customizer($wp_customizer) {
  // $wp_customize calls go here.
  //
  // Uncomment the below lines to remove the default customize sections

  // $wp_customize->remove_section('title_tagline');
  // $wp_customize->remove_section('colors');
  // $wp_customize->remove_section('background_image');
  // $wp_customize->remove_section('static_front_page');
  // $wp_customize->remove_section('nav');

  // Uncomment the below lines to remove the default controls
  // $wp_customize->remove_control('blogdescription');

  // Uncomment the following to change the default section titles
  // $wp_customize->get_section('colors')->title = __( 'Theme Colors' );
  // $wp_customize->get_section('background_image')->title = __( 'Images' );



  /*********************************
	HEADER LOGO
	*********************************/

	$wp_customizer->add_setting('site_logo');

	$wp_customizer->add_control(new WP_Customize_Image_Control( $wp_customizer, 'site_logo', array(
        'label'    => __( 'Upload Logo (replaces text)' ),
        'section'  => 'title_tagline',
        'settings' => 'site_logo',
    ) ) );



  /*********************************
FOOTER LOGO
*********************************/
	$wp_customizer->add_section(
		'dan_footer_content',
		array(
			'title'		=> 'Footer Content',
			'priority'	=> '200'
		)
	);

	$wp_customizer->add_setting(
		'footer_logo',
		array(
			'transport'	=> 'postMessage'
		)
	);

	$wp_customizer->add_control(new WP_Customize_Image_Control( $wp_customizer, 'footer_logo',
		array(
			'section'	=> 'dan_footer_content',
			'label'		=> __( 'Upload Logo (replaces text)' ),
			'settings' => 'footer_logo',
		) ) );

	$wp_customizer->add_setting(
		'footer_tagline',
		array(
			'transport'	=> 'postMessage'
		)
	);

	$wp_customizer->add_control(
		'footer_tagline',
		array(
			'section'	=> 'dan_footer_content',
			'label'		=> 'Tagline to be used as the image\'s alt attribute',
			'type'		=> 'text'
		)
	);




  /*********************************
	FOOTER COPYRIGHT
	*********************************/

	$wp_customizer->add_section(
		'footer_cr',
		array(
			'title'		=> 'Footer Copyright',
			'priority'	=> '200'
		)
	);

	$wp_customizer->add_setting(
		'footer_cr_content',
		array(
			'transport'	=> 'postMessage'
		)
	);

	$wp_customizer->add_control(
		'footer_cr_content',
		array(
			'section'	=> 'footer_cr',
			'label'		=> 'Copyright line goes here. Copyright symbal and date are hardcoded do not need to be added here.',
			'type'		=> 'text'
		)
	);


  //add customizer styles to header
  /*
  function dan_customizer_css() {
  	?>
  	<style>
  		a {
  			color: <?php echo get_theme_mod('dan_link_color'); ?>
  		}
  	</style>
  	<?php
  }

  add_action('wp_head', 'dan_customizer_css');
  */

}

add_action( 'customize_register', 'dan_theme_customizer' );

?>
