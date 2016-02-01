<?php
/*
Template Name: CMB - Front Page
*/
?>

<?php get_header(); ?>

	<div class="wrap">
		<h3>Admin: Display metaboxes only on page tagged as front page inside the admin</h3>
		<p class="well">This will go inside the php metabox file</p>

<pre>
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

	<h3>Admin: Example of metaboxes to display only on the front page admin</h3>
		<p class="well">This will go inside the php metabox file</p>

<pre>
function front_page_metabox() {

	$prefix = 'dan_';

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
	) );
	$cmb_home_hero->add_field( array(
		'name'       => __( 'Second Line', 'cmb2' ),
		'id'         => $prefix . 'home_hero_two',
		'type'       => 'text',
	) );

}

add_action( 'cmb2_init', 'front_page_metabox' );
</pre>

<h3>Page Template: display content on the front page</h3>
<p class="well">This goes inside the template file</p>

<pre>
	if (have_posts()) : while (have_posts()) : the_post();

	$home_hero_one = get_post_meta( $post->ID, 'dan_home_hero_one', true );
	$home_hero_two = get_post_meta( $post->ID, 'dan_home_hero_two', true );

	&lt;?php echo $home_hero_one; ?&gt;
	&lt;?php echo $home_hero_two; ?&gt;
</pre>


	</div><!--\wrap-->


<?php get_footer(); ?>
