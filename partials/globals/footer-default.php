<footer class="site-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

    <div id="footer-logo">
        <div class="wrap">

            <?php if(get_theme_mod( 'footer_logo' )) { ?>
                
                <img src="<?php echo get_theme_mod( 'footer_logo' ); ?>" alt="<?php echo get_theme_mod( 'footer_tagline' ); ?>">

            <?php } ?>

        </div><!--\.wrap-->
    </div><!--\#footer-logo-->



    <div id="footer-cr">
        <div class="wrap">
        
            <p class="source-org copyright">
                <span class="date">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
                </span>

                <?php if(get_theme_mod( 'footer_cr_content' )) { ?>
                    <span class="cr-content">
                         - <?php echo get_theme_mod( 'footer_cr_content' ); ?>
                    </span>
                <?php } ?>
            </p>

        </div><!--\.wrap-->
    </div><!--\#footer-cr-->

</footer>
