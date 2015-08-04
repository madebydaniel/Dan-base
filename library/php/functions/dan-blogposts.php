<?php

/*********************
RELATED POSTS FUNCTION
*********************/

// Related Posts Function (call using dan_related_posts(); )
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

  <section id="blogroll" class="blocks-three">

	<?php $blogposts = get_posts( $args ); ?>

  	<?php foreach ( $blogposts as $post ) : setup_postdata( $post ); ?>

      <div class="block-item">
    		<?php get_template_part('partials/posts/post', 'banner'); ?>

    		<?php get_template_part('partials/posts/post', 'titlelink'); ?>

    		<?php get_template_part('partials/posts/post', 'excerpt'); ?>
      </div>

  	<?php endforeach; wp_reset_postdata();?>

  </section>

<?php } ?>
