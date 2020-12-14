<?php
/**
 * Output File List
 */
 function cmb2_output_file_list( $file_list_meta_key, $img_size = 'full' ) {

     // Get the list of files
     $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

     echo '<ul class="single-item">';
     // Loop through them and output an image
     foreach ( (array) $files as $attachment_id => $attachment_url ) {
         echo '<li>';
         echo wp_get_attachment_image( $attachment_id, $img_size );
         echo '</li>';
     }
     echo '</ul>';
 }




 function cmb2_output_file_list_div( $file_list_meta_key, $img_size = 'full' ) {

     // Get the list of files
     $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

     
     // Loop through them and output an image
     foreach ( (array) $files as $attachment_id => $attachment_url ) {
         echo '<div>';
         echo wp_get_attachment_image( $attachment_id, $img_size );
         echo '</div>';
     }
 }




  function cmb2_output_file_list_multiple_six( $file_list_meta_key, $img_size = 'full' ) {

     // Get the list of files
     $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

     echo '<ul class="multiple-items">';
     // Loop through them and output an image
     foreach ( (array) $files as $attachment_id => $attachment_url ) {
         echo '<li>';
         echo wp_get_attachment_image( $attachment_id, $img_size );
         echo '</li>';
     }
     echo '</ul>';
 }


  function cmb2_output_file_list_grid( $file_list_meta_key, $img_size = 'full' ) {

     // Get the list of files
     $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

     echo '<div class="lost-grid">';
     // Loop through them and output an image
     foreach ( (array) $files as $attachment_id => $attachment_url ) {
         echo '<div class="l-three">';
         echo wp_get_attachment_image( $attachment_id, $img_size );
         echo '</div>';
     }
     echo '</div>';
 }



  function cmb2_output_file_list_logos( $file_list_meta_key, $img_size = 'full' ) {

     // Get the list of files
     $files = get_post_meta( $post->ID, $file_list_meta_key, 1 );

     echo '<ul class="single-item">';
     // Loop through them and output an image
     foreach ( (array) $files as $attachment_id => $attachment_url ) {
         echo '<li>';
         echo wp_get_attachment_image( $attachment_id, $img_size );
         echo '</li>';
     }
     echo '</ul>';
 }




   function cmb2_output_file_list_theme( $file_list_meta_key, $img_size = 'full' ) {

     // Get the list of files
     $files = theme_get_option( $file_list_meta_key );

     echo '<ul class="client-logos">';
     // Loop through them and output an image
     foreach ( (array) $files as $attachment_id => $attachment_url ) {
         echo '<li class="logo">';
         echo wp_get_attachment_image( $attachment_id, $img_size );
         echo '</li>';
     }
     echo '</ul>';
 }

?>
