<div id="post-sidebar" class="dan-sidebar" role="complementary">
	
	<?php if(is_page_template('page-templates/page-template-tk-pin-page.php')) { ?>
		<div class="pin"><?php } ?>

	<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>

		<?php if(is_home() || is_single())  : ?>
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
	

	<?php if(is_page_template('page-templates/page-template-tk-pin-page.php')) { ?>
		</div><!--\.pin--><?php } ?>
</div>
