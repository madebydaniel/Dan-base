<?php
/*
Template Name: Function: Fonts
*/
?>

<?php get_header(); ?>

	<div class="wrap">
		<h3>Adding Fonts</h3>
		
		<p class="well">Edit the enqueued fonts file located within<br/>
		library >> php >> functions >> fonts.php </p>

<pre>

function dan_fonts() {
  wp_enqueue_style('googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
  wp_enqueue_style('fontAwesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}

</pre>


	</div><!--\wrap-->


<?php get_footer(); ?>
