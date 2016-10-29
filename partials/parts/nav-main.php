<header class="header nav-main" role="banner" itemscope itemtype="http://schema.org/WPHeader"> 





    <div class="main-site-logo" itemscope itemtype="http://schema.org/Organization">
        <a href="<?php echo home_url(); ?>" >

            <img width="170px" height="50px" src="http://cdn2.bydan.us/wp-content/uploads/2016/09/20220006/dan-logo-gree.svg" alt="by Dan Logo in Colorado Springs"/>

        </a>
    </div>


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

</header>