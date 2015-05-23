<?php get_header(); ?>

<?php
	if (have_posts()) : while (have_posts()) : the_post();

	$home_pitch_title = get_post_meta( $post->ID, 'dan_home_pitch_title', true );
	$home_pitch_content = get_post_meta( $post->ID, 'dan_home_pitch_content', true );

	//$home_video_oembed = get_post_meta( $post->ID, 'dan_home_video_oembed', true );

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

		<section class="title-group">
			<div class="wrap">
				<h2 class="dan-title">
					<?php echo $home_pitch_title; ?>
				</h2>
				<p class="dan-large">
					<?php echo $home_pitch_content; ?>
				</p>
			</div>
		</section>

		<div class="divider">Trusted Partners</div>

		<section id="trust-symbols" class="dan-logo-carousel" data-carousel>
			<div class="carousel-items">
				<ul data-carousel-items>
					<?php cmb_home_file_list( 'dan_trust_symbols', 'small' ); ?>
				</ul>
			</div>
		</section>


	</article>

	<?php endwhile;  endif; ?>

	<div class="divider">Recent Posts</div>
	<div class="wrap">
		<?php dan_blogposts(); ?>
	</div>


<?php get_footer(); ?>
