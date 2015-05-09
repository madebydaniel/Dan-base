<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

  <div id="inner-header" class="wrap cf">

    <?php if ( get_theme_mod( 'site_logo' ) ) : ?>

      <p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
        <a href="<?php echo home_url(); ?>" rel="nofollow">
          <?php bloginfo('name'); ?>
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
          wp_nav_menu( array(
            'theme_location' => 'main-nav',
            'container_class' => 'main-nav' ) );
        ?>
      </nav>
    </div>

  </div><!--\wrap-->

</header>

<section class="article-header site-header">
  <div class="wrap">

    <?php if(is_front_page()) {

      $home_hero_one = get_post_meta( $post->ID, 'dan_home_hero_one', true );
    	$home_hero_two = get_post_meta( $post->ID, 'dan_home_hero_two', true );
    	$home_cta_url_one = get_post_meta( $post->ID, 'dan_home_cta_url_one', true );
    	$home_cta_btn_one = get_post_meta( $post->ID, 'dan_home_cta_btn_one', true );

    ?>
      <div id="hero-content">
        <hgroup>
          <h1><?php echo $home_hero_one; ?></h1>
          <h2><?php echo $home_hero_two; ?></h2>
        </hgroup>
        <div id="hero-button-group">
          <a class="button primary" href="<?php echo $home_cta_url_one; ?>">
            <?php echo $home_cta_btn_one; ?>
          </a>
        </div>
      </div><!--\hero-content-->
    <?php } ?>

  </div><!--\wrap-->
</section>
