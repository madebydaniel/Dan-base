<?php
/*
Template Name: CMB: Example Use
*/
?>

<?php get_header(); ?>

<div class="wrap">
	<h3>CMB Repeatable Group Working Example</h3>
	
	<section class="lost-row">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	        <?php
	          $entries = get_post_meta( get_the_ID(), 'dan_add_fl_group', true );

	          foreach ( (array) $entries as $key => $entry ) {
	          $icon = $title = $subtitle = '';

	          if ( isset( $entry['dan_fl_icon'] ) ) { $icon = $entry['dan_fl_icon']; }
	          if ( isset( $entry['dan_fl_title'] ) ) { $title = esc_html( $entry['dan_fl_title']); }
	          if ( isset( $entry['dan_fl_subtitle'] ) ) { $subtitle = esc_html( $entry['dan_fl_subtitle'] ); }
	        ?>
			<div class="l-four t-align--center well">
				<i class="fa <?php echo $icon; ?>"></i>
				<h4 class="title"><?php echo $title; ?></h4>
				<p class="title"><?php echo $subtitle; ?></p>
	   		</div>
	    
	<?php } endwhile; endif;?>
	</section>

	<hr/>

	<h3>CMB File List Working Example</h3>
	
	<ul>
	<?php cmb2_output_file_list( 'dan_example_image' ); ?>
	</ul>
</div><!--\wrap-->


<?php get_footer(); ?>
