<aside class="mobile-menu-panel">
	<header>
		<p class="menu-title large">Menu</p>
		<div class="mobile-menu-icon-close">
			<i class="fa fa-times"></i>
		</div>
	</header>


	<?php
		wp_nav_menu( array(
			'theme_location' => 'mobile-nav',
			'container_class' => 'mobile-nav scrollable') );
	?>
</aside>