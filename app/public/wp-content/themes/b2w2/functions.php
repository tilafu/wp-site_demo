<?php
/**
 * enqueue scripts and styles
 */

function b2w2_assets() {
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), '1.0', false);
    wp_enqueue_style( 'bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), '5.1.1', false);
    wp_enqueue_style( 'flaticon', get_theme_file_uri('assets/font/flaticon.css'), array(), '1.0', false);
    wp_enqueue_style( 'b2w2-style', get_stylesheet_uri(), array('bootstrap'), '1.0', false);


    /**
     * Enqueue the script
     */
    wp_enqueue_script( 'bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), '5.1.1', true);
    wp_enqueue_script( 'b2w2-js', get_theme_file_uri('assets/js/main-script.js'), array('jquery', 'jquery-ui-selectmenu'), '1.0', true);

    if( is_singular() && comments_open() && get_option('thread_comments') ) {
        wp_enqueue_script( 'comment-reply' );
    }

}   

add_action( 'wp_enqueue_scripts', 'b2w2_assets' );
?>
