<?php
/*
Template Name: CMB - File List
*/
?>

<?php get_header(); ?>

	<div class="wrap">
		<h3>How to use the file-list field type</h3>
		<p class="well">Requires a function that should live within it's own file and included within the functions.php file. <br/><br/>Call the function to display/output content within page tempaltes</p>

<pre>
/**
 * Output File List - cmb2-filelist-output.php - include within functions.php
 */
 function cmb2_output_file_list( $file_list_meta_key, $img_size = 'medium' ) {

     // Get the list of files
     $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

     // Loop through them and output an image
     foreach ( (array) $files as $attachment_id => $attachment_url ) {
         echo '<li>';
         echo wp_get_attachment_image( $attachment_id, $img_size );
         echo '</li>';
     }
 }
</pre>

<h3>Creating the Metabox</h3>

<pre>
$cmb_file_list_example = new_cmb2_box( array(
    'id'            => $prefix . 'fl_list_example_cmb',
    'title'         => __( 'Example Images', 'cmb2' ),
    'type' => 'file_list',
    'object_types' => array( 'page', ),
    'show_on' => array( 'key' => 'page-template', 'value' => 'page-templates/page-template-cmb-example.php' ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
) );

$cmb_file_list_example->add_field( array(
    'name'       => __( 'Example Image', 'cmb2' ),
    'desc'       => __( 'Upload Img: recommended size is ???x???', 'cmb2' ),
    'id'         => $prefix . 'example_image',
    'type'       => 'file_list',
) );
</pre>

<h3>Displaying/Outputting File List Content</h3>
<p class="well">This goes inside the template file</p>

<pre>
&lt;ul&gt;
	&lt;?php cmb2_output_file_list( 'dan_example_image' ); ?&gt;
&lt;/ul&gt;
</pre>


	</div><!--\wrap-->


<?php get_footer(); ?>
