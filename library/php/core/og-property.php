<?php
//og for facebook, google, twitter
add_action( 'wp_head', 'wp_head_example' );

function wp_head_example() {
    global $post;

    // default image
    $site_logo = get_stylesheet_directory_uri() . '/images/logo.png';

    // homepage
    if ( is_home() ) {
        echo '<meta property="og:type" content="website" />';
        echo '<meta property="og:url" content="' . get_bloginfo( 'url' ) . '" />';
        echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '" />';
        echo '<meta property="og:image" content="' . $site_logo . '" />';
        echo '<meta property="og:description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '" />';
    }

    // single post or page
    elseif ( is_singular() ) {
        echo '<meta property="og:type" content="article" />';
        echo '<meta property="og:url" content="' . get_permalink() . '" />';
        echo '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '" />';
        if ( has_post_thumbnail( $post->ID ) ) {
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
            echo '<meta property="og:image" content="' . esc_attr( $image[0] ) . '" />';
        } else
            echo '<meta property="og:image" content="' . $site_logo . '" />';
        echo '<meta property="og:description" content="' . esc_attr( get_the_excerpt() ) . '" />';
    }
}

// Example Source: http://wpdevsnippets.com/set-opengraph-meta-tags-fix-facebook-share/
?>
