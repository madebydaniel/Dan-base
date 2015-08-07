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
            'container' => 'false' ) );
        ?>
      </nav>
    </div>

  </div><!--\wrap-->

</header>

<section class="article-header dan-hero">
  <div class="wrap">
    <div class="hero-content">
      <?php if(is_front_page()) {

        $home_hero_one = get_post_meta( $post->ID, 'dan_home_hero_one', true );
      	$home_hero_two = get_post_meta( $post->ID, 'dan_home_hero_two', true );
      	$home_cta_url_one = get_post_meta( $post->ID, 'dan_home_cta_url_one', true );
      	$home_cta_btn_one = get_post_meta( $post->ID, 'dan_home_cta_btn_one', true );

      ?>

          <hgroup>
            <h1><?php echo $home_hero_one; ?></h1>
            <h2><?php echo $home_hero_two; ?></h2>
          </hgroup>
          <div class="hero-cta">
            <a class="button ghost-r" href="<?php echo $home_cta_url_one; ?>">
              <?php echo $home_cta_btn_one; ?>
            </a>
          </div>
      <?php } elseif(is_archive()){

        get_template_part('partials/posts/archive', 'page-titles');

      } else { ?>
        <h1><?php the_title(); ?></h1>
      <?php } ?>
    </div><!--\hero-content-->
  </div><!--\wrap-->
</section>
