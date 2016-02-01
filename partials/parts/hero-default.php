<?php if(is_front_page()) {

$home_hero_one = get_post_meta( $post->ID, 'dan_home_hero_one', true );
$home_hero_two = get_post_meta( $post->ID, 'dan_home_hero_two', true );
$home_cta_url_one = get_post_meta( $post->ID, 'dan_home_cta_url_one', true );
$home_cta_btn_one = get_post_meta( $post->ID, 'dan_home_cta_btn_one', true );

?>

<section class="hero hero-intro"  role="banner" >
    <div class="wrap animate-hero-content reveal">

        <h1 data-content="<?php echo $home_hero_one; ?>" class="t-align--center">
            <?php echo $home_hero_one; ?>
        </h1>

        <div class="action-wrapper">
            <p class="large thin t-align--center">
                <?php echo $home_hero_two; ?>
            </p>

            <div class="button-group m-t--half">
                <a class="button ghost-rev" href="<?php echo $home_cta_url_one; ?>">
                <?php echo $home_cta_btn_one; ?>
                </a>
            </div>
        </div><!--\action-wrapper-->

    </div><!--\wrap-->
</section>

<?php } elseif(is_archive()){ ?>

    <section class="hero hero-intro"  role="banner" >
        <div class="wrap animate-hero-content cut">
            <p class="large t-align--center">
                <?php get_template_part('partials/posts/archive', 'page-titles-category'); ?>
            </p>
            <h1 class="t-align--center tc-primary--light">
                <?php get_template_part('partials/posts/archive', 'page-titles'); ?>
                <span data-content="<?php get_template_part('partials/posts/archive', 'page-titles'); ?>"></span>
                <span data-content="<?php get_template_part('partials/posts/archive', 'page-titles'); ?>"></span>
            </h1>
        
        </div><!--\wrap-->
    </section>

    

<?php } else { ?>

<section class="hero hero-intro"  role="banner" >
    <div class="wrap animate-hero-content cut">

        <h1 class="t-align--center tc-primary--light">
            <?php the_title(); ?>
            <span data-content="<?php the_title(); ?>"></span>
            <span data-content="<?php the_title(); ?>"></span>
        </h1>

        <?php if (is_single()) { ?>
            <p class="entry-date entry-meta vcard large t-align--center bottom">
                <?php get_template_part('partials/posts/post', 'date'); ?>
            </p>
        <?php } ?>
    
    </div><!--\wrap-->
</section>
            <?php } ?>


