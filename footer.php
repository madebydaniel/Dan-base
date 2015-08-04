			</div><!--\#body-container-->

		<?php get_template_part('partials/globals/footer', 'default'); ?>

	</main><!--\.on-canvas-->

	<aside class="off-canvas off-canvas--right hide main-menu" id="sidebar-1" data-offcanvas-selector=".js-canvas-right" data-offcanvas-sidebar="right" role="complementary" aria-hidden="false">
		<p class="menu-title large">Menu</p>
		<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'main-nav',
					'container' => 'false' ) );
			?>
		</nav>
	</aside><!--\.off-canvas-->

	</div><!--\.canvas-->

	<button id="mobile-menu-icon" type="button" class="js-canvas-right menu-icon tcon tcon-menu--xbutterfly closed" aria-label="toggle menu">
	  <span class="tcon-menu__lines" aria-hidden="true"></span>
	  <span class="tcon-visuallyhidden">toggle menu</span>
	</button>

	<?php wp_footer(); ?>

	<?php get_template_part('partials/globals/footer', 'scripts'); ?>

</body>

</html> <!-- end of site. what a ride! -->
