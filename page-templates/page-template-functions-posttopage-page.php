<?php
/*
Template Name:Function: Posts on Page
*/
?>

<?php get_header(); ?>


    <div class="wrap">
  
        <h3>Display Blog Posts On Pages</h3>
<pre>
	//call the function
	&lt;?php dan_blogposts(); ?&gt;
</pre>

		<p class="well">
			located in library>>php>>fuctions>>dan-blogposts.php
		</p>

<pre>
	//what the function looks like
	function dan_blogposts() {

	global $post;

	$args = array(
	'posts_per_page' => '3',
	'orderby' => 'date',
		'order' => 'DESC',
		'post_type' => 'post',
	'post_status' => 'publish',
	);

	?>

	&lt;section id="blogroll" class="blocks-three"&gt;

	&lt;?php $blogposts = get_posts( $args ); ?&gt;

		&lt;?php foreach ( $blogposts as $post ) : setup_postdata( $post ); ?&gt;

	  &lt;div class="block-item"&gt;
			&lt;?php get_template_part('partials/posts/post', 'banner'); ?&gt;

			&lt;?php get_template_part('partials/posts/post', 'titlelink'); ?&gt;

			&lt;?php get_template_part('partials/posts/post', 'excerpt'); ?&gt;
	  &lt;/div&gt;

		&lt;?php endforeach; wp_reset_postdata();?&gt;

	&lt;/section&gt;
	}
</pre>

    </div><!--\wrap-->

<?php get_footer(); ?>
