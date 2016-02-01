<header class="header nav-main" role="banner" itemscope itemtype="http://schema.org/WPHeader">

    <div id="inner-header" class="wrap cf">

        <?php if ( get_theme_mod( 'site_logo' ) ) : ?>

            <p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
                <a href="<?php echo home_url(); ?>" rel="nofollow">

                    <img src="<?php echo get_theme_mod( 'site_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>

                </a>
            </p>

                <?php else : ?>
            <p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">

                <a href="<?php echo home_url(); ?>" rel="nofollow">
                <?php bloginfo('name'); ?>
                </a>

            </p>
        <?php endif; ?>

        

        <div class="top-level-nav">
            <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <?php
                    $walker = new My_Walker_Nav_Menu;
                    wp_nav_menu( array(
                        'theme_location' => 'main-nav',
                        'container' => false,
                        'walker' => $walker ) );
                ?>
            </nav>
        </div>

    </div><!--\wrap-->

</header>