<?php get_header(); ?>

<?php
	if (have_posts()) : while (have_posts()) : the_post();

	$home_video_oembed = get_post_meta( $post->ID, 'dan_home_video_oembed', true );

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


		<section id="client-logos">
			<?php cmb_home_file_list( 'dan_home_client', 'small' ); ?>
		</section>


	</article>

<?php endwhile;  endif; ?>

<section id="home-blogroll">
	<ul>
	<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => '3',
		);

		$blogposts = get_posts( $args ); ?>

		<?php foreach ( $blogposts as $post ) : setup_postdata( $post ); ?>

			<li>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>

<?php endforeach;
wp_reset_postdata();?>
</ul>


</section>


<?php get_footer(); ?>
