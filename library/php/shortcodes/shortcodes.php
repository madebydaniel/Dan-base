<?php

function dan_section( $atts, $content = null ) {
  extract(shortcode_atts(array(
    'color' => '',
  ), $atts));

  return '<div class="slide ' . $color . '"><div class="cell">'.do_shortcode($content).'</div></div>';
}
add_shortcode( 'section', 'dan_section' );



function dan_left( $atts, $content = null ) {
  extract(shortcode_atts(array(
    'class' => '',
  ), $atts));

  return '<div class="half left ' . $class . '">'.do_shortcode($content).'</div>';
}
add_shortcode( 'left', 'dan_left' );



function dan_right( $atts, $content = null ) {
  extract(shortcode_atts(array(
    'class' => '',
  ), $atts));

  return '<div class="half right ' . $class . '">'.do_shortcode($content).'</div>';
}
add_shortcode( 'right', 'dan_right' );



function dan_full( $atts, $content = null ) {

  return '<div class="full">'.do_shortcode($content).'</div>';
}
add_shortcode( 'wrap', 'dan_full' );



function dan_large( $atts, $content = null ) {

  return '<p class="large">'.do_shortcode($content).'</p>';
}
add_shortcode( 'large', 'dan_large' );


function button_primary( $atts, $content = null ) {
  return '<a class="button">'.($content).'</a>';
}
add_shortcode( 'button', 'button_primary' );

?>
