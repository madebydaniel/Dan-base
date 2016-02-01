<aside class="mobile-menu-panel effeckt-off-screen-nav" id="effeckt-off-screen-nav">
	<header>
		<p class="menu-title large">Menu</p>
	</header>
	
	<a href="#0" id="effeckt-off-screen-nav-close" class="effeckt-off-screen-nav-close"><span>X</span></a>
	
	<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
		
		<?php
			wp_nav_menu( array(
				'theme_location' => 'main-nav',
				'container' => 'false' ) );
		?>
		
	</nav>
</aside><!--\.off-canvas-->