<div id="post-sidebar" class="dan-sidebar" role="complementary">

	<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>

		<?php dynamic_sidebar( 'blog-sidebar' ); ?>

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

</div>
