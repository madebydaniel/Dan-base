<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>

	<?php if(is_home() || is_single() || is_archive())  : ?>
		<?php dynamic_sidebar( 'blog-sidebar' ); ?>
	<?php elseif(is_page()) : ?>
		<?php dynamic_sidebar( 'page-sidebar' ); ?>
	<?php elseif(is_page()) : ?>
		<?php dynamic_sidebar( 'page-tkpin-example-sidebar' ); ?>
	<?php endif ?>
<?php else : ?>

	<?php
		/*
		 * This content shows up if there are no widgets defined in the backend.
		*/
	?>

	<div class="no-widgets">
		<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'dantheme' );  ?></p>
	</div>

<?php endif; ?>
	

	
