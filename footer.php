			</div><!--\#body-container-->

		<?php get_template_part('partials/globals/footer', 'default'); ?>

	</main><!--\.on-canvas-->

	<aside class="mobile-menu-panel">
		<header>
			<p class="menu-title large">Menu</p>
		</header>
		<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'main-nav',
					'container' => 'false' ) );
			?>
		</nav>
	</aside><!--\.off-canvas-->


	<button class="mobile-menu-icon menu-icon tcon tcon-menu--xbutterfly">
	  <span class="tcon-menu__lines" aria-hidden="true"></span>
	  <span class="tcon-visuallyhidden">toggle menu</span>
	</button>

	<?php wp_footer(); ?>

	<?php get_template_part('partials/globals/footer', 'scripts'); ?>

</body>

</html> <!-- end of site. what a ride! -->
