<?php
/*
Template Name:Function: Related Posts
*/
?>

<?php get_header(); ?>


    <div class="wrap">
  
        <h3>Display Related Posts</h3>
<pre>
	//call the function
	&lt;?php dan_related_posts(); ?&gt;
</pre>

		<p class="well">
			located in library>>php>>fuctions>>dan-blogposts.php
		</p>

<pre>
function dan_related_posts() {
  echo '&lt;ul id="dan-related-posts"&gt;';
  global $post;
  $tags = wp_get_post_tags( $post-&gt;ID );
  if($tags) {
    foreach( $tags as $tag ) {
      $tag_arr .= $tag-&gt;slug . ',';
    }
    $args = array(
      'tag' =&gt; $tag_arr,
      'numberposts' =&gt; 5, /* you can change this to show more */
      'post__not_in' =&gt; array($post-&gt;ID)
    );
    $related_posts = get_posts( $args );
    if($related_posts) {
      foreach ( $related_posts as $post ) : setup_postdata( $post ); ?&gt;
        &lt;li class="related_post"&gt;&lt;a class="entry-unrelated" href="&lt;?php the_permalink() ?&gt;" title="&lt;?php the_title_attribute(); ?&gt;"&gt;&lt;?php the_title(); ?&gt;&lt;/a&gt;&lt;/li&gt;
      &lt;?php endforeach; }
    else { ?&gt;
      &lt;?php echo '&lt;li class="no_related_post"&gt;' . __( 'No Related Posts Yet!', 'dantheme' ) . '&lt;/li&gt;'; ?&gt;
    &lt;?php }
  }
  wp_reset_postdata();
  echo '&lt;/ul&gt;';
} 
</pre>

    </div><!--\wrap-->

<?php get_footer(); ?>
