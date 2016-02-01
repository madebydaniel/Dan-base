<?php get_header(); ?>

<?php
	if (have_posts()) : while (have_posts()) : the_post();

	$home_pitch_title = get_post_meta( $post->ID, 'dan_home_pitch_title', true );
	$home_pitch_content = get_post_meta( $post->ID, 'dan_home_pitch_content', true );

	//$home_video_oembed = get_post_meta( $post->ID, 'dan_home_video_oembed', true );

?>
	<div class="wrap">
add some home content

	</div>


	<?php endwhile;  endif; ?>

<?php get_footer(); ?>
