<?php
add_theme_support( 'post-thumbnails'); // Add featured image support


// Register Theme Features
function custom_theme_features()  {
    	set_post_thumbnail_size( 900, 900 );

add_filter('jpeg_quality', function($arg){return 100;});

}


function wpdocs_excerpt_more( $more ) {
    return '... &nbsp;<a href="'.get_the_permalink().'" rel="nofollow">Read more &rarr;</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Filter except length to 35 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
return 15;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );