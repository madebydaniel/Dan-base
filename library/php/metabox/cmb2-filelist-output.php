<?php
/**
 * Output File List
 */
 function cmb2_output_file_list( $file_list_meta_key, $img_size = 'full' ) {

     // Get the list of files
     $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

     // Loop through them and output an image
     foreach ( (array) $files as $attachment_id => $attachment_url ) {
         echo '<li>';
         echo wp_get_attachment_image( $attachment_id, $img_size );
         echo '</li>';
     }
 }

?>
